<div class="clients overlay">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-12">
						<div class="owl-carousel clients-slider">
							<?php
							$myclient = new WP_Query(array(
								'post_type'  => "client"
							));
							while($myclient->have_posts()):$myclient->the_post();
							?>
							<div class="single-clients">
								<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
							</div>
							<?php
							endwhile;
							 ?>

						</div>
					</div>
				</div>
			</div>
		</div>