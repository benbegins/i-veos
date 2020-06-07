<footer class="site-footer site-footer__colors">
    <div class="site-footer__container wrap-contain">
        <h3 class="site-footer__title">L'expertise du tiers payant</h3>
        <div class="site-footer__wrap-content">
            <div class="site-footer__coordonnees site-footer__part">
                <div class="site-footer__coordonnees-adresse">
                    <h4 class="site-footer__coordonnees-title">Adresse</h4>
                    <p class="site-footer__coordonnees-content">
                    Péniche Avant-Seine<br>
                    Port Van Gogh<br>
                    2 Quai Aulagnier<br>
                    92 600 Asnières-sur-Seine
                    </p>
                </div>
                <div>
                    <h4 class="site-footer__coordonnees-title">Téléphone</h4>
                    <p class="site-footer__coordonnees-content">01 47 33 81 44</p>
                    <h4 class="site-footer__coordonnees-title">Fax</h4>
                    <p class="site-footer__coordonnees-content">09 72 39 00 76</p>
                    <h4 class="site-footer__coordonnees-title">Email</h4>
                    <p class="site-footer__coordonnees-content">contact@i-veos.fr</p>
                </div>        
            </div>
            <div class="site-footer__navigation site-footer__part">
                <?php 
                wp_nav_menu( 
                    array( 
                        'theme_location' => 'main', 
                        'container' => 'ul',
                        'menu_class' => 'site-footer__navigation',
                    ) 
                ); 
                ?>
            </div>
            <div class="site-footer__social site-footer__part">
                <ul class="site-footer__social-list">
                    <li>
                        <a href="#" class="icon-linkedin icon-white icon-social">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 29.999">
                                <g id="RS_linkedin" transform="translate(0 0)">
                                    <rect id="Rectangle_11" data-name="Rectangle 11" width="6.192" height="19.999" transform="translate(0.593 10)" fill="#fff"/>
                                    <ellipse id="Ellipse_6" data-name="Ellipse 6" cx="3.661" cy="3.689" rx="3.661" ry="3.689" transform="translate(0 0)" fill="#fff"/>
                                    <path id="Tracé_3" data-name="Tracé 3" d="M32.321,31.278c0-2.789,1.3-4.484,3.773-4.484,2.273,0,3.368,1.611,3.368,4.484V41.773h6.179V29.109c0-5.355-3.033-7.95-7.28-7.95a6.974,6.974,0,0,0-6.039,3.305v-2.72H26.38V41.773h5.941Z" transform="translate(-15.641 -11.773)" fill="#fff"/>
                                </g>
                            </svg>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="site-footer__mentions wrap-contain">
        <p class="txtcenter site-footer__mentions-text"><a href="<?php echo get_site_url() . '/mentions-legales' ?>">Mentions légales</a> - Membre de la FNETP <br>©2020 i-veos</p>
    </div>
    <div class="site-footer__background-right"></div>
</footer>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>