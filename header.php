<!DOCTYPE html>
<html <?php language_attributes(); ?> >
  <head>
  <?php wp_head() ;?>
  <link rel="icon"   type="image/png" href="<?php bloginfo('url'); ?>/favicon.png">
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>
        <?php
            bloginfo('name');
            if( is_home() ) :
              echo ' - ' . get_bloginfo('descripition' );
            else :
              wp_title(" | ",true);
            endif;
        ?>
    </title>
    <!-- CSS WordPress -->
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
    <!-- JQuery + JS Bootstrap -->
    <script src="<?php echo get_template_directory_uri(); ?>/bootstrap/js/jquery-2.1.4.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/bootstrap/js/bootstrap.js"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
  <header>
  <header>
    <nav class="navbar navbar-default navbar-fixed-top" id="nav_main_top">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header" id="navbar_mobile">
          <div class="col-xs-2 pad0">
            <button type="button" class="btn-primary navbar-toggle gap-right5 gap-left5" data-toggle="collapse" data-target="#navbar_menu" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <i class="icon16 i-arrow-8 pad-left5"></i>
            </button>
          </div>
          <div class="col-xs-8 pad-left0 pad-right0">
            <a class="navbar-brand pad0" href="<?php bloginfo('url') ;?>">
              <img class="img-responsive" width="65" alt="Logo SoftWolf" src="<?php bloginfo('template_url'); ?>/img/logo_softwolf_shield.png">
            </a>
            <a href=""><i class="pad-top10 visible-xs-inline-block icon24 img-link white i-facebook-2"></i></a>
            <a href=""><i class="pad-top10 visible-xs-inline-block icon24 img-link white i-instagram"></i></a>
            <a href=""><i class="pad-top10 visible-xs-inline-block icon24 img-link white i-twitter-2"></i></a>
            <a href=""><i class="pad-top10 visible-xs-inline-block icon24 img-link white i-youtube"></i></a>
          </div>
          <div class="col-xs-2 pad0">
            <button type="button" class="btn-primary navbar-toggle gap-right5 gap-left5" data-toggle="collapse" data-target="#navbar_menu" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <i class="icon16 i-menu-6 pad-left5"></i>
            </button>
          </div>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar_menu">
          <ul class="nav navbar-nav">
          </ul>

          <ul class="nav navbar-nav navbar-left">
            <?php wp_list_pages('title_li=') ;?>
            <?php//php wp_list_categories('title_li=&hide_empty=0&orderby&depth=2') ;?><!-- exclude=id -->
          </ul>

          <form class="navbar-form navbar-right" role="search" action="<?php bloginfo('home');?>" method="post">
            <?php get_search_form(); ?>
          </form>

        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
  </header>