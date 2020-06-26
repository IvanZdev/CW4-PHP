
<?php get_header(); ?>


<section class="hero-autres-pages">


    <div class="header-padding"></div>


    <div class="hero-contenu">

        <h1>La grande évasion</h1>
        <h2>Le plus grand festival de jeux d’évasion</h2>
        <h3 id="demo"></h3>
        <hr class="separateur-demo">
        <p>1384 rue Notre-Dame Ouest  Montréal, QC</p>
        <a class="savoir-plus" href="#">En Savoir plus</a>

    </div>

</section>





<section class="activites-timeline">

    <h4>Activités</h4>
    <hr class="border-titre-h4">


    <?php
    query_posts(array(

        "post_type" => "cw_program_aventures" ,
        "post_status" => "publish" ,
        "showposts" => 19,
        'meta_key' => 'date_evenement',
        'orderby' => 'meta_value',
        'order' => 'ASC',


    ));
    ?>


    <div class="timeline">




        <?php if(have_posts()): ?>
        <?php while (have_posts()) : the_post(); ?>

        <?php

        $posts = get_field('cw4_aventure_programmation_relation');

        if( $posts ): ?>
        <?php foreach( $posts as $post ):  ?>
        <?php setup_postdata($post); ?>

        <div class="container">




            <a href="<?php  the_permalink( $post-> ID ); ?>">
                <div class="content">
                    <img src="<?php the_post_thumbnail_url("small") ;?>" alt="image-programmation-activite">
                    <div class="info-actvities-timeline">
                        <h5> <?php echo get_the_title( $post->ID ); ?></h5>
                        <hr class="actvites-border-timeline">


                        <ul class="info-liste">



                            <li><i class="fas fa-dollar-sign"></i><span><?php the_field('cw4_cout_pour_une_personne_actvitiés', $post->ID); ?>$ par personne</span></li>
                            <li><i class="far fa-clock"></i><?php the_field('cw4_dure_de_lactivite', $post->ID); ?> m</li>
                            <li><i class="fas fa-user"></i><?php the_field('cw4_nombre_de_personnes_activites', $post->ID); ?></li>


                        </ul>
                    </div>
                </div>
                            <?php wp_reset_postdata(); ?>


                <div class="date-programme-evenement">

                    <h5>Le <?php the_field('date_evenement'); ?></h5>
                    <h5><?php the_field('heure_evenement'); ?></h5>
                </div>


            </a>





        </div>

                <?php endforeach; ?>
                <?php endif; ?>

            <?php endwhile; ?>
        <?php else : ?>
        <?php endif; ?>

        <?php wp_reset_query(); ?>


    </div>

</section>



<?php get_footer(); ?>
