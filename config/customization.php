<?php

return [



    /*
    |--------------------------------------------------------------------------
    | New User Email Notification
    |--------------------------------------------------------------------------
    |
    | Email to notify when new user registers.
    |
    */
    'email_new_user_notification' => env('APP_EMAIL_NEW_USERS_NOTIFICATION'),


    /*
    |--------------------------------------------------------------------------
    | Number of data to paginate
    |--------------------------------------------------------------------------
    |
    | This value determines the number of data to paginate on the all the page by default.
    |
     */
    'number_of_data_pagination' => env('NUMBER_OF_DATA_PAGINATION', 10),

    /*
    |--------------------------------------------------------------------------
    | Email address to contact for support
    |--------------------------------------------------------------------------
    |
    | This value will be the email address used in the footer of the application
    | to contact support.
    |
    */
    'support_email_address' => env('SUPPORT_EMAIL_ADDRESS', 'test@test.com'),

    /*
    |--------------------------------------------------------------------------
    | Maximum allowed size for uploaded files, in kilobytes.
    |--------------------------------------------------------------------------
    |
    | This value determines the maximum size when uploading a file, in kilobytes.
    |
    */
    'max_upload_size' => env('DEFAULT_MAX_UPLOAD_SIZE', 10240),

    /*
    |--------------------------------------------------------------------------
    | Maximum allowed storage size per account, in megabytes.
    |--------------------------------------------------------------------------
    |
    | This the default limit for each new account. Default value: 512Mb.
    |
    */
    'max_storage_size' => env('DEFAULT_MAX_STORAGE_SIZE', 512),


    /*
    |--------------------------------------------------------------------------
    | Default avatar size
    |--------------------------------------------------------------------------
    |
    | The default avatar size.
    */
    'avatar_size' => 200,
];