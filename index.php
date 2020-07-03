<?php get_header("dark"); ?>

<section class="hero-text back-white">
    <div class="wrap-contain">
        <h1 class="hero-text__title"><?php the_title(); ?></h1>
    </div>
</section>

<section class="page-text back-white pad-bot">
    <div class="wrap-contain first-content">
        <?php 
        if(have_posts()):
            while(have_posts()):
        
                the_post();
                the_content(); 
            
            endwhile;
        endif;
        ?>
    </div>
</section>

<?php get_footer(); ?>