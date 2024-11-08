<?php
/*
Template Name: Prestations Page Template
*/
get_header();
// get_template_part('_special-nav');
?>

<body>
    <div class="page">
        <main class="page-content" id="perspective">
            <div class="content-wrapper">
                <div class="page-header page-header-perspective">
                    <div class="page-header-left">
                        <a class="brand" href="<?php echo esc_url(home_url('/')); ?>">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/cils.png" alt="" width="200" height="90">
                        </a>
                    </div>
                    <div class="page-header-right">
                        <div class="booking-control">
                            <a class="btn btn-xs btn-circle btn-primary" href="<?php echo site_url('/step-1'); ?>">Prendre RDV</a>
                        </div>
                        <div id="perspective-open-menu" data-custom-toggle=".perspective-menu-toggle" data-custom-toggle-hide-on-blur="true">
                            <span class="perspective-menu-text">Menu</span>
                            <button class="perspective-menu-toggle"><span></span></button>
                        </div>
                    </div>
                </div>
                
                <!-- Section 1: La beauté du regard -->
                <div id="wrapper">
                    <div class="page-title">
                        <div class="page-title-content">
                            <div class="shell">
                                <p class="page-title-header">Prestations</p>
                            </div>
                        </div>
                    </div>

                    <section class="section-xl bg-periglacial-blue text-center">
                        <div class="shell">
                            <h2>La beauté du regard</h2>
                            <div class="p text-width-medium">
                                <p class="big">
                                Révélez votre beauté naturelle avec nos services de coiffure et de pose de cils à domicile. Profitez d'un moment de bien-être personnalisé où que vous soyez, et laissez-nous sublimer votre look avec des coiffures élégantes et des cils parfaits. Prenez rendez-vous et découvrez l'art de la beauté entre nos mains expertes.
                                </p>
                            </div>

                            <?php
                            $args = array(
                                'post_type' => 'prestations',
                                'posts_per_page' => -1,
                                'category_name' => 'cils' // Assuming you have a category named "lashes"
                            );
                            $prestations_query = new WP_Query($args);

                            if ($prestations_query->have_posts()) :
                                while ($prestations_query->have_posts()) : $prestations_query->the_post();
                            ?>
                                <article class="box-service box-service-dark box-service-reverse">
                                    <div class="box-service-body">
                                        <div class="box-service-header">
                                            <p class="box-service-title"><?php the_title(); ?></p>
                                            <p class="box-service-time"><?php echo get_field('duration'); ?> •</p>
                                            <p class="box-service-price"><?php echo get_field('price'); ?> €</p>
                                        </div>
                                        <a class="btn-sm box-service-control btn-presta" href="<?php echo site_url('/prendre-rdv'); ?>">Choisir</a>
                                    </div>
                                </article>
                            <?php
                                endwhile;
                                wp_reset_postdata();
                            else :
                                echo '<p>Aucune prestation trouvée</p>';
                            endif;
                            ?>
                        </div>
                    </section>
                    
                    <!-- Section 2: Coiffure -->
                    <section class="section-xl bg-periglacial-blue text-center">
                        <div class="shell">
                            <h2>Coupe - hommme à domicile</h2>

                            <?php
                            $args = array(
                                'post_type' => 'prestations',
                                'posts_per_page' => -1,
                                'category_name' => 'coiffure_homme' // Assuming you have a category named "hair"
                            );
                            $prestations_query = new WP_Query($args);

                            if ($prestations_query->have_posts()) :
                                while ($prestations_query->have_posts()) : $prestations_query->the_post();
                            ?>
                                <article class="box-service box-service-dark box-service-reverse">
                                    <div class="box-service-body">
                                        <div class="box-service-header">
                                            <p class="box-service-title"><?php the_title(); ?></p>
                                            
                                            <p class="box-service-price"><?php echo get_field('price'); ?> €</p>
                                        </div>
                                    </div>
                                </article>
                            <?php
                                endwhile;
                                wp_reset_postdata();
                            else :
                                echo '<p>Aucune prestation trouvée</p>';
                            endif;
                            ?>
                        </div>
                    </section>

                    <!-- Section 2: Coiffure -->
                    <section class="section-xl bg-periglacial-blue text-center">
                        <div class="shell">
                            <h2>Coupe - femme à domicile</h2>

                            <?php
                            $args = array(
                                'post_type' => 'prestations',
                                'posts_per_page' => -1,
                                'category_name' => 'coiffure_femme' // Assuming you have a category named "hair"
                            );
                            $prestations_query = new WP_Query($args);

                            if ($prestations_query->have_posts()) :
                                while ($prestations_query->have_posts()) : $prestations_query->the_post();
                            ?>
                                <article class="box-service box-service-dark box-service-reverse">
                                    <div class="box-service-body">
                                        <div class="box-service-header">
                                            <p class="box-service-title"><?php the_title(); ?></p>
                                            
                                            <p class="box-service-price"><?php echo get_field('price'); ?> €</p>
                                        </div>
                                    </div>
                                </article>
                            <?php
                                endwhile;
                                wp_reset_postdata();
                            else :
                                echo '<p>Aucune prestation trouvée</p>';
                            endif;
                            ?>
                        </div>
                    </section>

                    <!-- Additional Sections Here -->
                </div>
            </div>
        </main>
    </div>

<?php get_footer(); ?>
