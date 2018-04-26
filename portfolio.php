<?php 
/*
Template Name: Portfolio Page
*/

get_header();
?>

	<div class="parallax-bg portfolio-bg" style="background-image: url('<?php echo  the_post_thumbnail_url(); ?>');">		
				<div class="container">
					<div class="row">
					   <div class="col-lg-12 col-md-12">
						 <div class="main-menu-ab">
						    <?php get_template_part( 'template-parts/logo-menu'); ?>			  
						  </div>									
						</div>					
					</div>
				</div>
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<?php
								while ( have_posts() ) :
									the_post(); ?>						
							 <div class="main-menu-bottom text-center main-menu-bottom-ab">
								<h3><?php the_title(); ?></h3>	
							  </div>	
							  <?php endwhile; ?>
						</div>							
					</div>					
				</div>
			</div>
		</header>
		<!-- header part end -->
		<!-- portfolio part start -->
		<div class="portfolio">			
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12">
							<div class="portfolio text-center">					

							<div id="filters" class="button-group">
							    <button class="button is-checked" data-filter="*">All Work</button>
								
								<?php $category =  get_terms('type'); 

										foreach($category as $cat):  ?>

											
								<button class="button" data-filter=".<?php echo $cat->slug;  ?>"><?php echo $cat->name;  ?></button>
											
								<?php endforeach; ?>
								
								
							    
							    
							</div>
								
							<div class="grid">

							
								<?php 
								
								$portfolio = new WP_Query(array(
									'post_type'				=> 'portfolio',
									'posts_per_page'		=> 9,
								));
								
								
								while($portfolio->have_posts()): $portfolio->the_post(); ?>
								 <div class="element-item <?php $category =  get_the_terms(get_the_id(),'type'); 

										foreach($category as $cat): 

											echo $cat->slug.' '; 
											
											endforeach; ?>" data-category="<?php $category =  get_the_terms(get_the_id(),'type'); 

										foreach($category as $cat): 

											echo $cat->slug.' '; 
											
											endforeach; ?>">
								    <img src="<?php echo  the_post_thumbnail_url(); ?>" class="img-responsive">
								     <div class="iso-overlay">
								    	<h3 data-toggle="modal" data-target="#portfolio<?php echo get_the_ID(); ?>"><?php the_title(); ?></h3>
										<p data-toggle="modal" data-target="#portfolio<?php echo get_the_ID(); ?>"><?php echo wp_trim_words(get_the_content(), 40, false); ?></p>
										
										

								    </div>
								 </div> 
								 
								 
								 
								 <div class="modal fade" id="portfolio<?php echo get_the_ID(); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
									  <div class="modal-dialog modal-dialog-centered" role="document">
										<div class="modal-content">
										  <div class="modal-header">       
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											  <span aria-hidden="true">&times;</span>
											</button>
										  </div>
										  <div class="modal-body">
											  <div class="row">
												<div class="col-lg-7 col-sm-7 col-sm-7">
													<div class="mbody-left">
														<img src="<?php echo  the_post_thumbnail_url(); ?>" class="img-responsive">
													</div>
												</div>
												<div class="col-lg-5 col-sm-5 col-sm-5">
													<div class="mbody-right text-center">
														<h3><?php the_title(); ?></h3>
														<p><?php echo wp_trim_words(get_the_content(), 40, false); ?></p>
													</div>
													<div class="flexise">
														<div class="row">
															<div class="col-md-12">
																
																 <!-- Carousel Part Start-->
																	<div id="carouselExample" class="carousel slide" data-ride="carousel" data-interval="9000">
																	<div class="carousel-inner row w-100 mx-auto" role="listbox">
																	
																	
																	<?php 
																	$portfolio_gallery = get_field('portfolio_gallery');
																	if($portfolio_gallery): 

																		foreach($portfolio_gallery as $port): ?>
																	
																		<div class="carousel-item col-md-4">
																			<img class="img-fluid mx-auto d-block" src="<?php echo $port['url']; ?>" alt="slide 1">
																		</div>
																		
																	<?php endforeach; endif; ?>
															
															
															
															
																	</div>
																	<a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
																		<i class="fa fa-chevron-left fa-lg text-muted"></i>
																		<span class="sr-only">Previous</span>
																	</a>
																	<a class="carousel-control-next text-faded" href="#carouselExample" role="button" data-slide="next">
																		<i class="fa fa-chevron-right fa-lg text-muted"></i>
																		<span class="sr-only">Next</span>
																	</a>
															</div>
																
																<!-- Carousel Part end-->



															</div>
														</div>											
													</div>
												</div>
											  </div>
										  </div>	        
										</div>
									  </div>
									</div>
								 
								 
								 
								 
								 
								<?php endwhile; ?>

								
							</div>							
						</div>
	                    <!-- Modal Start-->
						
						<!-- Modal End-->
					</div>							
				</div>					
			</div>		
		</div>	
		<!-- portfolio part end -->
<?php get_footer(); ?>