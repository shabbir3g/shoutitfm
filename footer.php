<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package shoutitfm
 */

?>

		<!-- footer part start -->
		<div class="footer">			
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
					<?php $logo_uploader = get_field('logo_uploader','options'); 

							if($logo_uploader): ?>
						<div class="footer-left">
							<a href="<?php echo home_url(); ?>"><img src="<?php echo $logo_uploader['url']; ?>" alt="<?php echo $logo_uploader['title']; ?>" /></a>			
						</div>
					<?php endif; ?>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
						<div class="footer-right">
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
					</div>						
				</div>					
			</div>		
		</div>	
		<!-- footer part end -->	
		
		<?php wp_footer(); ?>
	</body>
</html>