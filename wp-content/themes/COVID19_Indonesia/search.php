<?php get_header(); ?>
<?php
global $wpdb;
$searchQuery = get_search_query();
$posts = ($searchQuery != '') ? $wpdb->get_results($wpdb->prepare("SELECT * FROM cms_posts WHERE post_status='publish' AND post_type='post' AND LOWER(post_title) LIKE '%wisma%'")) : get_posts();

if ($posts) : ?>
    <section style="padding: 2rem;">
        <div class="container">
            <div class="row g-4 align-items-center">
                <?php foreach ($posts as $value) { ?>
                    <div class="col-md-4">
                        <div class="card border-0">
                            <img src="<?= wp_get_attachment_image_src(get_post_thumbnail_id($value->ID), 'popup-banner')[0]; ?>" class="card-img-top rounded-0" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">
                                    <a href="<?= esc_url(get_permalink($value)); ?>" class="text-dark thumb-title2"><?= $value->post_title; ?></a>
                                </h5>
                                <p class="card-text d-inline d-md-none"><?= get_the_excerpt($value); ?></p>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>

<?php else : ?>
    <section>
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h5>Can't find</h5>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>

<?php include 'template/footer.php' ?>
<?php get_footer(); ?>