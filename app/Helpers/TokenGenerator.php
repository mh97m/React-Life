<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class TokenGenerator
{
    public string $authUrl;
    public string $loginUrl;
    public array $authHeaders;
    public array $loginHeaders;

    public function __construct()
    {
        $this->authUrl = config('fanavaran.base_url') . 'api/EITAuthentication/GetAppToken';
        $this->loginUrl = config('fanavaran.base_url') . '/api/EITAuthentication/Login';
        if (config('fanavaran.env') != 'live') {
            $this->authHeaders = [
                'appname' => 'Sales',
                'secret' => 'aA@12345'
            ];
            $this->loginHeaders = [
                'userName' => 'KarUser',
                'Password' => 'karzxc123',
                'appToken' => Cache::get('app_token') ?? $this->generateAppToken()
            ];
        } else {
            $this->authHeaders = [
                'appname' => 'CustomerClub',
                'secret' => 'C@stomerCl@b123',
                'CustomerClub' => '0'
            ];
            $this->loginHeaders = [
                'userName' => 'ApiCustomerClubUser',
                'Password' => 'C@st0merUser@123',
                'appToken' => Cache::get('app_token') ?? $this->generateAppToken()
            ];
        }
    }

    /**
     * Genereate app token for login and Store in app_token cache
     *
     * @return string appToken
     */
    protected function generateAppToken(): string
    {
        for ($i = 0; $i < 3; $i++) {
            try {
                if((config('fanavaran.env') != 'live')){
                    $result = Http::withoutVerifying()
                        ->withHeaders($this->authHeaders)
                        ->withOptions(['verify' => false])
                        ->post($this->authUrl)
                        ->headers();
                }else{
                    $result = Http::withHeaders($this->authHeaders)
                        ->post($this->authUrl)
                        ->headers();
                }
                Cache::forever('app_token', $result['appToken'][0]);
                return $result['appToken'][0];
            } catch (\Exception $e) {
                fanAvaranLog('error', [
                    'error' => $e,
                    'message' => 'App Token Token not created',
                    'channel' => 'token'
                ]);
            }
        }
        return '';
    }

    /**
     * Genereate authentication token for API and Store in auth_token cache
     *
     * @return bool is it successful?
     */
    public function generateLoginToken(): bool
    {
        for ($i = 0; $i < 3; $i++) {
            try {
                if((config('fanavaran.env') != 'live')){
                    $result = Http::withoutVerifying()
                        ->withHeaders($this->loginHeaders)
                        ->withOptions(['verify' => false])
                        ->post($this->loginUrl)
                        ->headers();
                }else{
                    $result = Http::withHeaders($this->loginHeaders)
                        ->post($this->loginUrl)
                        ->headers();
                }
                Cache::put('auth_token', $result['authenticationToken'][0], now()->addDay(1));
                return true;
            } catch (\Exception $e) {
                fanAvaranLog('error', [
                    'error' => $e,
                    'message' => 'Authentication Token not created',
                    'channel' => 'token'
                ]);
                $this->loginHeaders['appToken'] = $this->generateAppToken();
            }
        }
        return false;
    }
}
