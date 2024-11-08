<?php get_header();?>

<section class="jumbotron-custom jumbotron-custom-3 bg-image" style="background: #efe0e2;">
    <div class="text-center">
        <div class="index-image--desktop d-none d-md-block">
            <img src="<?php echo get_template_directory_uri(); ?>/images/logo-transparent-png.png" id="LogoDesktop" alt="Maison Dabadie Logo" width="700" height="700">
        </div>
        <div class="index-image--mobile d-block d-md-none">
            <img src="<?php echo get_template_directory_uri(); ?>/images/logo-transparent-png.png"  alt="Maison Dabadie Logo" width="400" height="400">
        </div>
        <div class="mb-1 text-center">
            <div class="shell">
                <div class="range range-sm-center">
                    <div class="cell-sm-9 cell-md-8 cell-lg-7">
                        <a class="btn btn-style-1 btn-primary" href="<?php echo site_url('/prendre-rdv'); ?>">Prendre rendez-vous maintenant</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> 

<section class="section-xl--index bg-periglacial-blue text-center">
    <div class="row">
        <div class="col-md-6 image-wrap-left bg-image" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/home-three-2-910x800.jpg)">
            <div class="image-wrap-inner">
                <h2>LES PRESTATIONS</h2>
                <p class="big">Révélez votre beauté naturelle avec nos services de poses d'extensions de cils dans l'atelier situé a Six fours les plages . Profitez d'un moment de bien-être personnalisé , et laissez-nous sublimer votre look avec des coiffures élégantes à domicile uniquement. Prenez rendez-vous et découvrez l'art de la beauté.</p>
                <a class="btn btn-style-1 btn-primary" href="<?php echo site_url('/home/prestations'); ?>">Voir les prestations</a>
            </div>
        </div>
        <div class="col-md-6 box-wrap box-wrap-md">
            <div class="box-wrap-content">
                <div class="shell">
                    <div class="box-contacts box-contacts-horizontal">
                        <div class="box-contacts-col box-contacts-right">
                            <div class="box-contacts-block">
                                <h3>Contact</h3>
                                <p>Des questions ? N'hésitez pas à nous contacter by email à l'adresse suivante : <a href="mailto:contact@maisondabadie.com">contact@maisondabadie.com</a></p>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> 

<?php get_footer()?>