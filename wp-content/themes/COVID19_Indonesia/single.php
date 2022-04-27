<?php get_header(); ?>

<?php
if (have_posts()) :
    $author = get_the_author_meta('display_name', get_post_field('post_author', get_the_ID()));
?>
    <section style="padding: 2rem 0;">
        <div class="container position-relative">
            <div class="row gx-3">
                <!-- content -->
                <div class="col-lg-7">
                    <h5 class="text-muted">Category • <span><?= get_the_category(get_the_ID())[0]->name; ?></span></h5>
                    <h2 class="mb-3 fs-2">
                        <?php the_title() ?>
                    </h2>
                    <img src="<?= wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'popup-banner')[0]; ?>" alt="" class="img-fluid mb-3">
                    <div class="author d-flex">
                        <span>By <span class="fw-bold"><?= $author ?></span></span>
                        <span class="ms-auto">April 17, 2020</span>
                    </div>
                    <hr>
                    <div class="text-paragraf">
                        <?php the_content(); ?>
                    </div>
                </div>

            </div>
            <div class="container d-lg-block d-none position-fixed" style="top: 10rem; left: auto; z-index: 10;">
                <div class="row">
                    <!-- post news -->
                    <div class="col-lg-5 ms-auto me-4">
                        <div class="border bg-white pb-3">
                            <h5 class="text-center my-4">
                                Stories You Need to Hear
                            </h5>
                            <hr>
                            <div class="overflow-auto" style="max-height: 23rem;">
                                <?php foreach (get_posts() as $posts) { ?>
                                    <div class="card border-0 mx-2">
                                        <div class="row g-0 align-items-center mb-3">
                                            <a href="<?= esc_url(get_permalink($posts)); ?>" class="col-md-5">
                                                <img src="<?= wp_get_attachment_image_src(get_post_thumbnail_id($posts->ID), 'popup-banner')[0]; ?>" class="img-link img-fluid rounded-0" alt="...">
                                            </a>
                                            <div class="col-md-7">
                                                <div class="card-body">
                                                    <div class="text-muted">Category • <?= get_the_category($posts->ID)[0]->name; ?></div>
                                                    <a href="<?= esc_url(get_permalink($posts)); ?>" class="card-title h5"><?= $posts->post_title; ?></a>
                                                    <p class="card-text">
                                                        <small class="text-muted"><?= get_the_date('M d, Y', $posts->ID); ?></small>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row d-block d-lg-none">
                <!-- post news -->
                <div class="col-lg-5 ms-auto me-4">
                    <div class="border bg-white pb-3">
                        <h5 class="text-center my-4">
                            Stories You Need to Hear
                        </h5>
                        <hr>
                        <div>
                            <?php foreach (get_posts() as $posts2) { ?>
                                <div class="card border-0 mx-2">
                                    <div class="row g-0 align-items-center mb-3">
                                        <a href="<?= esc_url(get_permalink($posts2)); ?>" class="col-md-5">
                                            <img src="<?= wp_get_attachment_image_src(get_post_thumbnail_id($posts2->ID), 'popup-banner'); ?>" class="img-link img-fluid rounded-0" alt="...">
                                        </a>
                                        <div class="col-md-7">
                                            <div class="card-body">
                                                <div class="text-muted">Category • <?= get_the_category($posts2->ID)[0]->name; ?></div>
                                                <a href="<?= esc_url(get_permalink($posts2)); ?>" class="card-title h5"><?= $posts2->post_title; ?></a>
                                                <p class="card-text">
                                                    <small class="text-muted"><?= get_the_date('M d, Y', $posts2->ID); ?></small>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>
<?php get_footer(); ?>