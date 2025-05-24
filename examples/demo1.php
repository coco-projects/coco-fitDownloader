<?php

    require '../vendor/autoload.php';

    $config = [
        'mysqlUsername'  => 'root',
        'mysqlPassword'  => 'root',
        'mysqlDbName'    => 'wordpress_game_cn',
        'mysqlHost'      => '127.0.0.1',
        'mysqlPort'      => 3306,
        'imageBaseUrl'   => 'http://dev6084/fit_game/demo/data/',
        'debug'          => true,
        'proxy'          => '',
        'websiteTitle'   => 'Games',
        'cachePath'      => '../downloadCache',
        'imagesMaxCount' => 15,
        'concurrency'    => 10,
        'retryTimes'     => 8,
        'headerStr'      => '',
        'redisLogName'   => '',
        'redisLogEnable' => false,
        'redisDbIndex'   => 11,
    ];

    $updater = new \Coco\fitDownloader\GameUpdater($config);