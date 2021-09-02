<?php 

/**
 * Template for displaying all posts 
*/

?>

<?php get_header(); ?>

 <!-- Blog -->
 <main class="container-fluid py-5">
      <div class="row">
        <div class="col-sm-8">
        <?php if( have_posts()) : while(have_posts()): the_post(); ?>
          <div>
                <h5><?php the_title(); ?></h5>
            <p> <?php echo get_the_date('F, j, Y'); ?> <a href="#"> <?php the_author(); ?> </a></p>
            <div class="pb-2">
              <i class="fas fa-tag"></i>
                <p class="d-inline"> <?php the_tags('Tagged: ', '~', ) ?> </p>
              
            </div>
            <p> <?php the_content(); ?> </p>
            <?php wp_link_pages(); ?>
            <nav>
            <ul class="nav">
                <li><?php next_post_link(); ?></li> &nbsp;
                <li><?php previous_post_link(); ?></li>
            </ul>
    </nav>

          <?php   endwhile; ?>
          
     <p><?php _('Sorry, no post matched your criteria'); ?></p>

     <?php  if (comments_open() || get_comments_number()) :
        comments_template();
     endif;
     ?>
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