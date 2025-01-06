<section class="Feautes section">
	<?php
	$dsmb_options = get_option('dsmb_theme_options');
	$dsmb_features_title = $dsmb_options['features_title'];
	$dsmb_features_desc = $dsmb_options['features_desc'];
	$dsmb_icon = $dsmb_options['features_icon'];
	?>
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="section-title">
					<?php
					if ($dsmb_features_title):
						?>
						<h2><?php echo esc_html($dsmb_features_title); ?></h2>
						<?php
					else:
						?>
						<h2>We Are Always Ready to Help You & Your Family</h2>
						<?php
					endif;
					?>

					<img src="
					<?php
					if ($dsmb_icon['url']) {
						echo esc_attr($dsmb_icon['url']);
					} else {
						echo get_template_directory_uri() . '/assets/img/section-img.png';
					}

					?>" alt="">

					<?php
					if ($dsmb_features_desc):
						?>
						<p><?php echo esc_html($dsmb_features_desc); ?></p>
						<?php
					else:
						?>
						<p>Dedicated to providing consistent support and care for you and your family's well-being and
							needs.</p>
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
						<div class="single-features
								<?php
								if ($dsmb_features->current_post + 1 === $dsmb_features->post_count) {
									echo 'last';
								}
								?>
								">
							<div class="signle-icon">
								<i class="
											<?php
											if ($feature_icon) {
												echo esc_attr($feature_icon);
											} else {
												echo 'icofont icofont-ambulance-cross';
											}
											?>
										">
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
				?>
				<div class="col-lg-4 col-12">

					<!-- Start Single features -->
					<div class="single-features">
						<div class="signle-icon">
							<i class="icofont icofont-ambulance-cross"></i>
						</div>
						<h3>Emergency Help</h3>
						<p>Immediate, reliable support for emergencies, prioritizing your safety and well-being, available 24/7.</p>
					</div>
					<!-- End Single features -->
				</div>
				<div class="col-lg-4 col-12">
					<!-- Start Single features -->
					<div class="single-features">
						<div class="signle-icon">
							<i class="icofont icofont-medical-sign-alt"></i>
						</div>
						<h3>Enriched Pharmecy</h3>
						<p>Reliable pharmacy offering quality medications, health products, and expert guidance for your well-being.</p>
					</div>
					<!-- End Single features -->
				</div>
				<div class="col-lg-4 col-12">
					<!-- Start Single features -->
					<div class="single-features last">
						<div class="signle-icon">
							<i class="icofont icofont-stethoscope"></i>
						</div>
						<h3>Medical Treatment</h3>
						<p>Comprehensive medical care tailored to your needs, focusing on personalized treatments and optimal health outcomes.</p>
					</div>
					<!-- End Single features -->
				</div>
				<?php
			endif;
			?>
		</div>
	</div>
</section>