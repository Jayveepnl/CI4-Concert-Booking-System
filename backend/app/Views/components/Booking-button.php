<?php
// Data contract:
// $text: string
// $href: string|null
// $color: string (e.g., 'yellow')
// $size: string (Tailwind classes, e.g., 'px-4 py-2 text-sm')
?>

<a href="<?= esc($href ?? '#') ?>" 
   class="<?= esc($size ?? 'px-4 py-2 text-sm') ?> 
          bg-<?= esc($color ?? 'yellow') ?>-400 
          text-black 
          rounded-full 
          font-semibold 
          hover:bg-<?= esc($color ?? 'yellow') ?>-300 
          transition">
    <?= esc($text) ?>
</a>
