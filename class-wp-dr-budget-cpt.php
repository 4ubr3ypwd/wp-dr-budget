<?php

if ( class_exists( 'CPT_Core' ) ) :

	/**
	 * Budget CPT.
	 *
	 * @author Aubrey Portwood
	 * @since  1.0.0
	 */
	class WP_DR_Budget_CPT extends CPT_Core {

		/**
		 * Columns.
		 *
		 * @since  1.0.0
		 * @var array
		 */
		public $columns = array();

		/**
		 * Columns.
		 *
		 * @author Aubrey Portwood
		 * @since  1.0.0
		 *
		 * @param  array $columns Current columns.
		 * @return array          Columns.
		 */
		public function columns( $columns ) {
			foreach ( $this->columns as $column_key => $column_args ) {
				$columns[ $column_key ] = $column_args['label'];
			}

			return $columns;
		}

		/**
		 * Output Columns.
		 *
		 * @author Aubrey Portwood
		 * @since  1.0.0
		 *
		 * @param  string $column  The column we're showing.
		 * @param  int $post_id    The Post ID.
		 */
		public function columns_display( $column, $post_id ) {
			foreach ( $this->columns as $column_key => $column_args ) {
				if ( $column === $column_key ) {
					if( isset( $column['do_action'] ) ) {
						do_action( $column['do_action'] );
					}
				}
			}
		}

		/**
		 * Construct.
		 *
		 * @author Aubrey Portwood
		 * @since  1.0.0
		 */
		function __construct( $labels, $args, $columns = array() ) {

			// Assign the columns.
			$this->columns = $columns;

			// Create the CPT.
			parent::__construct( $labels, $args );
		}
	}

endif;
