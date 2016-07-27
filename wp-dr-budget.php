<?php

/*
Plugin Name: WP DR Budget
Plugin URI: https://github.com/aubreypwd/wp-dr-budget
Description:
Version: 1.0.0
Author: Aubrey Portwood
Author URI: http://twitter.com/aubreypwd
License: GPL2
*/

/*
 * Copyright 2016 Aubrey Portwood <aubreypwd@gmail.com>
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License, version 2, as
 * published by the Free Software Foundation.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
 */

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

// CPT Core.
require_once( 'cpt-core/CPT_Core.php' );

// The classes.
require_once( 'class-wp-dr-budget-plugin.php' );
require_once( 'class-wp-dr-budget-cpt.php' );

// Plugin instance.
$wp_dr_budget = new WP_DR_Budget_Plugin();
