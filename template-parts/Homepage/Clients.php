<?php 
	$dsmb_options = get_option('dsmb_theme_options');
	$client_bg_image = $dsmb_options['client_sec_bg'];
	$clients = $dsmb_options['client_info'];
?>

<div class="clients overlay" style="background-image:url(<?php echo $client_bg_image['url'] ? esc_url($client_bg_image['url']) : esc_url(get_theme_file_uri('assets/img/client-bg.jpg')); ?>);">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-12">
				<div class="owl-carousel clients-slider">
					<?php 
						foreach($clients as $client):
					?>
					<div class="single-clients">
						<img src="<?php echo $client['client_co_logo']['url'] ? esc_url($client['client_co_logo']['url']) : '' ; ?>" alt="<?php echo $client['client_co_logo']['title'] ? esc_attr($client['client_co_logo']['title']) : '' ?>">
					</div>
					<?php 
					endforeach;
					?>
				</div>
			</div>
		</div>
	</div>
</div>