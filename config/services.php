<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_REGION', 'us-east-1'),
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
        'webhook' => [
            'secret' => env('STRIPE_WEBHOOK_SECRET'),
            'tolerance' => env('STRIPE_WEBHOOK_TOLERANCE', 300),
        ],
    ],

   /* 'github' => [
        'client_id' => env('173f54565ae0422f1c2f'),         // Your Facebook Client ID
        'client_secret' => env('2917f65ea25dcc6e3060a740946270e0e6ad27d0'), // Your Facebook Client Secret
        'redirect' => env('http://localhost:8000/login/github/callback'),
    ],*/

    'facebook' => [
        'client_id' => env('417189502350414'),         // Your Facebook Client ID
        'client_secret' => env('673ae54974c3f037bd31527e79b3d68e'), // Your Facebook Client Secret
        'redirect' => env('http://localhost:8000/login/facebook/callback'),
    ],


];
