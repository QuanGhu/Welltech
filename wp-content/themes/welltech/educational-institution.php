<?php /* Template Name: educational-page */ ?>

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
              <?php
                              $the_query = new WP_Query( 'page_id=132' );
                              while ( $the_query->have_posts() ) :
                               $the_query->the_post();

                               if($the_query->current_post == 0) {
                                  echo '<h2><b>'.get_the_title().'</b></h2>';
                                }
                              endwhile;
                              wp_reset_postdata();
                              ?>

            </div>
                <?php

                                $the_query = new WP_Query( 'category__in=7' );
                                while ( $the_query->have_posts() ) :
                                 $the_query->the_post();
                                    echo '<div class="content-box">';
                                      echo '<div class="hover-box" id="'.get_the_ID().'">'; ?>
                                      <span class="close-hover">
                                        <img src="<?php echo esc_url( home_url( '/' ) ); ?>/wp-content/uploads/2016/10/cancel-1.png" />
                                      </span>
                                      <?php
                                        echo '<div class="container">';
                                          echo '<div class="hover-content">';
                                                echo '<h4>';
                                                the_title();
                                                echo '</h4>';
                                                the_content();
                                          echo '</div>';
                                        echo '</div>';
                                      echo '</div>';
                                    echo '<div class="container">';
                                    echo '<div class="project-box">';
                                    echo '<img src="'.get_the_post_thumbnail_url().'" class="img-responsive"/>';
                                    echo '<div class="project-link">';
                                    echo '<div class="row">';
                                    echo '<div class="col-md-7 col-xs-7 col-sm-7">';
                                    echo '<p>'.get_the_title().'</p>';
                                    echo '</div>';
                                    echo '<div class="col-md-5 col-xs-5 col-sm-5">'; ?>
                                          <div class="view-more">
                                            <a class="click-here" onclick="toggle_visibility('<?php the_ID(); ?>');" >

                                              <img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/uploads/2016/10/view-more.png" alt="" style="width:80px;"/>

                                            </a>
                                          </div>
                                    <?php
                                    echo '</div>';
                                    echo '</div>';
                                    echo '</div>';

                                    echo '</div>';
                                    echo '</div>';
                                    echo '</div>';
                                endwhile;
                                wp_reset_postdata();
                                ?>

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
