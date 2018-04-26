<?php 
/*
Template Name: About Page
*/

get_header();
?>

	<div class="parallax-bg about-bg"  style="background-image: url('<?php echo  the_post_thumbnail_url(); ?>');">
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
								<h2><?php the_title(); ?></h2>
							  </div>
							  
							  <?php endwhile; ?>
												 
						</div>							
					</div>					
				</div>
			</div>
		</header>
		<!-- header part end -->
		<!-- lewis part start -->
		<section class="lewis">			
			<div class="container">
				<div class="row">
					<div class="col-lg-6 offset-lg-3 col-md-6 offset-md-3">
						 <div class="lewis-part text-center">
						 
							<?php $about_image = get_field('about_image'); 
									if($about_image): ?>
									<img src="<?php echo $about_image['url']; ?>" alt="<?php echo $about_image['title']; ?>" />		
							<?php endif; ?>
						 
						 
							
							<?php $logo_uploader = get_field('logo_uploader','options'); 
									if($logo_uploader): ?>
								<div class="footer-left" style="margin-top: 30px;">
									<a href="<?php echo home_url(); ?>"><img src="<?php echo $logo_uploader['url']; ?>" alt="<?php echo $logo_uploader['title']; ?>" /></a>			
								</div>
							<?php endif; ?>
							<div class="social-url"> 
								<ul>
									<?php $facebook_url = get_field('facebook_url','options'); 
									if($facebook_url): ?>
									<li><a href="<?php echo $facebook_url; ?>"><i class="fab fa-facebook-f"></i></a></li>
									<?php endif; ?>
									
									<?php $instagram_url = get_field('instagram_url','options'); 
									if($instagram_url): ?>
									<li><a href="<?php echo $instagram_url; ?>"><i class="fab fa-instagram"></i></a></li>
									<?php endif; ?>
									
								</ul>	
							</div>
							<span></span>
						 </div>
					</div>							
				</div>					
			</div>		
		</section>	
		<!-- lewis part end -->
		<!-- content part start -->
		<div class="content">			
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12">
						 <div class="content-part">
						 
							 <?php $about_text = get_field('about_text');

							if($about_text): 

							echo $about_text;
							
							endif; ?>
							
						 
						 
						  </div>
					</div>							
				</div>					
			</div>		
		</div>	
		<!-- content part end -->
		<!-- main-top part start -->
		<section class="main">			
			<div class="container">
				<div class="row">
				
				
					<div class="singles-blog">
						<div class="blog">
							<div class="main-part-left main-part-effect">
								<div class="figure">
								
									 <?php $curriculum_vitae = get_field('curriculum_vitae');

									if($curriculum_vitae): ?>
									<img src="<?php echo  $curriculum_vitae['url']; ?>" class="img-fluid" alt="<?php echo  $curriculum_vitae['title']; ?>" />
									
									<?php endif; ?>
									
									
									<?php $curriculum_vitae_image_title = get_field('curriculum_vitae_image_title');

									if($curriculum_vitae_image_title): ?>
									<div class="caption">
										<div class="caption-contant text-center">
											<h3><?php echo $curriculum_vitae_image_title; ?></h3>					
										</div>			
									</div>	

									<?php endif; ?>
										
								</div>				
							</div>				
						</div>
						<div class="blog">
							<div class="main-part-right main-part-ab text-center">
							
								<?php $curriculum_vitae_text = get_field('curriculum_vitae_text');

									if($curriculum_vitae_text): 

									echo $curriculum_vitae_text;
									
									endif; 
								
								?>
									
							</div>					
						</div>
					</div>
					
					<div class="singles-blog">
						<div class="blog">
							<div class="main-part-left main-part-effect">
								<div class="figure">

									<?php $instagram_shortcode = get_field('instagram_shortcode');

									if($instagram_shortcode): ?>
									<?php echo do_shortcode($instagram_shortcode); ?>
									
										<?php endif; ?>
									<?php $instagram_text = get_field('instagram_text');

									if($instagram_text): ?>
									<div class="caption">
										<div class="caption-contant text-center">
											<h3><?php echo $instagram_text; ?></h3>					
										</div>			
									</div>	
								<?php endif; ?>
								</div>				
							</div>				
						</div>
						<div class="blog">
							<div class="main-part-right main-part-ab text-center">
							<?php $instagram_text_area = get_field('instagram_text_area');

									if($instagram_text_area): 

									echo $instagram_text_area;
									
									endif; 
								
								?>
										
						</div>					
						</div>
					</div>
					
					<div class="singles-blog">
						<div class="blog">
							<div class="main-part-left main-part-effect">
								<div class="figure">	
									 <?php $spotify_image = get_field('spotify_image');

									if($spotify_image): ?>
									<img src="<?php echo  $spotify_image['url']; ?>" class="img-fluid" alt="<?php echo  $spotify_image['title']; ?>" />
									
									<?php endif; ?>
									
									
									<?php $spotify_title = get_field('spotify_title');

									if($spotify_title): ?>
									<div class="caption">
										<div class="caption-contant text-center">
											<h3><?php echo $spotify_title; ?></h3>					
										</div>			
									</div>	

									<?php endif; ?>
									
								</div>				
							</div>				
						</div>
						<div class="blog">
							<div class="main-part-right main-part-ab text-center">
							<?php $spotify_textarea = get_field('spotify_textarea');

									if($spotify_textarea): 

									echo $spotify_textarea;
									
									endif; 
								
								?>
									
									
						</div>					
						</div>
					</div>
					
					
							
				</div>					
			</div>		
		</section>	
		<!-- main-top part end -->
		<!-- main-meddle part start -->
	
		
		<!-- main-bottom part end -->
<?php get_footer(); ?>