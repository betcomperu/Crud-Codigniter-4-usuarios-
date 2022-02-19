<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;
use CodeIgniter\Filters\CSRF;
use CodeIgniter\Filters\DebugToolbar;
use CodeIgniter\Filters\Honeypot;
use CodeIgniter\Filters\InvalidChars;
use CodeIgniter\Filters\SecureHeaders;

class Filters extends BaseConfig
{
    /**
     * Configura alias para las clases de filtro para
     * Hacer que la lectura sea más agradable y sencilla.
     *
     * @var array
     */
    public $aliases = [
        'csrf'          => CSRF::class,
        'toolbar'       => DebugToolbar::class,
        'honeypot'      => Honeypot::class,
        'invalidchars'  => InvalidChars::class,
        'secureheaders' => SecureHeaders::class,
        'FilterAdmin' => \App\Filters\FilterAdmin::class  // Se agrega el filtro creado 
    ];

    /**
     * Lista de alias de filtro que siempre están
     * aplicado antes y después de cada solicitud.
     *
     * @var array
     */
    public $globals = [
        'before' => [
            // 'honeypot',
            // 'csrf',
            // 'invalidchars',
            'FilterAdmin' => [
                'except' => ['login/*', 'login', '/']
            ]
        ],
        'after' => [

            // 'honeypot',
            // 'secureheaders',
            'FilterAdmin' => [
                'except' => ['Home/*', 'Home', '/']
            ]
        ],
        'toolbar',
    ];

    /**
     * Lista de alias de filtro que funciona en un
     * método HTTP particular (GET, POST, etc.).
     *
     * Ejemplo:
     * 'publicar' => ['csrf', 'acelerador']
     *
     * @var array
     */
    public $methods = [];

    /**
     * Lista de alias de filtro que deben ejecutarse en cualquier
     * antes o después de los patrones URI.
     *
     * Example:
     * 'isLoggedIn' => ['before' => ['account/*', 'profiles/*']]
     *
     * @var array
     */
    public $filters = [];
}
