<?php namespace Config;

use CodeIgniter\Config\BaseConfig;

class Filters extends BaseConfig
{
    public $aliases = [
        'csrf'     => \CodeIgniter\Filters\CSRF::class,
        'toolbar'  => \CodeIgniter\Filters\DebugToolbar::class,
        'honeypot' => \CodeIgniter\Filters\Honeypot::class,
        'usersAuth' => \App\Filters\UsersAuthFilter::class,
        'languagefilter' => \App\Filters\LanguageFilter::class // Pastikan ini menggunakan class yang benar
    ];

    public $globals = [
        'before' => [
            'csrf',
            'languagefilter', // Terapkan filter di sini tanpa except, kecuali jika diinginkan
            'usersAuth' => [
                'except' => [
                    'login/*',
                    'logout/*',
                    'user/*',
                    'lang/*',
                ]
            ]
        ],
        'after'  => [
            'toolbar',
            // 'honeypot'
        ],
    ];

    public array $methods = [];

    public $filters = [
        'usersAuth' => \App\Filters\UsersAuthFilter::class,
    ];
}
