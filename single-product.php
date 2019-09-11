<!--
This is the default layout for the pages of your site. The default page is a full width layout. If you need a different default page layout please duplicate this template in your child theme and make your changes there.

* * * N O T E * * * mast and page-mast classes are used in the parent theme styles. Please keep these for proper functionality unless you plan to override. If you need a sidebar layout for your pages, there is one created. Just select it from the WordPress page editor.
-->

<?php get_header(); ?>

<?php
	echo '<div class="mast page-mast">';
				$mast_title       = get_post_meta( get_the_ID(), 'mast_title', true );
				echo '<div class="container mast-overlay">';
						echo '<h1>'.get_the_title().'</h1>';
						echo '<p>Let\'s all pull up our socks and let grieving children know they\'re not alone!</p>';
				echo '</div>'; // End of mast-overlay container
	echo '</div>'; // End of page-mast container
?>

<?php while ( have_posts() ) : the_post(); ?>
	<!--
	   Use this section if you have a static featured image at the top of your page with text.
	-->

	<div id="fullWidth">
		<div class="container">
        	<div class="row">
        		<div class="col-12">
		        	<?php the_content(); ?>
		        </div>
	        </div>
    	</div>
    </div>

<?php endwhile; // End of the loop. ?>

<?php get_footer(); ?>
