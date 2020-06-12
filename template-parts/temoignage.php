<?php 
$temoignage = get_field('temoignage');

if($temoignage['temoignage']):
?>
<section class="temoignage">
    <div class="wrap-contain">
        <div class="temoignage__wrap back-green-3 txtcenter">
            <p class="temoignage__title upper-xbold title-50">Témoignage</p>
            <p class="temoignage__content"><?php echo $temoignage['temoignage']; ?></p>
            <p class="temoignage__auteur"><?php echo $temoignage['auteur']; ?></p>
            <p class="temoignage__lieu"><?php echo $temoignage['societe']; ?></p>
        </div>
    </div>
</section>
<?php    
endif;
?>