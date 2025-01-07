<?php
	$dsmb_options = get_option('dsmb_theme_options');
	$dsmb_portfolio_title = $dsmb_options['portfolio_title'];
	$dsmb_portfolio_desc = $dsmb_options['portfolio_desc'];
	$dsmb_icon = $dsmb_options['portfolio_icon'];
	?>
<section class="portfolio section">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="section-title">
					<h2><?php echo $dsmb_portfolio_title ? esc_html($dsmb_portfolio_title) : esc_html('We Maintain Cleanliness Rules Inside Our Hospital'); ?></h2>
					<img src="<?php echo $dsmb_icon['url'] ? esc_url($dsmb_icon['url']) : esc_url(get_template_directory_uri() . '/assets/img/section-img.png'); ?>" alt="<?php echo $dsmb_icon ? esc_attr($dsmb_icon['title']) : '' ?>">
					<p><?php echo $dsmb_portfolio_desc ? esc_html($dsmb_portfolio_desc) : esc_html('We Maintain Cleanliness Rules Inside Our Hospital'); ?></p>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12 col-12">
				<?php

				$dsmb_portfolios = new WP_Query([
					'post_type' => 'portfolio',
					'posts_per_page' => -1,
					'orderby' => 'date',
					'order' => 'DESC',

				]);
					if($dsmb_portfolios->have_posts()):
				?>
				<div class="owl-carousel portfolio-slider">
					<?php 
					while($dsmb_portfolios->have_posts()): $dsmb_portfolios->the_post();
					?>
					<div class="single-pf">
						<img src="<?php echo has_post_thumbnail() ? get_the_post_thumbnail_url() : ""  ?>" alt="#">
						<a href="<?php the_permalink(); ?>" class="btn">View Details</a>
					</div>
					<?php 
					endwhile;
					wp_reset_postdata();
					?>
				</div>
				<?php
				else:
					printf( "<h4 class='text-center text-dark'>%s</h4>", esc_html('Portfolio not found! please create first')); 
					endif;
				?>
			</div>
		</div>
	</div>
</section>