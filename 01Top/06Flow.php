<section class="p-top-flow" id="flow">
	<div class="l-inner">
		<div class="p-top-flow__outer">
			<!--::::::::::::::::::::::::::::::::::::::::::::
      head
    :::::::::::::::::::::::::::::::::::::::::::::::-->
			<?php
			$tag = ""; //未設定の時は h3 使用
			$en  = "flow";
			$ja  = "制作の流れ";
			$color = "";
			$align = "";

			include(dirname(__FILE__) . '/../00Component/Parts/Heading/HeadingSection.php');
			?>

			<!--::::::::::::::::::::::::::::::::::::::::::::
      list
    :::::::::::::::::::::::::::::::::::::::::::::::-->
			<?php
			$flows = [
				[
					"title" => "デザイン理解・方針整理",
					"text"  => "デザインカンプを元に、意図や注意点を把握し、実装時の判断軸を整理します。"
				],
				[
					"title" => "実装（コーディング）",
					"text"  => "環境構築後、保守性を意識しつつ、デザインの意図を汲み取りながら実装します。"
				],
				[
					"title" => "実機検証・調整提案",
					"text"  => "PC・スマートフォンの実機で確認し、操作性や視認性に懸念がある場合は、意図を崩さない範囲で調整案を作成します。"
				],
				[
					"title" => "比較共有・反映",
					"text"  => "調整前／調整後を共有し、判断しやすい形で提案。決定内容をテスト・本番環境へ反映します。"
				],
			];
			?>

			<ol class="p-top-flow__list" data-js-animate-once>
				<?php foreach ($flows as $i => $flow): ?>
					<li class="c-card-flow">

						<div class="c-card-flow__step u-flex-col-center">
							<span class="c-card-flow__step-label">STEP</span>
							<span class="c-card-flow__step-number">
								<?= sprintf('%02d', $i + 1); ?>
							</span>
						</div>

						<div class="c-card-flow__body">
							<h4 class="c-card-flow__heading">
								<?= esc_html($flow['title']); ?>
							</h4>

							<p class="c-card-flow__text">
								<?= esc_html($flow['text']); ?>
							</p>
						</div>

					</li>
				<?php endforeach; ?>
			</ol>
		</div>
	</div>

</section>