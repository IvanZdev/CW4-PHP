<footer>

    <img  class="logo-footer" src="<?php bloginfo ("template_url")?>/images/logo.png" alt=""/>

    <h5>Suivez-nous sur les réseaux sociaux</h5>




    <?php if( have_rows('cw4_footer_media_sociaux' , "option") ): ?>
    <ul class="reseaux-sociaux-liste">
        <?php while( have_rows('cw4_footer_media_sociaux' , "option") ): the_row(); ?>
        <?php if ( get_sub_field('ms_type') === 'Facebook' ) : ?>
        <li><a href="<?php the_sub_field('ms_URL'); ?>"> <i class="fab fa-facebook-f"></i></a></li>
        <?php endif; ?>

            <?php if ( get_sub_field('ms_type') === 'Twitter' ) : ?>
                <li><a href="<?php the_sub_field('ms_URL'); ?>"> <i class="fab fa-twitter"></i></a></li>
            <?php endif; ?>

            <?php if ( get_sub_field('ms_type') === 'Snapchat' ) : ?>
                <li><a href="<?php the_sub_field('ms_URL'); ?>"> <i class="fab fa-snapchat"></i></a></li>
            <?php endif; ?>

            <?php if ( get_sub_field('ms_type') === 'Instagram' ) : ?>
                <li><a href="<?php the_sub_field('ms_URL'); ?>"> <i class="fab fa-instagram"></i></a></li>
            <?php endif; ?>

        <?php endwhile; ?>

    </ul>
    <?php endif; ?>

    <h5>Téléchargez notre application</h5>


    <div class="download-appstore-liste">


        <a href="https://www.apple.com/">
            <img  class="iphone-logo-img" alt="iphone-appstore" src="<?php bloginfo ("template_url")?>/images/logo-iphone-download.png">
        </a>


        <div class="width-entre-image"></div>


        <a href="https://play.google.com">
            <img  alt="googleplay-store" src="<?php bloginfo ("template_url")?>/images/google-play-badge.png">
        </a>




    </div>

    <div class="credits-footer">

        <p>Projet fictif réalisé dans le cadre du cours Design d’expériences
            Techniques d’intégration multimédia - Collège Édouard-Montpetit
        </p>
        <hr>
        <p>© Les photographies associées aux invités du festival ne sont utilisées que dans un contexte scolaire et demeurent la propriété intellectuelle exclusives des photographes.
            En cas de diffusion du projet sur le Web (ex. : Portfolio), les photographies des invités du festival devront être changées pour des images libres de droits.
        </p>

    </div>

</footer>

<?php wp_footer();?>

</body>
</html>