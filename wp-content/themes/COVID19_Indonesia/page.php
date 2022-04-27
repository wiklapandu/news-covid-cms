<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post();
?>
        <section>
            <?php if (get_post_thumbnail_id(get_the_ID())) : ?>
                <div class="w-100 thumbail mb-4">
                    <img src="<?= wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'popup-banner')[0]; ?>" alt="" class="w-100" style="object-fit: cover; object-position: center; height: 50vh;">
                </div>
            <?php endif; ?>
            <div class="container my-3">
                <div class="row">
                    <div class="col">
                        <?php
                        global $messageForm;
                        if (isset($_POST['submited'])) {
                            // ! inputan request
                            $name = $_POST['nama'];
                            $email = $_POST['email'];
                            $message = $_POST['pesan'];
                            if (empty($name) || empty($message)) {
                                $messageForm = `
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                Nama dan Pesan Harus diisi
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                                `;
                            } elseif (!empty($_POST['contactForm']) && $_POST['contactForm'] == 1) {
                                // ! PHP Mailer Set
                                $message = "from : $name\n" . "message: $message";
                                $to = get_option('admin_email');
                                $subject = "Someone sent a message from " . get_bloginfo('name');
                                $headers = 'From: ' . $email . "\r\n" . 'Reply-To: ' . $email . "\r\n";
                                $sent = wp_mail($to, $subject, strip_tags($message), $headers);
                                if ($sent) {
                                    $messageForm = `
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        Pesan berhasil dikirim
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                    `;
                                } else {
                                    $messageForm = `
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        Pesan gagal dikirim
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                    `;
                                }
                            }
                        }
                        ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8 mx-auto">
                        <?php if (is_page('Our Category')) : ?>
                            <?php foreach (get_categories() as $cat) : ?>
                                <div class="row mb-3">
                                    <div class="col text-center">
                                        <h5><?= $cat->name; ?></h5>
                                    </div>
                                </div>
                                <?php
                                $posts = get_posts(['category' => $cat->cat_ID, 'numberposts' => 3]); ?>
                                <div class="row gx-4 mb-3">
                                    <?php foreach ($posts as $post) :
                                    ?>
                                        <div class="col-md-4 mx-auto">
                                            <div class="card rounded-0">
                                                <img src="<?= wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'popup-banner')[0]; ?>" alt="" class="card-img-top rounded-0">
                                                <div class="card-body">
                                                    <h5 class="card-title">
                                                        <a href="<?= esc_url(get_permalink($post)); ?>" class="text-dark">
                                                            <?= join(' ', array_slice(explode(' ', $post->post_title), 0, 7)) . "..."; ?>
                                                        </a>
                                                    </h5>
                                                    <p class="card-text">
                                                        <?= join(' ', array_slice(explode(' ', get_the_excerpt($post)), 0, 8)) . "..."; ?>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                                <div class="row mb-4">
                                    <div class="col text-center">
                                        <a href="<?= esc_url(home_url("/news/category/" . $cat->slug)); ?>" class="btn btn-outline-dark">Selengkapnya</a>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        <?php endif; ?>
                        <?php the_content() ?>
                    </div>
                </div>
            </div>
        </section>
<?php endwhile;
endif; ?>

<?php include 'template/footer.php' ?>

<?php get_footer(); ?>