<?php
$theme = get_field('theme') == 'Light' ? 'cta_block--light' : 'cta_block--dark';

$classes = $block['className'] ?? null;

if ($_POST['postcodehome1'] ?? null) {
?>
<div style="display:none;">
	<?php echo $_POST['postcodehome1']; ?>
</div>
<?php
}

if(isset($_POST['button1'])) { 
	//$_SESSION['postcode'] = 'test';
	$_SESSION['postcode'] = $_POST['postcodehome1'];
    $url = "http://gaffsy.com/get-offer-postcode-page/";
    echo '<script type="text/javascript">';
    echo 'window.location.href="'.$url.'";';
    echo '</script>';	
}
//$_SESSION['postcode'] = 'AAA';
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
                <form method="POST" action="">
                    <div class="d-sm-flex w-100 w-sm-auto">
                        <input type="text" name="postcodehome1" id="postcodehome1" class="form-control mb-3 mb-sm-0 me-2" placeholder="Enter your Post Code">
                        <button type="submit" name="button1" class="d-block w-100 w-sm-auto d-sm-inline btn btn--accent">Get Offer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>