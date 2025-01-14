<section class="why-choose section">
	<?php
	$dsmb_get_options = get_option('dsmb_theme_options');

	$who_main_title = $dsmb_get_options['who_we_are_title'];
	$who_short_desc = $dsmb_get_options['who_we_are_desc'];
	$who_sub_title = $dsmb_get_options['who_we_are_title_two'];
	$who_logng_desc = $dsmb_get_options['who_we_are_long_desc'];
	$who_left_items = $dsmb_get_options['who_we_are_left_list'];	//return array
	$who_right_items = $dsmb_get_options['who_we_are_right_list'];	//return array
	$who_video_bg_image_url = $dsmb_get_options['who_we_are_video_bg_image'];
	$who_top_icon_url = $dsmb_get_options['who_we_are_icon'];
	$who_video_url = $dsmb_get_options['who_we_are_video_url'];

	// echo "<pre>";
	// print_r($dsmb_get_options);
	// echo "</pre>";
	?>
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="section-title">
					<h2><?php echo $who_main_title ? esc_html($who_main_title) : esc_html("We Offer Different Services To Improve Your Health"); ?>
					</h2>
					<img src="<?php echo $who_top_icon_url ? esc_url($who_top_icon_url['url']) : esc_url(get_template_directory_uri() . '/assets/img/section-img.png') ?>"
						alt="<?php echo $who_top_icon_url ? esc_attr($who_top_icon_url['title']) : '' ?>">
					<p><?php echo $who_short_desc ? esc_html($who_short_desc) : esc_html("We offer diverse health services tailored to enhance your physical, mental, and emotional well-being for a healthier lifestyle."); ?>
					</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-6 col-12">
				<!-- Start Choose Left -->
				<div class="choose-left">
					<h3><?php echo $who_sub_title ? esc_html($who_sub_title) : esc_html('Who We Are'); ?></h3>
					<p class="text-justify">
						<?php echo $who_logng_desc ? esc_html($who_logng_desc) : esc_html('We offer a comprehensive range of professional health services tailored to meet your individual needs. From preventative care and wellness programs to advanced treatments, our goal is to enhance your overall health and well-being. Trust our expert team to guide you on your journey to a healthier, happier life.'); ?>
					</p>
					<div class="row">
						<div class="col-lg-6">
							<ul class="list">
								<?php
								if (!empty($who_left_items)):
									foreach ($who_left_items as $item):
										?>
										<li><i
												class="fa fa-caret-right"></i><?php echo esc_html($item['who_we_are_left_list_item']); ?>
										</li>
									<?php
									endforeach;
								else:
									for ($i = 1; $i <= 3; $i++):
										printf("<li><i class='fa fa-caret-right'></i>Demo %s</li>", $i);
									endfor;
								endif;
								?>
							</ul>
						</div>
						<div class="col-lg-6">
							<ul class="list">
								<?php
								if (!empty($who_right_items)):
									foreach ($who_right_items as $item):
										?>
										<li><i
												class="fa fa-caret-right"></i><?php echo esc_html($item['who_we_are_right_list_item']); ?>
										</li>
									<?php
									endforeach;
								else:
									for ($i = 1; $i <= 3; $i++):
										printf("<li><i class='fa fa-caret-right'></i>Demo %s</li>", $i);
									endfor;
								endif;
								?>
							</ul>
						</div>
					</div>
				</div>
				<!-- End Choose Left -->
			</div>
			<div class="col-lg-6 col-12">
				<!-- Start Choose Rights -->
				<div class="choose-right"
					style="background-image:url(<?php echo $who_video_bg_image_url ? esc_url($who_video_bg_image_url['url']) :  esc_url(get_theme_file_uri('/assets/img/video-bg.jpg')) ?>);">
					<div class="video-image">
						<!-- Video Animation -->
						<div class="promo-video">
							<div class="waves-block">
								<div class="waves wave-1"></div>
								<div class="waves wave-2"></div>
								<div class="waves wave-3"></div>
							</div>
						</div>
						<!--/ End Video Animation -->
						<a href="<?php echo $who_video_url ? esc_url($who_video_url) : esc_url('https://youtu.be/IpZ3vnde54M?list=PLX7CHjb-dXZAUlbdNxE2n1amL2Rvaoulo') ?>" class="video video-popup mfp-iframe"><i
								class="fa fa-play"></i></a>
					</div>
				</div>
				<!-- End Choose Rights -->
			</div>
		</div>
	</div>
</section>