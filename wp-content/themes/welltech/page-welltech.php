<?php /* Template Name: Welltech */ ?>

<?php get_header(); ?>
<style media="screen">
    #page-banner {
        background: url("<?php the_post_thumbnail_url(); ?>");
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
<section id="content-introduction">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <?php the_content(); ?>
                <?php endwhile; endif; ?>
            </div>
        </div>
    </div>
</section>
<br>
<br>
<br>
<?php get_footer(); ?>
