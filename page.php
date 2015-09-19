<?php get_header();?>
<!--start main content-->
	<div class = "container">
		<div class = "content_box two_third">
			<div class = "page_content">
				<?php if (have_posts()) : ?>
				<?php while (have_posts()) : the_post(); ?>
				    <article class="page" id="page-<?php the_ID(); ?>">
				    <?php the_content(); ?>
				    </article>
				<?php endwhile; ?>
				<?php endif; ?>
			</div>
		</div>
		<?php get_sidebar();?>
	</div>
<!--end main content-->
<?php get_footer();?>