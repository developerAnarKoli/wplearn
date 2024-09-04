<section class="slider">
			<div class="hero-slider">

			<?php
			$myhero = new WP_Query(array(
				'post_type'  => "hero"
			));
			while($myhero->have_posts()):$myhero->the_post();
			?>
			<!-- Start Single Slider -->
			<div class="single-slider" style="background-image:url('<?php the_post_thumbnail_url(); ?>')">
					<div class="container">
						<div class="row">
							<div class="col-lg-7">
								<div class="text">
									<h1><?php esc_html(the_title()); ?></h1>
									<p><?php esc_html(the_excerpt()); ?> </p>
									<div class="button">
										<a href="#" class="btn">Get Appointment</a>
										<a href="#" class="btn primary">Learn More</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- End Single Slider -->
			<?php
			endwhile;
			?>

				
				
				<!-- Start Single Slider -->
				<!-- <div class="single-slider" style="background-image:url('<?php// echo get_template_directory_uri(); ?>/assets/img/slider.jpg')">
					<div class="container">
						<div class="row">
							<div class="col-lg-7">
								<div class="text">
									<h1>We Provide <span>Medical</span> Services That You Can <span>Trust!</span></h1>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sed nisl pellentesque, faucibus libero eu, gravida quam. </p>
									<div class="button">
										<a href="#" class="btn">Get Appointment</a>
										<a href="#" class="btn primary">About Us</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div> -->
				<!-- Start End Slider -->
				<!-- Start Single Slider -->
				<!-- <div class="single-slider" style="background-image:url('<?php// echo get_template_directory_uri(); ?>/assets/img/slider3.jpg')">
					<div class="container">
						<div class="row">
							<div class="col-lg-7">
								<div class="text">
									<h1>We Provide <span>Medical</span> Services That You Can <span>Trust!</span></h1>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sed nisl pellentesque, faucibus libero eu, gravida quam. </p>
									<div class="button">
										<a href="#" class="btn">Get Appointment</a>
										<a href="#" class="btn primary">Conatct Now</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div> -->
				<!-- End Single Slider -->
			</div>
		</section>