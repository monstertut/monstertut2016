<?php get_header(); ?>
<div id="content">
	<?php while (have_posts()) : the_post(); ?>
	<?php get_template_part('article'); ?>
<?php endwhile;?>

<?php 

$posts = get_field('prev');

if( $posts ): ?>
    <div class="prev">
    <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
        <?php setup_postdata($post); ?>
        <h4>
            <a href="<?php the_permalink(); ?>">&lt; <?php the_title(); ?></a>
        </h4>
    <?php endforeach; ?>
    </div>
    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
<?php endif; ?>

<?php
$posts_next = get_field('next');

if( $posts_next ): ?>
    <div class="next">
    <?php foreach( $posts_next as $post): // variable must be called $post (IMPORTANT) ?>
        <?php setup_postdata($post); ?>
        <h4>
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?> &gt;</a>
        </h4>
    <?php endforeach; ?>
    </div>
    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
<?php endif; ?>



</div>
<?php get_footer(); ?>
