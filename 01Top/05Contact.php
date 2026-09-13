<section class="p-top-contact" id="contact">
  <div class="l-inner _size-l">
    <div class="p-top-contact__outer">
      <!--::::::::::::::::::::::::::::::::::::::::::::
        head
      :::::::::::::::::::::::::::::::::::::::::::::::-->
      <div class="p-top-contact__head u-flex-col-center">
        <h3 class="p-top-contact__head-heading">お気軽にご相談ください</h3>
        <p class="p-top-contact__head-explanation c-animation-fade" data-js-animate-once>内容が固まっていない段階でも大丈夫です。<br>ちょっとしたご質問やご相談も、<br class="u-sp-only">お気軽にどうぞ。</p>
      </div>
      <!--::::::::::::::::::::::::::::::::::::::::::::
        body
      :::::::::::::::::::::::::::::::::::::::::::::::-->
      <div class="p-top-contact__body u-flex-col-center">
        <p class="p-top-contact__body-text">どんなことでも大歓迎です</p>
        <?php
        include(dirname(__FILE__) . '/../00Component/Parts/Btn/BtnCta.php');
        ?>
      </div>
      <!--::::::::::::::::::::::::::::::::::::::::::::
        BG Geometric
      :::::::::::::::::::::::::::::::::::::::::::::::-->
      <?php
      $bg_deco_color = 'white';
      include(dirname(__FILE__) . '/../00Component/Parts/BG/BG-Geometric.php');
      unset($bg_deco_color);
      ?>
    </div>
  </div>
</section>