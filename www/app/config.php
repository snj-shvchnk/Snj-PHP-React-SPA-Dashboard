<?php 

// Snj: Main backend configuration is stored heare
return array(
    // DEV settings
    'dev_debug' => true,

    // DB access:
    'db_host' => 
        // '172.19.0.4', // localhost
        'dev-mysql-lumihealth.cfu55fz2nggd.us-east-2.rds.amazonaws.com', // production

    // local
    // 'db_user' => 'luminhealthsite',
    // 'db_pass' => '7777',
    // 'db_name' => 'luminhealth',

    // production
    'db_user' => 'dev_mysql',
    'db_pass' => 'lumihealth',
    'db_name' => 'dev_mysql',

    // Front settings:
    'api_base_url' => '/api/',
    'front_wrapper' => '/build/index.html',

    // Google avtorization:
    // more info heare -> https://console.cloud.google.com/apis/credentials
    'g_auth_client_id' => '289574864021-er1e23mjoij136f62dtruk5jvhl5gd5d.apps.googleusercontent.com',
    'g_auth_private_key' => '2DEvGfu_px44GOxLjgqmeeWT',

    // Site settings:
    'site_title' => 'LuminHEALTH',
    'site_icon' => 'browser.ico',
    // 'color_scheme' => 'light', // light|dark|soft
);