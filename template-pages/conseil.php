<?php
/*
Template Name: Conseil
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
        <h1 class="site-hero__title">Audit et conseil</h1>
    </div>
    
</section>

<section class="conseil-intro back-white">
    <div class="wrap-contain first-content">
        <div class="bloc-imagetext">
            <div class="bloc-imagetext__image-container">
                <div class="conseil-intro__bloc-1 bloc-couleur back-green-3"></div>
                <img src="<?php echo get_template_directory_uri() . '/public/img/conseil-intro.jpg' ?>" alt="i-veos gestion tiers payant">
            </div>
            <div class="bloc-imagetext__text-container">
                <p class="bloc-imagetext__text text-courant">Installation, reprise de société, changement de logiciel métier ou de matériel informatique, i-veos vous accompagne dans les étapes clés de votre activité.</p>
                <a href="<?php echo get_site_url() . '/contact'; ?>" class="btn-primary-orange mtm">Prenez contact</a>
            </div>
        </div>
    </div>
</section>
<section class="conseil-contenu back-white pad-bot">
    <div class="wrap-contain">
        <div class="conseil-contenu__wrap">
            <p class="conseil-contenu__text text-1 text-courant">Apprenez à maitriser les fonctionnalités du tiers payant et laissez vous guider dans les nombreuses démarche d’une installation ou d’un changement de logiciel.</p>
            <p class="conseil-contenu__text text-2 text-courant">Nous auditons votre installation réseau, informatique, téléphonique et vous conseillons pour trouver des solutions adaptées et plus économiques à votre secteur d’activité.</p>
        </div>
    </div>
</section>

<section class="conseil-services back-white pad-bot">
    <div class="wrap-contain">
        <ul class="conseil-services__list">
            <li class="conseil-services__item item-1">
                <div class="picto-services__icon picto-services__icon-gradient">
                    <svg xmlns="http://www.w3.org/2000/svg" width="76.141" height="76.455" viewBox="0 0 76.141 76.455">
                        <g id="Groupe_52" data-name="Groupe 52" transform="translate(1.25 1.25)">
                            <path id="Tracé_576" data-name="Tracé 576" d="M-4937.322-4073.384v15.361h-12.7v12.7h-15.364v-12.7h-12.7v-15.361h12.7v-12.7h15.364v12.7Z" transform="translate(4978.095 4119.273)" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="2.5"/>
                            <path id="Tracé_577" data-name="Tracé 577" d="M-4874.965-4160.992l4.721,2.8a29.216,29.216,0,0,1-2.532,7.8l-5.468-.508a24.344,24.344,0,0,1-2.714,3.732l2.17,5.039a29.527,29.527,0,0,1-6.635,4.827l-4.119-3.62a24.18,24.18,0,0,1-4.4,1.426l-1.207,5.352a29.881,29.881,0,0,1-4.1.283,29.691,29.691,0,0,1-3.738-.234v-12.766h-12.705v-12.7h-10.249l2.413-1.432q-.109-1.14-.109-2.307c0-.778.037-1.55.109-2.31l-4.723-2.8a29.218,29.218,0,0,1,2.532-7.806l5.468.511a24.346,24.346,0,0,1,2.714-3.735l-2.17-5.037a29.448,29.448,0,0,1,6.635-4.83l4.118,3.623a24.491,24.491,0,0,1,4.4-1.429l1.2-5.349a29.469,29.469,0,0,1,4.1-.286,29.425,29.425,0,0,1,4.1.286l1.207,5.349a24.456,24.456,0,0,1,4.4,1.429l4.119-3.623a29.448,29.448,0,0,1,6.635,4.83l-2.17,5.037a24.346,24.346,0,0,1,2.714,3.735l5.468-.511a29.236,29.236,0,0,1,2.532,7.806l-4.721,2.8q.105,1.14.106,2.307T-4874.965-4160.992Z" transform="translate(4943.755 4192.744)" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="2.5"/>
                            <circle id="Ellipse_11" data-name="Ellipse 11" cx="10.319" cy="10.319" r="10.319" transform="translate(34.192 19.126)" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="2.5"/>
                        </g>
                    </svg>
                </div>
                <h3 class="picto-services__service mts">Accompagnement à la création, reprise ou cessation d’activité</h3>
            </li>
            <li class="conseil-services__item item-1">
                <div class="picto-services__icon picto-services__icon-gradient">
                    <svg xmlns="http://www.w3.org/2000/svg" width="69.887" height="68.717" viewBox="0 0 69.887 68.717">
                        <g id="Groupe_54" data-name="Groupe 54" transform="translate(1.25 1.25)">
                            <rect id="Rectangle_227" data-name="Rectangle 227" width="52.911" height="67.326" transform="translate(67.326 0) rotate(90)" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="2.5"/>
                            <rect id="Rectangle_228" data-name="Rectangle 228" width="13.337" height="21.082" transform="translate(44.204 52.88) rotate(90)" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="2.5"/>
                            <rect id="Rectangle_229" data-name="Rectangle 229" width="38.8" height="53.215" transform="translate(60.271 7.056) rotate(90)" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="2.5"/>
                            <line id="Ligne_49" data-name="Ligne 49" x2="32.959" transform="translate(17.184 66.217)" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="2.5"/>
                            <path id="Tracé_581" data-name="Tracé 581" d="M-4142.347-3982.53a6.387,6.387,0,0,1,6.387-6.387,6.387,6.387,0,0,1,6.387,6.387Z" transform="translate(4196.96 4048.466)" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="2.5"/>
                            <path id="Tracé_563" data-name="Tracé 563" d="M-3730.561-4652.167l-13.258,13.258-6.331,6.333-.366.366-12.237-12.243" transform="translate(3780.484 4668.941)" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="2.5"/>
                        </g>
                    </svg>
                </div>
                <h3 class="picto-services__service mts">Conseil informatique</h3>
            </li>
            <li class="conseil-services__item item-1">
                <div class="picto-services__icon picto-services__icon-gradient">
                    <svg xmlns="http://www.w3.org/2000/svg" width="69.676" height="82.654" viewBox="0 0 69.676 82.654">
                        <g id="Groupe_53" data-name="Groupe 53" transform="translate(0.884 1.25)">
                            <path id="Tracé_578" data-name="Tracé 578" d="M-4556.38-4192.744v67.327h-36.25a13.42,13.42,0,0,0,.638-1.578,13.6,13.6,0,0,0,.687-4.275,13.5,13.5,0,0,0-.6-3.988c-.028-.1-.059-.193-.09-.287a13.6,13.6,0,0,0-6.7-7.806c-.165-.087-.333-.168-.5-.246a13.512,13.512,0,0,0-5.682-1.244,13.619,13.619,0,0,0-2.872.3,13.476,13.476,0,0,0-1.543.433v-48.64Z" transform="translate(4623.922 4192.744)" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="2.5"/>
                            <path id="Tracé_579" data-name="Tracé 579" d="M-4544.758-4056.4v15.065h-23.68c-.028-.1-.059-.193-.09-.287a13.6,13.6,0,0,0-6.7-7.806v-6.973Z" transform="translate(4600.458 4098.824)" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="2.5"/>
                            <line id="Ligne_44" data-name="Ligne 44" x2="31.711" transform="translate(25.232 9.812)" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="2.5"/>
                            <line id="Ligne_45" data-name="Ligne 45" x2="31.711" transform="translate(25.232 17.317)" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="2.5"/>
                            <line id="Ligne_46" data-name="Ligne 46" x2="15.856" transform="translate(41.088 24.822)" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="2.5"/>
                            <line id="Ligne_47" data-name="Ligne 47" x2="15.856" transform="translate(41.088 32.328)" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="2.5"/>
                            <path id="Tracé_580" data-name="Tracé 580" d="M-4611.577-4025.212a13.6,13.6,0,0,1-.687,4.275,13.373,13.373,0,0,1-.638,1.578,13.566,13.566,0,0,1-12.243,7.716,13.524,13.524,0,0,1-9.6-3.973,13.537,13.537,0,0,1-3.976-9.6,13.567,13.567,0,0,1,9.156-12.834,13.474,13.474,0,0,1,1.543-.432,13.619,13.619,0,0,1,2.872-.305,13.5,13.5,0,0,1,5.682,1.245c.168.078.336.159.5.246a13.6,13.6,0,0,1,6.7,7.806c.031.094.062.19.09.286A13.506,13.506,0,0,1-4611.577-4025.212Z" transform="translate(4644.194 4086.687)" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="2.5"/>
                            <line id="Ligne_48" data-name="Ligne 48" x1="9.452" y2="9.45" transform="translate(0 71.069)" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="2.5"/>
                        </g>
                    </svg>
                </div>
                <h3 class="picto-services__service mts">Audit du suivi du tiers payant</h3>
            </li>
        </ul>
    </div>
</section>

<section class="conseil-informatique background-dark-pattern">
    <div class="wrap-contain">
        <div class="conseil-informatique__wrap">
            <div class="conseil-informatique__image-container">
                <img src="<?php echo get_template_directory_uri() . '/public/img/informatique-tour.png' ?>" alt="Tour informatique">
            </div>
            <div class="conseil-informatique__text-container">
                <p class="conseil-informatique__text">Vous changez de système informatique ? <br>I-veos vous fournit et installe votre nouveau matériel.</p>
                <a href="<?php echo get_site_url() . '/informatique'; ?>" class="text-link mtm">Découvrez notre offre informatique</a>
            </div>
        </div>
    </div>
</section>


<div class="bloc-separation"></div>

<?php 
get_template_part( 'template-parts/expertise' ); 


//Temoignage
$temoignage = get_field('temoignage');
// override $post
$post = $temoignage;
setup_postdata( $post );

if($post):

?>
    <section class="temoignage">
        <div class="wrap-contain">
            <div class="temoignage__wrap back-green-3 txtcenter">
                <p class="temoignage__title upper-xbold title-50">Témoignage</p>
                <p class="temoignage__content"><?php the_field('temoignage'); ?></p>
                <p class="temoignage__auteur"><?php the_field('auteur'); ?></p>
                <p class="temoignage__lieu"><?php the_field('societe'); ?></p>
            </div>
        </div>
    </section>
<?php
endif;
// Restore original Post Data
wp_reset_postdata();

get_template_part( 'template-parts/se-faire-rappeler' );
?>

<section class="autres-services">
    <a href="<?php echo get_site_url() . '/gestion-tiers-payant'; ?>" class="autres-services__first autres-services__item autres-services__link">
        <div class="autres-services__image autres-services__image-tierspayant">
            <div class="autres-services__text-container">
                <p class="autres-services__decouvrez">Découvrez notre offre</p>
                <h2 class="autres-services__title upper-xbold title-50">Tiers payant</h2>
            </div>
        </div>
    </a>
    <a href="<?php echo get_site_url() . '/informatique'; ?>" class="autres-services__second autres-services__item autres-services__link">
        <div class="autres-services__image autres-services__image-informatique">
            <div class="autres-services__text-container">
                <p class="autres-services__decouvrez">Découvrez notre offre</p>
                <h2 class="autres-services__title upper-xbold title-50">Informatique</h2>
            </div>
        </div>
    </a>
</section>

<?php
get_footer(); ?>