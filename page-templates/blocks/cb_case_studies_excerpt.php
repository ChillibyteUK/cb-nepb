<!-- case_studies_excerpt -->
<section class="case_studies_excerpt">
    <div class="has-grey-background-color">
        <div class="container-xl pt-5 pb-4">
            <?php
            if (get_field('title')) {
                ?>
            <h2 class="mb-4 text-center">
                <?=get_field('title')?>
            </h2>
            <?php
            }
            if (get_field('intro')) {
                ?>
            <div class="text-center mw-md-75 mb-4">
                <?=get_field('intro')?>
            </div>
            <?php
            }
            ?>
        </div>
    </div>
    <div class="bg-grey--half pb-5">
        <div class="container-xl">
            <div class="row g-4 mb-4">
                <?php
            $cstype = get_field('type') ?: null;
            $csloca = get_field('location') ?: null;

            $tax = array();
            
            if ($csloca || $cstype) {
                if ($csloca ?? null) {
                    $tax[] = array(
                        'taxonomy' => 'locations',
                        'terms' => $csloca,
                        'field' => 'term_id'
                    );
                }
                if ($cstype ?? null) {
                    $tax[] = array(
                        'taxonomy' => 'cstypes',
                        'terms' => $cstype,
                        'field' => 'term_id'
                    );
                }
            }

            $posts = array();

            $q = new WP_Query(array(
                'posts_per_page' => 2,
                'post_type' => 'case-studies',
                'tax_query' => $tax
            ));

            while ($q->have_posts()) {
                $q->the_post();
                $posts[] = get_the_ID();
                $img = get_the_post_thumbnail_url(get_the_ID(), 'large');
                if (!$img) {
                    $img = get_stylesheet_directory_uri() . '/img/default.png';
                }
                $slug = basename(get_the_permalink(get_the_ID()));
                ?>
                <div class="col-md-6">
                    <a class="blog_card"
                        href="/case-studies/#<?=$slug?>">
                        <img src="<?=$img?>" alt=""
                            class="blog_card__image">
                        <div class="blog_card__content">
                            <h3 class="blog_card__title">
                                <?=get_the_title(get_the_ID())?>
                            </h3>
                            <div class="fs-6"><?php
                            if (get_field('excerpt',get_the_ID()) ?? null) {
                                echo get_field('excerpt',get_the_ID());
                            }
                            else {
                                echo wp_trim_words(get_the_content(),20);
                            }
                            ?></div>
                        </div>
                    </a>
                </div>
                <?php
            }

            if ($q->found_posts < 2) {
                $howMany = 2 - $q->found_posts;
                $q = new WP_Query(array(
                    'posts_per_page' => $howMany,
                    'post_type' => 'case-studies',
                    'post__not_in' => $posts
                ));
                while ($q->have_posts()) {
                    $q->the_post();
                    $img = get_the_post_thumbnail_url(get_the_ID(), 'large');
                    if (!$img) {
                        $img = get_stylesheet_directory_uri() . '/img/default.png';
                    }
                    $slug = basename(get_the_permalink(get_the_ID()));
                    ?>
                <div class="col-md-6 col-xl-3">
                    <a class="blog_card"
                        href="/case-studies/#<?=$slug?>">
                        <img src="<?=$img?>" alt=""
                            class="blog_card__image">
                        <div class="blog_card__content">
                            <h3 class="blog_card__title">
                                <?=get_the_title(get_the_ID())?>
                            </h3>

                        </div>
                    </a>
                </div>
                <?php
                }
            }
            ?>
            </div>
            <div class="text-center"><a href="/case-studies/" class="btn btn--accent">View All</a></div>
        </div>
    </div>
</section>