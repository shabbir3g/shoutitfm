<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package shoutitfm
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
							 <div class="main-menu-bottom text-center main-menu-bottom-ab">
								<h2><?php the_title(); ?></h2>
							  </div>
							  
							  <?php endwhile; ?>
							
						</div>							
					</div>					
				</div>
			</div>
		</header>


	<div id="primary" class="content-area" style="margin-top: 40px;">
		<main id="main" class="site-main container">

		<?php
		while ( have_posts() ) :
			the_post();

			 the_content(); 

			

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
