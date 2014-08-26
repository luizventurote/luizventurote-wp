<?php get_header(); ?>

    <div class="row">

        <?php while ( have_posts() ) : the_post(); ?>

            <article class="col-sm-12">

                <?php get_template_part( 'content', 'single' ); ?>

            </article>

        <?php endwhile; ?>
        
    </div>

<?php get_footer(); ?>