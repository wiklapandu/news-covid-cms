<?php
get_header();
?>
<?php if (get_posts()) { ?>
    <section style="padding: 2rem;">
        <div class="container">
            <div class="row g-4 align-items-center">
                <?php foreach (get_posts() as $value) { ?>
                    <div class="col-md-4">
                        <div class="card border-0">
                            <img src="<?= wp_get_attachment_image_src(get_post_thumbnail_id($value->ID), 'popup-banner')[0]; ?>" class="card-img-top rounded-0" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">
                                    <a href="<?= esc_url(get_permalink($value)); ?>" class="text-dark"><?= join(' ', array_slice(explode(' ', $value->post_title), 0, 7)) . "..."; ?></a>
                                </h5>
                                <p class="card-text d-inline d-md-none"><?= get_the_excerpt($value); ?></p>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
<?php } ?>

<?php
include 'template/footer.php';
?>

<?php
get_footer();
?>