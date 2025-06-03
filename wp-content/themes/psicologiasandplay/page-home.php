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
                $field = get_field_object('about-renata');
                if ($field) { ?>
                    <div class="about-content-container"> <?php // Container for text and image ?>
                        <div class="about-text-content"> <?php // Container for the text ?>
                            <?= wp_kses_post($field['value']); ?>
                        </div>
                        <div class="about-image"> <?php // Container for the image ?>
                            <?php 
                                $about_photo = get_field('about-photo');
                                if ($about_photo) { ?>
                                    <img src="<?= esc_url($about_photo['url']); ?>" alt="<?= esc_attr($about_photo['alt'] ?: 'Foto de Renata'); ?>" class="renata-photo">
                                <?php } else { ?>
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/img-renata.png" alt="Foto de Renata" class="renata-photo"> <?php // Fallback image ?>
                                <?php } ?>
                        </div>
                    </div>
                <?php }
            }
        ?>
    </section>

    <!-- Quote Section (Brown Background) -->
    <section class="quote-section">
        <div class="quote-container">
            <blockquote class="the-quote">
                "Erros são, no final das contas, fundamentos da verdade. Se um homem não sabe o que uma coisa é, já é um avanço do conhecimento saber o que ela não é."
            </blockquote>
            <p class="quote-author">– Carl G. Jung</p>
            <a href="#" class="quote-button">Leia outras reflexões</a>
        </div>
    </section>

    <!-- What is Sandplay Section -->
    <section class="what-is-sandplay-section">
        <?php
            if (function_exists('get_field')) {
                $field = get_field_object('sobre_sandplay');
                if ($field) { ?>
                    <div class="sandplay-content-container"> <?php // Container for text and image ?>
                        <div class="sandplay-text-content"> <?php // Container for the text ?>
                            <?= wp_kses_post($field['value']); ?>
                        </div>
                        <div class="sandplay-image"> <?php // Container for the image ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/img/img-sandplay.png" alt="Sandplay Image" class="sandplay-photo"> <?php // Updated path for Sandplay image ?>
                        </div>
                    </div>
                <?php }
            }
        ?>
    </section>

    <!-- Voices that Shaped Sandplay Section (Jung & Kalff) -->
    <section class="voices-section">
        <?php
            if (function_exists('get_field')) {
                $field = get_field_object('sandplay-jung-kalff-title');
                if ($field) { ?>
                    <div class="section-title"><?= wp_kses_post($field['value']); ?></div>

                    <div class="voices-container">
                        <!-- Carl Jung -->
                        <div class="voice-item">
                            <div class="voice-layout">
                                <div class="voice-image">
                                    <?php 
                                        $carl_jung_photo = get_field('sandplay-carl_jung-photo');
                                        if ($carl_jung_photo) { ?>
                                            <img src="<?= esc_url($carl_jung_photo['url']); ?>" alt="<?= esc_attr($carl_jung_photo['alt'] ?: 'Carl G. Jung'); ?>" class="voice-photo">
                                        <?php } else { ?>
                                            <img src="<?php echo get_template_directory_uri(); ?>/img-jung.png" alt="Carl G. Jung" class="voice-photo"> <?php // Fallback image ?>
                                        <?php } ?>
                                </div>
                                <div class="voice-title-content">
                                    <h3 class="voice-name">Carl</h3>
                                    <div class="voice-content">
                                        <?php 
                                            $carl_jung_text = get_field('carl_jung');
                                            if ($carl_jung_text) {
                                                echo wp_kses_post($carl_jung_text);
                                            } else {
                                                echo '<p>Fundador da Psicologia Analítica, Jung abriu caminhos para uma escuta mais profunda da alma humana. Seu olhar simbólico e sua valorização do inconsciente criaram as bases sobre as quais o Sandplay se desenvolveu. <a class="continue-reading-link" href="https://psicologiasandplay.lndo.site/carl-jung/">Continue Lendo</a></p>';
                                            }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Dora Kalff -->
                        <div class="voice-item">
                            <div class="voice-layout">
                                <div class="voice-title-content">
                                    <h3 class="voice-name">Dora</h3>
                                    <div class="voice-content">
                                        <?php 
                                            $dora_kalff_text = get_field('dora_kalff');
                                            if ($dora_kalff_text) {
                                                echo wp_kses_post($dora_kalff_text);
                                            } else {
                                                echo '<p>Discípula de Jung, Dora Kalff desenvolveu a Terapia do Jogo de Areia como um espaço sagrado onde imagens emergem livremente, permitindo à criança — e ao adulto — expressar o inconsciente de forma segura e criativa. <a class="continue-reading-link" href="https://psicologiasandplay.lndo.site/dora-kalff/">Continue Lendo</a></p>';
                                            }
                                        ?>
                                    </div>
                                </div>
                                <div class="voice-image">
                                    <?php 
                                        $dora_kalff_photo = get_field('sandplay-dora_kalff-photo');
                                        if ($dora_kalff_photo) { ?>
                                            <img src="<?= esc_url($dora_kalff_photo['url']); ?>" alt="<?= esc_attr($dora_kalff_photo['alt'] ?: 'Dora M. Kalff'); ?>" class="voice-photo">
                                        <?php } else { ?>
                                            <img src="<?php echo get_template_directory_uri(); ?>/img-kalff.png" alt="Dora M. Kalff" class="voice-photo"> <?php // Fallback image ?>
                                        <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php }
            }
        ?>
    </section>

    <!-- Reflections and Deepening Section (Grid) -->
    <section class="reflections-section">
        <h2 class="section-title">Reflexões e aprofundamento</h2>
        <div class="reflections-grid">
            <?php
                // Use the specific "artigos" page ID
                $artigos_page_id = 10;
                
                // Query for child pages of "artigos"
                $args = array(
                    'post_type' => 'page',
                    'post_parent' => $artigos_page_id,
                    'posts_per_page' => -1,
                    'post_status' => 'publish',
                    'orderby' => 'menu_order',
                    'order' => 'ASC'
                );
                
                $child_pages = new WP_Query($args);
                
                if ($child_pages->have_posts()) {
                    while ($child_pages->have_posts()) {
                        $child_pages->the_post();
                        
                        // Get featured image or fallback
                        $featured_image = get_the_post_thumbnail_url(get_the_ID(), 'medium');
                        if (!$featured_image) {
                            $featured_image = get_template_directory_uri() . '/img/default-article.png';
                        }
                        
                        // Get excerpt or content preview
                        $excerpt = get_the_excerpt();
                        if (!$excerpt) {
                            $excerpt = wp_trim_words(get_the_content(), 20, '...');
                        }
                        ?>
                        <a href="<?php the_permalink(); ?>" class="reflection-item">
                            <div class="reflection-image">
                                <img src="<?= esc_url($featured_image); ?>" alt="<?php the_title_attribute(); ?>" class="reflection-photo">
                            </div>
                            <h3 class="reflection-title"><?php the_title(); ?></h3>
                            <div class="reflection-description">
                                <p><?= esc_html($excerpt); ?></p>
                            </div>
                            <div class="continue-reading-link">Continue Lendo</div>
                        </a>
                        <?php
                    }
                    wp_reset_postdata();
                } else {
                    // Fallback if no child pages found
                    ?>
                    <a href="<?= esc_url(get_permalink($artigos_page_id)); ?>" class="reflection-item">
                        <div class="reflection-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/default-article.png" alt="Artigo em breve" class="reflection-photo">
                        </div>
                        <h3 class="reflection-title">Artigos em breve</h3>
                        <div class="reflection-description">
                            <p>Novos artigos e reflexões sobre Sandplay estarão disponíveis em breve.</p>
                        </div>
                        <div class="continue-reading-link">Visite a seção</div>
                    </a>
                    <?php
                }
            ?>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="faq-section">
        <div class="faq-container">
            <div class="faq-card">
                <div class="faq-image">
                    <?php 
                    $faq_photo = get_field('faq-photo');
                    if ($faq_photo): ?>
                        <img src="<?= esc_url($faq_photo['url']); ?>" alt="<?= esc_attr($faq_photo['alt']); ?>">
                    <?php else: ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/img-faq.png" alt="Perguntas Frequentes">
                    <?php endif; ?>
                </div>
                <div class="faq-content">
                    <?php 
                    $faq_content = get_field('faq-content');
                    if ($faq_content): 
                        echo wp_kses_post($faq_content);
                    else: ?>
                        <h2 class="faq-title">Perguntas Frequentes</h2>
                        <div class="faq-description">
                            <p>Nunc quis nisl sit amet odio hendrerit elementum. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed consectetur neque et ante lacinia, nec venenatis lacus suscipit.</p>
                        </div>
                        <a href="#" class="faq-link">Veja a lista de perguntas</a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>