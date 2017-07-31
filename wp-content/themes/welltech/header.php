<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
<?php wp_head(); ?>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        if (Modernizr.touch) {
            // show the close overlay button
            $(".close-overlay").removeClass("hidden");
            // handle the adding of hover class when clicked
            $(".img").click(function(e){
                if (!$(this).hasClass("hover")) {
                    $(this).addClass("hover");
                }
            });
            // handle the closing of the overlay
            $(".close-overlay").click(function(e){
                e.preventDefault();
                e.stopPropagation();
                if ($(this).closest(".img").hasClass("hover")) {
                    $(this).closest(".img").removeClass("hover");
                }
            });
        } else {
            // handle the mouseenter functionality
            $(".img").mouseenter(function(){
                $(this).addClass("hover");
            })
            // handle the mouseleave functionality
            .mouseleave(function(){
                $(this).removeClass("hover");
            });
        }
    });
</script>
</head>
<body <?php body_class(); ?>>
<div id="wrapper" class="hfeed">
  <section class="top-header">
    <nav class="navbar">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url( home_url( '/' ) ); ?>/wp-content/uploads/2016/10/wt-logo.png" alt="" /></a>
        </div>
      </div>
    </nav>
  </section>

  <!-- navbar -->
  <section class="header">
    <div class="navbar navbar-default" data-spy="affix" data-offset-top="90">
      <div class="container">
        <div class="collapse navbar-collapse" id="myNavbar">
          <?php
            wp_nav_menu(array(
                'menu' => 'header-menu',
                'menu_class' => 'nav navbar-nav',
                'container' => 'false',
                'walker' => new Bootstrap_Walker_Nav_Menu()
            ));
            ?>

            <?php $search_text = "Search"; ?>
          <div class="search-form">
            <form class="navbar-form" method="get" id="searchform" action="<?php bloginfo('siteurl'); ?>"/>
            <div class="input-group">
                <input type="text" class="form-control" placeholder="<?php echo $search_text; ?>" name="s" id="s" onblur="if (this.value == "){this.value = '<?php echo $search_text; ?>';}" onfocus="if (this.value == '<?php echo $search_text; ?>') {this.value = ";}" />
                <div class="input-group-btn">
                    <button class="btn btn-default" type="submit" id="searchsubmit"><i class="glyphicon glyphicon-search"></i></button>
                </div>
            </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

<div id="container">
