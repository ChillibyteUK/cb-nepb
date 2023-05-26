<section class="team_cols">
    <div class="container-xl py-5">
        <h2><?=get_field('title')?></h2>
        <div class="row g-4">
            <div class="col-lg-6">
                <div class="team_cols__img">
                    <img src="<?=wp_get_attachment_image_url(get_field('left_image'),'full')?>">
                </div>
                <div class="team_cols__name"><?=get_field('left_name')?></div>
                <div class="team_cols__role"><?=get_field('left_role')?></div>
                <div class="team_cols__bio"><?=get_field('left_bio')?></div>
            </div>
            <div class="col-lg-6">
                <div class="team_cols__img">
                    <img src="<?=wp_get_attachment_image_url(get_field('right_image'),'full')?>">
                </div>
                <div class="team_cols__name"><?=get_field('right_name')?></div>
                <div class="team_cols__role"><?=get_field('right_role')?></div>
                <div class="team_cols__bio"><?=get_field('right_bio')?></div>
            </div>
        </div>
    </div>
</section>