<?php
$tag   = 'h2';
$color = 'white';
$align = '';
?>

<div
	class="c-unit-heading-page"
	<?php if (!empty($page_heading_bg)): ?>
	style="background-image: url('<?= esc_url($page_heading_bg); ?>');"
	<?php endif; ?>>
	<div class="l-inner">
		<?php include(dirname(__FILE__) . '/HeadingSection.php'); ?>
	</div>
</div>