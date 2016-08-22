  <footer class="gmf-footer">
    <div class="container">
      <div class="row padbottom">
        <div class="col-sm-6 footer-right-border">
          <div class="footer-logo-div">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
              <img class="img-responsive footer-logos" src="<?php echo get_theme_mod( 'header_logo' ); ?>" alt="<?php bloginfo( 'name' ); ?> logo" />
            </a>
          </div>
          <?php
          if ( has_nav_menu( 'footer_menu' ) ) :
            wp_nav_menu( array(
              'theme_location'    => 'footer_menu',
              'depth'             => 2,
              'container'         => 'ul',
              'container_class'   => 'list-unstyled',
              'menu_class'        => 'list-unstyled',
              'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
              'walker'            => new wp_bootstrap_navwalker())
            );
          endif; ?>

          <div class="social-network-container">
            <ul class="social-network social-circle">

              <?php $facebook_link = esc_url( get_theme_mod( 'facebook_link' ) );
              if( $facebook_link != '' ) {
                echo '<li>
                        <a href="' . $facebook_link . '" class="icoFacebook" title="Facebook" target="_blank">
                          <i class="fa fa-facebook"></i>
                        </a>
                      </li>';
              }

              $twitter_link = esc_url( get_theme_mod( 'twitter_link' ) );
              if( $twitter_link != '' ) {
                echo '<li>
                        <a href="' . $twitter_link . '" class="icoTwitter" title="Twitter" target="_blank">
                          <i class="fa fa-twitter"></i>
                        </a>
                      </li>';
              }

              $pintrest_link = esc_url( get_theme_mod( 'pintrest_link' ) );
              if( $pintrest_link != '' ) {
                echo '<li>
                        <a href="' . $pintrest_link . '" class="icoPinterest" title="Pinterest" target="_blank">
                          <i class="fa fa-pinterest-p"></i>
                        </a>
                      </li>';
              }

              $google_plus_link = esc_url( get_theme_mod( 'google_plus_link' ) );
              if( $google_plus_link != '' ) {
                echo '<li>
                        <a href="' . $google_plus_link . '" class="icoGoogle-plus" title="Google+" target="_blank">
                          <i class="fa fa-google-plus"></i>
                        </a>
                      </li>';
              } ?>
            </ul>
          </div>
        </div>

        <div class="col-sm-6 footer-right hidden-xs">
          <div class="footer-logo-div">
            <a href="http://makerfaire.com/" target="_blank">
              <img class="img-responsive footer-logos" src="<?php echo get_bloginfo('template_directory');?>/img/Maker-Faire-Logo.png" alt="Maker Faire logo" />
            </a>
          </div>
          <div class="row">
            <div class="col-xs-6">
              <ul class="list-unstyled">
<!--                 <li>
                  <a href="http://makerfaire.com/makerfairehistory" target="_blank">About Maker Faire</a>
                </li>
                <li>
                  <a href="http://makerfaire.com/map" target="_blank">Find a Faire Near You</a>
                </li>
                <li>
                  <a href="http://makerfaire.com/be-a-maker" target="_blank">Be a Maker</a>
                </li>
                <li>
                  <a href="//help.makermedia.com/hc/en-us/categories/200333245-Maker-Faire" target="_blank">Maker Faire FAQs</a>
                </li> -->
              </ul>
            </div>
            <div class="col-xs-6">
              <ul class="list-unstyled footer-right-col">
<!--                 <li>
                  <p>Explore Making</p>
                </li>
                <li>
                  <a href="http://makezine.com/" target="_blank">Make: News &amp; Projects</a>
                </li>
                <li>
                  <a href="http://www.makershed.com/" target="_blank">Maker Shed</a>
                </li>
                <li>
                  <a href="http://makercamp.com/" target="_blank">Maker Camp</a>
                </li>
                <li>
                  <a href="https://readerservices.makezine.com/mk/default.aspx" target="_blank">Subscribe to Make:</a>
                </li> -->
              </ul>
              <div class="social-network-container">
                <ul class="social-network social-circle">
<!--                   <li>
                    <a href="//www.facebook.com/makerfaire" class="icoFacebook" title="Facebook" target="_blank">
                      <i class="fa fa-facebook"></i>
                    </a>
                  </li>
                  <li>
                    <a href="//twitter.com/makerfaire" class="icoTwitter" title="Twitter" target="_blank">
                      <i class="fa fa-twitter" target="_blank"></i>
                    </a>
                  </li>
                  <li>
                    <a href="//www.pinterest.com/makemagazine/maker-faire/" class="icoPinterest" title="Pinterest" target="_blank">
                      <i class="fa fa-pinterest-p" target="_blank"></i>
                    </a>
                  </li>
                  <li>
                    <a href="//plus.google.com/104410464300110463062/posts" class="icoGoogle-plus" title="Google+" target="_blank">
                      <i class="fa fa-google-plus" target="_blank"></i>
                    </a>
                  </li> -->
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row padtop">
        <div class="col-xs-12">
          <p class="copyright-footer text-center">Copyright 2016 On Tap Beer Tours</p>
        </div>
      </div>
    </div>
  </footer>
</div>
<!-- end main container -->
<?php wp_footer(); ?>
</body>
</html>