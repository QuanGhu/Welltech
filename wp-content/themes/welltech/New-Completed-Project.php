<?php /* Template Name: New-Complete-Project-Page */ ?>

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

  <section id="content-our-business">

      <div class="text-content">
        <div class="row">
            <div class="container">
              <div class="col-md-12">
                  <?php
                                  $the_query = new WP_Query( 'page_id=67' );
                                  while ( $the_query->have_posts() ) :
                                   $the_query->the_post();

                                   if($the_query->current_post == 0) {
                                      echo '<h2><b>'.get_the_title().'</b></h2>';
                                    }
                                  endwhile;
                                  wp_reset_postdata();
                                  ?>
              </div>

            </div>
            <div class="container">
                <div class="row">
                    <div class="project-list">
                        <div class="row">
                            <div class="col-md-12">
                                <h3 class="cat-name">Institution</h3>
                            </div>
                            <?php
                            $args = array(
                                                    'category__in'      => '9',
                                                    'orderby'        => 'post',
                                                    'order'          => 'ASC'
                                        );
                            $the_query = new WP_Query( $args );
                            while ( $the_query->have_posts() ) :
                                $the_query->the_post();
                                echo '<div class="col-md-7 col-sm-7 col-xs-12">';
                                echo '<div class="name">';
                                      the_title();
                                echo '</div>';
                                echo '</div>';
                                echo '<div class="col-md-5 col-sm-5 col-xs-12">';
                                echo '<div class="link">';
                                echo '<a href="';
                                the_permalink();
                                echo '">More Info</a>';
                                echo '</div>';
                                echo '</div>';
                            endwhile;
                            wp_reset_postdata();
                            ?>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <h3 class="cat-name border">Residential-HDB</h3>
                                <h4 class="cat-name">HDB - New Building/BTO</h4>
                            </div>
                            <?php
                            $args = array(
                                                    'category__in'      => '10',
                                                    'orderby'        => 'post',
                                                    'order'          => 'ASC'
                                        );
                            $the_query = new WP_Query( $args );
                            while ( $the_query->have_posts() ) :
                                $the_query->the_post();
                                echo '<div class="col-md-7 col-sm-7 col-xs-12">';
                                echo '<div class="name">';
                                      the_title();
                                echo '</div>';
                                echo '</div>';
                                echo '<div class="col-md-5 col-sm-5 col-xs-12">';
                                echo '<div class="link">';
                                echo '<a href="';
                                the_permalink();
                                echo '">More Info</a>';
                                echo '</div>';
                                echo '</div>';
                            endwhile;
                            wp_reset_postdata();
                            ?>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <h4 class="cat-name">HDB - Upgrading &amp; Addition and Alteration</h4>
                            </div>
                            <?php
                            $args = array(
                                                    'category__in'      => '17',
                                                    'orderby'        => 'post',
                                                    'order'          => 'ASC'
                                        );
                            $the_query = new WP_Query( $args );
                            while ( $the_query->have_posts() ) :
                                $the_query->the_post();
                                echo '<div class="col-md-7 col-sm-7 col-xs-12">';
                                echo '<div class="name">';
                                      the_title();
                                echo '</div>';
                                echo '</div>';
                                echo '<div class="col-md-5 col-sm-5 col-xs-12">';
                                echo '<div class="link">';
                                echo '<a href="';
                                the_permalink();
                                echo '">More Info</a>';
                                echo '</div>';
                                echo '</div>';
                            endwhile;
                            wp_reset_postdata();
                            ?>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <h3 class="cat-name border">Industrial</h3>
                            </div>
                            <?php
                            $args = array(
                                                    'category__in'      => '11',
                                                    'orderby'        => 'post',
                                                    'order'          => 'ASC'
                                        );
                            $the_query = new WP_Query( $args );
                            while ( $the_query->have_posts() ) :
                                $the_query->the_post();
                                echo '<div class="col-md-7 col-sm-7 col-xs-12">';
                                echo '<div class="name">';
                                      the_title();
                                echo '</div>';
                                echo '</div>';
                                echo '<div class="col-md-5 col-sm-5 col-xs-12">';
                                echo '<div class="link">';
                                echo '<a href="';
                                the_permalink();
                                echo '">More Info</a>';
                                echo '</div>';
                                echo '</div>';
                            endwhile;
                            wp_reset_postdata();
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>

  </section>
  <script>
    function toggle_visibility(id) {
       var e = document.getElementById(id);
       if(e.style.display == 'block')
          e.style.display = 'none';
       else
          e.style.display = 'block';
    }

</script>
  <script>
  $(".close-hover").click(function(){
      $(".hover-box").css("display", "none");
  });
</script>
<?php get_footer(); ?>
