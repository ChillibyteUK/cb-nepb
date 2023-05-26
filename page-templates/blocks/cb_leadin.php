<section class="leadin pb-5">
    <div class="container-xl">
        <?php
    if (get_field('title')) {
        $h = get_field('title_level');
        ?>
        <<?=$h?> class="text-center">
            <?=get_field('title')?>
        </<?=$h?>>
        <?php
    }
    if (get_field('content')) {
        ?>
        <div class="text-center mw-md-75">
            <?=get_field('content')?>
        </div>
        <?php
    }
        ?>
    </div>
</section>