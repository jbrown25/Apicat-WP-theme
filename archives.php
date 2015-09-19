<?php
/*
Template Name: Archives
*/
get_header();?>
	<div class = "container">
		<div class = "content_box three_quarter">
			<?php the_post();?>
			<h1><?php the_title(); ?></h1>

			<h2>Archives by Month:</h2>
			<ul>
				<?php wp_get_archives('type=monthly'); ?>
			</ul>
			
			<h2>Archives by Subject:</h2>
			<ul>
				 <?php wp_list_categories(); ?>
			</ul>
		</div>
		<?php get_sidebar();?>
	</div>
<?php get_footer(); ?>