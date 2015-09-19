<?php get_header();?>
<!--start main content-->
	<div class = "container">
		<div class = "content_box two_third"><!-- This is the blog area -->
			<div id = "single_post">
				<?php full_post_here();?>
				<?php comments_template(); ?>
			</div>
		</div>
		<?php get_sidebar();?>
	</div>				
<!--end main content-->
<?php get_footer();?>