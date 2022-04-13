<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Filesystem Disk
    |--------------------------------------------------------------------------
    |
    | Here you may specify the default filesystem disk that should be used
    | by the framework. The "local" disk, as well as a variety of cloud
    | based disks are available to your application. Just store away!
    |
    */

    'default' => env('FILESYSTEM_DISK', 'local'),

    /*
    |--------------------------------------------------------------------------
    | Filesystem Disks
    |--------------------------------------------------------------------------
    |
    | Here you may configure as many filesystem "disks" as you wish, and you
    | may even configure multiple disks of the same driver. Defaults have
    | been set up for each driver as an example of the required values.
    |
    | Supported Drivers: "local", "ftp", "sftp", "s3"
    |
    */

    'disks' => [

        'local' => [
            'driver' => 'local',
            'root' => storage_path('app'),
            'throw' => false,
        ],

        'public' => [
            'driver' => 'local',
            'root' => storage_path('app/public'),
            'url' => env('APP_URL').'/storage',
            'visibility' => 'public',
            'throw' => false,
        ],

        's3' => [
            'driver' => 's3',
            'key' => env('AWS_ACCESS_KEY_ID'),
            'secret' => env('AWS_SECRET_ACCESS_KEY'),
            'region' => env('AWS_DEFAULT_REGION'),
            'bucket' => env('AWS_BUCKET'),
            'url' => env('AWS_URL'),
            'endpoint' => env('AWS_ENDPOINT'),
            'use_path_style_endpoint' => env('AWS_USE_PATH_STYLE_ENDPOINT', false),
            'throw' => false,
        ],
        'gcs' => [
            'driver' => 'gcs',
            'key_file_path' => env('GOOGLE_CLOUD_KEY_FILE', null), // optional: /path/to/service-account.json
            'key_file' => [
                "type" => "service_account",
                "project_id" => "uaect-280011",
                "private_key_id" => "d478177854b222263d19746242a9bd8cc0293955",
                "private_key" => "-----BEGIN PRIVATE KEY-----\nMIIEvQIBADANBgkqhkiG9w0BAQEFAASCBKcwggSjAgEAAoIBAQCHS78T7fj6u88k\n0ByOE5+6nnwYuBuptXZstQNfnkJ3JZzloQXjqibu3Ie2YPg/c4i+pH8xho6H8HDT\ntBBjTRrsQUeU81edhqmJWAsD/DtVaNieiAf5WyTsuypjpc+trqqPHByVIJeUeXJg\n1QLX3ujNeNFBOyJcZGyujJUbUNN0h3HG3LqVKYA8SfLrtkWSD7sgQMSXiFAOEGI+\nPnUfW67rJ7DCseYbO+89G0QkJfQUWdOggIx0+vr36ZgI7PBeYmKTYERrWQ/c6+oE\njyxWmApSU32z9v+Nbs4ek1JV8mimZ0cD3BDllz8Ov8YK4mZf8+Cn4WBlxLYzx7wb\nw7dLzdEHAgMBAAECggEAHiVMAXpMOD3hlU/DlQqdU/0dJHrdOw6iQO2CP2tpXtfk\nIiwjPkt62k0L9iCcH7Mz/Fp1tsjG+FYkJZ+g6SdUgOC4vOENnB1VqDMUXUJ1y/2N\nCqG/uRlMXG0FsGdRI19gRHvciIPXEm+PAzFjLUtPLv0lDvZInTKJHslXLdtwCi4S\nxTy8dFQQwweDUi0JxV+74MD0fOYEb+b9Ie2aZMSH9oxzzXbua9OgP/4DABF1uUbN\noZmtugU/Zj2Mh+Lh2nuAOwwYF9alS+Z/twAN2xJeZmWOxCAF1kxSu5cr8w34T29q\nH1VpjMms5+LRZTvVF0So5BsDs2KoLNlTNMW3CTmKRQKBgQC7nSfYMeW3tDW3fjfB\nGDEwMXyJ0HNFKQoTzvSVfEcWwaGBREDYhA+RWwR4mzp4iXYic2R7g+z+tKaagWF1\nx95MSzzeOKIxskyE4ON8acyuEMA9hoHQf3ExSDf+M3COzAbx3mNCCA0v7lrZ4G2h\nxjwsKJVSLQCAzhhrOXJk6ZuNmwKBgQC4nKHuAEY1tuiv6Sc/dQNYWvIsvNpFne/N\n7qGjW61QU5eEjFb8cv8reo/9GmCWECuUoNYyzLr3tG9/VzizbTcEFWEvhPL/ZWrR\nHUId1/sZNAh2NKY16ZoNWrglqg0slarbXrg2PCALVHeEq1MF/YBEux2H8WP2A0yq\nqypunmN3BQKBgCTy94Tpls9OK4Ie1oYt6IoQRPGzXvBQ+84Y5SyHlEyUB+W4dnjt\n0U8UONYz5BkXIW/5f+Gfgs5K78DgGDylB0/JRYySZMca0V0eGU9IWuoxHFtBoVFZ\nuAY3redfZByLbBa4cJ3xjf9Rlwzv2UeSDgm4WGgdusqjTEXZw4DCTUNfAoGAclgR\ns+hXlE2GMe6ncJZ5S/CIr00JpLT+Iv76/sN5xZcA8gg6mIJhqfxv0sTTrh6134j/\nItfLtkD8DlNnuzqaKN1VJKmkGKwoTP1iRjnQPPwNgal6iUn3MO5PwIRjRIovGVDB\nqFX1Qw8+N94lvkAVgnyi/eB1mZrRkaQS1BEmakECgYEAlL8y4lHiLCpOdyFY650X\nX0da0AD8ZuOqEIoXxLilei3nr9WtZCML0Wilt2dkpsONxiRlHAtN9oAoWNVUK0af\nCeaZRDNH3z3C9ezVf6Ce+IQG6nSd2Pp2e+REfZNQIzJNCbXmtO7FUzBlCV5K4AT6\nEGRr+SJP6e35Hx2uutSV0oE=\n-----END PRIVATE KEY-----\n",
                "client_email" => "google-storage-bucket@uaect-280011.iam.gserviceaccount.com",
                "client_id" => "106884827487503824132",
                "auth_uri" => "https://accounts.google.com/o/oauth2/auth",
                "token_uri" => "https://oauth2.googleapis.com/token",
                "auth_provider_x509_cert_url" => "https://www.googleapis.com/oauth2/v1/certs",
                "client_x509_cert_url" => "https://www.googleapis.com/robot/v1/metadata/x509/google-storage-bucket%40uaect-280011.iam.gserviceaccount.com"
            ], // optional: Array of data that substitutes the .json file (see below)
            'project_id' => env('GOOGLE_CLOUD_PROJECT_ID', ''), // optional: is included in key file
            'bucket' => env('GOOGLE_CLOUD_STORAGE_BUCKET', 'business-council-bucket'),
            'path_prefix' => env('GOOGLE_CLOUD_STORAGE_PATH_PREFIX', ''), // optional: /default/path/to/apply/in/bucket
            'apiEndpoint' => env('GOOGLE_CLOUD_STORAGE_API_URI', null), // see: Public URLs below
            'visibility' => 'public', // optional: public|private
            'metadata' => ['cacheControl'=> 'public,max-age=86400'], // optional: default metadata
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Symbolic Links
    |--------------------------------------------------------------------------
    |
    | Here you may configure the symbolic links that will be created when the
    | `storage:link` Artisan command is executed. The array keys should be
    | the locations of the links and the values should be their targets.
    |
    */

    'links' => [
        public_path('storage') => storage_path('app/public'),
    ],

];
