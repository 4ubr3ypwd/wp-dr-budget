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

if ( ! class_exists( 'WP_DR_Budget_Plugin' ) ) {

	/**
	 * WP DR Budget.
	 *
	 * @author Aubrey Portwood
	 * @since  1.0.0
	 */
	class WP_DR_Budget_Plugin {

		/**
		 * Construct.
		 *
		 * @author Aubrey Portwood
		 *
		 * @since  1.0.0
		 */
		function __construct() {

		}
	} // WP_DR_Budget_Plugin
}
