<?php get_header(); ?>
<?php if (get_posts()) { ?>
    <section style="padding: 2rem;">
        <div class="container">
            <?php
            $category = get_the_category()[0];
            ?>
            <h5 class="h1 text-center"><?php single_term_title() ?></h5>
            <hr class="mb-4">
            <div class="row g-4 align-items-center">
                <?php
                $kepost = 0;
                $arrayCol = [];
                foreach (get_posts([
                    'category' => $category->cat_ID,
                ]) as $value) {
                    $kepost++;
                ?>
                    <div class="col-md-4">
                        <div class="row row-cols-1 g-2">
                            <div class="col">
                                <div class="card border-0">
                                    <img src="<?= wp_get_attachment_image_src(get_post_thumbnail_id($value->ID), 'popup-banner')[0]; ?>" class="card-img-top rounded-0" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">
                                            <a href="<?= esc_url(get_permalink($value)); ?>" class="text-dark"><?= $value->post_title; ?></a>
                                        </h5>
                                        <p class="card-text d-inline d-md-none"><?= get_the_excerpt($value); ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
<?php } ?>

<!-- footer -->
<?php include 'template/footer.php' ?>

<?php get_footer(); ?>