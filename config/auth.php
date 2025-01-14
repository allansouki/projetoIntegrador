<?php

return [


    /*
    |--------------------------------------------------------------------------
    | Authentication Defaults
    |--------------------------------------------------------------------------
    |
    | This option controls the default authentication "guard" and password
    | reset options for your application. You may change these defaults
    | as required, but they're a perfect start for most applications.
    |
    */

    'defaults' => [
        'guard' => 'web',
        'passwords' => 'users',
    ],

    /*
    |--------------------------------------------------------------------------
    | Authentication Guards
    |--------------------------------------------------------------------------
    |
    | Next, you may define every authentication guard for your application.
    | Of course, a great default configuration has been defined for you
    | here which uses session storage and the Eloquent user provider.
    |
    | All authentication drivers have a user provider. This defines how the
    | users are actually retrieved out of your database or other storage
    | mechanisms used by this application to persist your user's data.
    |
    | Supported: "session", "token"
    |
    */
    

    /////////////////////////////////////////////////////////////
    /* 
    Tipos de autenticação que sua aplicação suporta
       - web: pelo browser
       - api: utilizando webservices a partir de dispositivos móveis ou outros sistemas integrados 
    */
    /////////////////////////////////////////////////////////////
    /* 
    Forma de autenticação utilizada para cada tipo (guards) 
        - session: utiliza sessão, db ou cookie 
        - token: utiliza token que é passado em cada requisição 
    */

    'guards' => [
        'web' => [
            'driver' => 'session',
            'provider' => 'users',
        ],

        'api' => [
            'driver' => 'token',
            'provider' => 'users',
        ],

// =>>> novo
        'admin' => [
            'driver' => 'session',
            'provider' => 'admins',
        ],
        'admin-api' => [
            'driver' => 'token',
            'provider' => 'admins',
        ],


        /*'dashbord' => [
            'driver' => 'session',
            'provider' => 'dashbords',
        ],
        'dashbord-api' => [
            'driver' => 'token',
            'provider' => 'dashbords',
        ],*/




///////////        
    ],

    /*
    |--------------------------------------------------------------------------
    | User Providers
    |--------------------------------------------------------------------------
    |
    | All authentication drivers have a user provider. This defines how the
    | users are actually retrieved out of your database or other storage
    | mechanisms used by this application to persist your user's data.
    |
    | If you have multiple user tables or models you may configure multiple
    | sources which represent each model / table. These sources may then
    | be assigned to any extra authentication guards you have defined.
    |
    | Supported: "database", "eloquent"
    |
    */

    'providers' => [
        'users' => [
            'driver' => 'eloquent',
            'model' => App\User::class,
        ],

// =>>> novo
        'admins' => [
            'driver' => 'eloquent',
            'model' => App\Admin::class,
        ],

        /*'dashbords' => [
            'driver' => 'eloquent',
            'model' => App\dashbord::class,
        ],*/
/////////////

        // 'users' => [
        //     'driver' => 'database',   // ======>>>>> utiliza o query builder
        //     'table' => 'users',
        // ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Resetting Passwords
    |--------------------------------------------------------------------------
    |
    | You may specify multiple password reset configurations if you have more
    | than one user table or model in the application and you want to have
    | separate password reset settings based on the specific user types.
    |
    | The expire time is the number of minutes that the reset token should be
    | considered valid. This security feature keeps tokens short-lived so
    | they have less time to be guessed. You may change this as needed.
    |
    */

    'passwords' => [
        'users' => [
            'provider' => 'users',
            'table' => 'password_resets',
            'expire' => 60,   // minutos
        ],
/////// ==>>> novo        
        'admins' => [
            'provider' => 'admins',
            'table' => 'password_resets',
            'expire' => 60,
        ],

        /*'dashbords' => [
            'provider' => 'dashbords',
            'table' => 'password_resets',
            'expire' => 60,
        ],*/
///////////        
    ],

];
