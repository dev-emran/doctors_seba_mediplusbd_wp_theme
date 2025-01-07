<section class="schedule">
	<div class="container">
		<div class="schedule-inner">
			<div class="row">
				<?php
				$dsmb_schedule = new WP_Query([
					'post_type'		=> 'schedule',
					'posts_per_page'	=> 3,
					'orderby'			=> 'date',
					'order'				=> 'DESC',

				]);

				if($dsmb_schedule->have_posts()):
					while($dsmb_schedule->have_posts()): $dsmb_schedule->the_post();
						$sub_title = get_post_meta(get_the_ID(), '_dsmb_schedule_subtitle', true);
						$sche_icon = get_post_meta(get_the_ID(), '_dsmb_schedule_icon', true);
						?>
						<div class="col-lg-4 col-md-6 col-12 ">
							<!-- single-schedule -->
							<div class="single-schedule first">
								<div class="inner">
									<div class="icon">
										<i class="<?php echo $sche_icon ? esc_attr($sche_icon) : esc_attr('fa fa-ambulance');?> ">
									</i>
								</div>
								<div class="single-content">
									<span><?php echo esc_html($sub_title); ?></span>
									<h4><?php __( the_title(), 'dsmb' ) ?></h4>
									<p class="text-justify"><?php echo get_custom_excerpt(15); ?></p>
									<a href="<?php the_permalink(); ?>">LEARN MORE<i class="fa fa-long-arrow-right"></i></a>
								</div>
							</div>
						</div>
					</div>

					<?php
				endwhile;
				wp_reset_postdata();
			else:
				?>
				<div class="col-lg-4 col-md-6 col-12 ">
					<!-- single-schedule -->
					<div class="single-schedule first">
						<div class="inner">
							<div class="icon">
								<i class="fa fa-ambulance"></i>
							</div>
							<div class="single-content">
								<span>Urgent Assistance</span>
								<h4>Emergency Cases</h4>
								<p>In times of emergencies, every second counts, and immediate assistance can make all the difference. Our team is always prepared to respond quickly and effectively to ensure you</p>
								<a href="#">LEARN MORE<i class="fa fa-long-arrow-right"></i></a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-12">
					<!-- single-schedule -->
					<div class="single-schedule middle">
						<div class="inner">
							<div class="icon">
								<i class="icofont-prescription"></i>
							</div>
							<div class="single-content">
								<span>Schedule at a Glance</span>
								<h4>Doctors Timetable</h4>
								<p>We recommend calling ahead to confirm availability, as schedules may occasionally change. Our team is here to accommodate your needs and ensure timely appointments.</p>
								<a href="#">LEARN MORE<i class="fa fa-long-arrow-right"></i></a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-12 col-12">
					<!-- single-schedule -->
					<div class="single-schedule last">
						<div class="inner">
							<div class="icon">
								<i class="icofont-ui-clock"></i>
							</div>
							<div class="single-content">
								<span>Convenient Service Hours</span>
								<h4>Opening Hours</h4>
								<p>Our schedule to help you plan your visit:</p>
								<ul class="time-sidual">
									<li class="day">Monday - Fridayp <span>8.00-20.00</span></li>
									<li class="day">Saturday <span>9.00-18.30</span></li>
									<li class="day">Monday - Thusday <span>9.00-15.00</span></li>
								</ul>
								<a href="#">LEARN MORE<i class="fa fa-long-arrow-right"></i></a>
							</div>
						</div>
					</div>
				</div>
				<?php
			endif;
			?>
		</div>
	</div>
</div>
</section>