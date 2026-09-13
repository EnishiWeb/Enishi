<section class="p-top-works" id="works">
  <div class="l-inner _size-s">
    <!--::::::::::::::::::::::::::::::::::::::::::::
      heading
    :::::::::::::::::::::::::::::::::::::::::::::::-->
    <?php
    $tag = ""; //未設定の時は h3 使用
    $en  = "works";
    $ja  = "制作実績";
    $color = "";
    $align = "";

    include(dirname(__FILE__) . '/../00Component/Parts/Heading/HeadingSection.php');
    ?>
    <!--::::::::::::::::::::::::::::::::::::::::::::
      body
    :::::::::::::::::::::::::::::::::::::::::::::::-->
    <div class="p-top-works__body">
      <ul class="p-top-works__list">
        <li class="c-card-work">
          <div class="c-card-work__body">
            <div class="c-card-work__img">
              <a class="c-card-work__link c-animation-fade" data-js-animate-once href="https://enishi-web-works.com/" target="_blank">
                <img src="<?php echo get_template_directory_uri(); ?>/img/top/mock-up.jpg" alt="えにしWeb制作所" loading="lazy" decoding="async">
              </a>
            </div>
            <div class="c-card-work__explanation">
              <h4 class="c-card-work__explanation-heading c-heading-default">えにしWeb制作所</h4>
              <ul class="c-card-work__explanation-tags">
                <li class="c-unit-tag">
                  <span class="c-unit-tag__text">デザイン</span>
                </li>
                <li class="c-unit-tag">
                  <span class="c-unit-tag__text">コーディング</span>
                </li>
                <li class="c-unit-tag">
                  <span class="c-unit-tag__text">WordPress</span>
                </li>
              </ul>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </div>
</section>

