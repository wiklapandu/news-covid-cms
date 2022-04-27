<!doctype html>
<html <?php language_attributes(); ?> <?php blankslate_schema_type(); ?>>

<head>
    <!-- Required meta tags -->
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="shortcut icon" href="<?= wp_get_attachment_image_src(get_theme_mod('custom_logo'))[0] ?>" />
    <title><?= bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>

<body>
    <?php
    $custom_logo_id = get_theme_mod('custom_logo');
    $logo = wp_get_attachment_image_src($custom_logo_id, 'popup-banner');
    ?>
    <header class="sticky-top bg-white shadow">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <button class="navbar-toggler me-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand" href="#">
                    <img src="<?= esc_url($logo[0]); ?>" alt="" style="width: 2rem;">
                    <span class="ms-2">
                        <?= bloginfo('name'); ?>
                    </span>
                </a>
                <a href="#" class="d-lg-none d-inline nav-link text-dark h5" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <i class="bi bi-search"></i>
                </a>
                <form class="d-lg-flex d-none ms-auto" method="GET" id="searchform" role="search" action="<?php bloginfo('url'); ?>">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="s" id="s">
                    <button class="btn btn-dark" type="submit">Search</button>
                </form>
            </div>
        </nav>
        <hr>
        <nav class="navbar navbar-expand-lg navbar-light bg-transparent">
            <div class="container">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <?php wp_nav_menu([
                        'theme_location' => 'main-menu',
                        'items_wrap' => '<ul class="navbar-nav mx-auto mb-2 mb-lg-0">%3$s</ul>',
                        'container' => '',
                        'add_li_class' => 'nav-item'
                    ]) ?>
                </div>
            </div>
        </nav>
    </header>
    <?php
    if (is_front_page() || is_home() || is_front_page() && is_home()) :
    ?>
        <section class="thumbnails mySwiper swiper mb-4" style="max-height: 70vh; width: 100%;">
            <div class="swiper-wrapper text-white">
                <?php foreach (get_posts() as $post) { ?>
                    <div class="swiper-slide">
                        <div class="text-content">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-7 my-5">
                                        <div class="d-flex">
                                            <span class="text-date"><?= get_the_date('M d, Y', $post->ID); ?> | </span>
                                            <span class="fw-bold ms-2"><?= get_the_author_meta('display_name', $post->post_author); ?></span>
                                        </div>
                                        <h5 class="text-title">
                                            <a href="<?= esc_url(get_the_permalink($post)); ?>" class="text-link thumb-title">
                                                <?= $post->post_title; ?>
                                            </a>
                                        </h5>
                                        <p class="text-desc w-75 text-paragraf">
                                            <?= get_the_excerpt($post); ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <img src="<?= wp_get_attachment_image_src(get_post_thumbnail_id($value->ID), 'popup-banner')[0]; ?>">
                    </div>
                <?php  } ?>
            </div>
        </section>
    <?php
    endif;
    ?>