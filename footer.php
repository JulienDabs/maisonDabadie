<!-- footer.php -->
</main> <!-- End of Main content -->
    <!-- Footer Section -->
    <footer class="page-footer page-footer-variant-3">
        <div class="shell">
          <div class="range range-50">
            <div class="cell-sm-6 cell-md-4">
              <h3>Pages</h3>
              <div class="divider divider-conch"></div>
              <ul class="footer-navigation row footer-navigation-vertical" style="max-width: 390px">
                <?php
                $menu_items = wp_get_nav_menu_items('footer-menu');
                if ($menu_items) :
                    foreach ($menu_items as $item) :
                ?>
                        <li class="col-xs-6"><a href="<?php echo esc_url($item->url); ?>"><?php echo esc_html($item->title); ?></a></li>
                <?php
                    endforeach;
                endif;
                ?>
              </ul>
            </div>
            <div class="cell-sm-6 cell-md-5">
    <h3>Les horaires</h3>
    <div class="divider divider-conch"></div>
    <div class="text-highlighted-wrap">
        <h4 class="text-highlighted">
            Les extensions de cils dans l'atelier
        </h4>
            <p class="text-highlighted">
                <ul>
                    <?php if( get_field('hours_saturday') ): ?>
                        <li>Samedi: <?php the_field('hours_saturday'); ?></li>
                    <?php endif; ?>

                    <?php if( get_field('hours_sunday') ): ?>
                        <li>Dimanche: <?php the_field('hours_sunday'); ?></li>
                    <?php endif; ?>

                    <?php if( get_field('hours_monday') ): ?>
                        <li>Lundi: <?php the_field('hours_monday'); ?></li>
                    <?php endif; ?>
                </ul>
            </p>
    </div>

    <div class="text-highlighted-wrap">
                <h4 class="text-highlighted">Coiffure à domicile</h4>
                <p class="text-highlighted"><?php echo (get_field('hairdress_hours'));?></p>
                <p class="text-highlighted">
                  Merci de nous contacter directement au <?php echo (get_field('phone_number'));?> pour
                  toutes autres demandes.
                </p>
              </div>

    </div>

    <div class="cell-sm-6 cell-md-3">
        <h3>Suivez moi</h3>
        <div class="divider divider-conch"></div>
        <ul class="inline-list inline-list-xs">
            <?php if( get_field('footer_facebook_link') ): ?>
                <li>
                    <a class="icon icon-xs-outline icon-wild-sand-filled icon-circle" href="<?php the_field('footer_facebook_link'); ?>">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                </li>
            <?php endif; ?>
            
            <?php if( get_field('footer_instagram_link') ): ?>
                <li>
                    <a class="icon icon-xs-outline icon-wild-sand-filled icon-circle" href="<?php the_field('footer_instagram_link'); ?>">
                        <i class="fab fa-instagram"></i>
                    </a>
                </li>
            <?php endif; ?>
        </ul>
    </div>

            <div style="display: none"><article>
              Maison Dabadie coiffure et cils à Six-Fours les Plages, extension
              de cils, coiffure à domicile, poses d'extensions de cils, beauté
              naturelle, coiffure élégante, salon de coiffure, rendez-vous à
              Six-Fours les Plages.</article>
            </div>
            <p class="footer-jmd">
              Thème développé par
              <a href="https://www.jmdwebdev.com"> JMD Web Development</a>
            </p>
          </div>
        </div>
    </footer>
    
</div> 
<?php wp_footer(); ?>
</body>
</html>
