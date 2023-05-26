<?php
$classes = $block['className'] ?? null;
?>
<section class="steps <?=$classes?>">
    <div class="container-xl py-5">
        <h2 class="text-center mb-5"><?=get_field('title')?></h2>
        <div class="row g-4 justify-content-center" id="steps">
            <?php
            $d = 0;
            $step = 1;
            while (have_rows('steps')) {
                the_row();
                ?>
            <div class="col-lg-6">
                <div class="steps__card" data-aos="fade-up" data-aos-delay="<?=$d?>" data-aos-anchor="#steps">
                    <div class="steps__number_container"><div class="steps__number"><p><?=$step?></p></div></div>
                    <div class="steps__icon"><img src="<?=wp_get_attachment_image_url(get_sub_field('icon'),'full')?>" width=120 height=80></div>
                    <div class="steps__content"><?=get_sub_field('content')?></div>
                </div>
            </div>
                <?php
                $d += 250;
                $step++;
            }
            ?>
        </div>
    </div>
</section>