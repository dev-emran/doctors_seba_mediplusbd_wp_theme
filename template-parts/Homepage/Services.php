<?php
$dsmb_options = get_option('dsmb_theme_options');
$dsmb_services_title = $dsmb_options['services_title'];
$dsmb_services_desc = $dsmb_options['services_desc'];
$dsmb_services_icon = $dsmb_options['services_icon'];
?>
<section class="services section">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="section-title">
					<h2><?php echo $dsmb_services_title ? esc_html($dsmb_services_title) : esc_html('We Offer Different Services To Improve Your Health'); ?>
					</h2>
					<img src="<?php echo $dsmb_services_icon['url'] ? esc_url($dsmb_services_icon['url']) : esc_url(get_template_directory_uri() . '/assets/img/section-img.png'); ?>"
						alt="<?php echo $dsmb_services_icon ? esc_attr($dsmb_services_icon['title']) : '' ?>">
					<p><?php echo $dsmb_services_desc ? esc_html($dsmb_services_desc) : esc_html('Our commitment to your well-being drives us to offer a variety of services designed to enhance your health'); ?>
					</p>
				</div>
			</div>
		</div>
		<div class="row">
			<?php 
				$dsmb_services = new WP_Query([
					'post_type' => 'service',
					'posts_per_page' => 6,
					'orderby' => 'date',
					'order' => 'DESC',

				]);
				if($dsmb_services->have_posts()):
					while($dsmb_services->have_posts()): $dsmb_services->the_post();
					$service_icon = get_post_meta(get_the_ID(), '_dsmb_services_icon', true);
			?>
			<div class="col-lg-4 col-md-6 col-12">
				<!-- Start Single Service -->
				<div class="single-service">
					<i class="<?php echo esc_attr($service_icon); ?>"></i>
					<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
					<p class="text-justify"><?php echo get_custom_excerpt(20); ?></p>
				</div>
				<!-- End Single Service -->
			</div>
			<?php 
			endwhile;
			wp_reset_postdata();
		else:
			printf( "<h4 class='text-center text-dark'>%s</h4>", esc_html('No Services found! Please create Service'));
			endif;
			?>
		</div>
	</div>
</section>