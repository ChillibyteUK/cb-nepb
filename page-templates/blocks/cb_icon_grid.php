<?php
$colour = get_field('theme');
$background = '';
switch ($colour) {
    case 'Dark':
        $background = 'has-dark-background-color text-white';
        break;
    case 'Mid':
        $background = 'has-grey-background-color';
        break;
    // case 'Light':
    //     $background = '';
    //     break;
}

?>
<section class="icon_grid <?=$background?>">
    <div class="container-xl py-5">
        <div class="row g-4">
            <?php
            while (have_rows('icon')) {
                the_row();
                ?>
            <div class="col-md-6 col-lg-4">
                <div class="icon_grid__card">
                    <div class="icon_grid__icon">
                        <img src="<?=wp_get_attachment_image_url(get_sub_field('icon'),'full')?>">
                    </div>
                    <div class="icon_grid__title">
                        <?=get_sub_field('title')?>
                    </div>
                </div>
            </div>
                <?php
            }
            ?>
        </div>
    </div>
</section>