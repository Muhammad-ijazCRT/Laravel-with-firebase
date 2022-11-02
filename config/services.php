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
        'scheme' => 'https',
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],
'firebase' => [
    'api_key' => 'add_your_key',
    'auth_domain' => 'add_your_auth_domain',
    'database_url' => 'add_your_database_url',
    'project_id' => 'add_your_project_id',
    'storage_bucket' => 'add_your_storage_bucket',
    'messaging_sender_id' => 'add_your_messaging_sender_id',
    'app_id' => 'add_your_database_app_id',
    'measurement_id' => 'add_your_database_measurement_id',
],


];