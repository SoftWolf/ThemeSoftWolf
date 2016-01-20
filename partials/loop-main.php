<?php  if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<?php get_template_part('partials/content', 'default');?>
<?php  endwhile; ?>
<?php  wp_reset_query(); ?>
<?php  else:?>
	<?php get_template_part('partials/content', 'none');?>
<?php  endif;?>
<nav>
  <ul class="pager">
    <li class="previous"><?php  previous_post_link( '&larr;', "Posts Recentes" );?></li>
    <li class="next"><?php  next_posts_link( 'Posts Antigos &rarr;' );?></li>
  </ul>
</nav>