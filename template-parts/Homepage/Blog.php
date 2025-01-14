<?php
$dsmb_options = get_option('dsmb_theme_options');
$dsmb_blog_title = $dsmb_options['blog_sec_title'];
$dsmb_blog_desc = $dsmb_options['blog_desc'];
$dsmb_blog_icon = $dsmb_options['blog_sec_icon'];
?>
<section class="blog section" id="blog">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="section-title">
					<h2><?php echo $dsmb_blog_title ? esc_html($dsmb_blog_title) : esc_html('Keep up with Our Most Recent Medical News.'); ?>
					</h2>
					<img src="<?php echo $dsmb_blog_icon ? esc_url($dsmb_blog_icon['url']) : esc_url(get_template_directory_uri() . '/assets/img/section-img.png'); ?>"
						alt="<?php echo $dsmb_blog_icon ? esc_attr($dsmb_blog_icon['title']) : '' ?>">
					<p><?php echo $dsmb_blog_desc ? esc_html($dsmb_blog_desc) : esc_html('Stay informed with the latest advancements and updates in the medical field through our dedicated news platform'); ?>
					</p>
				</div>
			</div>
		</div>
		<div class="row">
			<?php
			$dsmb_blogs = new WP_Query([
				'post_type' => 'post',
				'posts_per_page' => 3,
				'orderby' => 'date',
				'order' => 'DESC',

			]);

			if ($dsmb_blogs->have_posts()):
				while ($dsmb_blogs->have_posts()):
					$dsmb_blogs->the_post();
					?>
					<div class="col-lg-4 col-md-6 col-12">
						<!-- Single Blog -->
						<div class="single-news">
							<div class="news-head">
								<?php the_post_thumbnail('cover'); ?>
							</div>
							<div class="news-body">
								<div class="news-content">
									<div class="date"><?php echo get_the_date('d M, Y') ?></div>
									<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
									<p class="text"><?php echo get_custom_excerpt(15); ?></p>
								</div>
							</div>
						</div>
						<!-- End Single Blog -->
					</div>
				<?php
				endwhile;
				wp_reset_postdata();
			else:
				printf("<h4 class='text-center text-dark'>%s</h4>", esc_html('No Blog post found! Please create Blog post'));
			endif;
			?>
		</div>
	</div>
</section>