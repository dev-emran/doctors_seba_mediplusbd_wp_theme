<section class="Feautes section">
	<?php
	$dsmb_options = get_option('dsmb_theme_options');
	$dsmb_features_title = $dsmb_options['features_title'];
	$dsmb_features_desc = $dsmb_options['features_desc'];
	$dsmb_features_icon = $dsmb_options['features_icon'];
	?>
	<div class="container">
		<div class="row">
		<div class="col-lg-12">
				<div class="section-title">
					<h2><?php echo $dsmb_features_title ? esc_html($dsmb_features_title) : esc_html('We Are Always Ready to Help You & Your Family'); ?></h2>
					<img src="<?php echo $dsmb_features_icon['url'] ? esc_url($dsmb_features_icon['url']) : esc_url(get_template_directory_uri() . '/assets/img/section-img.png'); ?>" alt="<?php echo $dsmb_features_icon ? esc_attr($dsmb_features_icon['title']) : '' ?>">
					<?php 
						if(get_theme_mod('features_desc_displayed_setting', 1)):
					?>
					<p><?php echo $dsmb_features_desc ? esc_html($dsmb_features_desc) : esc_html('Dedicated to providing consistent support and care for you and your family\'s well-being and needs.'); ?></p>
					<?php 
						endif;
					?>
				</div>
			</div>
		</div>
		<div class="row">
			<?php
			$dsmb_features = new WP_Query([
				'post_type' => 'feature',
				'posts_per_page' => 3,
				'orderby' => 'date',
				'order' => 'DESC',

			]);
			if ($dsmb_features->have_posts()):
				while ($dsmb_features->have_posts()):
					$dsmb_features->the_post();
					$feature_icon = get_post_meta(get_the_ID(), '_dsmb_feature_icon', true);
					?>
					<div class="col-lg-4 col-12">

						<!-- Start Single features -->
						<div class="single-features <?php echo $dsmb_features->current_post + 1 === $dsmb_features->post_count ? esc_attr('last') : ''; ?> ">
							<div class="signle-icon">
								<i class="<?php echo $feature_icon ? esc_attr($feature_icon) : esc_attr('icofont icofont-ambulance-cross'); ?> ">
								</i>
							</div>
							<h3><?php the_title(); ?></h3>
							<?php the_content(); ?>
						</div>
						<!-- End Single features -->
					</div>
					<?php
				endwhile;
				wp_reset_postdata();
			else:
				printf( "<h4 class='text-center text-dark'>%s</h4>", esc_html('No Features found! Please create Features'));
			endif;
			?>
		</div>
	</div>
</section>