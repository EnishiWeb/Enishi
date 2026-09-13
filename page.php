<?php get_header(); ?>

<body>
	<?php include('00Component/GlobalNav.php'); ?>
	<?php include('00Component/OVL.php'); ?>
	<?php include('00Component/Parts/Modal/ModalCookiePolicy.php'); ?>

	<main>
		<div data-js-bg-change>
			<?php
			/**
			 * ──────────────────────────────────────────────────────────────────────────────
			 *  ページタイトルの設定
			 * ──────────────────────────────────────────────────────────────────────────────
			 */

			$en = '';
			$ja = '';
			$page_heading_bg = '';

			if (is_page('contact')) {
				$en = 'Contact';
				$ja = 'お問い合わせ';
				$page_heading_bg =
					get_template_directory_uri() . '/img/contact/bg-page.jpg';
			} elseif (is_page('work')) {
				//$en = 'Works';
				//$ja = '制作実績';
				//$page_heading_bg =
				get_template_directory_uri() . '/img/sub/work/heading.jpg';
			}

			include('00Component/Parts/Heading/HeadingPage.php');
			?>

			<?php
			/**
			 * ──────────────────────────────────────────────────────────────────────────────
			 *  出力ページの設定
			 * ──────────────────────────────────────────────────────────────────────────────
			 */
			?>

			<?php if (is_page('contact')): ?>

				<?php
				/*  contact  ------------------------------------ */
				include('02Sub/01Contact.php');
				?>

			<?php elseif (is_page('work')): ?>

				<?php
				/*  work  ------------------------------------ */
				include('02Sub/02Work.php');
				?>

			<?php endif; ?>
		</div>

	</main>
	<?php get_footer(); ?>