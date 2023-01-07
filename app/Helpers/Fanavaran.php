<?php

use App\Helpers\TokenGenerator;

if (!function_exists('fanAvaranCallApi')) {

    /**
     * @param $url
     * @param $method
     * @param array $args
     * @return array|false
     */
    function fanAvaranCallApi($url, $method, array $args = [])
    {
        $baseUrl = config('fanavaran.base_url');
        try {
            if (!Cache::get('auth_token')) (new TokenGenerator)->generateLoginToken();
            $headers = isset($args['headers']) ? array_merge($args['headers'], config('fanavaran.headers')) : config('fanavaran.headers');
            $headers['authenticationToken'] = Cache::get('auth_token');
            $options = isset($args['options']) ? array_merge($args['options'], config('fanavaran.options')) : config('fanavaran.options');
            $body = isset($args['body']) ? $args['body'] : [];
            $response = Http::withHeaders($headers)->withOptions($options)->$method($baseUrl . $url, $body);
            $responseStatus = $response->status();
            if ($responseStatus != 200) {
                fanAvaranLog('error', [
                    'message' => $response,
                    'channel' => 'call_api'
                ]);
                if (fanAvaranCallApiErrorHandler($responseStatus))
                    fanAvaranCallApi($url, $method, $args);
            }
            return [
                'status' => $responseStatus,
                'data' => $responseStatus == 200 ? $response->json() : null,
                'message' => $response->reason()
            ];
        } catch (Exception $e) {
            fanAvaranLog('error', [
                'error' => $e,
                'message' => 'Error has been occurred in call api',
                'channel' => 'call_api'
            ]);
            return false;
        }
    }

    /**
     * @param $statusCode
     * @return bool
     */
    function fanAvaranCallApiErrorHandler($statusCode): bool
    {
        if (in_array($statusCode, [401, 403]))
            return (new \App\Helpers\TokenGenerator())->generateLoginToken();
        return false;
    }
}
