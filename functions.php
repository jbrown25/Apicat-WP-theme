<?php

/*The Loop(s)*/

function full_post_here(){
	if(have_posts()){
		//function that GETs post by id and formats
		the_post();
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
		
		/*echo '<p class="post-content">';*/
		the_content();
		/*echo '</p>';*/

	}//end if
	else {
		echo 'Sorry! We cannot find that post...';	
	}//end else
}

function post_excerpts_here(){
	//posts with date, author, time, content excerpts, and title..

	if ( have_posts() ) {
		while ( have_posts() ) {
			echo '<div class="excerpt-div">';
				the_post(); 
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
				
				echo '<p class="post-excerpt">';
				the_excerpt();
				echo '</p>';
			echo '</div>';
		} // end while
	} // end if
	
}//end full_post_here()


/*Main Page Widget Registration*/

//main page widget one
if (function_exists('register_sidebar')) {
	register_sidebar(array(
		'name' => 'Main Page Widget One',
		'id' => 'main-page-widget-one',
		'description' => 'We suggest placing a text widget here so that you can modify your content more easily...',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>'
	));
}//end main page widget one

//main page widget two
if (function_exists('register_sidebar')) {
	register_sidebar(array(
		'name' => 'Main Page Widget two',
		'id' => 'main-page-widget-two',
		'description' => 'We suggest placing a text widget here so that you can modify your content more easily...',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>'
	));
}//end main page widget two

//main page widget three
if (function_exists('register_sidebar')) {
	register_sidebar(array(
		'name' => 'Main Page Widget Three',
		'id' => 'main-page-widget-three',
		'description' => 'We suggest placing a text widget here so that you can modify your content more easily...',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>'
	));
}//end main page widget three

/*Sidebar Widget Registration*/

//sidebar widget one
if (function_exists('register_sidebar')) {
	register_sidebar(array(
		'name' => 'Sidebar Widget One',
		'id' => 'sidebar-widget-one',
		'description' => 'Hey look! You can put your first sidebar widget here...',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>'
	));
}//end sidebar widget one


//sidebar widget two
if (function_exists('register_sidebar')) {
	register_sidebar(array(
		'name' => 'Sidebar Widget Two',
		'id' => 'sidebar-widget-two',
		'description' => 'Hey look! You can put your second sidebar widget here...',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>'
	));
}//end sidebar widget two

//sidebar widget three
if (function_exists('register_sidebar')) {
	register_sidebar(array(
		'name' => 'Sidebar Widget Three',
		'id' => 'sidebar-widget-three',
		'description' => 'Hey look! You can put your third sidebar widget here...',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>'
	));
}//end sidebar widget three

//search widget registration
if (function_exists('register_sidebar')) {
	register_sidebar(array(
		'name' => 'Search Bar Widget',
		'id' => 'search-bar',
		'description' => 'This is an area for the pre-installed WordPress Search Bar Widget.',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>'
	));
}//end search widget

//len slider widget registration
if (function_exists('register_sidebar')) {
	register_sidebar(array(
		'name' => 'Len Slider Widget',
		'id' => 'slider',
		'description' => 'This is an area for the Len Slider Widget (Banner tool).',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>'
	));
}//end len slider widget

/*Menu Registration*/
function register_my_menu() {
  register_nav_menu('header-menu',__( 'Main Nav' ));
}
add_action( 'init', 'register_my_menu' );






?>