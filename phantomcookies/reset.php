<?php

    require __DIR__ . DIRECTORY_SEPARATOR . 'pc-config.php';

    $directories = glob( $tmp . DIRECTORY_SEPARATOR . '*' , GLOB_ONLYDIR );

    foreach( $directories as $directory ) {

        $last_cookie_file = $directory . DIRECTORY_SEPARATOR . date( 'Y-m-d' );

        if( file_exists( $last_cookie_file ) ) {

            unlink( $last_cookie_file );

            echo 'Deleted: ' . $last_cookie_file . PHP_EOL;

        }

    }

    echo 'Reset: OK';

?>
