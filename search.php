<?php get_header(); ?>
	<div class = "container">
		<div class = "content_box three_quarter">	
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<?php	
				echo '<h2 class="post-title">';
				echo the_title();
				echo '</h2>';
				
				echo '<h4 class="post-info"> Created on ';
				the_date();
				echo ' at ';
				the_time();
				echo ' by ';
				the_author_meta(first_name);
				echo '</h4>';
				
				echo '<p class="post-content">';
				the_content();
				echo '</p>';
			?>
			<?php endwhile; else: ?>
				<h2><?php _e('Sorry, no posts matched your search criteria.'); ?></h2>
			<?php endif; ?>

		</div>
		<?php get_sidebar();?>
	</div>
<?php get_footer(); ?>