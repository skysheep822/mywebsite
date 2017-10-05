<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Admin Authentication
    |--------------------------------------------------------------------------
    |
    | For login to http://yourdomain/admin, be sure to change the password.
    |
     */
    'user'               => 'admin',
    'password'           => 'password',

    /*
    |--------------------------------------------------------------------------
    | Facebook Settings
    |--------------------------------------------------------------------------
    |
    | To make the application works, you have to create both the Facebook Page
    | and Facebook App by your own. You also need to obtain a Page access token
    | which should never expired.
    |
    | To create Facebook Page see:
    |   https://www.facebook.com/pages/create/
    |
    | To create Facebook App see:
    |   https://developers.facebook.com/
    |
    | To obtain a Page access token, follow the readme guide:
    |   https://github.com/kxgen/kangxi-anonymous-publisher/blob/master/readme.md
    |
     */
    'fb_app_setting'     => [
        'app_id'                => '1824467507820475',
        'app_secret'            => 'd6f47b6007b5590c1a274e5614f98615',
        'default_graph_version' => 'v2.8',
    ],
    'fb_page_token'      => 'EAAZA7VZCG1N7sBAEL9uM9DA6v9VqbF3Yry2YJEt3JxtG5DEHJPau2MmXJ4O6tGg8ihKUIxWarDnJzBCeuZCpWjTCqtTMsPGTcDiSUrtmGUKVmRZBkPqfBOjaRusZCm60LFu5xsFeaK5ufFf5Q8Uosx7vZCO0GNJ0pSbLeGKbLayQZDZD',

    /*
    |--------------------------------------------------------------------------
    | Google reCAPTCHA
    |--------------------------------------------------------------------------
    |
    | To avoid abuse and spam, we use Google reCAPTCHA service to verify guest.
    | For more informations see:
    |   https://www.google.com/recaptcha/intro/index.html
    |
     */
    'recaptcha_key'      => '6LfXqgATAAAAACzwvvdV59zzxpdFOkWDSsa0331s',
    'recaptcha_secret'   => '6LfXqgATAAAAALVnEIzAjJ67pGSe7sI1-yUoFZfu',

];
