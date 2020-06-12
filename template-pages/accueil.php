<?php
/*
Template Name: Accueil
Template Post Type: page
*/

get_header();

get_template_part( 'template-parts/hero' );
?>


<section class="services-iveos">
    <div class="wrap-contain">
        <div class="services-iveos__item services-iveos__item-tierspayant">
            <div class="services-iveos__image-container">
                <h2 class="services-iveos__title upper-xbold">Tiers payant</h2>
                <img src="<?php echo get_template_directory_uri() . '/public/img/accueil-tiers-payant.jpg' ?>" alt="i-veos gestion tiers payant">
            </div>
            <div class="services-iveos__text-container">
                <p class="services-iveos__title-rappel">Gestion tiers payant</p>
                <p class="services-iveos__text text-courant">Ne vous souciez plus des impayés, nous traitons vos rejets et assurons la gestion de votre tiers payant. Reposez vous sur l’expertise i-veos et concentrez-vous sur votre coeur de métier.</p>
                <a href="<?php echo get_site_url() . '/gestion-tiers-payant'; ?>" class="text-link mtl">Découvrez notre offre</a> 
            </div>
        </div>
        <div class="services-iveos__item services-iveos__item-conseil">
            <div class="services-iveos__image-container">
                <h2 class="services-iveos__title upper-xbold">Conseil</h2>
                <img src="<?php echo get_template_directory_uri() . '/public/img/accueil-conseil.jpg' ?>" alt="i-veos conseil et audit">
            </div>
            <div class="services-iveos__text-container">
                <p class="services-iveos__title-rappel">Audit et conseil</p>
                <p class="services-iveos__text text-courant">Nous vous accompagnons sur les étapes clés de votre activité et vous aidons à optimiser votre environnement informatique.</p>
                <a href="<?php echo get_site_url() . '/conseil'; ?>" class="text-link mtl">Découvrez notre offre</a> 
            </div>
        </div>
        <div class="services-iveos__item services-iveos__item-informatique">
            <div class="services-iveos__image-container">
                <h2 class="services-iveos__title upper-xbold">Informatique</h2>
                <img src="<?php echo get_template_directory_uri() . '/public/img/accueil-informatique.jpg' ?>" alt="i-veos installation informatique">
            </div>
            <div class="services-iveos__text-container">
                <p class="services-iveos__title-rappel">Installation informatique</p>
                <p class="services-iveos__text text-courant">Vous vous installez ou vous avez besoin d’une mise à jour ? Nous vous proposons des solutions économiques pour l’achat, l’installation et la maintenance de votre matériel informatique.</p>
                <a href="<?php echo get_site_url() . '/informatique'; ?>" class="text-link mtl">Découvrez notre offre</a> 
            </div>
        </div>
    </div>
</section>

<div class="bloc-separation"></div>

<?php get_template_part( 'template-parts/expertise' ); ?>

<section class="testimonial-home">
    <div class="wrap-contain">
        <ul class="testimonial-home__list">
            <li class="testimonial-home__item back-green-3 txtcenter">
                <p class="testimonial-home__excerpt">"Lorem ipsum dolor sit amet consectetur adipisicing elit."</p>
                <p class="testimonial-home__auteur">Sylvie</p>
                <p class="testimonial-home__lieu">Pharmacie de la cigogne</p>
            </li>
            <li class="testimonial-home__item back-green-2 txtcenter">
                <p class="testimonial-home__excerpt">"Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iste, quisquam?"</p>
                <p class="testimonial-home__auteur">Sylvie</p>
                <p class="testimonial-home__lieu">Pharmacie de la cigogne</p>
            </li>
            <li class="testimonial-home__item back-green-1 txtcenter">
                <p class="testimonial-home__excerpt">"Lorem ipsum dolor."</p>
                <p class="testimonial-home__auteur">Sylvie</p>
                <p class="testimonial-home__lieu">Pharmacie de la cigogne</p>
            </li>
        </ul>
    </div>
</section>

<?php
get_template_part( 'template-parts/se-faire-rappeler' );

get_footer(); ?>