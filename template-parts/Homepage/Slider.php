<section class="slider">
	<div class="hero-slider">
		<?php
		$sliders = new WP_Query([
			'post_type'		=> 'slider',
			'posts_per_page'	=> 3,
			'orderby'		=> 'date',
			'order'			=> 'DESC',

		]);
		if($sliders->have_posts()):
			while($sliders->have_posts()): $sliders->the_post();
				$image_url = get_the_post_thumbnail_url( get_the_ID(), $size = 'full' );
				$dsmb_appointment_button_text = get_post_meta( get_the_ID(), '_dsmb_appointment_button_label' , true );
				$dsmb_appointment_button_url = get_post_meta( get_the_ID(), '_dsmb_appointment_button_url' , true );

				$dsmb_other_button_text = get_post_meta( get_the_ID(), '_dsmb_others_button_label' , true );
				$dsmb_other_button_url = get_post_meta( get_the_ID(), '_dsmb_others_button_url' , true );
				?>

				<!-- Start Single Slider -->
				<div class="single-slider" style="background-image:url(<?php echo esc_url($image_url); ?>)">
					<div class="container">
						<div class="row">
							<div class="col-lg-7">
								<div class="text">
									<?php 
										$title = get_the_title();
										$title_patrs = explode(' ', $title, 6);
									?>
									<h1><?php esc_html( printf("%s <span>%s</span> %s <span>%s</span> %s",$title_patrs[0], $title_patrs[1],$title_patrs[2],$title_patrs[3], $title_patrs[5] ) ); ?></h1>
									<?php the_content(); ?>
									<div class="button">
										<a href="<?php echo esc_attr( $dsmb_appointment_button_url ); ?>" class="btn"><?php echo esc_html( $dsmb_appointment_button_text ); ?></a>
										<a href="<?php echo esc_attr( $dsmb_other_button_url ); ?>" class="btn primary"><?php echo esc_html( $dsmb_other_button_text ); ?></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- End Single Slider -->

			<?php
		endwhile;
		wp_reset_postdata();
	else:
		?>
			<!-- Start Single Slider -->
				<div class="single-slider" style="background-image:url(<?php echo get_template_directory_uri() . '/assets/img/slider.jpg' ?>)">
					<div class="container">
						<div class="row">
							<div class="col-lg-7">
								<div class="text">
									<h1>We Provide <span>Medical</span> Services That You Can <span>Trust!</span></h1>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sed nisl pellentesque, faucibus libero eu, gravida quam. </p>
									<div class="button">
										<a href="#" class="btn">Get Appointment</a>
										<a href="#" class="btn primary">Learn More</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- End Single Slider -->
				<!-- Start Single Slider -->
				<div class="single-slider" style="background-image:url(<?php echo get_template_directory_uri() . '/assets/img/slider2.jpg' ?>)">
					<div class="container">
						<div class="row">
							<div class="col-lg-7">
								<div class="text">
									<h1>We Provide <span>Medical</span> Services That You Can <span>Trust!</span></h1>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sed nisl pellentesque, faucibus libero eu, gravida quam. </p>
									<div class="button">
										<a href="#" class="btn">Get Appointment</a>
										<a href="#" class="btn primary">Learn More</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- End Single Slider -->
				<!-- Start Single Slider -->
				<div class="single-slider" style="background-image:url(<?php echo get_template_directory_uri() . '/assets/img/slider3.jpg' ?>)">
					<div class="container">
						<div class="row">
							<div class="col-lg-7">
								<div class="text">
									<h1>We Provide <span>Medical</span> Services That You Can <span>Trust!</span></h1>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sed nisl pellentesque, faucibus libero eu, gravida quam. </p>
									<div class="button">
										<a href="#" class="btn">Get Appointment</a>
										<a href="#" class="btn primary">Learn More</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- End Single Slider -->
		<?php
	endif;
	?>
</div>
</section>