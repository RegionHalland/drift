<?php

namespace App\Drift\Traits;

trait GetOutages
{
	/**
	 * Returns array of information from published outages
	 * @return array
	 */
	public function outages()
	{
		global $post;
		
		$args = array(
			'post_type' => 'outage',
		);
	 	
	 	// The Query
		$posts = new \WP_Query( $args );
		
		return $posts;
	}
}