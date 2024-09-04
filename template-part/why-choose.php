<section class="why-choose section" >
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h2><?php $aboutInfo=get_option('mythemeoptions');
							echo esc_html($aboutInfo['about-maintitle']);
							 ?>
							</h2>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/section-img.png" alt="#">
							<p><?php echo esc_html($aboutInfo['about-maindes']) ?></p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6 col-12">
						<!-- Start Choose Left -->
						<div class="choose-left">
							<h3><?php echo esc_html($aboutInfo['second-title']); ?></h3>
							<p><?php echo $aboutInfo['second-des']; ?> </p>
							<div class="row">
								<div class="col-lg-6">
									<ul class="list">
										<?php 
										 $aboutInfo=get_option('mythemeoptions');
										 $featuredetails = $aboutInfo['about-feature'];
										//var_dump($featuredetails);
										foreach($featuredetails as $single_feature){
											?>
											<li><i class="fa fa-caret-right"></i><?php echo esc_html($single_feature['featureoption']); ?> </li>
											<?php
										}
										 ?>
										
										
									</ul>
								</div>
								<div class="col-lg-6">
									<ul class="list">
									<?php 
										 $aboutInfo=get_option('mythemeoptions');
										 $featuredetails = $aboutInfo['about-feature2'];
										//var_dump($featuredetails);
										foreach($featuredetails as $single_feature){
											?>
											<li><i class="fa fa-caret-right"></i><?php echo esc_html($single_feature['featureoption2']); ?> </li>
											<?php
										}
										 ?>
									</ul>
								</div>
							</div>
						</div>
						<!-- End Choose Left -->
					</div>
					<div class="col-lg-6 col-12">
						<!-- Start Choose Rights -->
						<div class="choose-right">
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
								<iframe width="560" height="380" src="<?php echo $aboutInfo['about-video'] ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
								
							</div>
						</div>
						<!-- End Choose Rights -->
					</div>
				</div>
			</div>
		</section>