<?php

/**
 * Register any service providers here, they will be executed in order, so if
 * there are dependencies between them make sure to order them correctly
 */
return [
    /**
     * Service providers that should run before the app has been initialized.
     */
    'boot' => [
        /**
         * Lune service providers
         */
        Lune\Providers\DatabaseDriverServiceProvider::class,
        Lune\Providers\FileStorageDriverServiceProvider::class,
        Lune\Providers\SessionStorageServiceProvider::class,
        Lune\Providers\ViewServiceProvider::class,
        Lune\Providers\AuthenticatorServiceProvider::class,
        Lune\Providers\ServerDataServiceProvider::class,
        Lune\Providers\HasherServiceProvider::class,

        /**
         * Package service providers
         */
    ],

    /**
     * Service providers that should be executed once the app is running.
     */
    'runtime' => [
        App\Providers\RouteServiceProvider::class,
        App\Providers\RuleServiceProvider::class,

        /**
         * Custom service providers
         */
        App\Providers\AppServiceProvider::class,

    ],
];
