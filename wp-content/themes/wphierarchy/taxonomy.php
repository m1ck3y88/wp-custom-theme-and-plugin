<?php get_header(); ?>

  <div id="primary" class="content-area narrow">

    <main id="main" class="site-main" role="main" style="position: relative">

      <h1><?php the_archive_title(); ?></h1>

      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <?php get_template_part( 'template-parts/content-posts', get_post_format() ); ?>

      <?php endwhile; else : ?>

        <?php get_template_part( 'template-parts/content', 'none' ); ?>

      <?php endif; ?>

      <?php echo paginate_links(); ?>

      <p style="position: absolute; top: 27.5rem">Template: taxonomy.php</p>

    </main>

  </div>

<?php get_footer(); ?>
