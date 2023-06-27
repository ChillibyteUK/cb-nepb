<?php
$img = get_the_post_thumbnail_url(get_the_ID(),'full');

$btn = random_str(4);

?>
<link rel="preload" as="image" href="<?=$img?>">
<header class="hero">
    <div class="pre-bit text-center">
        <h1><?=get_field('title')?></h1>
        <div class="form-container">
            <div class="form-inner px-2 py-2 py-sm-0 row">
                <div class="col-sm-8 px-1 mb-1 mb-sm-0"><input type="text" name="postcode" id="postcode_<?=$btn?>" class="form-control w-100" placeholder="Enter your Post Code"></div>
                <div class="col-sm-4 px-1"><button id="btn_<?=$btn?>" class="btn btn--accent d-block w-100">Get Offer</button></div>
            </div>
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
<?php
add_action('wp_footer', function () use ($btn) {
    ?>
<script>
    document.getElementById('btn_<?=$btn?>').addEventListener('click',
        function() {
            var postCode = document.getElementById('postcode_<?=$btn?>')
                .value;
            var loca = '/get-offer/?post_code=' + postCode;
            window.location.href = loca;
        });
</script>
<?php
});
?>