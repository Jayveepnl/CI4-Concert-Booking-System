<?php
/**
 * Button Component
 * Usage:
 * <?= view('components/button/button-landingpage', [
 *      'text' => 'Click Me',
 *      'href' => 'path.html',
 *      'color' => 'yellow', // 'yellow', 'blue', 'green', etc.
 *      'size' => 'px-4 py-2 text-sm' // optional
 * ]) ?>
 */

$color = $color ?? 'yellow';
$size = $size ?? 'px-4 py-2 text-sm';

$bg = "bg-$color-400";
$hover = "hover:bg-$color-300";
$text = "text-black";
$border = "border border-$color-400";

?>

<a href="<?= $href ?>" class="<?= $bg ?> <?= $text ?> <?= $border ?> <?= $hover ?> rounded-full font-semibold transition <?= $size ?>">
    <?= $text ?>
</a>
