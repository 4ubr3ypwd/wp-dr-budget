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
		 * The name of the CPT.
		 *
		 * @author Aubrey Portwood
		 * @since  1.0.0
		 *
		 * @var string
		 */
		public $name = 'wp-dr-budget';

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
		 * Gives all roles the ability to use the Budgets CPT.
		 *
		 * @author Aubrey Portwood
		 * @since   1.0.0
		 */
		public function roles() {

			// Get all the roles.
			$roles = get_editable_roles();

			// Get the budget post type (we want the caps).
			$post_type_object = get_post_type_object( $this->name );

			// Go through any role.
			foreach ( $roles as $role_key => $role_info ) {

				// Get the role.
				$role = get_role( $role_key );

				// For this role, assign the caps.
				foreach ( $post_type_object->cap as $cap_key => $cap ) {

					// Add the cap for this post type to the role.
					$role->add_cap( $cap );
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

			// Assign the name of the CPT.
			$this->name = $labels[2];

			// Create the CPT.
			parent::__construct( $labels, $args );

			// Manage roles.
			add_action( 'admin_init', array( $this, 'roles' ) );
		}
	}

endif;
