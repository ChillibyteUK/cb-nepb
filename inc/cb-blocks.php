<?php
function acf_blocks()
{
    if (function_exists('acf_register_block_type')) {
        acf_register_block_type(array(
            'name'				=> 'cb_hero',
            'title'				=> __('CB Hero'),
            'category'			=> 'layout',
            'icon'				=> 'cover-image',
            'render_template'	=> 'page-templates/blocks/cb_hero.php',
            'keywords'			=> array( 'hero' ),
            'mode'	=> 'edit',
            'supports' => array('mode' => false),
        ));
        acf_register_block_type(array(
            'name'				=> 'cb_hero_short',
            'title'				=> __('CB Short Hero'),
            'category'			=> 'layout',
            'icon'				=> 'cover-image',
            'render_template'	=> 'page-templates/blocks/cb_short_hero.php',
            'keywords'			=> array( 'short', 'hero' ),
            'mode'	=> 'edit',
            'supports' => array('mode' => false),
        ));
        acf_register_block_type(array(
            'name'				=> 'cb_leadin',
            'title'				=> __('CB Lead In'),
            'category'			=> 'layout',
            'icon'				=> 'cover-image',
            'render_template'	=> 'page-templates/blocks/cb_leadin.php',
            'keywords'			=> array( 'lead in' ),
            'mode'	=> 'edit',
            'supports' => array('mode' => false),
        ));
        acf_register_block_type(array(
            'name'				=> 'cb_text_image',
            'title'				=> __('CB Text Image'),
            'category'			=> 'layout',
            'icon'				=> 'cover-image',
            'render_template'	=> 'page-templates/blocks/cb_text_image.php',
            'keywords'			=> array( 'text','image' ),
            'mode'	=> 'edit',
            'supports' => array('mode' => false),
        ));
        acf_register_block_type(array(
            'name'				=> 'cb_step_cards',
            'title'				=> __('CB Step Cards'),
            'category'			=> 'layout',
            'icon'				=> 'cover-image',
            'render_template'	=> 'page-templates/blocks/cb_step_cards.php',
            'keywords'			=> array( 'step', 'cards' ),
            'mode'	=> 'edit',
            'supports' => array('mode' => false),
        ));
        acf_register_block_type(array(
            'name'				=> 'cb_step_repeater',
            'title'				=> __('CB Step Repeater'),
            'category'			=> 'layout',
            'icon'				=> 'cover-image',
            'render_template'	=> 'page-templates/blocks/cb_step_repeater.php',
            'keywords'			=> array( 'step', 'repeater' ),
            'mode'	=> 'edit',
            'supports' => array('mode' => false),
        ));
        acf_register_block_type(array(
            'name'				=> 'cb_nav_cards',
            'title'				=> __('CB Nav Cards'),
            'category'			=> 'layout',
            'icon'				=> 'cover-image',
            'render_template'	=> 'page-templates/blocks/cb_nav_cards.php',
            'keywords'			=> array( 'nav', 'cards' ),
            'mode'	=> 'edit',
            'supports' => array('mode' => false),
        ));
        acf_register_block_type(array(
            'name'				=> 'cb_quote_cta',
            'title'				=> __('CB Quote CTA Bar'),
            'category'			=> 'layout',
            'icon'				=> 'cover-image',
            'render_template'	=> 'page-templates/blocks/cb_quote_cta.php',
            'keywords'			=> array( 'quote', 'cta', 'bar' ),
            'mode'	=> 'edit',
            'supports' => array('mode' => false),
        ));
        acf_register_block_type(array(
            'name'				=> 'cb_faqs',
            'title'				=> __('CB FAQ Block'),
            'category'			=> 'layout',
            'icon'				=> 'cover-image',
            'render_template'	=> 'page-templates/blocks/cb_faqs.php',
            'keywords'			=> array( 'faqs' ),
            'mode'	=> 'edit',
            'supports' => array('mode' => false),
        ));
        acf_register_block_type(array(
            'name'				=> 'cb_benefits',
            'title'				=> __('CB Benefits'),
            'category'			=> 'layout',
            'icon'				=> 'cover-image',
            'render_template'	=> 'page-templates/blocks/cb_benefits.php',
            'keywords'			=> array( 'benefits' ),
            'mode'	=> 'edit',
            'supports' => array('mode' => false),
        ));
        acf_register_block_type(array(
            'name'				=> 'cb_compare',
            'title'				=> __('CB Compare'),
            'category'			=> 'layout',
            'icon'				=> 'cover-image',
            'render_template'	=> 'page-templates/blocks/cb_compare.php',
            'keywords'			=> array( 'compare' ),
            'mode'	=> 'edit',
            'supports' => array('mode' => false),
        ));
        acf_register_block_type(array(
            'name'				=> 'cb_cta_block',
            'title'				=> __('CB CTA Block'),
            'category'			=> 'layout',
            'icon'				=> 'cover-image',
            'render_template'	=> 'page-templates/blocks/cb_cta_block.php',
            'keywords'			=> array( 'cta', 'block' ),
            'mode'	=> 'edit',
            'supports' => array('mode' => false),
        ));
        acf_register_block_type(array(
            'name'				=> 'cb_contact',
            'title'				=> __('CB Contact Block'),
            'category'			=> 'layout',
            'icon'				=> 'cover-image',
            'render_template'	=> 'page-templates/blocks/cb_contact.php',
            'keywords'			=> array( 'contact' ),
            'mode'	=> 'edit',
            'supports' => array('mode' => false),
        ));
        acf_register_block_type(array(
            'name'				=> 'cb_icon_grid',
            'title'				=> __('CB Icon Grid'),
            'category'			=> 'layout',
            'icon'				=> 'cover-image',
            'render_template'	=> 'page-templates/blocks/cb_icon_grid.php',
            'keywords'			=> array( 'icon', 'grid' ),
            'mode'	=> 'edit',
            'supports' => array('mode' => false),
        ));
        acf_register_block_type(array(
            'name'				=> 'cb_team_cols',
            'title'				=> __('CB Team Cols'),
            'category'			=> 'layout',
            'icon'				=> 'cover-image',
            'render_template'	=> 'page-templates/blocks/cb_team_cols.php',
            'keywords'			=> array( 'team', 'cols' ),
            'mode'	=> 'edit',
            'supports' => array('mode' => false),
        ));
        acf_register_block_type(array(
            'name'				=> 'cb_hs_form',
            'title'				=> __('CB Hubspot Form'),
            'category'			=> 'layout',
            'icon'				=> 'cover-image',
            'render_template'	=> 'page-templates/blocks/cb_hs_form.php',
            'keywords'			=> array( 'hubspot', 'form' ),
            'mode'	=> 'edit',
            'supports' => array('mode' => false),
        ));
        acf_register_block_type(array(
            'name'				=> 'cb_latest_guides',
            'title'				=> __('CB Latest Guides'),
            'category'			=> 'layout',
            'icon'				=> 'cover-image',
            'render_template'	=> 'page-templates/blocks/cb_latest_guides.php',
            'keywords'			=> array( 'latest', 'guides' ),
            'mode'	=> 'edit',
            'supports' => array('mode' => false),
        ));
        acf_register_block_type(array(
            'name'				=> 'cb_steps',
            'title'				=> __('CB Steps'),
            'category'			=> 'layout',
            'icon'				=> 'cover-image',
            'render_template'	=> 'page-templates/blocks/cb_steps.php',
            'keywords'			=> array( 'steps' ),
            'mode'	=> 'edit',
            'supports' => array('mode' => false),
        ));
        acf_register_block_type(array(
            'name'				=> 'cb_calculator',
            'title'				=> __('CB Calculator'),
            'category'			=> 'layout',
            'icon'				=> 'cover-image',
            'render_template'	=> 'page-templates/blocks/cb_calculator.php',
            'keywords'			=> array( 'calculator' ),
            'mode'	=> 'edit',
            'supports' => array('mode' => false),
        ));
        acf_register_block_type(array(
            'name'				=> 'cb_featured_in',
            'title'				=> __('CB Featured In'),
            'category'			=> 'layout',
            'icon'				=> 'cover-image',
            'render_template'	=> 'page-templates/blocks/cb_featured_in.php',
            'keywords'			=> array( 'featured','in' ),
            'mode'	=> 'edit',
            'supports' => array('mode' => false),
        ));
        acf_register_block_type(array(
            'name'				=> 'cb_case_studies',
            'title'				=> __('CB Case Studies'),
            'category'			=> 'layout',
            'icon'				=> 'cover-image',
            'render_template'	=> 'page-templates/blocks/cb_case_studies.php',
            'keywords'			=> array( 'case','studies' ),
            'mode'	=> 'edit',
            'supports' => array('mode' => false),
        ));
        acf_register_block_type(array(
            'name'				=> 'cb_case_studies_excerpt',
            'title'				=> __('CB Case Studies w Excerpt'),
            'category'			=> 'layout',
            'icon'				=> 'cover-image',
            'render_template'	=> 'page-templates/blocks/cb_case_studies_excerpt.php',
            'keywords'			=> array( 'case','studies', 'excerpt' ),
            'mode'	=> 'edit',
            'supports' => array('mode' => false),
        ));
    }
}
add_action('acf/init', 'acf_blocks');

