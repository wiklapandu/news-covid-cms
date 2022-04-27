<!-- footer -->
<?php
$custom_logo_id = get_theme_mod('custom_logo');
$logo = wp_get_attachment_image_src($custom_logo_id, 'popup-banner');
?>
<footer class="bg-dark text-white py-5" style="min-height: 10vh;">
    <div class="container">
        <div class="row">
            <div class="col-md-4 d-flex">
                <div class="me-5">
                    <h5 class="mb-3 text-muted">Kategori</h5>
                    <ul class="list-unstyled">
                        <?php foreach (get_categories() as $cat) :  ?>
                            <li class="mb-3">
                                <a href="<?= home_url("/news/category/" . $cat->slug); ?>" class="text-decoration-none text-white">
                                    <?= $cat->name; ?>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <div>
                    <?php $navs = wp_get_nav_menu_items(wp_get_nav_menu_name('footer_menu')) ?>
                    <h5 class=" mb-3 text-muted">Lainnya</h5>
                    <ul class="list-unstyled">
                        <?php foreach ($navs as $nav) : ?>
                            <li class="mb-3">
                                <a href="<?= $nav->url; ?>" class="text-decoration-none text-white">
                                    <?= $nav->title; ?>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
            <div class="col-md-4 align-items-center justify-content-center d-flex flex-column order-first order-md-0">
                <img src="<?= esc_url($logo[0]); ?>" alt="" srcset="" class="w-25 mx-auto">
                <h5 class="mb-3"><?= bloginfo('name'); ?>, Actual News</h5>
                <p class="text-muted text-center mb-3">
                    <?= bloginfo('description'); ?>
                </p>
                <div class="d-flex mb-5">
                    <?php dynamic_sidebar('sosmed-link') ?>
                </div>
            </div>
            <div class="col-md-4 d-flex flex-column">
                <div class="ms-md-auto">
                    <div class="mb-3">
                        <h5 class="mb-3 text-muted">Hubungi</h5>
                        <ul class="list-unstyled">
                            <li class="mb-3">
                                <a href="#" class="text-decoration-none text-white d-flex">
                                    <i class="bi bi-envelope-fill"></i>
                                    <span class="ms-2">
                                        <?= get_option('admin_email'); ?>
                                    </span>
                                </a>
                            </li>
                            <li class="mb-3">
                                <a href="#" class="text-decoration-none text-white d-flex">
                                    <i class="bi bi-map-fill"></i>
                                    <span class="ms-2">
                                        <?= dynamic_sidebar('alamat'); ?>
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>