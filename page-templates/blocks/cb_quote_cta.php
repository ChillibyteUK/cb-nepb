<?php
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
    $url = "https:/www.nepropertybuyers.co.uk/get-offer-postcode-page/";
    echo '<script type="text/javascript">';
    echo 'window.location.href="'.$url.'";';
    echo '</script>';	
}

?>
<section class="quote_cta py-3 <?=$classes?>">
    <div class="container-xl">
        <div class="form-container">
            <div class="form-inner d-flex flex-wrap gap-4 justify-content-center">
                <div class="text-center">Get a <span>Free Cash Offer</span> today</div>
                <form method="POST" action="">
                    <div class="d-sm-flex w-100 w-sm-auto">
                        <input type="text" class="form-control mb-3 mb-sm-0 me-2" name="postcodehome1" id="postcodehome1" placeholder="Enter your Post Code">
                        <button type="submit" name="button1" class="d-block w-100 w-sm-auto d-sm-inline btn btn--accent">Get Offer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>