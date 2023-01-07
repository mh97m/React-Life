<?php

use Illuminate\Support\Facades\Log;

if (!function_exists('fanAvaranLog')) {

    /**
     * @param $error
     * @param string $message
     * @param string $channel
     * @param string $type
     */
    function fanAvaranLog($type = 'info', array $args = [])
    {
        $default_args = [
            'error' => null,
            'message' => '',
            'channel' => 'single'
        ];
        $args = array_merge($default_args, $args);
        try {
            if ($type == 'error' && $args['error']) {
                Log::channel($args['channel'])
                    ->$type($args['message'] . '! ----- error message = ' . $args['error']?->getMessage() . ' ----- line = ' . $args['error']?->getLine() . '----- file = ' . $args['error']?->getFile());
            } else {
                Log::channel($args['channel'])
                    ->$type($args['message']);
            }
        } catch (\Exception $e) {
            Log::channel('single')
                ->error('Log does not create!' . '! ----- error message = ' . $e?->getMessage() . ' ----- line = ' . $e?->getLine() . '----- file = ' . $e?->getFile());
        }
    }
}
