<?php

return array(

    /*
    |--------------------------------------------------------------------------
    | Ignored Files
    |--------------------------------------------------------------------------
    |
    | Maneuver will check .gitignore for ignore files, but you can conveniently
    | add here additional files to be ignored.
    |
    */
    'ignored' => array(),

    /*
    |--------------------------------------------------------------------------
    | Default server
    |--------------------------------------------------------------------------
    |
    | Default server to deploy to when running 'deploy' without any arguments.
    | If this options isn't set, deployment will be run to all servers.
    |
    */
    'default' => 'development',

    /*
    |--------------------------------------------------------------------------
    | Connections List
    |--------------------------------------------------------------------------
    |
    | Servers available for deployment. Specify one or more connections, such
    | as: 'deployment', 'production', 'stating'; each with its own credentials.
    |
    */

    'connections' => array(

        'development' => array(
            'scheme'    => 'ftp',
            'host'      => 'server.ubiedigital.com',
            'user'      => 'ubie_web6',
            'pass'      => 'txyz_K73LN',
            'path'      => 'server.ubiedigital.com/web',
            'port'      => 21,
            'passive'   => true
        ),

        'production' => array(
            'scheme'    => 'ftp',
            'host'      => 'yourserver.com',
            'user'      => 'user',
            'pass'      => 'myawesomepass',
            'path'      => '/path/to/server/',
            'port'      => 21,
            'passive'   => true
        ),

    ),

);