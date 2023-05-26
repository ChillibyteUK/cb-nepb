<section class="contact pb-4">
    <div class="container-xl">
        <div class="row g-4">
            <div class="col-lg-6">
                <h2><?=get_field('left_title')?></h2>
                <script charset="utf-8" type="text/javascript" src="//js-eu1.hsforms.net/forms/v2.js?pre=1"></script>
                <script>
                hbspt.forms.create({
                    region: "eu1",
                    portalId: "<?=get_field('portal_id')?>",
                    formId: "<?=get_field('form_id')?>"
                });
                </script>
            </div>
            <div class="col-lg-6">
                <h2><?=get_field('right_title')?></h2>
                <p><?=get_field('right_intro')?></p>
                <a class="contact__contact" href="tel:<?=parse_phone(get_field('contact_phone','options'))?>">
                    <div class="contact__icon"><p><i class="fa-solid fa-phone-alt"></i></p></div>
                    <div class="contact__detail"><span class="fw-bold fs-6">Call Us</span><br><?=get_field('contact_phone','options')?></div>
                </a>
                <a class="contact__contact" href="mailto:<?=get_field('contact_email','options')?>">
                    <div class="contact__icon"><p><i class="fa-solid fa-envelope"></i></p></div>
                    <div class="contact__detail"><span class="fw-bold fs-6">Email Us</span><br><?=get_field('contact_email','options')?></div>
                </a>
            </div>
        </div>
    </div>
</section>