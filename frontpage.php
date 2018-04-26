<?php 
/*
Template Name: Home Page
*/

get_header();
?>

	<div class="parallax-bg contact-bg" 

<?php $home_page_banner  = get_field('home_page_banner'); if($home_page_banner): ?>
style="background-image: url('<?php echo  $home_page_banner['url']; ?>');"
<?php endif; ?>

>
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
							<?php $home_banner_title = get_field('home_banner_title'); 
							if($home_banner_title): ?>
							 <div class="main-menu-bottom text-center main-menu-bottom-ab" style="color: <?php echo get_field('home_title_color'); ?>;">
								<?php echo $home_banner_title; ?>
							  </div>
							<?php endif; ?>
						</div>							
					</div>					
				</div>
			</div>
		</header>



<!-- helpyou part start -->
		<section class="helpyou">			
			<div class="container">
				<div class="row">
					<div class="col-lg-8 offset-lg-2 col-md-8 offset-md-2">
						 <div class="helpyou-part text-center">
							<?php $home_help_text = get_field('home_help_text');

							if($home_help_text): 

							echo $home_help_text;
							
							endif; 
							
							?>
							
						  </div>
					</div>							
				</div>					
			</div>		
		</section>	
		<!-- helpyou part end -->
		<!-- main-top part start -->
		<section class="main">			
			<div class="container">
				<div class="row">
				
				
				
				
				<?php 

				 $home_page_article = get_field('home_page_article');

				if($home_page_article): 

				foreach($home_page_article as $art): ?>
				
				<div class="singles-blog">
						
					<div class="blog">
						<div class="main-part-left">
							<img src="<?php echo $art['image_homeart']['url']; ?>" class="img-fluid" alt="images not found" />		
						</div>				
					</div>
					<div class="blog">
						<div class="main-part-right text-center">
							<?php echo $art['text_homeart']; ?>
								
						</div>				
					</div>		
					
				</div>

				<?php endforeach; endif; ?>
				
				
				
				
				
				
								
				</div>					
			</div>		
		</section>	
		<!-- main-top part end -->
		
		
		<!-- main-bottom part end -->
<?php get_footer(); ?>