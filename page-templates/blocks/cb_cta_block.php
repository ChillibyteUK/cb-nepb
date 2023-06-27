<?php
$theme = get_field('theme') == 'Light' ? 'cta_block--light' : 'cta_block--dark';

$classes = $block['className'] ?? null;
$btn = random_str(4);

?>
<div style="display:none;">
	<input type="text" id="postcode-hidden" name="postcode-hidden" value="<?php echo $_SESSION['postcode']; ?>" /> 
</div>
<section class="cta_block <?=$theme?> <?=$classes?> p-5">
    <div class="container-xl">
        <h2 class="cta__title"><?=get_field('cta_title')?></h2>
        <div class="cta__intro mb-4"><?=get_field('cta_intro')?></div>
        <div class="form-container">
            <div class="form-inner d-flex flex-wrap gap-4 justify-content-center">
                <div class="text-center">Get a <span>Free Cash Offer</span> today</div>
                <div class="d-sm-flex w-100 w-sm-auto">
                    <input type="text" id="postcode_<?=$btn?>" class="form-control mb-3 mb-sm-0 me-2" placeholder="Enter your Post Code">
                    <button id="btn_<?=$btn?>" class="d-block w-100 w-sm-auto d-sm-inline btn btn--accent">Get Offer</button>
                </div>
            </div>
        </div>
    </div>
</section>
