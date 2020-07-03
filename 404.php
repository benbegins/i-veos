<?php get_header("dark"); ?>

<section class="hero-404 back-white pad-bot">
    <div class="wrap-contain hero-404__wrap">
		<div class="hero-404__text-container">
			<h1 class="hero-404__oups upper-xbold">Oups...</h1>
			<p class="hero-404__erreur upper-xbold">Erreur 404</p>
		</div>
		<div class="hero-404__image-container">
			<div class="bloc-couleur hero-404__bloc-1"></div>
			<img src="https://media.giphy.com/media/32aTqconrLrYKFqdAw/giphy.gif" alt="">
		</div>
    </div>
</section>

<section class="main-404 back-white pad-bot">
    <div class="wrap-contain">
       	<p class="main-404__text">Nous ne parvenons pas à trouver la page que vous cherchez. <br>Bien entendu, quelqu’un sera réprimandé…</p>
		<p class="main-404__text">N’hésitez pas à continuer votre visite&nbsp;:</p>
		<ul>
			<li><a href="<?php echo get_site_url() . '/gestion-tiers-payant'; ?>" class="text-link">Gestion tiers payant</a></li>
			<li><a href="<?php echo get_site_url() . '/conseil'; ?>" class="text-link">Audit et conseil</a></li>
			<li><a href="<?php echo get_site_url() . '/informatique'; ?>" class="text-link">Installation informatique</a></li>
		</ul>
    </div>
</section>

<?php get_footer(); ?>