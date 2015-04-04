<?php get_header(); ?>
  <section id="main" role="main">
    <?php if ( have_posts() ) : ?>
    <div>
      <h1 class="entry-title"><?php printf( __( 'Search Results for: %s', 'blankslate' ), get_search_query() ); ?></h1>
    </div>
    <?php while ( have_posts() ) : the_post(); ?>
    <?php get_template_part( 'entry' ); ?>
    <?php endwhile; ?>
    <?php get_template_part( 'nav', 'below' ); ?>
    <?php else : ?>
    <article id="post-0" class="post no-results not-found">
      <div>
        <h2 class="archive-title"><?php _e( 'Nothing Found', 'blankslate' ); ?></h2>
      </div>
      <section class="entry-content">
        <p><?php _e( 'Sorry, nothing matched your search. Please try again.', 'blankslate' ); ?></p>
        <?php get_search_form(); ?>
      </section>
    </article>
    <?php endif; ?>
  </section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
