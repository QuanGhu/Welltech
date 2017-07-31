<?php get_header(); ?>
<section id="content" role="main" class="post-view">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php get_template_part( 'entry' ); ?>
<?php wp_link_pages(); ?>

<?php endwhile; endif; ?>
</section>
<?php get_footer(); ?>
