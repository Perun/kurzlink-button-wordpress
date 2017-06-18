<?php

/**
 * Plugin Name: Kurzlink-Button
 * Plugin URI:  https://www.perun.net/2015/12/14/wordpress-4-4-kurzlink-button-zurueckholen/
 * Description: Dieses Plugin bringt den Kurzlink-Button oberhalb des Editors zurück
 * Author:      Vladimir Simović
 * Author URI:  https://www.vladimir-simovic.de
 * Version:     1.0.0
 * Text Domain: kurzlink-button
 * License:     GPLv3
 */

// Kurzlink-Button zurückholen
if ( function_exists( 'add_filter' ) ) {
    add_filter( 'get_shortlink', function ( $shortlink ) {
        return $shortlink;
    } );
}
