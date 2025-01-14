<?php get_header(); ?>

<!-- Breadcrumbs -->
<div class="breadcrumbs overlay">
	<div class="container">
		<div class="bread-inner">
			<div class="row">
				<div class="col-12">
					<h2><?php _e('Blog Single', 'dsmb'); ?></h2>
					<ul class="bread-list">
						<li><a href="<?php site_url(); ?>">Home</a></li>
						<li><i class="icofont-simple-right"></i></li>
						<li class="active"><?php the_title(); ?></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End Breadcrumbs -->

<!-- Single News -->
<section class="news-single section">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-12">
				<div class="row">
					<div class="col-12">
						<div class="single-main">
							<!-- News Head -->
							<div class="news-head">
								<?php the_post_thumbnail(); ?>
							</div>
							<!-- News Title -->
							<h1 class="news-title"><?php the_title(); ?></h1>
							<!-- Meta -->
							<div class="meta">
								<div class="meta-left">
									<span class="author">
										<?php 
											$post_id = get_queried_object_id();
											$post = get_post($post_id);
											$author_id = $post->post_author;
											echo get_the_author_meta('ID');
											$author_name = get_the_author_meta('display_name', $author_id);
											$author_avatar = get_avatar($author_id,43);
										?>
										<a href="#">
											<?php echo $author_avatar; ?>
											<?php echo esc_html($author_name); ?>
										</a>
									</span>
									<span class="date"><i class="fa fa-clock-o"></i><?php echo get_the_date('d M Y'); ?></span>
								</div>
								<div class="meta-right">
									<span class="comments"><a href="#"><i class="fa fa-comments"></i>05 Comments</a></span>
									<span class="views"><i class="fa fa-eye"></i><?php echo get_post_views(get_the_ID()); ?> Views</span>
								</div>
							</div>
							<!-- News Text -->
							<div class="news-text">
								<?php the_content(); ?>
							</div>
							<div class="blog-bottom">
								<!-- Social Share -->
								<ul class="social-share">
									<li class="facebook"><a href="#"><i class="fa fa-facebook"></i><span>Facebook</span></a></li>
									<li class="twitter"><a href="#"><i class="fa fa-twitter"></i><span>Twitter</span></a></li>
									<li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
									<li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
									<li class="pinterest"><a href="#"><i class="fa fa-pinterest"></i></a></li>
								</ul>
								<!-- Next Prev -->
								<ul class="prev-next">
									<?php
										$prev_post = get_previous_post();
										$next_post = get_next_post();
										if ($prev_post) : 
									?>
										<li class="prev"><a href="<?php echo get_the_permalink($prev_post); ?>"><i class="fa fa-angle-double-left"></i></a></li>
									<?php endif; ?>
									<?php if ($next_post) : ?>
										<li class="next"><a href="<?php echo get_the_permalink($next_post); ?>"><i class="fa fa-angle-double-right"></i></a></li>
									<?php endif; ?>

								</ul>
								<!--/ End Next Prev -->
							</div>
						</div>
					</div>
					<div class="col-12">
						<div class="blog-comments">
							<h2>All Comments</h2>
							<div class="comments-body">
								<!-- Single Comments -->
								<div class="single-comments">
									<div class="main">
										<div class="head">
											<img src="img/author1.jpg" alt="#"/>
										</div>
										<div class="body">
											<h4>Afsana Mimi</h4>
											<div class="comment-meta"><span class="meta"><i class="fa fa-calendar"></i>March 05, 2019</span><span class="meta"><i class="fa fa-clock-o"></i>03:38 AM</span></div>
											<p>Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas</p>
											<a href="#"><i class="fa fa-reply"></i>replay</a>
										</div>
									</div>
								</div>		
								<!--/ End Single Comments -->
								<!-- Single Comments -->
								<div class="single-comments left">
									<div class="main">
										<div class="head">
											<img src="img/author2.jpg" alt="#"/>
										</div>
										<div class="body">
											<h4>Naimur Rahman</h4>
											<div class="comment-meta"><span class="meta"><i class="fa fa-calendar"></i>March 05, 2019</span><span class="meta"><i class="fa fa-clock-o"></i>03:38 AM</span></div>
											<p>Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas</p>
											<a href="#"><i class="fa fa-reply"></i>replay</a>
										</div>
									</div>
								</div>		
								<!--/ End Single Comments -->
								<!-- Single Comments -->
								<div class="single-comments">
									<div class="main">
										<div class="head">
											<img src="img/author3.jpg" alt="#"/>
										</div>
										<div class="body">
											<h4>Suriya Molharta</h4>
											<div class="comment-meta"><span class="meta"><i class="fa fa-calendar"></i>March 05, 2019</span><span class="meta"><i class="fa fa-clock-o"></i>03:38 AM</span></div>
											<p>Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas</p>
											<a href="#"><i class="fa fa-reply"></i>replay</a>
										</div>
									</div>
								</div>		
								<!--/ End Single Comments -->											
							</div>
						</div>
					</div>
					<div class="col-12">
						<div class="comments-form">
							<h2>Leave Comments</h2>
							<!-- Contact Form -->
							<form class="form" method="post" action="mail/mail.php">
								<div class="row">
									<div class="col-lg-4 col-md-4 col-12">
										<div class="form-group">
											<i class="fa fa-user"></i>
											<input type="text" name="first-name" placeholder="First name" required="required">
										</div>
									</div>
									<div class="col-lg-4 col-md-4 col-12">
										<div class="form-group">
											<i class="fa fa-envelope"></i>
											<input type="text" name="last-name" placeholder="Last name" required="required">
										</div>
									</div>
									<div class="col-lg-4 col-md-4 col-12">
										<div class="form-group">
											<i class="fa fa-envelope"></i>
											<input type="email" name="email" placeholder="Your Email" required="required">
										</div>
									</div>
									<div class="col-12">
										<div class="form-group message">
											<i class="fa fa-pencil"></i>
											<textarea name="message" rows="7" placeholder="Type Your Message Here" ></textarea>
										</div>
									</div>
									<div class="col-12">
										<div class="form-group button">	
											<button type="submit" class="btn primary"><i class="fa fa-send"></i>Submit Comment</button>
										</div>
									</div>
								</div>
							</form>
							<!--/ End Contact Form -->
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-12">
				<div class="main-sidebar">
					<!-- Single Widget -->
					<div class="single-widget search">
						<div class="form">
							<input type="email" placeholder="Search Here...">
							<a class="button" href="#"><i class="fa fa-search"></i></a>
						</div>
					</div>
					<!--/ End Single Widget -->
					<!-- Single Widget -->
					<div class="single-widget category">
						<h3 class="title">Blog Categories</h3>
						<?php 
							$categories = get_categories();
							if(!empty($categories)):
						?>
						<ul class="categor-list">
							<?php
								foreach($categories as $category):
							?>
							<li><a href="<?php echo esc_url(get_category_link($category->term_id)) ?>"><?php echo esc_html($category->name); ?></a></li>
							<?php 
								endforeach;
							?>
						</ul>
						<?php 
						endif;
						?>
					</div>
					<!--/ End Single Widget -->
					<!-- Single Widget -->
					 <?php 
					 	$recent_posts = new WP_Query([
							'post_type'		=> 'post',
							'posts_per_page'	=> 3,
							'orderby'		=> 'date',
							'post__not_in'	=> [$post_id],
							'order'		=> 'DESC'

						]);
						if($recent_posts->have_posts()):
					 ?>
					<div class="single-widget recent-post">
						<h3 class="title">Recent post</h3>
						<?php 
							while($recent_posts->have_posts()): $recent_posts->the_post();
						?>
						<!-- Single Post -->
						<div class="single-post">
							<div class="image">
								<?php the_post_thumbnail(); ?>
							</div>
							<div class="content">
								<h5><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h5>
								<ul class="comment">
									<li><i class="fa fa-calendar" aria-hidden="true"></i><?php echo get_the_date('M d, Y'); ?></li>
									<li><i class="fa fa-commenting-o" aria-hidden="true"></i>35</li>
								</ul>
							</div>
						</div>
						<?php 
							endwhile;
							wp_reset_postdata();
						?>
						<!-- End Single Post -->
					</div>
					<?php 
						endif;
					?>
					<!--/ End Single Widget -->
					<!-- Single Widget -->
					<!--/ End Single Widget -->
					<!-- Single Widget -->
					<div class="single-widget side-tags">
						<?php 
							$tags = get_tags();
							if(!empty($tags)):
						?>
						<h3 class="title">Tags</h3>
						<ul class="tag">
							<?php 
								foreach($tags as $tag):
							?>
							<li><a href="#"><?php echo esc_html($tag->name); ?></a></li>
							<?php 
								endforeach;
							?>
						</ul>
						<?php 
						endif;
						?>
					</div>
					<!--/ End Single Widget -->
				</div>
			</div>
		</div>
	</div>
</section>
<!--/ End Single News -->


<?php get_footer(); ?>