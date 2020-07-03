<?php
/*
Template Name: Accueil
Template Post Type: page
*/

get_header();

?>

<section class="site-hero">
    
    <div class="site-hero__background background-dark-pattern"></div>

    <div class="site-hero__image-container">
        <?php the_post_thumbnail( 'fullwidth-size', array( 'sizes' => '(max-width:480px) 450px, (max-width:992px) 800px, 1500px', 'class' => 'site-hero__image')  ); ?>
        <div class="site-hero__image-overlay"></div>
        <div class="site-hero__image-reveal"></div>
        <div class="bloc-couleur back-green-1 bloc-1"></div>
    </div>
    <div class="site-hero__gradient-overlay"></div> 

    <div class="site-hero__title-container wrap-contain">
        <h1 class="site-hero__title">L'expertise du tiers payant</h1>
        <p class="site-hero__baseline">La santé n'a pas de prix, votre trésorerie oui.</p>
    </div>
    
</section>


<section class="services-iveos back-white">
    <div class="wrap-contain first-content">
        <div class="services-iveos__item services-iveos__item-tierspayant">
            <div class="services-iveos__image-container">
                <div class="services-iveos__bloc-1 bloc-couleur back-green-3"></div>
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
                <div class="services-iveos__bloc-2 bloc-couleur back-green-2"></div>
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
                <div class="services-iveos__bloc-3 bloc-couleur back-green-1"></div>
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
            <?php 
                $temoignage = get_field('premier_temoignage');
                $post = $temoignage;
                setup_postdata( $post );

                if($post):

                $temoignage1 = get_field('temoignage');
                $extrait1 = get_field('extrait');
                $auteur1 = get_field('auteur');
                $societe1 = get_field('societe');
            ?>
            <li class="testimonial-home__item txtcenter">
                <p class="testimonial-home__excerpt"><?php echo $extrait1; ?></p>
                <p class="testimonial-home__auteur"><?php echo $auteur1; ?></p>
                <p class="testimonial-home__lieu"><?php echo $societe1; ?></p>
            </li>
            
            <?php
                endif;
                wp_reset_postdata();
                $temoignage = get_field('second_temoignage');
                $post = $temoignage;
                setup_postdata( $post );

                if($post):

                $temoignage2 = get_field('temoignage');
                $extrait2 = get_field('extrait');
                $auteur2 = get_field('auteur');
                $societe2 = get_field('societe');
                ?>
                <li class="testimonial-home__item txtcenter">
                    <p class="testimonial-home__excerpt"><?php echo $extrait2; ?></p>
                    <p class="testimonial-home__auteur"><?php echo $auteur2; ?></p>
                    <p class="testimonial-home__lieu"><?php echo $societe2; ?></p>
                </li>
            <?php
                endif;
                wp_reset_postdata();

                $temoignage = get_field('troisieme_temoignage');
                $post = $temoignage;
                setup_postdata( $post );

                if($post):
                    
                $temoignage3 = get_field('temoignage');
                $extrait3 = get_field('extrait');
                $auteur3 = get_field('auteur');
                $societe3 = get_field('societe');
            ?>
            <li class="testimonial-home__item txtcenter">
                <p class="testimonial-home__excerpt"><?php echo $extrait3; ?></p>
                <p class="testimonial-home__auteur"><?php echo $auteur3; ?></p>
                <p class="testimonial-home__lieu"><?php echo $societe3; ?></p>
            </li>
            <?php
                endif;
                wp_reset_postdata();
            ?>
        </ul>
    </div>

    <div class="testimonial-home__full-wrap back-green-3 txtcenter testimonial-1">
        <div class="btn-close btn-close-white"><span class="close-icon"></span><span class="close-text">fermer</span></div>
        <div class="testimonial-home__full-textcontainer">
            <p class="testimonial-home__full text-courant mbl"><?php echo $temoignage1; ?></p>
            <p class="testimonial-home__auteur"><?php echo $auteur1; ?></p>
            <p class="testimonial-home__lieu"><?php echo $societe1; ?></p> 
        </div> 
    </div>
    <div class="testimonial-home__full-wrap back-green-2 txtcenter testimonial-2">
        <div class="btn-close btn-close-white"><span class="close-icon"></span><span class="close-text">fermer</span></div>
        <div class="testimonial-home__full-textcontainer">
            <p class="testimonial-home__full text-courant mbl"><?php echo $temoignage2; ?></p>
            <p class="testimonial-home__auteur"><?php echo $auteur2; ?></p>
            <p class="testimonial-home__lieu"><?php echo $societe2; ?></p>
        </div> 
    </div>
    <div class="testimonial-home__full-wrap back-green-1 txtcenter testimonial-3">
        <div class="btn-close btn-close-white"><span class="close-icon"></span><span class="close-text">fermer</span></div>
        <div class="testimonial-home__full-textcontainer">
            <p class="testimonial-home__full text-courant mbl"><?php echo $temoignage3; ?></p>
            <p class="testimonial-home__auteur"><?php echo $auteur3; ?></p>
            <p class="testimonial-home__lieu"><?php echo $societe3; ?></p>
        </div> 
    </div>
    <div class="cursor-testimonial"></div>
</section>

<?php
get_template_part( 'template-parts/se-faire-rappeler' );
get_footer(); ?>