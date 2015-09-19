<?php get_header();?>
<!--start main content-->
		<div id="slider">
			<?php if( function_exists('cyclone_slider') ) cyclone_slider('main-slider'); ?>
		</div>
		<div class = "container">
				<div id = "widget_one">
						<?php 
							if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Main Page Widget One')) : 
							endif;
						?>
				</div>
				<div id = "widget_two">
						<?php 
							if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Main Page Widget Two')) : 
							endif;
						?>
				</div>
				<div id = "widget_three">
						<?php 
							if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Main Page Widget Three')) : 
							endif;
						?>
				</div>
		</div><!-- end container -->
<!--end main content-->
<?php get_footer();?>