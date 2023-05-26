<section class="benefits py-5">
    <div class="container-xl">
        <div class="row">
            <div class="col-lg-6">
                <h3 class="text-center mb-4">
                    <?=get_field('left_title')?>
                </h3>
                <ul class="reasons fa-ul">
                    <?php
                    while (have_rows('reasons')) {
                        the_row();
                        ?>
                    <li class="mb-4"><span class="fa-li"><i class="fa-solid fa-check"></i></span>
                        <strong><?=get_sub_field('reason_title')?></strong><br><?=get_sub_field('reason_text')?>
                    </li>
                    <?php
                    }
                    ?>
                </ul>
            </div>
            <div class="col-lg-6">
                <h3 class="text-center mb-4">
                    <?=get_field('right_title')?>
                </h3>
                <?php
                $img1 = wp_get_attachment_image_url(get_field('card_icon_1'),'full');
                preg_match('/^.*__(.*)\.svg/', $img1, $alt1);
                $img2 = wp_get_attachment_image_url(get_field('card_icon_2'),'full');
                preg_match('/^.*__(.*)\.svg/', $img2, $alt2);
                $img3 = wp_get_attachment_image_url(get_field('card_icon_3'),'full');
                preg_match('/^.*__(.*)\.svg/', $img3, $alt3);
                $img4 = wp_get_attachment_image_url(get_field('card_icon_4'),'full');
                preg_match('/^.*__(.*)\.svg/', $img4, $alt4);
                ?>
                <div class="row g-4">
                    <div class="col-md-6">
                        <div class="benefits__card">
                            <div class="benefits__icon"><img src="<?=$img1?>" alt="<?=$alt1[1]?> icon" width=120 height=96></div>
                            <h4><?=get_field('card_title_1')?>
                            </h4>
                            <p><?=get_field('card_content_1')?>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="benefits__card">
                            <div class="benefits__icon"><img src="<?=$img2?>" alt="<?=$alt2[1]?> icon" width=120 height=96></div>
                            <h4><?=get_field('card_title_2')?>
                            </h4>
                            <p><?=get_field('card_content_2')?>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="benefits__card">
                            <div class="benefits__icon"><img src="<?=$img3?>" alt="<?=$alt3[1]?> icon" width=120 height=96></div>
                            <h4><?=get_field('card_title_3')?>
                            </h4>
                            <p><?=get_field('card_content_3')?>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="benefits__card">
                            <div class="benefits__icon"><img src="<?=$img4?>" alt="<?=$alt4[1]?> icon" width=120 height=96></div>
                            <h4><?=get_field('card_title_4')?>
                            </h4>
                            <p><?=get_field('card_content_4')?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>