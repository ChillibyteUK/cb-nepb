<?php
$img = get_the_post_thumbnail_url(get_the_ID(),'full');

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

?>
<link rel="preload" as="image" href="<?=$img?>">
<header class="hero">
    <div class="pre-bit text-center">
        <h1><?=get_field('title')?></h1>
        <div class="form-container">
            <form method="POST" action="">
                <div class="form-inner px-2 py-2 py-sm-0 row">
                    <div class="col-sm-8 px-1 mb-1 mb-sm-0"><input type="text" name="postcodehome1" id="postcodehome1" class="form-control w-100" placeholder="Enter your Post Code"></div>
                    <div class="col-sm-4 px-1"><button type="submit" name="button1" class="btn btn--accent d-block w-100">Get Offer</button></div>
                </div>
            </form>
        </div>
    </div>
    <div class="hero_bg" style="background-image: url(<?=$img?>)"></div>
    <?php
    if (get_field('show_bullets')) {
        ?>
    <section class="bullets pt-4">
        <div class="container-xl d-flex justify-content-around flex-wrap text-center">
            <ul>
                <li><span>FREE cash offer</span> within minutes</li>
                <li>Receive funds in <span>7 days</span></li>
                <li>A guaranteed sale on <span>any property</span></li>
            </ul>
        </div>
    </section>
        <?php
    }
    ?>
</header>