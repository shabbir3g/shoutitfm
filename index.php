<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package shoutitfm
 */

get_header();
?>

		<div class="parallax-bg contact-bg">
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
							 <div class="main-menu-bottom text-center main-menu-bottom-ab">
								<h3>ABOUT ME</h3>
							  </div>						 
						</div>							
					</div>					
				</div>
			</div>
		</header>

		<!-- lewis part start -->
		<section class="lewis">			
			<div class="container">
				<div class="row">
					<div class="col-lg-6 offset-lg-3 col-md-6 offset-md-3">
						 <div class="lewis-part text-center">
							<h2>Blog</h2>
						 </div>
					</div>							
				</div>					
			</div>		
		</section>	
		<!-- lewis part end -->
		<!-- main-top part start -->
		<section class="main">			
			<div class="container">
				<div class="row">
				
				

					<?php
					if ( have_posts() ) :

						

						/* Start the Loop */
						while ( have_posts() ) :
							the_post();

							/*
							 * Include the Post-Type-specific template for the content.
							 * If you want to override this in a child theme, then include a file
							 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
							 */
							get_template_part( 'template-parts/content', get_post_type() );

						endwhile;

						the_posts_navigation();

					else :

						get_template_part( 'template-parts/content', 'none' );

					endif;
					?>

			
				</div>					
			</div>		
		</section>	
		<!-- main-top part end -->

<?php
get_footer();
