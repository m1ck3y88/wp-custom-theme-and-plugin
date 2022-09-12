<?php get_header(); ?>

    <div id="primary" class="content-area">

        <main id="main" class="site-main" role="main">

            <?php if ( have_posts() ): while ( have_posts() ): the_post(); ?>

                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                    <header class="entry-header">

                        <?php the_title( '<h1>', '</h1>' ); ?>

                        <!--        <div id="docConsole"></div>-->

                    </header>

                    <div class="entry-content">

                        <p><a href="<?php echo $post->guid; ?>" target="_blank">Download</a></p>

                        <?php the_content(); ?>

                    </div>

                    <?php

                    if( comments_open() ) {

                        comments_template();

                    }

                    ?>

                </article>

            <?php endwhile; else: ?>

                <?php get_template_part( 'template-parts/content', 'none' ); ?>

            <?php endif; ?>

            <p>Template: attachment.php</p>

        </main>

    </div>

<?php get_sidebar() ?>

<?php get_footer(); ?>