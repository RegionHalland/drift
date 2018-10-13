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
		$args = array(
			'posts_per_page'   => -1,
			'post_type'        => 'outage',
			'post_mime_type'   => '',
			'post_parent'      => '',
			'author'	   => '',
			'author_name'	   => '',
			'post_status'      => 'publish',
			'suppress_filters' => true,
			'fields'           => '',
		);
			
		$posts = get_posts( $args );
		$outages = [];
		
		foreach ($posts as $post) {
			$outages[] = [
				'title' => get_the_title($post->ID),
				'published' => get_the_date('Y-m-d H:i', $post->ID),
				'department' => self::getTermNames(wp_get_post_terms($post->ID, 'department')),
				'status' => get_field('status', $post->ID),
				'start' => get_field('start', $post->ID),
				'end' => get_field('end', $post->ID),
			];
		}

		return $outages;
	}

	/**
	 * Returns the the term names of passed term object
	 * @return array
	 */
	private function getTermNames($terms) {			
		$termNames = [];

		foreach($terms as $term) {
			$termNames[] = $term->name;
		}

		return $termNames;
	}
}