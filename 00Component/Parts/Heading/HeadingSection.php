<?php
  $tag   = !empty($tag) ? $tag : "h3"; //未設定の時は h3 使用
  $en    = $en ?? "";
  $ja    = $ja ?? "";
  $color = $color ?? "";
  $align = $align ?? "";
?>

<<?= $tag; ?>
  class="c-heading-section<?= $color ? ' _color-' . $color : ''; ?><?= $align ? ' _align-' . $align : ''; ?>">
  <span class="en c-animate-typing" data-js-typing data-js-animate-once style="--dur:1s; --delay:0s;"><?= $en; ?></span>
  <span class="ja"><?= $ja; ?></span>
</<?= $tag; ?>>