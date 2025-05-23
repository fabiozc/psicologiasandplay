<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Preconnect for Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- Google Fonts: Playfair Display + Manrope with swap -->
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700&family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet">

    <?php wp_head(); ?>

    <!-- Your custom stylesheet -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const toggle = document.getElementById('menuToggle');
            const menu = document.querySelector('.main-nav .menu');

            toggle.addEventListener('click', function () {
                const isOpen = menu.classList.contains('active');
                menu.classList.toggle('active');
                toggle.classList.toggle('active');
                document.body.classList.toggle('no-scroll', !isOpen);
            });
        });
    </script>
</head>
<body <?php body_class(); ?>>
    <header class="site-header">
        <div class="site-branding">
            <a href="<?php echo home_url(); ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/img/logo-horizontal-small.png" alt="<?php bloginfo('name'); ?> — <?php bloginfo('description'); ?>" class="hero-logo">
            </a>
        </div>

        <nav class="main-nav">
            <!-- Toggle Button -->
            <button class="menu-toggle" id="menuToggle" aria-label="Toggle menu">
               <span class="menu-icon">☰</span>
              <span class="menu-close">✖</span>
            </button>

            <?php
            wp_nav_menu(array(
                'theme_location' => 'main_menu',
                'menu_class' => 'menu',
                'container' => false
            ));
            ?>
        </nav>
    </header>