<?php
	$dsmb_get_options = get_option('dsmb_theme_options');

	$cta_main_title = $dsmb_get_options['cta_title'];
	$cta_short_desc = $dsmb_get_options['cta_short_desc'];
	$cta_btn_one_text = $dsmb_get_options['cta_button_one_text'];
	$cta_btn_one_url = $dsmb_get_options['cta_button_one_url'];
	$cta_btn_two_text = $dsmb_get_options['cta_button_two_text'];
	$cta_btn_two_url = $dsmb_get_options['cta_button_two_url'];
	$contact_no = $dsmb_get_options['phone_no'];

	$cta_bg = $dsmb_get_options['cta_section_bg'];

	?>
<section style="background-image:url(<?php echo $cta_bg ? esc_url($cta_bg['url']) : esc_url(get_theme_file_uri('assets/img/call-bg.jpg')); ?>)" class="call-action overlay" data-stellar-background-ratio="0.5">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-12">
				<div class="content">
					<h2><?php echo $cta_main_title ? esc_html($cta_main_title) : esc_html('Do you need Emergency Medical Care? Call @ 1234 56789') ?><?php echo $contact_no ? esc_html($contact_no)  : esc_html('+8801753695972'); ?></h2>
					<p><?php echo $cta_short_desc ? esc_html($cta_short_desc) : esc_html('Facing a medical emergency? Our expert team provides prompt and reliable care to address your urgent health needs immediately.') ?></p>
					<div class="button">
						<a href="<?php echo $cta_btn_one_url ? esc_url($cta_btn_one_url) : esc_url('http://localhost/wp/amar_seba/contact') ?>" class="btn"><?php echo $cta_btn_one_text ? esc_html($cta_btn_one_text) : esc_html('contact now') ?></a>

						<a href="<?php echo $cta_btn_two_url ? esc_url($cta_btn_two_url) : esc_url('http://localhost/wp/amar_seba/more-info') ?>" class="btn second"><?php echo $cta_btn_two_text ? esc_html($cta_btn_two_text) : esc_html('more info') ?><i class="fa fa-long-arrow-right"></i></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>