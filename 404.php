<?php
    /*
    *   The template for displaying 404 page
    */
?>
<?php get_header(); ?>

 <!-- Blog -->
 <main class="container-fluid py-5">
      <div class="row">
        <div class="col-md-12">
          <div class="row">
              <div class="col-md-3">
                  <?php the_widget('WP_Widget_Pages'); ?>
              </div>
              <div class="col-md-3">
              <?php the_widget('WP_Widget_Categories'); ?>
              </div>
              <div class="col-md-3">
              <?php the_widget('WP_Widget_Recent_Posts'); ?>
              </div>
              <div class="col-md-3">
              <?php the_widget('WP_Widget_Tag_Cloud'); ?>
              </div>
          </div>
        </div>
      </div>
    </main>

<!-- Footer -->
<?php get_footer() ?>