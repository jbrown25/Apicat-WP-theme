<!--start main content-->
				<div class = "content_box one_third" id="sidebar"><!-- side nav -->
					<header>
						<h2>Links</h2>
					</header>
					<div class = "sidebar_links">
						
						<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidebar Widget One')) : 
						endif; ?>
					
					</div>
					<header>
						<h2>Resources</h2>
					</header>
					<div class = "sidebar_links">
					
						<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidebar Widget Two')) : 
						endif; ?>
					
					</div>
					<div class = "sidebar_links">
					
						<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidebar Widget Three')) : 
						endif; ?>

					</div>
				</div><!--end #sidebar-->
<!--end main content-->