<?php
	$dsmb_options = get_option('dsmb_theme_options');
	$dsmb_price_title = $dsmb_options['price_title'];
	$dsmb_price_desc = $dsmb_options['price_desc'];
	$dsmb_price_icon = $dsmb_options['price_icon'];
?>
<section class="pricing-table section">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="section-title">
					<h2><?php echo $dsmb_price_title ? esc_html($dsmb_price_title) : esc_html('We Provide You The Best Treatment In Resonable Price'); ?>
					</h2>
					<img src="<?php echo $dsmb_price_icon ? esc_url($dsmb_price_icon['url']) : esc_url(get_template_directory_uri() . '/assets/img/section-img.png'); ?>"
						alt="<?php echo $dsmb_price_icon ? esc_attr($dsmb_price_icon['title']) : '' ?>">
					<p><?php echo $dsmb_price_desc ? esc_html($dsmb_price_desc) : esc_html('Quality healthcare should be accessible to everyone, which is why we are committed to offering the best treatment at reasonable prices.'); ?>
					</p>
				</div>
			</div>
		</div>
		<div class="row">
			<?php 
				$price_tables = $dsmb_options['pricing_table'];
				if(!empty($price_tables)):
					foreach($price_tables as $item):
			?>
			<!-- Single Table -->
			<div class="col-lg-4 col-md-12 col-12">
				<div class="single-table">
					<!-- Table Head -->
					<div class="table-head">
						<div class="icon">
							<i class="<?php echo esc_attr($item['pricing_table_icon']); ?>"></i>
						</div>
						<h4 class="title"><?php echo esc_html($item['package_title']); ?></h4>
						<div class="price">
							<p class="amount">$<?php echo esc_html($item['package_price']); ?><span>/ Per Visit</span></p>
						</div>
					</div>
					<!-- Table List -->
					<ul class="table-list">
						<?php 
							foreach($item['features_items'] as $feature):
						?>
						<li class="<?php echo $feature['is_available'] ? '' : esc_attr('cross') ?>"><i class="<?php echo $feature['is_available'] ? esc_attr('icofont icofont-ui-check') : esc_attr('icofont icofont-ui-close') ?>"></i><?php echo esc_html($feature['features_name']); ?></li>
						<?php 
							endforeach;
						?>
					</ul>
					<div class="table-bottom">
						<a class="btn" href="<?php echo esc_url($item['pricing_table_btn_url']) ?>">Book Now</a>
					</div>
					<!-- Table Bottom -->
				</div>
			</div>
			<!-- End Single Table-->
			 <?php
			 endforeach;
			 else:
				printf( "<h4 class='text-center text-dark'>%s</h4>", esc_html('No Price table found! Please create Price using theme options'));
			 endif;
			 ?>
		</div>
	</div>
</section>