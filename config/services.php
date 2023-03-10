<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
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
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'facebook' => [
        'client_id' => 855871025743672,
        'client_secret' => 'b890e8fa26b7053c10d7b43f8e305e2f',
        'redirect' => '/facebook/callback',
    ],

    'google' => [
        'client_id' => '542101437697-2vimnf2e6idm4l0at9eooc10gojqlgap.apps.googleusercontent.com',
        'client_secret' => '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',
        'redirect' => 'http://127.0.0.1:8000/google/callback',
    ],
];
