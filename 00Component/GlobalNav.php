<header class="l-header">
  <div class="l-header__body" data-js-header>
    <h1 class="l-header__logo">
      <a class="l-header__logo-link" href="<?php echo esc_url(home_url('/')); ?>">
        <?php
        include(dirname(__FILE__) . '/Parts/Graphic/Logo.php');
        ?>
      </a>
    </h1>
    <nav class="l-header__nav u-pc-only">
      <ul class="c-menu-global__default">
        <?php
        include(dirname(__FILE__) . '/Parts/Link/LinkGlobal.php');
        ?>
      </ul>
    </nav>
    <!-- <nav class="l-header__nav-sp u-pc-none">
      <ul class="c-menu-global__sp">
        <li class="c-menu-global__sp-item">
          <a href="<?php echo home_url(); ?>/contact" class="c-btn-cta">
            <span class="c-btn-cta__icon">
              <?php
              include(dirname(__FILE__) . '/Parts/Graphic/Mail.php');
              ?>
            </span>
          </a>
        </li>
      </ul>
    </nav> -->
  </div>
  <button class="c-btn-hamburger u-pc-none" data-js-hamburger>
    <div class="c-btn-hamburger__wrap">
      <div class="c-btn-hamburger__borders">
        <span class="c-btn-hamburger__border"></span>
        <span class="c-btn-hamburger__border"></span>
        <span class="c-btn-hamburger__border"></span>
      </div>
      <span class="c-btn-hamburger__text">Menu</span>
    </div>
  </button>
  <nav class="l-header__nav-drawer" data-js-hamburger-target data-js-nav-drawer>
    <?php
    include(dirname(__FILE__) . '/NavDrawer.php');
    ?>
  </nav>
</header>