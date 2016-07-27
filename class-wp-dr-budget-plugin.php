<?php

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
		 * The CPT class.
		 *
		 * WP_DR_Budget_CPT object is placed here at init.
		 *
		 * @since  1.0.0
		 * @var boolean
		 */
		public $cpt = false;

		/**
		 * Construct.
		 *
		 * @author Aubrey Portwood
		 * @since  1.0.0
		 */
		function __construct() {

			// Create the CPT.
			$this->cpt = new WP_DR_Budget_CPT( array(

				// Labels.
				__( 'Budget', 'wp-dr-budget-cpt' ),
				__( 'Budgets', 'wp-dr-budget-cpt' ),

				// Slug.
				'wp-dr-budget'

			// CPT Arguments.
			), array(

				// Supports what features (commented out is off).
				'supports' => array(
					'title',
					// 'editor',
					// 'excerpt',
					// 'thumbnail'
				),

			// CPT Columns.
			), array(

				// This is just here as an example for now.
				'example_column' => array(

					// The action that is do_action()'d when the column is shown in the Dashboard.
					'do_action' => 'an_action_to_do_action',

					// The label of the column.
					'label'     => __( 'Example Column', 'wp-dr-budget' ),
				),
			) );
		}

	} // WP_DR_Budget_Plugin
}
