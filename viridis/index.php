<?php get_header(); ?>
  <section id="main" class="col-2-3" role="main">
    <?php// if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <?php// get_template_part( 'entry' ); ?>
    <?php// comments_template(); ?>
    <?php// endwhile; endif; ?>
    <?php// get_template_part( 'nav', 'below' ); ?>
    <div id="index-grid">
      <div class="index-cell col-1-2">
        <a href="category/coding/">
          <!--<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/index-code.png" alt="Code image" />-->
          <i class="fa fa-code"></i>
          <p>Coding</p>
          <span>All coding articles</span>
        </a>
      </div>
      <div class="index-cell col-1-2">
        <a href="category/movies/">
          <!--<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/index-clapper.png" alt="Clapper board image" />-->
          <i class="fa fa-film"></i>
          <p>Movies</p>
          <span>Talk about movies!</span>
        </a>
      </div>
    </div>
  </section>
<?php get_footer(); ?>
