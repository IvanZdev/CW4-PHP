
<?php get_header(); ?>

<section class="hero">
    <div class="header-padding"></div>
    <div class="hero-contenu">

        <h1><?php the_field('cw4_titre_principale_evenement' ,'option');?></h1>
        <h2><?php the_field('cw4_sous_titre_principale' ,'option');?></h2>

        <script>
            <?php $posts = get_field('cw4_date_de_chaos_media','option'); ?>
            var countDownDate = new Date("<?php echo ("$posts")?>").getTime();

            var x = setInterval(function() {
                var now = new Date().getTime();
                var distance = countDownDate - now;
                var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));

                document.getElementById("demo").innerHTML = days + " Jours " + hours + " heures "
                    + minutes + " minutes " ;
                if (distance < 0) {
                    clearInterval(x);
                    document.getElementById("demo").innerHTML = "EXPIRED";
                }
            }, 1000);
        </script>

        <h3 id="demo"></h3>






        <hr class="separateur-demo">
        <p><?php the_field('cw4_adresse_de_evenement' ,'option');?></p>

        <a class="savoir-plus" href="#">En Savoir plus</a>
    </div>


    <div class="hero-contenu-information">

        <h4><?php the_field('cw4_titre_introduction' ,'option');?></h4>
        <hr class="border-titre-h4">
        <p><?php the_field('cw4_description_evenement', 'option');?></p>


    </div>

</section>

<section class="aventures-section">

<!-------------------------- Carrousel pour mobile---------------------------------------------------------->

    <div class="slideshow-container">


        <?php
        query_posts(array(

            "post_type" => "cw4_activites" ,
            "post_status" => "publish" ,
            "showposts" => 19,
            "order"    => "DESC"

        ));
        ?>


        <?php if(have_posts()): ?>
        <?php while (have_posts()) : the_post(); ?>

        <div class="mySlides">


            <a href="<?php the_permalink(); ?>">
                <img src="<?php the_post_thumbnail_url('full'); ?>" alt="prison">
                <div class="info-aventure-mobile">
                    <h5><?php the_title();?></h5>
                    <hr class="aventures-border">
                    <ul class="info-liste-mobile">
                        <li><i class="fas fa-dollar-sign"></i><span><?php the_field('cw4_cout_pour_une_personne_actvitiés'); ?>$ par personne</span></li>
                        <li><i class="far fa-clock"></i><?php the_field('cw4_dure_de_lactivite'); ?> m</li>
                        <li><i class="fas fa-user"></i><?php the_field('cw4_nombre_de_personnes_activites'); ?></li>
                    </ul>
                </div>
            </a>



        </div>

  <?php endwhile; ?>

            <?php endif; ?>

            <?php wp_reset_query(); ?>

        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>



    <!-------------------------- Aventures notmobile ( fullscreen )--------------------------------------------------->


    <?php
    query_posts(array(

        "post_type" => "cw4_activites" ,
        "post_status" => "publish" ,
        "showposts" => 9,
        "order"    => "DESC"

    ));
    ?>

    <?php if(have_posts()): ?>

        <?php while (have_posts()) : the_post(); ?>


    <a class="aventure-contenu notmobile" href="<?php the_permalink(); ?>">




        <article>

            <div class="image-aventures">   <img src="<?php the_post_thumbnail_url('full'); ?>" alt=""> </div>


            <div class="info-aventure">

                <h5><?php the_title();?></h5>
                <hr class="aventures-border">

                <ul class="info-liste">
                    <li><i class="fas fa-dollar-sign"></i><span><?php the_field('cw4_cout_pour_une_personne_actvitiés'); ?>$ par personne</span></li>
                    <li><i class="far fa-clock"></i><?php the_field('cw4_dure_de_lactivite'); ?> m</li>
                    <li><i class="fas fa-user"></i><?php the_field('cw4_nombre_de_personnes_activites'); ?></li>
                </ul>


            </div>

        </article>

    </a>

    <?php endwhile; ?>

    <?php endif; ?>

    <?php wp_reset_query(); ?>



</section>


<section class="reviews-cw4">
    <div class="review-contenu-cw4">
        <h4>Voillà ce que nos aventuriers pensent</h4>
        <hr class="border-titre-h4">
    </div>
    <div class="endroit-carrousel-review">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="<?php bloginfo ("template_url")?>/images/tyler.jpg" alt="">
                    <p>“Amazing experience i love it a lot. Thanks to the team
                        dreams come true, great!
                    </p>
                    <p class="nom-personne">Nick Skywalker</p>
                </div>

                <div class="swiper-slide">
                    <img src="<?php bloginfo ("template_url")?>/images/danny.jpg" alt="">
                    <p>“Amazing experience i love it a lot. Thanks to the team
                        dreams come true, great!
                    </p>
                    <p class="nom-personne">Danny Vladkov</p>

                </div>

                <div class="swiper-slide">
                    <img src="<?php bloginfo ("template_url")?>/images/miguel.jpg" alt="">
                    <p>“Amazing experience i love it a lot. Thanks to the team
                        dreams come true, great!
                    </p>
                    <p class="nom-personne">Miguel Johnson</p>

                </div>



                <div class="swiper-slide">
                    <img src="<?php bloginfo ("template_url")?>/images/gabriel.jpg" alt="">
                    <p>“Amazing experience i love it a lot. Thanks to the team
                        dreams come true, great!
                    </p>
                    <p class="nom-personne">Gabriel Salas</p>

                </div>

                <div class="swiper-slide">
                    <img src="<?php bloginfo ("template_url")?>/images/clem-aventurier.jpg" alt="">
                    <p>“Amazing experience i love it a lot. Thanks to the team
                        dreams come true, great!
                    </p>
                    <p class="nom-personne">Clementine Stone</p>

                </div>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>
