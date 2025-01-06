<?php
$dsmb_funfacts_bg = get_option('dsmb_theme_options');
$dsmb_funfacts = new WP_Query([
	'post_type' => 'fun_fact',
	'posts_per_page' => 4,
	'orderby' => 'date',
	'order' => 'DESC',

]);
?>
<div id="fun-facts" class="fun-facts section overlay"
	style="background:url(<?php echo esc_url($dsmb_funfacts_bg['fun_facts_section']); ?>);">
	<div class="container">
		<div class="row">
			<?php
			if ($dsmb_funfacts->have_posts()):
				while ($dsmb_funfacts->have_posts()):
					$dsmb_funfacts->the_post();
					$dsmb_numbers = get_post_meta(get_the_ID(), '_dsmb_how_many_numbers', true);
					$dsmb_fun_icon = get_post_meta(get_the_ID(), '_dsmb_feature_icon', true);
					?>
					<div class="col-lg-3 col-md-6 col-12">
						<!-- Start Single Fun -->
						<div class="single-fun">
							<i class="<?php echo esc_attr($dsmb_fun_icon); ?>"></i>
							<div class="content">
								<div class="d-flex">
									<span class="counter"><?php echo esc_html($dsmb_numbers); ?></span><span>+</span>
								</div>
								<p><?php the_title(); ?></p>
							</div>
						</div>
						<!-- End Single Fun -->
					</div>
					<?php
				endwhile;
				wp_reset_postdata();
			else:
				?>
				<h4 class="text-center text-white z-3 position-absolute top-50 start-50 translate-middle">No func facts item founds! please create first</h4>
				<?php
			endif;
			?>
		</div>
	</div>
</div>