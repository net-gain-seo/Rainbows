<?php
    get_header();
?>
<?php
    $postId = get_the_post_id();
?>
<div class="mast page-mast">
   <?php
       if( has_post_thumbnail() ) {
           the_post_thumbnail();
       } else {
           echo '<img src="'.get_bloginfo('template_url'). '/img/AboutUsBanner.jpg" />';
       }
       $mast_title       = get_post_meta( get_the_ID(), 'mast_title', true );
   ?>
   <div class="container mast-overlay">
       <?php
          echo '<h1>'.get_the_title().'</h1>';
          echo '<img src="'.get_stylesheet_directory_uri('template_url').'/img/AboutUsBanner.png" alt="Banner Image"/>';
       ?>
   </div>
</div>
<div class="container blog-content">
    <div class="row">
        <div class="col col-12 col-lg-12">
            <?php while ( have_posts() ) : the_post(); ?>

                <article>
                    <div class="blog-article">
                        <?php the_content(); ?>
                    </div>
                </article>

            <?php endwhile; // End of the loop. ?>

            <div class="next-prev">
                <div class="prev"><?php previous_post_link('%link', '<i class="fa fa-angle-double-left"></i> <span>%title</span>', FALSE); ?></div>
                <div class="next"><?php next_post_link('%link', '<span>%title</span> <i class="fa fa-angle-double-right"></i>', FALSE); ?></div>
            </div>
        </div>

    </div>

</div>

<?php
    get_footer();
