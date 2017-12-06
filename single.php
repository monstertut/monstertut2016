<?php get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>



  <section class="headline">
    <div class="row expanded">
      <div class="column small-12">
        <div class="none">


          <?php
     
          echo the_post_thumbnail('full', 'rel="image_src"'); ?>
        </div>
      </div>
    </div>
  </section>

  <section class="welcome">
    <div class="row">
      <div class="column medium-8 medium-push-4">
       <div class="textcontent">

        <h1><?php the_title(); ?></h1>

        <?php the_content(); ?>
      <?php endwhile; ?>
    </div>
    



  </div>
  <div id="sidebar" class="column medium-4 medium-pull-8">

    <?php get_sidebar(); ?>

<?php echo do_shortcode('[wp_google_searchbox]'); ?>
 
 

  </div>
</div>
</section>

<?php get_footer(); ?>
