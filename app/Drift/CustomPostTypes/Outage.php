<?php

namespace App\Drift\CustomPostTypes;

class Outage
{
	public function __construct()
	{
		add_action('init', array($this, 'register'));
	}

	public function register()
	{
		$args = array(
			'public' => true,
			'label'  => 'Driftstörningar',
			'supports' => array( 
				'title', 
				'author'
			)
		);

		register_post_type( 'outage', $args );
	}
}