<?php 
/*
Template Name: Blog
*/
get_header();?>
<!--start main content-->
		<div class = "container">
			<div class = "content_box two_third">
					<div class = "page_content">
						 <!-- Start the Loop. -->
						 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						
						
						
						 <!-- Display the Title as a link to the Post's permalink. -->
						
						 <h1><?php the_title(); ?></h1>
						
						
						
						 <div class="entry">
						   <?php the_content(); ?>
						 </div>
									
						 		<!--nested news loop start-->
								  <?php $my_query = new WP_Query( "cat=1" );
								   if ( $my_query->have_posts() ) { 
								       while ( $my_query->have_posts() ) { 
								           $my_query->the_post();
									           echo '<div class="excerpt-div">';
												echo '<h2 class="post-title"><a href="';
												the_permalink();
												echo '" title="';
												the_title();
												echo '">';
												the_title();
												echo '</a></h2>';
												
												echo '<h4 class="post-info">';
												echo 'Created on ';
												the_date();
												echo ' at ';
												the_time();
												echo ' by ';
												the_author_meta(first_name);
												echo '.</h4>';
												

												the_content();


												echo '<strong><a href = "';
												the_permalink();
												echo '" title = "';
												the_title();
												echo '" class = "blog_continue">Continue ></a></strong>';


											echo '</div>';
								       }
								   }
								   wp_reset_postdata();?>
						
								<!--end nested news loop-->
						 <!-- Stop The Loop (but note the "else:" - see next line). -->
						
						 <?php endwhile; else: ?>
						
						
						 <!-- The very first "if" tested to see if there were any Posts to -->
						 <!-- display.  This "else" part tells what do if there weren't any. -->
						 <p>Sorry, no posts matched your criteria.</p>
						
						
						 <!-- REALLY stop The Loop. -->
						 <?php endif; ?>
					</div>
				</div>
			<?php get_sidebar();?>
		</div>
<!--start main content-->
<?php get_footer();?>