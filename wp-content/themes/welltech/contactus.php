<?php /* Template Name: Contact-us-page */ ?>

<?php get_header(); ?>

<section id="contact-us">
  <div class="container">
    <div class="content-contact">
      <?php
                        $the_query = new WP_Query( 'page_id=7' );
                        while ( $the_query->have_posts() ) :
                         $the_query->the_post();
                                     the_content();
                        endwhile;
                        wp_reset_postdata();
                        ?>
    </div>
  </div>
</section>


  <div class="container-fluid contact-address">
  <div class="col-md-12 contact-maps">
    <div class="col-md-6" id="contact-form">
      <div class="contact-form-box">
        <?php echo do_shortcode('[contact-form-7 id="29" title="WT Contact Us"]'); ?>
      </div>
    </div>
    <div class="col-md-6 maps map-container">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d888.3984412751585!2d103.85290844569161!3d1.310833754480832!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x39ae5326b01d4c14!2sWelltech+Construction+Pte+Ltd!5e0!3m2!1sid!2sid!4v1475573757692" width="800" height="710" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
  </div>

  </div>

  </div>
<?php get_footer(); ?>
