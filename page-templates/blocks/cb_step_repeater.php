<?php
$arrow = get_field('show_arrow')[0];
?>
<section class="step_repeater py-5">
    <div class="container-xl">
        <h2 class="text-center mb-4"><?=get_field('title')?></h2>
        <div class="text-center mw-md-75 mb-5"><?=get_field('intro')?></div>
        <div class="row g-4 justify-content-center mw-md-75">
            <?php
            $n = 1;
            while(have_rows('steps')){
                the_row();
                if ($n > 1 && $arrow == 'Yes') {
                    ?>
            <div class="col-12">
                <img src="<?=get_stylesheet_directory_uri()?>/img/arrow-down.svg" width=50 height=120 class="d-flex mx-auto" data-aos="zoom-in" data-aos-delay="50">
            </div>
                    <?php
                }
                ?>
            <div class="col-md-2">
                <div class="mx-auto card__step" data-aos="zoom-in">
                    <p><?=$n?></p>
                </div>
            </div>
            <div class="col-md-10">
                <h3><?=get_sub_field('title')?></h3>
                <?=get_sub_field('step')?>
            </div>
                <?php
                $n++;
            }
            ?>
        </div>
    </div>
</section>