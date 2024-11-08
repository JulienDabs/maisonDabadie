
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Maison Dabadie</title>
        <?php wp_head(); ?>
    </head>
    <header class="page-header">
        <div class="rd-navbar-wrap">
          <nav
            class="rd-navbar"
            data-layout="rd-navbar-fixed"
            data-sm-layout="rd-navbar-fixed"
            data-sm-device-layout="rd-navbar-fixed"
            data-md-layout="rd-navbar-fullwidth"
            data-md-device-layout="rd-navbar-fixed"
            data-lg-device-layout="rd-navbar-fixed"
            data-lg-layout="rd-navbar-fullwidth"
            data-stick-up-clone="true"
            data-md-stick-up-offset="140px"
            data-lg-stick-up-offset="140px"
          >
            <div class="rd-navbar-inner">
              <div class="rd-navbar-panel">
                <button
                  class="rd-navbar-toggle"
                  data-rd-navbar-toggle=".rd-navbar-nav-wrap"
                >
                  <span></span>
                </button>
                <div class="rd-navbar-brand">
                  <a class="brand-name" href="index.html">
                    <div class="brand-mobile">
                      <img
                        src="images/cils.png"
                        alt=""
                        width="150"
                        height="75"
                      />
                    </div>
                    <!-- <div class="brand-desktop">
                      <img
                        src="images/cils.png"
                        alt=""
                        width="130"
                        height="70"
                      /></div -->
                    ></a
                  >
                </div>
              </div>
              <div class="rd-navbar-nav-wrap">
                    <div class="rd-navbar-nav-inner">
                        <?php
                            wp_nav_menu( array(
                                'theme_location' => 'header-menu',  // Registered menu location
                                'container'      => false,          // Remove the container div
                                'menu_class'     => 'rd-navbar-nav', // Custom class for the <ul> tag
                                'fallback_cb'    => false,           // Prevents default fallback menu if no menu is assigned
                            ) );
                        ?>
                    </div>
                </div>
            </div>
          </nav>
        </div>
      </header>
   
    <main>
