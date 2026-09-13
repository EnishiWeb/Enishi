<section class="p-top-skill" id="skill">
  <div class="l-inner">
    <!--::::::::::::::::::::::::::::::::::::::::::::
      head
    :::::::::::::::::::::::::::::::::::::::::::::::-->
    <?php
    $tag = ""; //未設定の時は h3 使用
    $en  = "skill";
    $ja  = "スキルセット";
    $color = "white";
    $align = "center";

    include(dirname(__FILE__) . '/../00Component/Parts/Heading/HeadingSection.php');
    ?>
    <!--::::::::::::::::::::::::::::::::::::::::::::
    body
  :::::::::::::::::::::::::::::::::::::::::::::::-->
    <div class="p-top-skill__body">
      <?php
      $skills = [
        [
          "graphic" => "Skill01.php",
          "title"   => "Front-end",
          "text"    => "HTML / CSS（SCSS）/ JavaScript / アニメーション（GSAP）<br>※貴社のコーディング規約・命名規則に柔軟に合わせます。"
        ],
        [
          "graphic" => "Skill02.php",
          "title"   => "CMS / Development",
          "text"    => "WordPress（既存テーマ改修 / オリジナルテーマ構築 / CPT＋ACF設計 / テンプレート分割）/ GitHub"
        ],
        [
          "graphic" => "Skill03.php",
          "title"   => "Design / Planning",
          "text"    => "Figma / Adobe XD / Photoshop / Illustrator"
        ],
        [
          "graphic" => "Skill04.php",
          "title"   => "Communication / Workflow",
          "text"    => "【ツール】Slack、Chatwork、Zoom等、貴社の環境に合わせて柔軟に対応します。【レスポンス】遅くとも当日中に返信します。未確定事項も即時共有し、進行を止めません。"
        ],
      ];
      ?>

      <ul class="p-top-skill__list">
        <?php foreach ($skills as $i => $skill): ?>
          <?php
          $delay = 0.3 * $i;
          ?>
          <li class="c-card-skill c-animation-fade"
            data-js-animate-once
            style="--delay:<?= $delay ?>s;">

            <div class="c-card-skill__body">
              <h4 class="c-card-skill__heading"><?= esc_html($skill["title"]); ?></h4>
              <div class="c-card-skill__graphic">
                <?php
                include(dirname(__FILE__) . '/../00Component/Parts/Graphic/' . $skill["graphic"]);
                ?>
              </div>
              <p class="c-card-skill__text"><?php echo wp_kses_post($skill['text']); ?></p>
            </div>

          </li>
        <?php endforeach; ?>
      </ul>

    </div>
  </div>
</section>