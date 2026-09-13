<li class="c-menu-item">
  <a href="<?php echo home_url(); ?>/#strengths" class="c-menu-item__link">
    <span class="c-menu-item__text" data-en="strengths">強み</span>
  </a>
</li>
<li class="c-menu-item">
  <a href="<?php echo home_url(); ?>/#case" class="c-menu-item__link">
    <span class="c-menu-item__text" data-en="case study">ケーススタディ</span>
  </a>
</li>
<li class="c-menu-item">
  <a href="<?php echo home_url(); ?>/#flow" class="c-menu-item__link">
    <span class="c-menu-item__text" data-en="flow">制作の流れ</span>
  </a>
</li>
<li class="c-menu-item">
  <a href="<?php echo home_url(); ?>/#skill" class="c-menu-item__link">
    <span class="c-menu-item__text" data-en="flow">スキルセット</span>
  </a>
</li>
<li class="c-menu-item">
  <a href="<?php echo home_url(); ?>/#about" class="c-menu-item__link">
    <span class="c-menu-item__text" data-en="about">私について</span>
  </a>
</li>
<li class="c-menu-item__cta">
	<?php
	$btn_text = 'お問い合わせ';
	include(dirname(__FILE__) . '/../../Parts/Btn/BtnCta.php');
	unset($btn_text);
	?>
</li>