// Gutenburg core modifications
add_filter('register_block_type_args', 'core_image_block_type_args', 10, 3);
function core_image_block_type_args($args, $name)
{
    if ($name == 'core/paragraph') {
        $args['render_callback'] = 'modify_core_add_container';
    }
    if ($name == 'core/list') {
        $args['render_callback'] = 'modify_core_add_container';
    }
    if ($name == 'core/columns') {
        // $args['render_callback'] = 'modify_core_add_container';
    }
    if ($name == 'core/heading') {
        $args['render_callback'] = 'modify_core_heading';
    }
    // if ( $name == 'core/button' ) {
    //     $args['render_callback'] = 'modify_core_buttons';
    // }
    // if ( $name == 'core/quote' ) {
    //     $args['render_callback'] = 'modify_core_quote';
    // }

    // echo '<pre>' . $name . '</pre>';

    return $args;
}

function modify_core_add_container($attributes, $content)
{
    ob_start();
    // $class = $block['className'];
    ?>
<div class="container-xl">
    <?=$content?>
</div>
<?php
    $content = ob_get_clean();
    return $content;
}

function modify_core_heading($attributes, $content)
{
    ob_start();
    $id = strtolower(wp_strip_all_tags($content));
    $id = cbslugify($id);
    ?>
<div class="container-xl" id="<?=$id?>">
    <?=$content?>
</div>
<?php
    $content = ob_get_clean();
    return $content;
}
/*

function modify_core_buttons($attributes, $content) {
    ob_start();

    $btn = $content;

    preg_match('/class="wp-block-button (.*?)"/', $btn, $class);

    preg_match('/href="(.*?)"/', $btn, $link);

    preg_match('/target="(.*?)" rel="(.*?)"/', $btn, $target);

    preg_match('/<a.*?>(.*?)<\/a>/', $btn, $label);

    ?>
    <!-- core/buttons -->
    <div class="container-xl clearfix mb-4"><a class="btn <?=$class[1]?>" href="<?=$link[1]?>" target="<?=$target[1]?>" rel="<?=$target[2]?>"><?=$label[1]?></a></div>
    <?php
    $content = ob_get_clean();
    return $content;
}

function modify_core_quote($attributes, $content) {
    ob_start();

    ?>
    <!-- wp_quote -->
    <div class="container-xl">
        <div class="wp-block-quote--cb my-4 w-md-75 mx-auto">
            <div class="overlay"></div>
            <?=$content?>
        </div>
    </div>
    <?php

    $content = ob_get_clean();
    return $content;
}

*/
?>