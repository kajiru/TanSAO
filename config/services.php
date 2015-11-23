<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, Mandrill, and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */


    'mailgun' => [
        'domain' => 'sandbox1b3ec213d94f467da71c2f38581213e6.mailgun.org',
        'secret' => 'key-9cb2d50affae184336e950b69b029747',
    ],

    'mandrill' => [
        'secret' => '',
    ],

    'ses' => [
        'key'    => 'AKIAJEXMI3KV5WACCJ5A',
        'secret' => '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',
        'region' => 'us-west-2',
    ],

    'stripe' => [
        'model'  => '',
        'key'    => '',
        'secret' => '',
    ],

];
