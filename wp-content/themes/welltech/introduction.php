<?php /* Template Name: Introduction-page */ ?>

<?php get_header(); ?>
<section id="about-us-bg">

  </section>
  <br><br>
  <section id="content-introduction">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <?php
                            $the_query = new WP_Query( 'page_id=54' );
                            while ( $the_query->have_posts() ) :
                             $the_query->the_post();
                                         the_content();
                            endwhile;
                            wp_reset_postdata();
                            ?>
        </div>
      </div>
    </div>
  </section>
  <br><br><br>
<?php get_footer(); ?>
