<section class="pricing-table section">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h2>We Provide You The Best Treatment In Resonable Price</h2>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/section-img.png" alt="#">
							<p>Lorem ipsum dolor sit amet consectetur adipiscing elit praesent aliquet. pretiumts</p>
						</div>
					</div>
				</div>
				<div class="row">
					<!-- Single Table -->
					<?php 
					$sh_pricing_table = new WP_Query(array(
						'post_type'   => "mprice",
					));
					while($sh_pricing_table->have_posts()):$sh_pricing_table->the_post();
					?>
					<div class="col-lg-4 col-md-12 col-12">
						<div class="single-table">
							<!-- Table Head -->
							<div class="table-head">
								<div class="icon">
									<i class="<?php echo get_post_meta(get_the_ID(),'iconclasssh',true); ?>"></i>
								</div>
								<h4 class="title"><?php esc_html(the_title()); ?></h4>
								<div class="price">
									<p class="amount"><?php echo get_post_meta(get_the_ID(),'sh_price',true); ?><span>/ Per Visit</span></p>
								</div>	
							</div>
							<!-- Table List -->
							<ul class="table-list">
								<?php $sh_featureinfo = get_post_meta(get_the_ID(),'yourprefix_group_demo',true);
								//var_dump($sh_featureinfo);

								foreach($sh_featureinfo as $sh_signle_feature){
									if(isset($sh_signle_feature['title'])){
										$sh_title = $sh_signle_feature['title'];

										?>
									<li><i class="icofont icofont-ui-check"></i><?php echo esc_html($sh_title); ?></li>
									<?php
									}
									

								}
								 ?>

								
								<!-- <li><i class="icofont icofont-ui-check"></i>Cubitur sollicitudin fentum</li>
								<li class="cross"><i class="icofont icofont-ui-close"></i>Nullam interdum enim</li>
								<li class="cross"><i class="icofont icofont-ui-close"></i>Donec ultricies metus</li>
								<li class="cross"><i class="icofont icofont-ui-close"></i>Pellentesque eget nibh</li> -->
							</ul>
							<div class="table-bottom">
								<a class="btn" href="<?php echo get_post_meta(get_the_ID(),'shbookingurl',true); ?>">Book Now</a>
							</div>
							<!-- Table Bottom -->
						</div>
					</div>
					<?php
					endwhile;
					?>
					
					
					<!-- End Single Table-->
				</div>	
			</div>	
		</section>	