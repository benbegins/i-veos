<?php
/*
Template Name: Contact
Template Post Type: page
*/

get_header("dark");
?>

<section class="hero-text back-white">
    <div class="wrap-contain">
        <h1 class="hero-text__title">Prenons contact</h1>
    </div>
</section>

<section class="contact-coordonnees back-white pad-bot">
    <div class="wrap-contain contact-coordonnees__wrap first-content">
        <div class="contact-coordonnees__text-container">
            <h4 class="contact-coordonnees__title">Adresse</h4>
            <p class="contact-coordonnees__text text-courant">
            Péniche Avant-Seine<br>
            Port Van Gogh<br>
            2 Quai Aulagnier<br>
            92 600 Asnières-sur-Seine
            </p>
            <h4 class="contact-coordonnees__title">Téléphone</h4>
            <p class="contact-coordonnees__text text-courant"><a href="tel:0147338144" class="no-transition">01 47 33 81 44</a></p>
            <h4 class="contact-coordonnees__title">Fax</h4>
            <p class="contact-coordonnees__text text-courant">09 72 39 00 76</p>
            <h4 class="contact-coordonnees__title">Email</h4>
            <p class="contact-coordonnees__text text-courant">
            <a class="no-transition" href="mailto:c%6f&#110;ta&#99;t&#64;%69%2dv%65o%73%2e%63&#111;&#109;">contact&#64;i-veos.com</a>
            </p>
        </div>
        <div class="contact-coordonnees__plan-container">
            <div class="bloc-couleur back-green-3 contact-coordonnees__bloc-1"></div>
            <a href="https://goo.gl/maps/AoToJR5TBkJ79aH19" target="_blank" class="contact-coordonnees__plan-link no-transition">
                <div class="contact-coordonnees__plan"></div>
            </a>
        </div>
    </div>
</section>

<section class="contact-form back-white pad-bot">
    <div class="wrap-contain contact-form__wrap first-content">
        <div class="contact-form__image-container">
            <div class="bloc-couleur back-green-2 contact-form__bloc-1"></div>
            <img src="<?php echo get_template_directory_uri() . '/public/img/contact.jpg' ?>" alt="i-veos gestion tiers payant">
        </div>
        <div class="contact-form__form-container">
            <h2 class="contact-form__title upper-xbold">Une question, un devis&nbsp;? Entamons la conversation.</h2>
            <?php echo do_shortcode('[contact-form-7 id="64" title="Contact"]'); ?>
            <div class="contact-form__rappeler">
                <h3 class="contact-form__rappeler-title">Vous préférez vous faire rappeler ?</h3>
                <button class="btn-primary mtm btn-rappeler">Faites-vous rappeler</button>
            </div>
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



<?php get_footer(); ?>