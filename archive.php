<?php
    /*
    *   The template for displaying archive page
    */
?>
<?php get_header(); ?>

 <!-- Blog -->
 <main class="container-fluid py-5">
      <div class="row">
        <div class="col-sm-8">
            <!-- adding the archive -->
        <?php the_archive_title('<h3>', '<hr></h3>') ?>

        <?php if( have_posts()) : while(have_posts()): the_post(); ?>
          <div>
            <a href="<?php the_permalink(); ?>">
                <h5><?php the_title(); ?></h5>
            </a>
            <p> <?php echo get_the_date('F, j, Y'); ?> <a href="#"> <?php the_author(); ?> </a></p>
            <div class="pb-2">
              <i class="fas fa-tag"></i>
                <p class="d-inline"> <?php the_tags('Tagged: ', '~', ) ?> </p>
              
            </div>
             <!-- add custom thumbnails -->
             <div class="my-3">
            <?php the_post_thumbnail(); ?>
            </div>
            <p> <?php the_excerpt(); ?> </p>
            <div class="mb-3">
                <a href="<?php the_permalink(); ?>">
                    <?php _e('Read more...') ?>
                </a>
            </div>            
          </div>
          <?php   endwhile; ?>
          
       
        
     <p><?php _('Sorry, no post matched your criteria'); ?></p>
     <?php endif; ?>
     <nav>
        <ul class="nav">
            <li><?php next_posts_link(); ?></li> &nbsp;
            <li><?php previous_posts_link(); ?></li>
        </ul>
    </nav>
    </div>
        <aside class="col-sm-4">
          <?php get_sidebar() ?>
        </aside>
      </div>
    </main>

<!-- Footer -->
<?php get_footer() ?>