<?php
	function get_custom_excerpt($limit)
	{
		$excerpt = wp_trim_words( get_the_excerpt(), $limit );
		return $excerpt;
	}


	// Function to increment view count
function dsmb_track_post_views($post_id) {
    if (!is_single()) return;
    if (empty($post_id)) {
        global $post;
        $post_id = $post->ID;
    }
    
    $count_key = 'post_views_count';
    $view_count = get_post_meta($post_id, $count_key, true);
    if ($view_count == '') {
        $view_count = 0;
        delete_post_meta($post_id, $count_key);
        add_post_meta($post_id, $count_key, '0');
    } else {
        $view_count++;
        update_post_meta($post_id, $count_key, $view_count);
    }
}

add_action('wp_head', function () {
    if (is_single()) {
        dsmb_track_post_views(get_the_ID());
    }
});


// Function to retrieve and display view count
function get_post_views($post_id) {
    $count_key = 'post_views_count';
    $view_count = get_post_meta($post_id, $count_key, true);
    if ($view_count == '') {
        return 0;
    }
    return $view_count;
}
