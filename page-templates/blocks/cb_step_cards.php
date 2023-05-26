<section class="bg-grey--half py-5">
    <div class="container-xl">
        <?php
        if (get_field('title')) {
            ?>
        <h2 class="text-center pb-5"><?=get_field('title')?></h2>
            <?php
        }
        $img1 = wp_get_attachment_image_url(get_field('icon_1'),'full');
        preg_match('/^.*__(.*)\.svg/', $img1, $alt1);
        $img2 = wp_get_attachment_image_url(get_field('icon_2'),'full');
        preg_match('/^.*__(.*)\.svg/', $img2, $alt2);
        $img3 = wp_get_attachment_image_url(get_field('icon_3'),'full');
        preg_match('/^.*__(.*)\.svg/', $img3, $alt3);
        ?>
        <div class="row mx-0 mb-5 g-5 g-lg-4">
            <div class="col-lg-4">
                <div class="step_card card" data-aos="fade-up">
                    <div class="card__step" data-aos="zoom-in" data-aos-delay="250">
                        <p>1</p>
                    </div>
                    <div class="card__icon"><img src="<?=$img1?>" width=120 height=80 alt="<?=$alt1[1]?> icon"></div>
                    <div class="card__title">
                        <h3><?=get_field('title_1')?>
                        </h3>
                    </div>
                    <div class="card__content">
                        <?=get_field('content_1')?>
                    </div>
                </div>
            </div>
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="150">
                <div class="step_card card">
                    <div class="card__step" data-aos="zoom-in" data-aos-delay="400">
                        <p>2</p>
                    </div>
                    <div class="card__icon"><img src="<?=$img2?>" width=120 height=80 alt="<?=$alt2[1]?> icon"></div>
                    <div class="card__title">
                        <h3><?=get_field('title_2')?>
                        </h3>
                    </div>
                    <div class="card__content">
                        <?=get_field('content_2')?>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="step_card card" data-aos="fade-up" data-aos-delay="300">
                    <div class="card__step" data-aos="zoom-in" data-aos-delay="550">
                        <p>3</p>
                    </div>
                    <div class="card__icon"><img src="<?=$img3?>" width=120 height=80 alt="<?=$alt3[1]?> icon"></div>
                    <div class="card__title">
                        <h3><?=get_field('title_3')?>
                        </h3>
                    </div>
                    <div class="card__content">
                        <?=get_field('content_3')?>
                    </div>
                </div>
            </div>
        </div>
        <?php
        if (get_field('cta')) {
            $cta = get_field('cta');
            ?>
        <div class="text-center">
            <a href="<?=$cta['url']?>"
                target="<?=$cta['target']?>"
                class="btn btn--accent"><?=$cta['title']?></a>
        </div>
        <?php
        }
                        ?>
    </div>
</section>