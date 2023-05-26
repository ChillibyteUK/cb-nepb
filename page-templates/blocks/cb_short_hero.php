<?php
$img = get_the_post_thumbnail_url(get_the_ID(),'full');
?>
<header class="hero hero--short">
    <div class="hero_bg" style="background-image: url(<?=$img?>)"></div>
    <div class="container-xl">
        <h1><?=get_field('title')?></h1>
        <?php
        if (get_field('intro')) {
            ?>
            <div class="text-center mw-md-75">
                <?=get_field('intro')?>
            </div>
            <?php
        }
        ?>
    </div>
</header>