<?php

if ( ! defined ( 'ABSPATH' ) ) {
	exit;
}

/*
 * We require Advanced Custom Fields Pro.
 *
 * @TODO <Aubrey Portwood> Should we include this in the repo?
 */
if ( ! class_exists( 'acf' ) ) {
	return;
}

// The class.
require_once( 'class-wp-dr-budget-plugin.php' );

// Plugin instance.
new WP_DR_Budget_Plugin();
