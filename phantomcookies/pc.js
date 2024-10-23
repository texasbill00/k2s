"use strict";
var system = require( 'system' );
if( system . args . length > 1 ) {
	var webPage = require( 'webpage' );
	var page = webPage . create();
	page . settings . userAgent = system . args[ 2 ];
	page . open( system . args[ 1 ], function() {
		setTimeout( function() {
			var cookies = page . cookies;
			for( var i in cookies ) {
				console . log( cookies[ i ] . name + '=' + cookies[ i ] . value );
			}
			phantom . exit();
		}, 600 );
	} );
} else {}
