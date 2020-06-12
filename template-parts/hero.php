<section class="site-hero">
    
    <div class="site-hero__background background-dark-pattern"></div>

    <div class="site-hero__image-container">
        <?php the_post_thumbnail( 'fullwidth-size', array( 'sizes' => '(max-width:480px) 450px, (max-width:992px) 800px, 1500px', 'class' => 'site-hero__image')  ); ?>
        <div class="site-hero__image-overlay"></div>
    </div>
    <div class="site-hero__gradient-overlay"></div> 

    <div class="site-hero__title-container wrap-contain">
        <h1 class="site-hero__title"><?php the_field('page_title'); ?></h1>
        <?php if(is_front_page()){ ?>
            <p class="site-hero__baseline">La santé n'a pas de prix, votre trésorerie oui.</p>
        <?php } ?>
    </div>
    
</section>