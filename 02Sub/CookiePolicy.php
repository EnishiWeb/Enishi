<section class="p-cookie-policy">
	<!--::::::::::::::::::::::::::::::::::::::::::::
        heading
      :::::::::::::::::::::::::::::::::::::::::::::::-->
	<?php
	$tag = ""; //未設定の時は h3 使用
	$en  = "cookie policy";
	$ja  = "クッキーポリシー";
	$color = "white";
	$align = "center";

	include(dirname(__FILE__) . '/../00Component/Parts/Heading/HeadingSection.php');
	?>
	<!--::::::::::::::::::::::::::::::::::::::::::::
        body
      :::::::::::::::::::::::::::::::::::::::::::::::-->
	<div class="p-cookie-policy__body">
		<?php
		$cookie_policy_list = [
			[
				'title' => 'クッキーとは',
				'lead'  => 'このサイトでは、ユーザーの利便性向上や分析のために Cookie（クッキー） を利用しています。',
				'items' => [
					'クッキーとは、Webサイトを訪れた際に、サイトからユーザーのブラウザへ送信され、保存される小さなデータのことです。',
					'保存された情報は、訪問履歴や設定内容などを次回以降の訪問時に活用できます。',
				],
				'note' => '',
			],
			[
				'title' => 'クッキーの利用目的',
				'lead'  => '当サイトでクッキーを使用する目的は以下のとおりです。',
				'items' => [
					'サイトの利便性向上',
					'利用状況の分析およびサイト改善',
					'不正アクセス防止などのセキュリティ向上',
				],
				'note' => 'なお、クッキーによってユーザーの特定個人情報（氏名、住所など）が保存されることはありません。',
			],
			[
				'title' => 'クッキーの種類',
				'lead'  => '当サイトで使用される主なクッキーは以下の種類です。',
				'items' => [
					'必須クッキー：サイトの基本機能に必要なもの',
					'アクセス解析クッキー：利用者の行動を把握し、改善に活かすもの（例：Google Analytics）',
					'広告・マーケティングクッキー：広告配信などに利用されるもの（必要に応じて別途同意）',
				],
				'note' => '',
			],
			[
				'title' => 'クッキーの管理方法',
				'lead'  => 'ユーザーはブラウザ設定によりクッキーの利用を拒否したり、保存期間を制御したりすることができます。',
				'items' => [],
				'note' => 'ただし、必須クッキーを無効にした場合、サイトの一部機能が正常に動作しない場合があります。',
			],
			[
				'title' => '同意について',
				'lead'  => '当サイトは初回アクセス時にクッキーバナーでクッキーの利用について通知し、同意を得ています。',
				'items' => [
					'同意した上でクッキーが利用されます。',
					'なお、クッキーの利用はブラウザの設定により制御または無効にすることができます。',
				],
				'note' => '',
			],
			[
				'title' => '第三者によるクッキー',
				'lead'  => '当サイトは Google Analytics など外部のサービスを利用してアクセス解析を行うことがあります。',
				'items' => [
					'これらのサービスは独自にクッキーを設置・利用する場合があります。',
					'詳細については各サービスのプライバシーポリシーをご確認ください。',
					'Google のプライバシーポリシー：<a class="link" href="https://policies.google.com/privacy" target="_blank" rel="noopener noreferrer">https://policies.google.com/privacy</a>',
				],
				'note' => '',
			],
			[
				'title' => 'プライバシーポリシーとの関係',
				'lead'  => 'クッキーポリシーは当サイトのプライバシーポリシーと連動しています。',
				'items' => [
					'個人情報の取扱い全般については、プライバシーポリシーも合わせてご確認ください。',
				],
				'note' => '',
			],
		];

		?>

		<ul class="p-cookie-policy__list c-list-num">
			<?php foreach ($cookie_policy_list as $cookie): ?>
				<li class="p-cookie-policy__item c-list-num__item">
					<h3 class="c-heading-default">
						<?php echo wp_kses_post($cookie['title'] ?? ''); ?>
					</h3>

					<?php if (!empty($cookie['lead'])): ?>
						<p class="text">
							<?php echo wp_kses_post($cookie['lead']); ?>
						</p>
					<?php endif; ?>

					<?php if (!empty($cookie['items'])): ?>
						<ul class="c-list-num-child">
							<?php foreach ($cookie['items'] as $item): ?>
								<li class="c-list-num-child__item">
									<?php echo wp_kses_post($item); ?>
								</li>
							<?php endforeach; ?>
						</ul>
					<?php endif; ?>

					<?php if (!empty($cookie['note'])): ?>
						<p class="text">
							<?php echo wp_kses_post($cookie['note']); ?>
						</p>
					<?php endif; ?>
				</li>
			<?php endforeach; ?>
		</ul>

	</div>
</section>