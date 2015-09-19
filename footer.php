<!-- footer include for APICAT fa13 project-->
			
			</div><!-- end body -->
			<footer>
				<!-- footer menu -->
				<div id = "footer_menu">
					<div class = "footer_container">
						<h3><a href = "<?php bloginfo('url'); ?>/index.php">Home</a></h3>
					</div>
					<div class = "footer_container">
						<h3><a href = "<?php bloginfo('url'); ?>/about-us">About Us</a></h3>
						<ul>
							<li><a href = "<?php bloginfo('url'); ?>/milestones">Milestones</a></li>
						</ul>
					</div>
					<div class = "footer_container">
						<h3><a href = "<?php bloginfo('url'); ?>/community">Community</a></h3>
						<ul>
							<li><a href = "<?php bloginfo('url'); ?>/local-organizations">Local Organizations</a></li>
						</ul>
					</div>
					<div class = "footer_container">
						<h3><a href = "<?php bloginfo('url'); ?>/resources">Resources</a></h3>
						<ul>
							<li><a href = "<?php bloginfo('url'); ?>/tobacco-health-information">Tobacco Health Information</a></li>
							<li><a href = "<?php bloginfo('url'); ?>/smoking-fact-sheets">Smoking Fact Sheets</a></li>
							<li><a href = "<?php bloginfo('url'); ?>/coalition-partners">Coalition Partners</a></li>
							<li><a href = "<?php bloginfo('url'); ?>/cross-cultural-collaboration">Cross Cultural Collaboration</a></li>
						</ul>
					</div>
					<div class = "footer_container">
						<h3><a href = "<?php bloginfo('url'); ?>/news">News</a></h3>
					</div>
					<div class = "footer_container">
						<h3><a href = "<?php bloginfo('url'); ?>/contact-us">Contact Us</a></h3>
					</div>
				</div>
				
				<div id = "footer_contact">
					<address>
						APICAT - For Healthy Communities
						601 S. King St. Ste. 305
						Seattle, WA 98104 |
						Office: (206) 682.1668 |
						Fax: (206) 623.3479
					</address>
					<p>&copy; APICAT 2013, All Rights Reserved</p>
				</div>

			</footer>
		</div><!-- end wrapper -->
	<script>

		window.onload = function(){
			//format footer address on load
			formatAddress();
		}

		jQuery(function(){
			jQuery("#menu_button img").click(showHideMenu);
			jQuery(".menu li").hoverIntent(showHideSubMenu, showHideSubMenu);

			jQuery(window).resize(function(){
				formatAddress();
				handleSubMenuClass();
			});


			//Add placeholders to comment fields
			if(jQuery("input#author").length > 0){
				jQuery("input#author").attr("placeholder", "Name");
			}

			if(jQuery("input#email").length > 0){
				jQuery("input#email").attr("placeholder", "Email");
			}

			if(jQuery("input#url").length > 0){
				jQuery("input#url").attr("placeholder", "Your Website (Optional)");
			}

			if(jQuery("#commentform textarea").length > 0){
				jQuery("#commentform textarea").attr("placeholder", "Comment");
			}
		});


		function showHideMenu(){
			jQuery('.menu').slideToggle(600);
		}

		function showHideSubMenu(){
			var theWindow = jQuery(window);
			if(theWindow.width() > 550){
				jQuery(this).children('.sub-menu').toggle(200);
			}
		}

		//determines screensize and invokes appropriate function
		function formatAddress(){
			var width = jQuery(window).width();

			if(width < 550){
				mobileAddress();
				//jQuery('ul.sub-menu').removeClass('sub-menu');

			}else{
				desktopAddress();
				//jQuery('li.menu-item ul').addClass('sub-menu');
			}
		}

		function desktopAddress(){
			jQuery("#footer_contact address").html("APICAT - For Healthy Communities 601 S. King St. Ste. 305 Seattle, WA 98104 | Office: (206) 682.1668 | Fax: (206) 623.3479");
		}

		function mobileAddress(){
			jQuery("#footer_contact address").html("<span id = 'foot_address_title'>APICAT</span><br />For Healthy Communities<br />601 S. King St. Ste. 305<br/>Seattle, WA 98104<br />Office: (206) 682.1668<br />Fax: (206) 623.3479");
		}
		
	</script>
	<?php wp_footer();?>
	</body>
</html>