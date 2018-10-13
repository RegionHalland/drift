<?php

namespace App\Drift\CustomTaxonomies;

class Department
{
	public function __construct()
	{
		add_action('init', array($this, 'register'));
	}

	public function register()
	{
		$labels = array(
			'name' => _x( 'Område', 'taxonomy general name', 'textdomain' ),
			'singular_name' => _x( 'Område', 'taxonomy singular name', 'textdomain' ),
			'menu_name' => __( 'Områden', 'textdomain' ),
		);

		$args = array(
			'hierarchical' => true,
			'labels' => $labels,
			'show_ui' => true,
			'update_count_callback' => '_update_post_term_count',
			'query_var' => true,
			'rewrite' => array( 'slug' => 'department' ),
		);

		register_taxonomy( 'department', 'outage', $args );
	}
}