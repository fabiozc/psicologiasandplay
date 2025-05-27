<?php
/* Template Name: Página Inicial */
get_header();
?>

<main class="home">
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="hero-container">
            <div class="hero-top-content">
                <div class="hero-left">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/logo-vertical.svg" alt="Psicologia Sandplay — Logo" class="hero-logo">
                </div>
                <div class="hero-right">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/img-hero3.png" alt="Hero Image" class="hero-photo">
                </div>
            </div>
            <div class="hero-quote-content">
                <?php 
                    if (function_exists('the_field') && get_field('hero_content')) {
                        the_field('hero_content'); 
                    } else {
                ?>
                    <p>Um portal para uma <strong>jornada pela Psicologia</strong> e um convite a uma <strong>imersão no universo</strong> que cada um de nós encerra.</p>
                <?php
                    }
                ?>
            </div>
            <nav class="hero-navigation">
                <?php
                    // Example: Display a WordPress menu named 'Hero Navigation'
                    // wp_nav_menu( array( 'theme_location' => 'hero-navigation', 'container_class' => 'hero-menu' ) );
                ?>
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'main_menu',
                    'menu_class' => 'menu',
                    'container' => false
                ));
                ?>
            </nav>
        </div>
    </section>

    <!-- About Section -->
    <section class="about-section">
        <?php
            if (function_exists('get_field')) {
                $field = get_field_object('sobre_renata');
                if ($field) { ?>
                    <h2 class="section-title"><?= esc_html($field['label']); ?></h2>
                    <div class="about-content-container"> <?php // Container for text and image ?>
                        <div class="about-text-content"> <?php // Container for the text ?>
                            <?= wp_kses_post($field['value']); ?>
                        </div>
                        <div class="about-image"> <?php // Container for the image ?>
                            <img src="/path/to/placeholder/renata-photo.png" alt="Foto de Renata" class="renata-photo"> <?php // Placeholder for Renata's photo ?>
                        </div>
                    </div>
                <?php }
            }
        ?>
    </section>

    <!-- Quote Section (Brown Background) -->
    <section class="quote-section brown-background"> <?php // Added class for background styling ?>
        <div class="quote-container"> <?php // Container for quote content ?>
            <div class="quote-image"> <?php // Container for the small image next to the quote ?>
                 <img src="/path/to/placeholder/quote-image.png" alt="Placeholder Quote Image"> <?php // Placeholder image ?>
            </div>
            <div class="quote-content"> <?php // Container for the quote text and author ?>
                 <blockquote class="the-quote">
                    <?php
                         // PHP code to fetch a random quote will go here
                         // For now, a placeholder:
                         echo "Este é um placeholder para uma citação dinâmica que mudará a cada recarregamento da página.";
                    ?>
                 </blockquote>
                 <?php
                     // Optional: Placeholder for author if needed
                     // echo "<p class=\"quote-author\">Autor da Citação</p>";
                 ?>
            </div>
        </div>
        <?php // An ACF field might be needed for this content or it might be fetched from a custom post type ?>
        <?php // Logic for dynamic quote fetching will be added here later ?>
    </section>

    <!-- What is Sandplay Section -->
    <section class="what-is-sandplay-section">
        <?php
            if (function_exists('get_field')) {
                $field = get_field_object('sobre_sandplay');
                if ($field) { ?>
                    <h2 class="section-title"><?= esc_html($field['label']); ?></h2>
                    <div class="sandplay-content-container"> <?php // Container for text and image ?>
                        <div class="sandplay-text-content"> <?php // Container for the text ?>
                            <?= wp_kses_post($field['value']); ?>
                        </div>
                        <div class="sandplay-image"> <?php // Container for the image ?>
                            <img src="/path/to/placeholder/sandplay-image.png" alt="Placeholder Sandplay Image" class="sandplay-photo"> <?php // Placeholder image ?>
                        </div>
                    </div>
                <?php }
            }
        ?>
    </section>

    <!-- Voices that Shaped Sandplay Section (Jung & Kalff) -->
    <section class="voices-section">
         <h2 class="section-title">As vozes que moldaram o Sandplay</h2>
        <div class="voices-container">
             <div class="voice-item">
                <div class="voice-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/carl-jung.jpg" alt="Carl G. Jung" class="voice-photo">
                </div>
                <div class="voice-content">
                    <h3 class="voice-name">Carl</h3>
                    <div class="voice-description">
                        <p>Praesent dapibus turpis nulla, eu accumsan magna efficitur quis. Integer quis sagittis massa. Phasellus venenatis euismod dui. Praesent dapibus turpis nulla, eu accumsan magna efficitur quis. Integer quis sagittis massa.</p>
                    </div>
                    <a href="#" class="continue-reading-link">Continue Lendo →</a>
                </div>
             </div>
             <div class="voice-item">
                <div class="voice-content">
                    <h3 class="voice-name">Dora</h3>
                    <div class="voice-description">
                        <p>Praesent dapibus turpis nulla, eu accumsan magna efficitur quis. Integer quis sagittis massa. Phasellus venenatis euismod dui. Praesent dapibus turpis nulla, eu accumsan magna efficitur quis. Integer quis sagittis massa.</p>
                    </div>
                    <a href="#" class="continue-reading-link">Continue Lendo →</a>
                </div>
                <div class="voice-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/dora-kalff.jpg" alt="Dora M. Kalff" class="voice-photo">
                </div>
             </div>
        </div>
    </section>

    <!-- Reflections and Deepening Section (Grid) -->
    <section class="reflections-section">
        <h2 class="section-title">Reflexões e aprofundamento</h2> <?php // Section title ?>
        <div class="reflections-grid"> <?php // Container for the grid layout ?>
            <?php
                // This is where the loop to display dynamic grid items will go.
                // The content for each item (image, title, description, link)
                // will likely come from an ACF Repeater field, Flexible Content,
                // or a custom WordPress query (e.g., fetching 'artigos', 'cursos').

                // Example placeholder structure for a single grid item:
            ?>
            <div class="reflection-item">
                <div class="reflection-image">
                    <img src="/path/to/placeholder/reflection-item-image.png" alt="Placeholder Image" class="reflection-photo"> <?php // Placeholder image ?>
                </div>
                <h3 class="reflection-title">Título do Item</h3> <?php // Placeholder title ?>
                <div class="reflection-description">
                    <p>Descrição curta do item de reflexão ou aprofundamento. Isso deve ser um resumo do conteúdo completo.</p> <?php // Placeholder description ?>
                </div>
                <a href="#" class="continue-reading-link">Continue Lendo &rarr;</a> <?php // Placeholder link ?>
            </div>

            <?php
                // The actual PHP loop would replace the placeholder div above.
                // It might look something like:
                /*
                if( have_rows('reflections_grid_items') ): // Assuming a repeater field named 'reflections_grid_items'
                    while( have_rows('reflections_grid_items') ): the_row();
                        $image = get_sub_field('item_image');
                        $title = get_sub_field('item_title');
                        $description = get_sub_field('item_description');
                        $link = get_sub_field('item_link');
                        ?>
                        <div class="reflection-item">
                            <div class="reflection-image">
                                <img src="<?= esc_url($image['url']); ?>" alt="<?= esc_attr($image['alt']); ?>" class="reflection-photo">
                            </div>
                            <h3 class="reflection-title"><?= esc_html($title); ?></h3>
                            <div class="reflection-description">
                                <?= wp_kses_post($description); ?>
                            </div>
                            <a href="<?= esc_url($link['url']); ?>" class="continue-reading-link"><?= esc_html($link['title']); ?> &rarr;</a>
                        </div>
                        <?php
                    endwhile;\n                endif;
                */
                 /*
                 // Or if using a custom query for post types like 'artigos' or 'cursos':
                 $args = array(
                     'post_type' => array('artigo', 'curso', 'grupo-estudo'), // Example post types
                     'posts_per_page' => -1 // Display all, or specify a number
                 );
                 $query = new WP_Query( $args );
                 if ( $query->have_posts() ) {
                     while ( $query->have_posts() ) {
                         $query->the_post();
                         // Get content using standard WordPress functions or ACF fields
                         $image = get_the_post_thumbnail_url();
                         $title = get_the_title();
                         $description = get_the_excerpt(); // Or a custom field
                         $link = get_the_permalink();
                         ?>
                         <div class="reflection-item">
                            <div class="reflection-image">
                                <img src="<?= esc_url($image); ?>" alt="<?php the_title_attribute(); ?>" class="reflection-photo">
                            </div>
                            <h3 class="reflection-title"><?= esc_html($title); ?></h3>
                            <div class="reflection-description">
                                <?= wp_kses_post($description); ?>
                            </div>
                            <a href="<?= esc_url($link); ?>" class="continue-reading-link">Continue Lendo &rarr;</a>
                        </div>
                         <?php
                     }
                     wp_reset_postdata(); // Restore original Post Data
                 }
                 */
            ?>

        </div>
         <?php
            // The original ACF calls for this section are commented out as the grid loop will handle content.
            /*
            if (function_exists('get_field')) {
                $field = get_field_object('pontos_reflexao');
                if ($field) { ?>
                    <h2 class="acf-label"><?= esc_html($field['label']); ?></h2>
                    <div class="acf-content"><?= wp_kses_post($field['value']); ?></div>
                <?php }
            }
            */
            /*
            if (function_exists('get_field')) {
                $field = get_field_object('cursos');
                if ($field) { ?>
                    <h2 class="acf-label"><?= esc_html($field['label']); ?></h2>
                    <div class="acf-content"><?= wp_kses_post($field['value']); ?></div>
                <?php }
            }
            */
            /*
            if (function_exists('get_field')) {
                $field = get_field_object('grupos_estudos');
                if ($field) { ?>
                    <h2 class="acf-label"><?= esc_html($field['label']); ?></h2>
                    <div class="acf-content"><?= wp_kses_post($field['value']); ?></div>
                <?php }\n            }
            */
            /*
            if (function_exists('get_field')) {
                $field = get_field_object('artigos');
                if ($field) { ?>
                    <h2 class="acf-label"><?= esc_html($field['label']); ?></h2>
                    <div class="acf-content"><?= wp_kses_post($field['value']); ?></div>
                <?php }
            }
            */
        ?>
    </section>

    <!-- FAQ Section -->
    <section class="faq-section">
        <h2 class="section-title">Perguntas Frequentes</h2> <?php // Section title ?>
        <div class="faq-list"> <?php // Container for the list of FAQ items ?>
            <?php
                // This is where the loop to display dynamic FAQ items will go.
                // The content for each item (question and answer)
                // will likely come from an ACF Repeater field.

                // Example placeholder structure for a single FAQ item:
            ?>
            <div class="faq-item">
                <h3 class="faq-question">Pergunta Frequente Placeholder</h3> <?php // Placeholder question ?>
                <div class="faq-answer">
                    <p>Resposta para a pergunta frequente placeholder. Este conteúdo será dinâmico.</p> <?php // Placeholder answer ?>
                </div>
            </div>

            <?php
                // The actual PHP loop would replace the placeholder div above.
                // It might look something like:
                /*
                if( have_rows('faq_items') ): // Assuming a repeater field named 'faq_items'
                    while( have_rows('faq_items') ): the_row();
                        $question = get_sub_field('question');
                        $answer = get_sub_field('answer');
                        ?>
                        <div class="faq-item">
                            <h3 class="faq-question"><?= esc_html($question); ?></h3>
                            <div class="faq-answer">
                                <?= wp_kses_post($answer); ?>
                            </div>
                        </div>
                        <?php
                    endwhile;
                endif;
                */
            ?>

        </div>
        <?php // An ACF field might be needed for the FAQ items, likely a Repeater Field ?>
    </section>

