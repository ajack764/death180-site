<?php get_header(); ?>
<section id="main" class="col-2-3" role="main">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <?php get_template_part( 'entry' ); ?>
    <?php if ( ! post_password_required() ) comments_template( '', true ); ?>
    <?php endwhile; endif; ?>
    <?php get_template_part( 'nav', 'below-single' ); ?>
  </section>
<?php get_footer(); ?>
