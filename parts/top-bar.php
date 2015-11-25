<?php
/**
* Template part for top bar menu
*
* @package WordPress
* @subpackage FoundationPress
* @since FoundationPress 1.0.0
*/

?>
<div class = "row">
  <div class ="medium-4 columns show-for-medium-up">
    <img class="name" src=<?php echo get_stylesheet_directory_uri(); ?>/assets/images/ilmfinity/logo-ilfinity-black1.png><a href="<?php echo home_url(); ?>"></a></img>
  </div>

  <div class ="medium-8 columns">


    <div class="top-bar-container contain-to-grid">

      <nav class="top-bar" data-topbar role="navigation">
        <div class= "row">
          <div class="social-media">
            <ul class="spicesocialwidget">
              <li class="facebook">
              <a rel="nofollow" href="https://www.facebook.com/ilmfinity/" target="_blank" title="Facebook">
              </a></li>
              <li class="twitter">
              <a rel="nofollow" href="https://twitter.com/ilmfinity" target="_blank" title="Twitter">
              </a></li>
              <li class="googleplus">
              <a rel="nofollow" href="https://plus.google.com/" target="_blank" title="googleplus">
              </a></li>
            </ul>
          </div>
        </div>
        <div class = "row">
          <ul class="title-area top-bar-<?php echo apply_filters( 'filter_mobile_nav_position', 'mobile_nav_position' ); ?>">

            <li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
          </ul>

          <section class="top-bar-section">
            <?php foundationpress_top_bar_l(); ?>
            <?php foundationpress_top_bar_r(); ?>
          </section>
        </nav>
      </div>
    </div>

  </div>

</div>