</main>

<footer class="site-footer">
  <div class="footer-bg">
    <div class="footer-content">
      <div class="footer-left">
        <img src="<?php echo get_template_directory_uri(); ?>/img/logo-vertical.svg" alt="Psicologia Sandplay — Logo" class="footer-logo">
        <div class="footer-contact">
          <h3>Renata Whitaker Horschutz</h3>
          <p>
            <span class="footer-icon">&#x1F4CD;</span>
            Rua Peixoto Gomide, 515 cj. 131<br>
            Jd. Paulista - CEP 01409-001<br>
            São Paulo, SP, Brasil
          </p>
          <p>
            <span class="footer-icon">&#x260E;</span> +55 (11) 3284-2568<br>
            <span class="footer-icon">&#x1F4F2;</span> +55 (11) 99234-5526<br>
            <span class="footer-icon">&#x2709;</span> <a href="mailto:rewh@uol.com.br">rewh@uol.com.br</a>
          </p>
        </div>
      </div>
      <div class="footer-right">
        <!-- Replace with your contact form shortcode or HTML -->
        <form class="footer-form">
          <input type="text" placeholder="Nome" required>
          <input type="text" placeholder="Telefone / Whatsapp" required>
          <input type="email" placeholder="Email" required>
          <textarea placeholder="Mensagem" required></textarea>
          <button type="submit">Enviar Mensagem</button>
        </form>
      </div>
    </div>
    <div class="footer-bottom">
      <span>2025. Psicologia Sandplay — Todos direitos reservados.</span>
      <span>Feito com <span style="color:#F57E1F;">&#x1F49B;</span> por FabioZC</span>
    </div>
  </div>
</footer>

<?php get_footer(); ?>