<?php

namespace App\Drift\CustomTaxonomies;

class Status
{
	public function __construct()
	{
		add_action('init', array($this, 'register'));
	}

	public function register()
	{
		$labels = array(
			'name' => _x( 'Status', 'taxonomy general name', 'textdomain' ),
			'singular_name' => _x( 'Status', 'taxonomy singular name', 'textdomain' ),
			'menu_name' => __( 'Status', 'textdomain' ),
		);

		$args = array(
			'hierarchical' => true,
			'labels' => $labels,
			'show_ui' => true,
			'update_count_callback' => '_update_post_term_count',
			'query_var' => true,
			'rewrite' => array( 'slug' => 'status' ),
		);

		register_taxonomy( 'status', 'outage', $args );
	}
}