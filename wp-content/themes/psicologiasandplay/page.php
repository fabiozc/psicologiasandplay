<?php get_header(); ?>

<main class="page-main">
    <!-- Page Title Section -->
    <section class="page-title-section">
        <div class="page-title-container">
            <h1 class="page-title"><?php the_title(); ?></h1>
        </div>
    </section>

    <!-- Page Content Section -->
    <section class="page-content-section">
        <div class="page-content-container">
            <div class="page-content">
                <?php
                if (have_posts()) :
                    while (have_posts()) : the_post();
                        the_content();
                    endwhile;
                endif;
                ?>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>