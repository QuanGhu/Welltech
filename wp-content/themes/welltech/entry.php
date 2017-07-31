<style media="screen">
    #page-banner {
        background: url("<?php echo esc_url( home_url( '/' ) ); ?>wp-content/uploads/2016/10/banner-our-business-completed-projects.jpg");
        background-size: 100%;
        background-repeat: no-repeat;
        width: 100%;
        height: 77vh;
    }

    @media(max-width: 768px) {
        #page-banner {
            height: 120px;
        }
    }
    @media(min-width: 1368px) {
        #page-banner {
            height: 50vh;
            background-repeat: no-repeat;
            background-position: center;
        }
    }
</style>
<section id="page-banner">

</section>
<br>
<br>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<?php get_template_part( 'entry', ( is_archive() || is_search() ? 'summary' : 'content' ) ); ?>
</article>
