<?php 
/*
Template Name: Contact Page
*/

get_header();
?>

		<div class="parallax-bg contact-bg" style="background-image: url('<?php echo  the_post_thumbnail_url(); ?>');">
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
							<div class="main-menu-bottom text-center main-menu-bottom-ct" style="color: <?php echo get_field('title_color_cont'); ?>;">
							<h2><?php the_title(); ?></h2>
							</div>
						  <?php endwhile; ?> 
						</div>							
					</div>					
				</div>
			</div>
		</header>
		<!-- header part end -->
		<!-- getin part start -->
		<section class="getin">			
			<div class="container">
				<div class="row">
					<div class="col-lg-6 offset-lg-3 col-md-6 offset-md-3">
						 <div class="getin-part text-center">
						 
						 <?php $contact_page_text = get_field('contact_page_text');

							if($contact_page_text): 

							echo $contact_page_text;
							
							endif; ?>
						  </div>
					</div>							
				</div>					
			</div>		
		</section>	
		<!-- getin part end -->
		<!-- fotter-top part start -->
		<div class="fotter-top">			
			<div class="container">
				<div class="row">
					<div class="col-lg-5 col-md-5">
						 <div class="fotter-top-left">
						 
							<?php $contact_form = get_field('contact_form');

							if($contact_form): 

							echo $contact_form;
							
							endif; ?>
						 
							
						  </div>
					</div>	
					<div class="col-lg-2 col-md-2">
						 <div class="fotter-top-meddle">
							<span></span>
						  </div>
					</div>
					<div class="col-lg-5 col-md-5">
						 <div class="fotter-top-right">
							<?php $logo_uploader = get_field('logo_uploader','options'); 
							if($logo_uploader): ?>
							<a href="<?php echo home_url(); ?>" class="logo">
							<img src="<?php echo $logo_uploader['url']; ?>" alt="<?php echo $logo_uploader['title']; ?>" />
							</a>
							
							
							<?php endif; ?>
							
							<?php $contact_address = get_field('contact_address');

							if($contact_address): 

							echo $contact_address;
							
							endif; ?>
							
						  </div>
					</div>						
				</div>					
			</div>		
		</div>
<?php get_footer(); ?>