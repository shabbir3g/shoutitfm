<nav id="navigation">
	<?php $logo_uploader = get_field('logo_uploader','options'); 

	if($logo_uploader): ?>
	<a href="<?php echo home_url(); ?>" class="logo">
	<img src="<?php echo $logo_uploader['url']; ?>" alt="<?php echo $logo_uploader['title']; ?>" />
	</a>
	<?php endif; ?>
	<a aria-label="mobile menu" class="nav-toggle nav-toggle-ab"><span></span> <span></span> <span></span> </a>
	<?php 


	wp_nav_menu(array(

		'theme_location'		=> 'main-menu',
		'menu_class'			=> 'menu-left menu-left-ab',
		'container'				=> '',
		
	));


	?>

</nav>			