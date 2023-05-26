<!-- latest_guides -->
<section class="latest_guides">
    <div class="has-grey-background-color">
        <div class="container-xl pt-5 pb-4">
            <?php
            if(get_field('title')) {
                ?>
            <h2 class="mb-4 text-center"><?=get_field('title')?></h2>
                <?php
            }
            if(get_field('intro')) {
                ?>
            <div class="text-center mw-md-75 mb-4"><?=get_field('intro')?></div>
                <?php
            }
            ?>
        </div>
    </div>
    <div class="bg-grey--half pb-5">
        <div class="container-xl">
            <div class="row g-4 mb-4">
                <?php
                $q = new WP_Query(array(
                    'posts_per_page' => 4
                ));
                while ($q->have_posts()) {
                    $q->the_post();
                    ?>
            <div class="col-md-6 col-xl-3">
                <a class="blog_card" href="<?=get_the_permalink($q->ID)?>">
                    <img src="<?=get_the_post_thumbnail_url($q->ID,'large')?>" alt="" class="blog_card__image">
                    <div class="blog_card__content">
                        <h3 class="blog_card__title"><?=get_the_title($q->ID)?></h3>
                    </div>
                </a>
            </div>
                    <?php
                }
                ?>
            </div>
            <div class="text-center"><a href="/guides/" class="btn btn--accent">View All Guides</a></div>
        </div>
    </div>
</section>