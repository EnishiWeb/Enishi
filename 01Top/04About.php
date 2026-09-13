<section class="p-top-about" id="about">
  <div class="l-inner _size-s">
    <div class="p-top-about__outer">
      <!--::::::::::::::::::::::::::::::::::::::::::::
        heading
      :::::::::::::::::::::::::::::::::::::::::::::::-->
      <?php
      $tag = ""; //未設定の時は h3 使用
      $en  = "about";
      $ja  = "私について";
      $color = "";
      $align = "";

      include(dirname(__FILE__) . '/../00Component/Parts/Heading/HeadingSection.php');
      ?>
      <!--::::::::::::::::::::::::::::::::::::::::::::
        body
      :::::::::::::::::::::::::::::::::::::::::::::::-->
      <div class="p-top-about__body">
        <!-- contents -->
        <div class="p-top-about__body-contents">
          <p class="text">1996年生まれ。二児の母。<br>制作会社でWebサイトのコーディングとデザインを担当してきました。<br>WordPressでの構築や、アニメーションの実装も経験あり。<br>チームの一員として、コミュニケーションや制作をスムーズに進めることを大切にしています。<br>現在は独立し、フリーランスとして活動中です。</p>
        </div>
      </div>
    </div>
  </div>
</section>