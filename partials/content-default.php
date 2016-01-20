<section class="post-destaque">
  <article>
    <header class="row">
      <div class="col-xs-4 col-sm-2">
        <!-- <img  id="img_logo_blog" class="img-responsive img_center" src="<?php bloginfo('template_url'); ?>/icon/logo_blog_v1.png"> -->
        <div class="day-day"><span class="blue"><?php echo the_time('d')?></span></div>
        <div class="month-year"><span class="gray"><?php echo the_time('M');?></span><span class="gray"><?php echo the_time('Y');?></span></div>
      </div>
      <div class="col-xs-8 col-sm-10 pad-left0 pad-right0">
        <h2 class="img-link pad-right15"><a class="link-read" href="<?php the_Permalink(); ?>"><?php the_title(); ?></a></h2>
      </div>
    </header>
    <hr>
    <figure class="row">
      <div class="col-xs-10 div-center">
      	<?php if ( has_post_thumbnail() ): ?>
	        <a  href="<?php the_Permalink(); ?>"><?php the_post_thumbnail('post-thumb'); ?></a>
    	 <?php endif; ?>
      </div>
    </figure>
    <div class="row gap-top10">
      <div class="col-xs-10 div-center">
        <?php if ( is_single() ) : ?>
        <?php the_content(); ?>
        <?php else :?>
        <?php the_excerpt(); ?><a class="link-read" href="<?php the_Permalink(); ?>">Continuar Lendo</a>
        <?php endif; ?>
      </div>
    </div>
    <hr>
    <footer class="row">
      <div class="col-xs-10 post-destaque-info div-center">
        <ul class="list-inline">
          <li class="dest-author"><i class="icon20 i-user pad-right5"></i><span class=""><?php the_author_posts_link(); ?></span></li>
          <li class="dest-views"><i class="icon20 i-eye pad-right5"></i><span class=""><?php if (function_exists('the_views')) { the_views();} ?></span></li>
          <li class="dest-coments"><i class="icon20 i-bubble pad-right5"></i><span class=""><?php comments_number('0','1','%'); ?></span></li>
        </ul>
      </div>
    </footer>
  </article>
</section><!-- post-destaque -->
<br class="clear">
<br class="clear">
