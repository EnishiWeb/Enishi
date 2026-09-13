<?php
$btn_text = $btn_text ?? 'ちょっと相談してみる';
?>

<a href="<?= esc_url(home_url('/contact')); ?>" class="c-btn">
	<span class="c-btn_content">
		<span class="text">
			<?= esc_html($btn_text); ?>
		</span>

		<div class="icon">
			<?php include(dirname(__FILE__) . '/../Graphic/Mail-Image.php'); ?>
		</div>
	</span>
</a>