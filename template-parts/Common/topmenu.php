<div class="topbar">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-5 col-12">
				<!-- Contact -->
				<?php 
				wp_nav_menu( array(
					'theme_location'  => 'top_menu',
					'menu_class'      => 'top-link',
					'menu_id'         => '',
					'fallback_cb'     => false,
				) ); 
				?>
				<!-- End Contact -->
			</div>
			<div class="col-lg-6 col-md-7 col-12">
				<!-- Top Contact -->
				<ul class="top-contact">
					<li><i class="fa fa-phone"></i>+880 1234 56789</li>
					<li><i class="fa fa-envelope"></i><a href="mailto:support@yourmail.com">support@yourmail.com</a></li>
				</ul>
				<!-- End Top Contact -->
			</div>
		</div>
	</div>
</div>