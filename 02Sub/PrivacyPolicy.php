<section class="p-contact-privacy">
	<!--::::::::::::::::::::::::::::::::::::::::::::
        heading
      :::::::::::::::::::::::::::::::::::::::::::::::-->
	<?php
	$tag = ""; //未設定の時は h3 使用
	$en  = "privacy policy";
	$ja  = "プライバシーポリシー";
	$color = "white";
	$align = "center";

	include(dirname(__FILE__) . '/../00Component/Parts/Heading/HeadingSection.php');
	?>
	<!--::::::::::::::::::::::::::::::::::::::::::::
        body
      :::::::::::::::::::::::::::::::::::::::::::::::-->
	<div class="p-contact-privacy__body">
		<?php
		$privacy_list = [
			[
				'title' => '個人情報の取得について',
				'lead'  => '当方は、お問い合わせフォームの送信時などに、以下の個人情報を取得することがあります。',
				'items' => [
					'お名前',
					'メールアドレス',
					'会社名',
					'その他お問い合わせ内容に含まれる個人情報',
				],
				'note' => '',
			],
			[
				'title' => '個人情報の利用目的',
				'lead'  => '取得した個人情報は、以下の目的のために利用いたします。',
				'items' => [
					'お問い合わせへの対応',
					'ご相談・ご依頼内容の確認および連絡',
					'サービス提供に関するご案内',
				],
				'note' => '上記以外の目的で利用することはありません。',
			],
			[
				'title' => '個人情報の管理',
				'lead'  => '当方は、個人情報への不正アクセス、紛失、漏えい等を防止するため、適切な安全管理措置を講じます。',
				'items' => [],
				'note' => '',
			],
			[
				'title' => '個人情報の第三者提供について',
				'lead'  => '取得した個人情報は、法令に基づく場合を除き、ご本人の同意なく第三者に提供することはありません。',
				'items' => [],
				'note' => '',
			],
			[
				'title' => 'Cookie（クッキー）について',
				'lead'  => '当サイトでは、サイトの利便性向上やアクセス解析のためにCookieを使用する場合があります。',
				'items' => [
					'Cookieにより取得される情報には、個人を特定できる情報は含まれません。',
					'ブラウザの設定によりCookieの使用を拒否することが可能です。',
				],
				'note' => '',
			],
			[
				'title' => 'reCAPTCHAの使用について',
				'lead'  => '当サイトでは、スパム対策のために Google が提供する reCAPTCHA を使用しています。',
				'items' => [
					'reCAPTCHA は、<a class="link" href="https://policies.google.com/privacy" target="_blank" rel="noopener noreferrer">Google のプライバシーポリシー</a>および<a class="link" href="https://policies.google.com/terms" target="_blank" rel="noopener noreferrer">利用規約</a>に基づいて動作します。',
					'フォーム送信時に、IPアドレスやブラウザ情報等が Google に送信される場合があります。',
				],
				'note' => '',
			],
			[
				'title' => 'アクセス解析ツールについて',
				'lead'  => '当サイトでは、サイト改善のためにアクセス解析ツールを使用する場合があります。',
				'items' => [
					'Cookieを利用してトラフィックデータを収集します。',
					'個人を特定するものではありません。',
				],
				'note' => '',
			],
			[
				'title' => '個人情報の開示・訂正・削除について',
				'lead'  => 'ご本人から個人情報の開示・訂正・削除等のご要望があった場合には、適切に対応いたします。',
				'items' => [],
				'note' => '',
			],
			[
				'title' => 'お問い合わせ窓口',
				'lead'  => '本ポリシーに関するお問い合わせは、当サイトのお問い合わせフォームよりご連絡ください。',
				'items' => [],
				'note' => '',
			],
		];

		?>

		<ul class="p-contact-privacy__list c-list-num">
			<?php foreach ($privacy_list as $privacy): ?>
				<li class="p-contact-privacy__item c-list-num__item">
					<h3 class="c-heading-default">
						<?php echo  wp_kses_post($privacy['title']); ?>
					</h3>

					<p class="text">
						<?php echo  wp_kses_post($privacy['lead']); ?>
					</p>

					<ul class="c-list-num-child">
						<?php foreach ($privacy['items'] as $item): ?>
							<li class="c-list-num-child__item">
								<?php echo  wp_kses_post($item); ?>
							</li>
						<?php endforeach; ?>
					</ul>

					<p class="text">
						<?php echo  wp_kses_post($privacy['note']); ?>
					</p>
				</li>
			<?php endforeach; ?>
		</ul>


	</div>
</section>