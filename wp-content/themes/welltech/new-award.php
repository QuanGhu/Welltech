<?php /* Template Name: New-Award-page */ ?>

<?php get_header(); ?>

<section id="awards">

</section>


<section id="awards-collection">
  <?php
                  $the_query = new WP_Query( 'category__in=16' );
                  while ( $the_query->have_posts() ) :
                   $the_query->the_post();
                   echo '<div class="container">';
                     echo '<div class="row">';
                       echo '<h3>';
                       echo '<b>';
                       the_title();
                       echo '</b>';
                       echo '</h3>';
                     echo '</div>';

                     echo '<div class="row">';
                          the_content();
                    echo '</div>';
                  echo '</div>';

                  echo '<br>';
                  echo '<br>';

                  endwhile;
                  wp_reset_postdata();
                  ?>
                  <!-- The Modal -->

</section>

<?php get_footer(); ?>
