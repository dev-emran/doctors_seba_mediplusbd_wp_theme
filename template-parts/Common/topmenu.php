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
			<?php
				$dsmb_options = get_option('dsmb_theme_options');
				$dsmb_phone_no = $dsmb_options['phone_no'];
				$dsmb_email = $dsmb_options['email'];
			?>
			<div class="col-lg-6 col-md-7 col-12">
				<!-- Top Contact -->
				<ul class="top-contact">
					<?php
						if($dsmb_phone_no):
					?>
					<li><i class="fa fa-phone"></i><?php echo esc_html( $dsmb_phone_no ); ?></li>
					<?php
				else:
					?>
						<li><i class="fa fa-phone"></i>+880 1753695972</li>
					<?php
						endif;
					?>

					<?php
						if($dsmb_email):
					?>
					<li><i class="fa fa-envelope"></i><a href="mailto:<?php echo esc_html( $dsmb_email ); ?>"><?php echo esc_html( $dsmb_email ); ?></a></li>
					<?php
				else:
					?>
						<li><i class="fa fa-envelope"></i><a href="mailto:emran@gmail.com">emran@gmail.com</a></li>
					<?php
						endif;
					?>
				</ul>
				<!-- End Top Contact -->
			</div>
		</div>
	</div>
</div>