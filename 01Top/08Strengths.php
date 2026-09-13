<section class="p-top-strengths" id="strengths">
	<div class="l-inner _size-l p-top-strengths__wrapper">

		<!--::::::::::::::::::::::::::::::::::::::::::::
			wrap
		:::::::::::::::::::::::::::::::::::::::::::::::-->
		<div class="p-top-strengths__wrap">

			<!--::::::::::::::::::::::::::::::::::::::::::::
				head
			:::::::::::::::::::::::::::::::::::::::::::::::-->
			<?php
			$tag   = "";
			$en    = "Strengths";
			$ja    = "強み";
			$color = "";
			$align = "";

			include(dirname(__FILE__) . '/../00Component/Parts/Heading/HeadingSection.php');
			?>

			<!--::::::::::::::::::::::::::::::::::::::::::::
				data
			:::::::::::::::::::::::::::::::::::::::::::::::-->
			<?php
			$strengths = [
				[
					"title" => "デザインの意図を汲み取った実装",
					"text" => "デザイン経験を活かして、<br>デザインカンプの数値だけを追うのではなく、<br>「なぜこの余白なのか」「なぜこの配置なのか」という意図を理解した上で、実機に最適化します。",
				],
				[
					"title" => "迷わせない「比較提案型」の実装",
					"text"  => "実機で使いにくい箇所があれば、<br> 「カンプ通り」と「操作性重視」の2パターンを用意し、どちらが適切かを判断してもらう形で提案します。<br>ディレクター・デザイナーの手を止めず、判断を楽にします。",
				],
				[
					"title" => "指示がなくても進行を止めない自走力",
					"text"  => "ホバー時の演出やスマホ時の細かな挙動など、<br> 指示が漏れがちな部分をあらかじめこちらで構築します。<br>「ここどうしますか？」と聞く前に形にすることで、確認コストを最小限に抑えます。",
				],
			];
			?>

			<!--::::::::::::::::::::::::::::::::::::::::::::
				btn area
			:::::::::::::::::::::::::::::::::::::::::::::::-->
			<ul class="p-top-strengths__list-btn">
				<?php foreach ($strengths as $i => $strength): ?>
					<?php
					$num = sprintf('%02d', $i + 1);

					$image_url = get_template_directory_uri()
						. '/img/top/strengths/'
						. $num
						. '.jpg';
					?>

					<li class="item">
						<h4 class="heading">
							<button
								type="button"
								class="c-btn-strengths<?= $i === 0 ? ' is-active' : ''; ?>"
								data-js-strengths-btn
								data-strengths-index="<?= $i; ?>"
								aria-expanded="false">
								<span class="num c-heading-default">
									Point.<?= $num; ?>
								</span>

								<span class="ja c-heading-default">
									<?= esc_html($strength["title"]); ?>
								</span>
							</button>
						</h4>

						<!--::::::::::::::::::::::::::::::::::::::::::::
							SP / Tablet用 アコーディオン
						:::::::::::::::::::::::::::::::::::::::::::::::-->
						<div
							class="p-top-strengths__accordion<?= $i === 0 ? ' is-active' : ''; ?>"
							data-js-strengths-accordion
							data-strengths-index="<?= $i; ?>"
							style="background-image: url('<?= esc_url($image_url); ?>');">
							<div class="p-top-strengths__accordion-inner">
								<p class="text">
									<?= wp_kses_post($strength["text"]); ?>
								</p>
							</div>
						</div>
					</li>
				<?php endforeach; ?>
			</ul>

		</div>

		<!--::::::::::::::::::::::::::::::::::::::::::::
			wrap
		:::::::::::::::::::::::::::::::::::::::::::::::-->
		<div class="p-top-strengths__wrap">

			<!--::::::::::::::::::::::::::::::::::::::::::::
				slide area
			:::::::::::::::::::::::::::::::::::::::::::::::-->
			<ul
				class="p-top-strengths__list-slide"
				data-js-strengths-slide-wrap>
				<?php foreach ($strengths as $i => $strength): ?>

					<?php
					$num = sprintf('%02d', $i + 1);

					$image_url = get_template_directory_uri()
						. '/img/top/strengths/'
						. $num
						. '.jpg';
					?>

					<li
						class="item<?= $i === 0 ? ' is-active' : ''; ?>"
						data-js-strengths-slide
						data-strengths-index="<?= $i; ?>"
						style="background-image: url('<?= esc_url($image_url); ?>');">
						<span class="num">
							Point.<?= $num; ?>
						</span>

						<p class="text">
							<?= wp_kses_post($strength["text"]); ?>
						</p>
					</li>

				<?php endforeach; ?>
			</ul>

		</div>

	</div>
</section>