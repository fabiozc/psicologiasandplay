<?php
/* Template Name: Cursos */
get_header(); ?>

<main>
    <h1><?php the_title(); ?></h1>
    <div class="cursos-intro">
        <?php the_content(); ?>
    </div>

    <div class="cursos-list">
        <?php
        // Example: List posts from a "cursos" category
        $cursos = new WP_Query(array(
            'category_name' => 'cursos',
            'posts_per_page' => -1
        ));

        if ($cursos->have_posts()) :
            while ($cursos->have_posts()) : $cursos->the_post(); ?>
                <article>
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <div><?php the_excerpt(); ?></div>
                </article>
            <?php endwhile;
            wp_reset_postdata();
        else :
            echo '<p>Nenhum curso disponível no momento.</p>';
        endif;
        ?>
    </div>
</main>

<?php get_footer(); ?>