</section>



<section id="billeterie-1" class="billets">

    <h4>Billets</h4>

    <hr class="border-titre-h4">

    <div class="billets-contenu">

        <div class="basique">

            <div class="titre-coute">
                <h5>Passe-Basique</h5>
                <h6>Accès basique au festival</h6>
                <div class="coute"><span class="prix">50$</span></div>
            </div>

            <ul>
                <li><i class="fas fa-check"></i>Accès à tous les aventures d’évasion</li>
                <li><i class="fas fa-check"></i>Accès valide pour une semaine</li>
                <li><i class="fas fa-check"></i>Accès aux restaurants des membres</li>
                <li><i class="fas fa-times"></i>Accès aux jeux gratuit!</li>
                <li><i class="fas fa-times"></i>Accès aux zones de relaxation VIP</li>
            </ul>

            <a class="acheter-billets" href="<?php the_field('cw4_lien_achat_billets' ,'option');?>">Acheter</a>

        </div>

        <div class="basique">

            <div class="titre-coute">
                <h5>Passe-Partout</h5>
                <h6>Accès suprême au festival</h6>
                <div class="coute"><span class="prix">299$</span></div>
            </div>

            <ul>
                <li><i class="fas fa-check"></i>Accès à tous les aventures d’évasion</li>
                <li><i class="fas fa-check"></i>Accès valide pour une semaine</li>
                <li><i class="fas fa-check"></i>Accès aux restaurants des membres VIP</li>
                <li><i class="fas fa-check"></i>Accès aux jeux gratuit!</li>
                <li><i class="fas fa-check"></i>Accès aux zones de relaxation VIP</li>
            </ul>

            <a class="acheter-billets" href="<?php the_field('cw4_lien_achat_billets' ,'option');?>">Acheter</a>

        </div>

    </div>


    <div class="questions-billets">

        <h4>Vous avez des questions?</h4>
        <a class="FAQ" href="">FAQ</a>

    </div>

</section>






<section class="partenaire">

    <h4>Nos Partenaires</h4>

    <hr class="border-titre-h4">

    <div class="partenaires-contenu">




        <?php
        query_posts(array(

            "post_type" => "cw4_partenaire" ,
            "post_status" => "publish" ,
            "showposts" => 5,
            "order"    => "DESC"

        ));
        ?>

        <?php if(have_posts()): ?>

        <?php while (have_posts()) : the_post(); ?>


        <a href="<?php the_field('cw4_lien_partenaire'); ?>" target="_blank">
        <div class="partenaire-rond">
            <img src="<?php the_post_thumbnail_url("full") ;?>" alt=""/>
        </div>
        </a>


            <?php endwhile; ?>

        <?php endif; ?>

        <?php wp_reset_query(); ?>



    </div>


</section>



<section id="contact" class="contact">

    <div class="titre-contact">
        <h4>Contact</h4>
        <hr class="border-titre-h4">
    </div>


    <div class="carte">

        <div class="info-carte-location">

            <h5>G.Évasion # GRIFFINTOWN</h5>
            <ul class="contenu-liste-contact">
                <li class="adresse-info">

                    <i class="fas fa-map-marker-alt"></i>
                    <ul class="liste-adresse-chaque">
                        <li>384 rue Notre-Dame Ouest</li>
                        <li>Montréal, QC</li>
                        <li>Canada H3C 1K8</li>
                    </ul>

                <li><i class="fas fa-phone"></i>1-514-563-6234</li>
                <li><i class="fas fa-envelope"></i>G.évasion@evmt.com</li>

            </ul>

        </div>


        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5593.929033056515!2d-73.56698512092956!3d45.49065928760281!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4cc91a619ccd9a29%3A0x18b7bebfeb24821c!2sGriffintown%2C+Montr%C3%A9al%2C+QC!5e0!3m2!1sfr!2sca!4v1557146842630!5m2!1sfr!2sca"
                width="100%" height="auto" frameborder="0"
                style="border:0" allowfullscreen></iframe>

    </div>


    <div class="abonnez-vous-maintenant">
        <h4>Tenez-vous au courant en vous abonnant!</h4>
        <div class="btn-subscribe-contenu">
            <p>Adresse courriel : </p> <input  type="text" placeholder="exemple@mail.com" name="mail" required>
            <div class="btn-sumbit">
                <button type="submit"><i class="fas fa-arrow-right"></i></button>
            </div>
        </div>
    </div>

</section>


<?php get_footer(); ?>


