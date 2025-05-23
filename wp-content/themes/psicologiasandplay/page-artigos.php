<?php
/* Template Name: Artigos */
get_header(); ?>

<main>
    <h1><?php the_title(); ?></h1>

    <div class="artigos-list">
        <?php
        $artigos = new WP_Query(array(
            'category_name' => 'artigos',
            'posts_per_page' => 10
        ));

        if ($artigos->have_posts()) :
            while ($artigos->have_posts()) : $artigos->the_post(); ?>
                <article>
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <div><?php the_excerpt(); ?></div>
                </article>
            <?php endwhile;
            wp_reset_postdata();
        else :
            echo '<p>Sem artigos por enquanto.</p>';
        endif;
        ?>
    </div>
</main>

<?php get_footer(); ?>