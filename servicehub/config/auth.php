<?php

return [

    'defaults' => [
        'guard' => 'client',
        'passwords' => 'clients',
    ],

    'guards' => [
        'web' => [
            'driver' => 'session',
            'provider' => 'users',
        ],
        'client' => [
            'driver' => 'session',
            'provider' => 'clients',
        ],
        'professional' => [ //  Agregar este guard
            'driver' => 'session',
            'provider' => 'professionals',
        ],
    ],

    'providers' => [
        'clients' => [
            'driver' => 'eloquent',
            'model' => App\Models\Client::class,
        ],
        'professionals' => [ //  Agregar este provider
            'driver' => 'eloquent',
            'model' => App\Models\Profesional::class,
        ],
    ],

    'passwords' => [
        'clients' => [
            'provider' => 'clients',
            'table' => 'password_reset_tokens',
            'expire' => 60,
            'throttle' => 60,
        ],
        'professionals' => [ //  Agregar esto si necesitas recuperación de contraseña
            'provider' => 'professionals',
            'table' => 'password_reset_tokens',
            'expire' => 60,
            'throttle' => 60,
        ],
    ],

    'password_timeout' => env('AUTH_PASSWORD_TIMEOUT', 10800),

];
