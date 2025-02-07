
<div class="strate container-image-on-text  img-dark white">

    <img src="<?= get_stylesheet_directory_uri(); ?>/images/footer.jpg" alt="" width="1438" height="1002" loading="lazy">

    <div class="container">
        <div class="row">
            <div class="col-sm-8 mx-auto center">
                <div class="containter-text">
                    <h2>Demander l’étude de votre projet <strong>gratuitement</strong></h2>
                    <p>Chez JADEN, nous croyons que chaque projet mérite une attention particulière dès ses premières étapes. C’est pourquoi nous vous offrons une étude gratuite de votre projet de construction. Prenez rendez-vous avec nos experts pour discuter de vos besoins, de vos envies, et de vos contraintes. Ensemble, nous analyserons vos attentes afin de vous fournir des solutions personnalisées et adaptées à votre budget.</p>


                    <div class="container-buttons">
                        <a href="https://contact.com" target="" class="button primary ">
                            Contactez-nous
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<?php
    $option_logo_footer = get_field('option_logo_footer', 'option');
    $option_logo_footer_array = get_custom_thumb($option_logo_footer, 'full');
?>
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <a href="<?= get_site_url(); ?>">
                            <img src="<?= $option_logo_footer_array['url']; ?>" class="logo-footer" alt="<?= $option_logo_footer_array['alt']; ?>">
                        </a>
                    </div>
                    <div class="col-sm-3">
                        <p>Accès Rapide</p>
                        <?= wp_nav_menu(array(
                            'menu'				=> "menu", // (int|string|WP_Term) Desired menu. Accepts a menu ID, slug, name, or object.
                            'menu_class'		=> "",
                            'container_class'	=> "menu",// (string) CSS class to use for the ul element which forms the menu. Default 'menu'.
                        )); ?>
                    </div>
                    <div class="col-sm-3">
                        <p>Liens utiles</p>
                        <?= wp_nav_menu(array(
                            'menu'				=> "footer", // (int|string|WP_Term) Desired menu. Accepts a menu ID, slug, name, or object.
                            'menu_class'		=> "",
                            'container_class'	=> "menu",// (string) CSS class to use for the ul element which forms the menu. Default 'menu'.
                        )); ?>
                    </div>
                    <div class="col-sm-3">
                        <?php get_template_part('template-parts/general/bloc-social');?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 center">
                        <div class="copyright">
                            Site Web By <a href="https://crescendo-studio.io/" rel="noopener" target="_blank">Crescendo</a> ©<?= date("Y"); ?> Tous droits reservés
                        </div>
                    </div>
                </div>
            </div>
        </footer>


        <?php
        $cookieConsent = $_COOKIE["cookieyes-consent"];

        $searchConsent = strpos($cookieConsent, 'analytics:yes');

        if($searchConsent && get_field('option_ga_code', 'option')):
            echo get_field('option_ga_code', 'option');
        endif;
        ?>




        <?php if(get_field('option_structured_datas', 'option')): ?>
            <?= get_field('option_structured_datas', 'option'); ?>
        <?php endif; ?>

        <?php wp_footer(); ?>
    </body>
</html>