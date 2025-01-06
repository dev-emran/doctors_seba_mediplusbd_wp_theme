<?php
	function get_custom_excerpt($limit)
	{
		$excerpt = wp_trim_words( get_the_excerpt(), $limit );
		return $excerpt;
	}