<?php get_header(); ?>


<div id="content">

	<div class="intro">
		<?php the_archive_title( '<h1 class="page-title">', '</h1>' ); ?>
	</div>
	<?php while (have_posts()) : the_post(); ?>


	<?php get_template_part('article'); ?>


<?php endwhile;?>
<?php get_template_part('pagination'); ?>
<?php wp_reset_query(); ?>


</div>

<?php get_footer(); ?>

