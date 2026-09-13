<section class="p-top-case" id="case">
	<div class="l-inner">
		<!--::::::::::::::::::::::::::::::::::::::::::::
      head
    :::::::::::::::::::::::::::::::::::::::::::::::-->
		<?php
		$tag = ""; //未設定の時は h3 使用
		$en  = "case study";
		$ja  = "ケーススタディ";
		$color = "";
		$align = "center";

		include(dirname(__FILE__) . '/../00Component/Parts/Heading/HeadingSection.php');
		?>
		<!--::::::::::::::::::::::::::::::::::::::::::::
      contents
    :::::::::::::::::::::::::::::::::::::::::::::::-->
		<h4 class="c-heading-default">〜 追従ヘッダーの視認性改善 〜</h4>
		<!--::::::::::::::::::::::::::::::::::::::::::::
			flow
		:::::::::::::::::::::::::::::::::::::::::::::::-->
		<?php
		$cases = [
			[
				"label" => "課題",
				"title" => "ヘッダーと背景の同化",
				"text"  => "白背景のセクションで、追従ヘッダーとコンテンツの境界が曖昧になり、ナビゲーションが目立ちにくい状態。"
			],
			[
				"label" => "対応",
				"title" => "視認性を高める調整案",
				"text"  => "デザインのトーンを維持しつつ、スクロール時の境界を明確にするため「ブラー」を適用した調整案を作成。"
			],
			[
				"label" => "結果",
				"title" => "検討工数の削減",
				"text"  => "カンプ通り・調整案の比較提示により、調整案が採用。デザイナーへの再依頼やディレクターの検討工数を削減。"
			],
		];
		?>

		<ol class="p-top-case__flow">
			<?php foreach ($cases as $case): ?>
				<li class="c-card-case">
					<span class="c-card-case__label c-unit-tag">
						<span class="c-heading-default">
							<?= esc_html($case["label"]); ?>
						</span>
					</span>

					<h5 class="c-card-case__title">
						<?= esc_html($case["title"]); ?>
					</h5>

					<p class="c-card-case__text">
						<?= esc_html($case["text"]); ?>
					</p>
				</li>
			<?php endforeach; ?>
		</ol>

		<!--::::::::::::::::::::::::::::::::::::::::::::
			image
		:::::::::::::::::::::::::::::::::::::::::::::::-->
		<?php
		$images = [
			[
				"label" => "Before",
				"image" => "before",
				"text"  => "白背景セクションでヘッダーが背景と同化し、ヘッダーと本文の境目が分かりづらい。"
			],
			[
				"label" => "After",
				"image" => "after",
				"text"  => "ブラーとドロップシャドウを追加し、境界を明確に。"
			],
		];
		?>

		<div class="p-top-case__image">
			<?php foreach ($images as $image): ?>
				<div class="c-card-image">

					<span class="c-card-image__label c-unit-tag _bg-color">
						<span class="c-heading-default">
							<?= esc_html($image["label"]); ?>
						</span>
					</span>

					<div class="c-card-image__img">
						<img
							src="<?= get_template_directory_uri(); ?>/img/top/case/<?= esc_attr($image["image"]); ?>.png"
							alt="<?= esc_attr($image["label"]); ?>">
					</div>

					<p class="c-card-image__text">
						<?= esc_html($image["text"]); ?>
					</p>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>