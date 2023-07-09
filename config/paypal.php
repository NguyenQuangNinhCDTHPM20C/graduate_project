<?php

return [
    'client_id' => env('PAYPAL_SANDBOX_CLIENT_ID', ''),
    'secret' => env('PAYPAL_SANDBOX_SECRET', ''),
    'settings' => [
        'mode' => env('PAYPAL_MODE', 'sandbox'),
        // Các cài đặt khác của PayPal (nếu có)
    ],
];