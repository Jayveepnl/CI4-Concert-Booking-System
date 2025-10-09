<?php
// Data contract:
// $title: string
// $excerpt: string
// $image: string|null
// $href: string|null
?>

<article class="bg-white bg-opacity-10 p-5 rounded-xl shadow-lg hover:scale-105 transition-transform duration-300">
  <?php if (!empty($image)): ?>
    <div class="overflow-hidden rounded-lg mb-4 h-[420px] flex justify-center">
      <img src="<?= esc($image) ?>" alt="<?= esc($title ?? '') ?>" class="h-full object-cover rounded-lg">
    </div>
  <?php endif; ?>

  <?php if (!empty($title)): ?>
    <h4 class="text-2xl font-semibold mb-2"><?= esc($title) ?></h4>
  <?php endif; ?>

  <?php if (!empty($excerpt)): ?>
    <p class="text-gray-300 text-sm mb-4"><?= esc($excerpt) ?></p>
  <?php endif; ?>

  <?php if (!empty($href)): ?>
    <?= view('components/button', [
        'text' => 'Book Now',
        'href' => $href,
        'color' => 'yellow',
        'size' => 'px-4 py-2 text-sm'
    ]) ?>
  <?php endif; ?>
</article>
