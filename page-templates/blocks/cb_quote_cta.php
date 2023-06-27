<?php
$classes = $block['className'] ?? null;
$btn = random_str(4);

?>
<section class="quote_cta py-3 <?=$classes?>">
    <div class="container-xl">
        <div class="form-container">
            <div class="form-inner d-flex flex-wrap gap-4 justify-content-center">
                <div class="text-center">Get a <span>Free Cash Offer</span> today</div>
                <div class="d-sm-flex w-100 w-sm-auto">
                    <input type="text" class="form-control mb-3 mb-sm-0 me-2" id="postcode_<?=$btn?>" placeholder="Enter your Post Code">
                    <button id="btn_<?=$btn?>" class="d-block w-100 w-sm-auto d-sm-inline btn btn--accent">Get Offer</button>
                </div>
            </div>
        </div>
    </div>
</section>
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