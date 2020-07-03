<?php
/*
Template Name: Gestion Tiers Payant
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
        <h1 class="site-hero__title">Gestion tiers payant</h1>
    </div>
    
</section>

<section class="tierspayant-intro back-white">
    <div class="wrap-contain first-content">
        <div class="bloc-imagetext">
            <div class="bloc-imagetext__image-container">
                <div class="tierspayant-intro__bloc-1 bloc-couleur back-green-3"></div>
                <img src="<?php echo get_template_directory_uri() . '/public/img/tierspayant-intro.jpg' ?>" alt="i-veos gestion tiers payant">
            </div>
            <div class="bloc-imagetext__text-container">
                <p class="bloc-imagetext__text text-courant">I-veos traite vos rejets et assure la gestion de votre tiers payant afin de réduire vos impayés et sauvegarder votre trésorerie.</p>
                <p class="bloc-imagetext__text text-courant">Nous définissons ensemble la formule adaptée à vos besoins et vous accompagnons de la gestion des impayés à la télétransmission.</p>
                <a href="<?php echo get_site_url() . '/contact'; ?>" class="btn-primary-orange mtm">Prenez contact</a>
            </div>
        </div>
    </div>
</section>

<section class="tierspayant-liberez-vous back-white">
    <div class="wrap-contain txtcenter">
        <h2 class="tierspayant-liberez-vous__title upper-xbold title-50">Libérez-vous</h2>
        <p class="tierspayant-liberez-vous__text text-courant">des démarches chronophages, reposez vous sur l’expertise
i-veos et concentrez-vous sur votre coeur de métier.</p>
    </div>
</section>

<section class="tierspayant-services back-white">
    <div class="wrap-contain">
        <ul class="tierspayant-services__list">
            <li class="tierspayant-services__item item-1">
                <div class="picto-services__icon picto-services__icon-gradient">
                    <svg xmlns="http://www.w3.org/2000/svg" width="50.93" height="70.99" viewBox="0 0 50.93 70.99">
                        <g id="Groupe_42" data-name="Groupe 42" transform="translate(1.25 0.898)">
                            <line id="Ligne_26" data-name="Ligne 26" x1="28.212" y2="28.212" transform="translate(10.109 20.491)" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="2.5"/>
                            <line id="Ligne_27" data-name="Ligne 27" x1="28.212" y1="28.212" transform="translate(10.109 20.491)" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="2.5"/>
                            <path id="Tracé_550" data-name="Tracé 550" d="M-4908.771-4722.228a34.244,34.244,0,0,1,48.43,0" transform="translate(4908.771 4732.61)" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="2.5"/>
                            <path id="Tracé_551" data-name="Tracé 551" d="M-4860.341-4530.741a34.245,34.245,0,0,1-48.43,0" transform="translate(4908.771 4589.552)" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="2.5"/>
                            <path id="Tracé_552" data-name="Tracé 552" d="M-4908.771-4733.469v10.382h10.382" transform="translate(4908.771 4733.469)" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="2.5"/>
                            <path id="Tracé_553" data-name="Tracé 553" d="M-4767.233-4520.359v-10.382h-10.382" transform="translate(4815.663 4589.552)" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="2.5"/>
                        </g>
                    </svg>
                </div>
                <h3 class="picto-services__service mts">Retraitement des rejets</h3>
            </li>
            <li class="tierspayant-services__item item-2">
                <div class="picto-services__icon picto-services__icon-gradient">
                    <svg xmlns="http://www.w3.org/2000/svg" width="62.504" height="52.495" viewBox="0 0 62.504 52.495">
                        <g id="Groupe_43" data-name="Groupe 43" transform="translate(1.25 1.25)">
                            <path id="Tracé_554" data-name="Tracé 554" d="M-4502.959-4602.161l-7.341-7.341-7.341,7.341" transform="translate(4540.302 4636.491)" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="2.5"/>
                            <path id="Tracé_555" data-name="Tracé 555" d="M-4579.31-4661.671h-16.446v-40.863h60v40.863H-4552.2" transform="translate(4595.756 4702.534)" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="2.5"/>
                            <path id="Tracé_556" data-name="Tracé 556" d="M-4535.752-4702.534l-30,15.243-30-15.243" transform="translate(4595.756 4702.534)" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="2.5"/>
                            <line id="Ligne_28" data-name="Ligne 28" y2="24.256" transform="translate(30.002 26.989)" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="2.5"/>
                        </g>
                    </svg>
                </div>
                <h3 class="picto-services__service mts">Relance des impayés</h3>
            </li>
            <li class="tierspayant-services__item item-3">
                <div class="picto-services__icon picto-services__icon-gradient">
                    <svg xmlns="http://www.w3.org/2000/svg" width="80.594" height="74.243" viewBox="0 0 80.594 74.243">
                        <g id="Groupe_44" data-name="Groupe 44" transform="translate(1.25 1.25)">
                            <path id="Tracé_557" data-name="Tracé 557" d="M-4231.5-4714.469a34.32,34.32,0,0,1,31.038-19.651,34.325,34.325,0,0,1,31.137,19.859" transform="translate(4239.461 4734.12)" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="2.5"/>
                            <path id="Tracé_558" data-name="Tracé 558" d="M-4103.78-4547.843a34.36,34.36,0,0,0,25.36-19.857" transform="translate(4148.792 4615.979)" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="2.5"/>
                            <path id="Rectangle_216" data-name="Rectangle 216" d="M7.96,0h0a0,0,0,0,1,0,0V28.661a0,0,0,0,1,0,0h0A7.96,7.96,0,0,1,0,20.7V7.96A7.96,7.96,0,0,1,7.96,0Z" transform="translate(0 19.619)" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="2.5"/>
                            <path id="Rectangle_217" data-name="Rectangle 217" d="M0,0H0A7.96,7.96,0,0,1,7.96,7.96V20.7A7.96,7.96,0,0,1,0,28.661H0a0,0,0,0,1,0,0V0A0,0,0,0,1,0,0Z" transform="translate(70.134 19.619)" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="2.5"/>
                            <rect id="Rectangle_218" data-name="Rectangle 218" width="6.164" height="13.07" rx="3.082" transform="translate(31.99 71.743) rotate(-90)" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="2.5"/>
                        </g>
                    </svg>
                </div>
                <h3 class="picto-services__service mts">Assistance téléphonique</h3>
            </li>
            <li class="tierspayant-services__item item-4">
                <div class="picto-services__icon picto-services__icon-gradient">
                    <svg xmlns="http://www.w3.org/2000/svg" width="71.057" height="71.882" viewBox="0 0 71.057 71.882">
                        <g id="Groupe_45" data-name="Groupe 45" transform="translate(1.25 1.25)">
                            <path id="Tracé_559" data-name="Tracé 559" d="M-3840.033-4655.176v6.607h-49.334v-62.774h6.331" transform="translate(3889.367 4717.951)" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="2.5"/>
                            <path id="Tracé_560" data-name="Tracé 560" d="M-3818.211-4706.258v-27.862h-49.334v6.607h43v27.585" transform="translate(3873.875 4734.12)" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="2.5"/>
                            <path id="Tracé_561" data-name="Tracé 561" d="M-3712.979-4582.193v16.571h-6.331v-10.237" transform="translate(3768.644 4628.397)" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="2.5"/>
                            <line id="Ligne_29" data-name="Ligne 29" x2="10.13" transform="translate(6.331 13.627)" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="2.5"/>
                            <line id="Ligne_30" data-name="Ligne 30" x2="7.85" transform="translate(6.331 18.015)" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="2.5"/>
                            <path id="Tracé_562" data-name="Tracé 562" d="M-3831.078-4629.21v5.374h-36.467v-28.331h36.467v4.613" transform="translate(3873.875 4675.941)" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="2.5"/>
                            <rect id="Rectangle_219" data-name="Rectangle 219" width="9.876" height="4.526" transform="translate(32.921 57.444)" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="2.5"/>
                            <path id="Tracé_563" data-name="Tracé 563" d="M-3730.561-4652.167l-13.258,13.258-6.331,6.333-.366.366-12.237-12.243" transform="translate(3799.484 4675.941)" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="2.5"/>
                        </g>
                    </svg>
                </div>
                <h3 class="picto-services__service mts">Pointage des factures</h3>
            </li>
            <li class="tierspayant-services__item item-5">
                <div class="picto-services__icon picto-services__icon-gradient">
                    <svg xmlns="http://www.w3.org/2000/svg" width="69.911" height="69.74" viewBox="0 0 69.911 69.74">
                        <g id="Groupe_46" data-name="Groupe 46" transform="translate(1.25)">
                            <path id="Tracé_564" data-name="Tracé 564" d="M-3478.313-4496.167" transform="translate(3512.019 4564.657)" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="2.5"/>
                            <path id="Tracé_565" data-name="Tracé 565" d="M-3463.7-4671.845a33.713,33.713,0,0,1,29.465,33.442v17.522" transform="translate(3501.643 4689.371)" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="2.5"/>
                            <path id="Tracé_566" data-name="Tracé 566" d="M-3560.794-4645.5a12.38,12.38,0,0,1,12.38,12.38,12.379,12.379,0,0,1-12.38,12.379H-3594.5v-17.522a33.713,33.713,0,0,1,29.038-33.386" transform="translate(3594.5 4689.232)" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="2.5"/>
                            <line id="Ligne_31" data-name="Ligne 31" x2="21.021" transform="translate(12.685 43.73)" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="2.5"/>
                            <line id="Ligne_32" data-name="Ligne 32" x1="15.834" y2="24.749" transform="translate(28.526 18.982)" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="2.5"/>
                            <line id="Ligne_33" data-name="Ligne 33" x1="13.765" y2="21.512" transform="translate(40.411 24.19)" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="2.5"/>
                            <line id="Ligne_34" data-name="Ligne 34" y2="24.446" transform="translate(19.653 43.73)" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="2.5"/>
                            <line id="Ligne_35" data-name="Ligne 35" y2="24.446" transform="translate(26.572 43.73)" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="2.5"/>
                            <line id="Ligne_36" data-name="Ligne 36" y1="24.446" transform="translate(33.492 43.73)" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="2.5"/>
                            <line id="Ligne_37" data-name="Ligne 37" y2="20.816" transform="translate(40.411 45.702)" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="2.5"/>
                            <path id="Tracé_567" data-name="Tracé 567" d="M-3502.309-4732.257a16.072,16.072,0,0,1-16.072,16.072,16.071,16.071,0,0,1-16.072-16.072" transform="translate(3551.872 4732.257)" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="2.5"/>
                            <path id="Tracé_568" data-name="Tracé 568" d="M-3494.406-4679.016v2.623a4.456,4.456,0,0,0,4.454,4.456,4.455,4.455,0,0,0,4.454-4.456v-2.623" transform="translate(3523.443 4694.461)" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="2.5"/>
                        </g>
                    </svg>
                </div>
                <h3 class="picto-services__service mts">Gestion des accidents de travail et HAD</h3>
            </li>
            <li class="tierspayant-services__item item-6">
                <div class="picto-services__icon picto-services__icon-gradient">
                    <svg xmlns="http://www.w3.org/2000/svg" width="51.834" height="65.275" viewBox="0 0 51.834 65.275">
                        <g id="Groupe_47" data-name="Groupe 47" transform="translate(1.25 1.25)">
                            <rect id="Rectangle_220" data-name="Rectangle 220" width="49.334" height="62.775" transform="translate(0 0)" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="2.5"/>
                            <rect id="Rectangle_221" data-name="Rectangle 221" width="6.233" height="6.233" transform="translate(8.045 7.02)" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="2.5"/>
                            <rect id="Rectangle_222" data-name="Rectangle 222" width="6.233" height="6.233" transform="translate(8.045 19.871)" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="2.5"/>
                            <rect id="Rectangle_223" data-name="Rectangle 223" width="6.233" height="6.233" transform="translate(8.045 32.722)" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="2.5"/>
                            <line id="Ligne_38" data-name="Ligne 38" x2="16.207" transform="translate(20.779 10.136)" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="2.5"/>
                            <line id="Ligne_39" data-name="Ligne 39" x2="16.207" transform="translate(20.779 22.987)" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="2.5"/>
                            <line id="Ligne_40" data-name="Ligne 40" x2="16.207" transform="translate(20.779 35.838)" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="2.5"/>
                        </g>
                    </svg>
                </div>
                <h3 class="picto-services__service mts">Récupération des chiffres clés du tiers payant</h3>
            </li>
            <li class="tierspayant-services__item item-7">
                <div class="picto-services__icon picto-services__icon-gradient">
                    <svg xmlns="http://www.w3.org/2000/svg" width="58.642" height="38.128" viewBox="0 0 58.642 38.128">
                        <g id="Groupe_50" data-name="Groupe 50" transform="translate(0.884 1.768)">
                            <g id="Groupe_48" data-name="Groupe 48" transform="translate(0 0)">
                            <path id="Tracé_569" data-name="Tracé 569" d="M-2902.257-4649.351l-10.469-10.469-10.47,10.469" transform="translate(2923.196 4659.82)" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="2.5"/>
                            <line id="Ligne_41" data-name="Ligne 41" y2="34.593" transform="translate(10.47)" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="2.5"/>
                            </g>
                            <g id="Groupe_49" data-name="Groupe 49" transform="translate(35.936 0)">
                            <path id="Tracé_570" data-name="Tracé 570" d="M-2799.324-4576.663l10.47,10.469,10.469-10.469" transform="translate(2799.324 4600.787)" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="2.5"/>
                            <line id="Ligne_42" data-name="Ligne 42" y1="34.593" transform="translate(10.47)" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="2.5"/>
                            </g>
                        </g>
                    </svg>
                </div>
                <h3 class="picto-services__service mts">Télétransmission, suivi des lots et indus</h3>
            </li>
            <li class="tierspayant-services__item item-8">
                <div class="picto-services__icon picto-services__icon-gradient">
                    <svg xmlns="http://www.w3.org/2000/svg" width="74.616" height="85.976" viewBox="0 0 74.616 85.976">
                        <g id="Groupe_51" data-name="Groupe 51" transform="translate(0.884 1.441)">
                            <path id="Tracé_571" data-name="Tracé 571" d="M-2488.206-4527.63v7.972h-42.711a12.662,12.662,0,0,0,.641-3.986,12.661,12.661,0,0,0-.641-3.986Z" transform="translate(2560.688 4589.536)" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="2.5"/>
                            <rect id="Rectangle_224" data-name="Rectangle 224" width="62.98" height="7.973" transform="translate(9.502 18.062)" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="2.5"/>
                            <path id="Tracé_572" data-name="Tracé 572" d="M-2573.571-4651.282v28.366a12.574,12.574,0,0,0-5.3-1.161,12.724,12.724,0,0,0-2.677.284v-27.489Z" transform="translate(2596.628 4677.317)" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="2.5"/>
                            <rect id="Rectangle_225" data-name="Rectangle 225" width="35.87" height="7.973" transform="translate(66.901 26.036) rotate(90)" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="2.5"/>
                            <path id="Tracé_573" data-name="Tracé 573" d="M-2600.784-4722.964l31.49-18.062,31.49,18.062" transform="translate(2610.286 4741.026)" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="2.5"/>
                            <path id="Tracé_574" data-name="Tracé 574" d="M-2507.547-4619.332v7.972h-6.594v6.594h-7.974v-6.594h-6.594v-7.972h6.594v-6.594h7.974v6.594Z" transform="translate(2559.12 4659.316)" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="2.5"/>
                            <path id="Tracé_575" data-name="Tracé 575" d="M-2590.628-4544.852a12.682,12.682,0,0,1-.64,3.987,12.657,12.657,0,0,1-12.011,8.666,12.618,12.618,0,0,1-8.947-3.7,12.621,12.621,0,0,1-3.706-8.948,12.658,12.658,0,0,1,9.976-12.369,12.724,12.724,0,0,1,2.677-.283,12.588,12.588,0,0,1,5.3,1.16,12.684,12.684,0,0,1,6.714,7.506A12.672,12.672,0,0,1-2590.628-4544.852Z" transform="translate(2621.04 4610.744)" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="2.5"/>
                            <line id="Ligne_43" data-name="Ligne 43" x1="8.813" y2="8.812" transform="translate(0 74.84)" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="2.5"/>
                        </g>
                    </svg>
                </div>
                <h3 class="picto-services__service mts">Référencement auprès des organismes</h3>
            </li>
        </ul>
    </div>
</section>

<section class="tierspayant-externaliser background-dark-pattern">
    <div class="wrap-contain">
        <h2 class="tierspayant-externaliser__title upper-xbold title-50">Pourquoi externaliser votre gestion du tiers payant ?</h2>
        <ul class="tierspayant-externaliser__list">
            <li class="tierspayant-externaliser__item item1">
                Réduisez vos impayés et améliorez votre trésorerie.
            </li>
            <li class="tierspayant-externaliser__item item2">
                Libérez vous d’une tâche chronophage.
            </li>
            <li class="tierspayant-externaliser__item item3">
                Consacrez-vous à votre cœur de métier.
            </li>
        </ul>
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
    <a href="<?php echo get_site_url() . '/conseil'; ?>" class="autres-services__first autres-services__item autres-services__link">
        <div class="autres-services__image autres-services__image-conseil">
            <div class="autres-services__text-container">
                <p class="autres-services__decouvrez">Découvrez notre offre</p>
                <h2 class="autres-services__title upper-xbold title-50">Conseil</h2>
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