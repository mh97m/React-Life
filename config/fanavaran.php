<?php

return [
    'base_url' => env('FANAVARAN_BASE_URL', 'https://bime.net.iraneit.com:3023/BimeApiManager_Release/'),
    'env' => env('FANAVARAN_ENV', 'demo'),
    'headers' => $header = [
        'CorpId' => env('CORP_ID', '1393'),
        'ContractId' => env('CONTRACT_ID', '2'),
        'Content-Type' => 'application/json',
        'Location' => env('LOCATION', '1')
    ],
    'options' => [
        'verify' => env('FANAVARANSSL', false),
        'timeout' => env('FANAVARAN_TIMEOUT', '60'),
    ],
];
