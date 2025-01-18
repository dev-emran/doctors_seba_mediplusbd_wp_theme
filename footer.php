		<!-- Footer Area -->
		<footer id="footer" class="footer ">
			<!-- Footer Top -->
			<div class="footer-top">
				<div class="container">
					<div class="row">
						<div class="col-lg-3 col-md-6 col-12">
							<div class="single-footer">
								<?php 
									if(is_active_sidebar('dsmb-footer-left')):
										dynamic_sidebar('dsmb-footer-left');
									endif;
									if(!is_active_sidebar('dsmb-footer-left')):

										$dsmb_footer_left_heading = __('About Us', 'dsmb');
										$dsmb_footer_left_instrac = __('Add widgets to this sidebar from the WordPress admin panel.', 'dsmb');

										printf("<div class='fallback-content'><h2>%s</h2><p>%s</p></div>", esc_html($dsmb_footer_left_heading), esc_html($dsmb_footer_left_instrac));
									endif;
								?>
								<!-- Social -->
								<ul class="social">
									<li><a href="#"><i class="icofont-facebook"></i></a></li>
									<li><a href="#"><i class="icofont-google-plus"></i></a></li>
									<li><a href="#"><i class="icofont-twitter"></i></a></li>
									<li><a href="#"><i class="icofont-vimeo"></i></a></li>
									<li><a href="#"><i class="icofont-pinterest"></i></a></li>
								</ul>
								<!-- End Social -->
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-12">
							<div class="single-footer f-link">
								<?php 
									if(is_active_sidebar('dsmb-footer-right_quick_links_head')){
										dynamic_sidebar('dsmb-footer-right_quick_links_head');
									}

									if(!is_active_sidebar('dsmb-footer-right_quick_links_head')){
										echo esc_html_e('Quick Links', 'dsmb');
									}
								?>
								<div class="row">
									<div class="col-lg-6 col-md-6 col-12">
										<ul>
											<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Home</a></li>
											<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>About Us</a></li>
											<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Services</a></li>
											<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Our Cases</a></li>
											<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Other Links</a></li>
										</ul>
									</div>
									<div class="col-lg-6 col-md-6 col-12">
										<ul>
											<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Consuling</a></li>
											<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Finance</a></li>
											<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Testimonials</a></li>
											<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>FAQ</a></li>
											<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Contact Us</a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-12">
							<div class="single-footer">
							<?php 
									if(is_active_sidebar('dsmb-footer-right_open_hours')):
										dynamic_sidebar('dsmb-footer-right_open_hours');
									endif;
									if(!is_active_sidebar('dsmb-footer-right_open_hours')):
										$dsmb_quick_link_heading = __('Quick Links', 'dsmb');
										$dsmb_quick_link_instrac = __('Add widgets to this sidebar from the WordPress admin panel.', 'dsmb');

										printf("<h2>%s</h2>", esc_html($dsmb_quick_link_heading));
										printf("<p>%s</p>", esc_html($dsmb_quick_link_instrac));
									endif;
								?>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-12">
							<div class="single-footer">
								<?php 
									if(is_active_sidebar('dsmb-footer-right')){
										dynamic_sidebar('dsmb-footer-right');
									}
								?>
								<form action="mail/mail.php" method="get" target="_blank" class="newsletter-inner">
									<input name="email" placeholder="Email Address" class="common-input" onfocus="this.placeholder = ''"
										onblur="this.placeholder = 'Your email address'" required="" type="email">
									<button class="button"><i class="icofont icofont-paper-plane"></i></button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--/ End Footer Top -->
			<!-- Copyright -->
			<div class="copyright">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-12">
							<?php 
								$dsmb_options = get_option('dsmb_theme_options');
								$copyrights_text = $dsmb_options['copy_right'] ? $dsmb_options['copy_right'] : 'All Rights Reserved by';
								$dev_name = $dsmb_options['dev_name'] ? $dsmb_options['dev_name'] : 'Emran';
								$dev_url = $dsmb_options['dev_url'] ? $dsmb_options['dev_url'] : 'https://fb.me/pcbnll';
								$get_current_year = date('Y');
							
							?>
							<div class="copyright-content">
								<?php  
									printf("<p>%s %s | %s <a href='%s' target='_blank'>%s</a></p>", '&copy', $get_current_year, $copyrights_text, $dev_url, $dev_name );
								?>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--/ End Copyright -->
		</footer>
		<!--/ End Footer Area -->
		<?php wp_footer(); ?>
    </body>
</html>
