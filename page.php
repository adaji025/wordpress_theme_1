<?php
    /*
    *   The main template for displaying all single post
    */
?>
<?php
    get_header();
?>
    
    <?php if( have_posts()) : while(have_posts()): the_post(); ?>
        
    <?php the_content(); ?>
           
     <?php   endwhile; ?>

     <p><?php _('Sorry, no page matched your criteria'); ?></p>

    <?php endif; ?>
        
    <!-- Footer -->
    <?php
    get_footer()
?>