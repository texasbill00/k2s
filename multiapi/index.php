<?php

	// v0.2

	require __DIR__ . DIRECTORY_SEPARATOR . 'multiapi-config.php';

	if( php_sapi_name()== "cli" ) {

		for( $c = 1; $c < $argc; $c++ ) {

			$param = explode( "=", $argv[ $c ], 2 );
			$_GET[ $param[ 0 ] ] = $param[ 1 ];

		}

	} else {}

	if( isset( $_GET[ 'request' ] )&& strlen( $_GET[ 'request' ] ) > 0 ) {

		if( preg_match( $pattern, $_GET[ 'request' ], $request ) ) {

			$url = preg_replace_callback( '/\{\$(.+?)\}/', function( $matches ) {

				return $GLOBALS[ 'request' ][ $matches[ 1 ] ];

			}, $url );

			$ch = curl_init();

			curl_setopt( $ch, CURLOPT_URL, $url );
			curl_setopt( $ch, CURLOPT_RETURNTRANSFER, TRUE );
			// curl_setopt( $ch, CURLOPT_HEADER, FALSE );

			if( isset( $phantomcookies )&& strlen( $phantomcookies ) > 0 ) {

				$host = parse_url( $url, PHP_URL_HOST );

				$json = file_get_contents( $phantomcookies . '?host=' . $host );
				
				$pc = json_decode( $json, TRUE );

				$cookies = '';

				foreach( $pc as $key=> $value ) {

					$cookies.= $key . '=' . $value . ';';

				}

				$cookies = substr( $cookies, 0, -1 );

				curl_setopt( $ch, CURLOPT_COOKIE, $cookies );

			} else {}

			$result = curl_exec( $ch );

			json_decode( $result );

			if( json_last_error()===JSON_ERROR_NONE ) {

				header( 'Content-type: application/json' );

			} else {}

			echo $result;

		} else {}

	} else {}

?>
