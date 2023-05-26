<style>
.slick-autoplay-toggle-button:not(:focus):not(:active) {
    clip: rect(0 0 0 0); 
  clip-path: inset(50%);
  height: 1px;
  overflow: hidden;
  position: absolute;
  white-space: nowrap; 
  width: 1px;
}
.featured_slider__item {
    padding-inline: 1rem;
}
.featured_slider__item img {
    aspect-ratio: 1;
    object-fit: contain;
    width: 100%;
    max-width: 200px;
    display: block;
    margin: auto;
}
</style>
<section class="featured_in">
    <div class="container-xl py-5">
        <?php
        if (get_field('title')) {
            ?>
        <h2 class="text-center"><?=get_field('title')?></h2>
            <?php
        }
        ?>
        <div class="featured_slider">
            <?php
            while(have_rows('featured_in','options')) {
                the_row();
                ?>
            <div class="featured_slider__item">
                <?=wp_get_attachment_image(get_sub_field('logo'),'large')?>
            </div>
                <?php
            }
            ?>
        </div>
    </div>
</section>
<?php
add_action('wp_footer',function() {
    ?>
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/@accessible360/accessible-slick@1.0.1/slick/slick.min.css">
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/@accessible360/accessible-slick@1.0.1/slick/accessible-slick-theme.min.css">
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/@accessible360/accessible-slick@1.0.1/slick/slick.min.js"></script>
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->
<script>
jQuery(function($){
  $('.featured_slider').slick({
    infinite: true,
    slidesToShow: 5,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 4000,
    arrows: false,
    responsive: [
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 2,
                    autoplay: true
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    autoplay: true
                }
            }
        ]
  });
});
</script>
    <?php
});
?>