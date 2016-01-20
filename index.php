<?php get_header();?>
  <div class="container" id="div_container">
    <div class="row" id="div_logo">
      <div class="col-sm-12" id="div_logo_lg">
        <img  id="img_logo_blog" class="img-responsive img_center" src="<?php bloginfo('template_url'); ?>/img/logo_softwolf_shield_full.png">
      </div>
    </div><!-- /div_logo -->
    <div class="row" id="content">
      <div class="col-sm-9" id="content_post">
        <?php query_posts('offset=0&posts_per_page=5'); ?>
		    <?php get_template_part('partials/loop', 'main');?>
      </div><!-- /content_post -->
      <div class="col-sm-3" id="content_sidebar">
        <aside>
          <?php get_sidebar(); ?>
        </aside>
      </div><!-- content_sidebar -->
    </div><!-- /content -->
  </div> <!-- /container -->
<?php get_footer();?>