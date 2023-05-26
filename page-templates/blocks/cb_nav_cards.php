<section class="nav_cards mb-5">
    <div class="container-xl">
        <h2 class="text-center mb-4">
            <?=get_field('title')?>
        </h2>
        <?php
        if (get_field('intro')) {
            ?>
        <div class="text-center mw-md-75 mb-5">
            <?=get_field('intro')?>
        </div>
            <?php
        }
        ?>
        <div class="row justify-content-center g-4">
            <?php
            $ol = 'odd';
            while (have_rows('cards')) {
                the_row();
                $thePost = get_sub_field('link');
                $title = get_sub_field('title') ?: get_the_title($thePost);
                $ol = $ol == 'odd' ? 'even' : 'odd';
                if (get_field('card_image', $thePost)) {
                    $img = parse_url(wp_get_attachment_image_url(get_field('card_image', $thePost), 'large'), PHP_URL_PATH);
                }
                else {
                    $img = parse_url(get_the_post_thumbnail_url($thePost,'large'), PHP_URL_PATH);
                }
                ?>
            <div class="col-md-6 col-xl-4">
                <a class="nav_card"
                    href="<?=get_the_permalink($thePost)?>">
                    <div class="nav_card__background"
                        style="background-image:url(<?=$img?>)">
                    </div>
                    <div
                        class="nav_card__overlay nav_card__overlay--<?=$ol?>">
                    </div>
                    <div class="nav_card__content">
                        <h3 class="nav_card__title"><?=$title?></h3>
                        <div class="nav_card__intro">
                            <?=get_field('intro', $thePost)?>
                        </div>
                    </div>
                </a>
            </div>
            <?php
            }
            ?>
        </div>
    </div>
</section>