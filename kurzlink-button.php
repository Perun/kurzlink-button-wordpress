<?php

// Kurzlink-Button zurückholen
if ( function_exists( 'add_filter' ) ) {
    add_filter( 'get_shortlink', function ( $shortlink ) {
        return $shortlink;
    } );
}
