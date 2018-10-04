    <?php
        get_header();
    ?>
    <div class="mast page-mast">
       <div class="container mast-overlay">
        <h1>Events</h1>
        <p>We host events to raise funds that<br/> support our programs</p>
        <?php
           echo '<img src="'.get_stylesheet_directory_uri('template_url').'/img/AboutUsBanner.png" alt="Banner Image"/>';
        ?>
      </div>
   </div>
   <article class="page-content eventssection">
     <div class="container">
       <div class="row">
         <div class="col col-lg-9 col-md-12 col-sm-12 col-xsm-12 articles">

              <?php while ( have_posts() ) : the_post(); ?>

                <div id="Post" class="blogposts">
                  <a title="<?php the_title_attribute(); ?>" href="<?php the_permalink(); ?>"><div class="date txt-primary">
                    <span><?php the_time('d') ?></span>
                    <span><?php the_time('F') ?></span>
                    <span><?php the_time('Y') ?></span>
                  </div></a>
                  <h2 class="post-title">
                      <a title="<?php the_title_attribute(); ?>" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                  </h2>
                  <?php the_excerpt(); ?>
                </div>

              <?php endwhile; // End of the loop. ?>

          </div>
          <div class="col col-lg-3 col-md-12 col-sm-12 col-xsm-12">

            <div class="blog-sidebar">
                <?php dynamic_sidebar( 'page_sidebar_1' ); ?>
            </div>

           </div>
        </div>
      </div>
    </article>

    <?php
        get_footer();
