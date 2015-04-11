<?php get_header(); ?>
  <section id="main" class="col-2-3" role="main">
  <div>
    <h1 class="archive-title"><?php _e( 'Tag Archives: ', 'blankslate' ); ?><?php single_tag_title(); ?></h1>
  </div>
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <?php get_template_part( 'entry' ); ?>
  <?php endwhile; endif; ?>
  <?php get_template_part( 'nav', 'below' ); ?>
  </section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
