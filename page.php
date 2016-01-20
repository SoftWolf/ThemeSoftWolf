<?php get_header();?>
  <div class="container" id="div_container">
    <div class="row" id="content">
      <div class="col-sm-9" id="content_post">
		    <?php get_template_part('partials/loop', 'main');?>
      </div><!-- /content_post -->
      <div class="col-sm-3" id="content_sidebar">
        <aside>
          <?php  get_sidebar(); ?>
        </aside>
      </div><!-- content_sidebar -->
    </div><!-- /content -->
  </div> <!-- /container -->
<?php get_footer();?>