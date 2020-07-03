<section class="rappeler">
    <div class="wrap-contain">
        <div class="rappeler__content">
            <h3 class="rappeler__title">Vous avez une question ou vous souhaitez un devis ?</h3>
            <div class="btn-primary btn mbm mrm btn-rappeler">Faites-vous rappeler</div>
            <a href="<?php echo get_site_url() . '/contact'; ?>" class="btn-secondary btn mbm">Contactez-nous directement</a>
        </div>
    </div>
</section>
<div class="rappeler-form">
    <div class="btn-close btn-close-dark"><span class="close-icon"></span><span class="close-text">fermer</span></div>
    <div class="rappeler-form__wrap">
        <h2 class="rappeler-form__title upper-xbold">Une question, un devis&nbsp;? Faites-vous rappeler.</h2>
        <div class="rappeler-form__container">
            <?php echo do_shortcode('[contact-form-7 id="122" title="Se faire rappeler"]'); ?>
        </div>
    </div>
</div>