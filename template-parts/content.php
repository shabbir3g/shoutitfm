<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package shoutitfm
 */

?>

<div class="singles-blog">
	<div class="blog">
		<div class="main-part-left main-part-effect">
			<div class="figure">				
				<?php the_post_thumbnail(); ?>
				<div class="caption">
					<div class="caption-contant text-center">
						<h3><?php the_title(); ?></h3>					
					</div>			
				</div>			
			</div>				
		</div>				
	</div>
	<div class="blog">
		<div class="main-part-right main-part-ab text-center">
			
			<h4><?php echo wp_trim_words(get_the_content(),32,'</h4>
			<a href="'.get_the_permalink().'">Read More</a>'); ?>		
		</div>				
	</div>
</div>