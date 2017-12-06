<?php get_header(); ?>


<div id="content">

  <div class="intro">
    <p>Welcome to my web design tutorial website. This is a good source of tutorial, tips and tricks, and bug fixes from HTML, CSS, WordPress, and anything that involves the life of a web developer. Feel free to leave comments and ask questions.</p>
  </div>
  <?php while (have_posts()) : the_post(); ?>


  <?php get_template_part('article'); ?>


<?php endwhile;?>
  <?php get_template_part('pagination'); ?>
  <?php wp_reset_query(); ?>


</div>

<?php get_footer(); ?>

