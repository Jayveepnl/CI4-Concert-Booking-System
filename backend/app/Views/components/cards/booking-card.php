<?php
// $title, $excerpt, $image, $href (optional)
?>

<article class="concert-card bg-white bg-opacity-10 p-5 rounded-xl shadow-lg hover:scale-105 transition-transform duration-300" data-event="<?= esc($title) ?>">
  <?php if (!empty($image)): ?>
    <div class="overflow-hidden rounded-lg mb-4 h-[280px] flex justify-center">
      <img src="<?= esc($image) ?>" alt="<?= esc($title) ?>" class="h-full object-cover rounded-lg">
    </div>
  <?php endif; ?>

  <?php if (!empty($title)): ?>
    <h4 class="text-2xl font-semibold mb-2"><?= esc($title) ?></h4>
  <?php endif; ?>

  <?php if (!empty($excerpt)): ?>
    <p class="text-gray-300 text-sm mb-4"><?= esc($excerpt) ?></p>
  <?php endif; ?>

  <!-- Reusable Book Now Button -->
  <button class="book-btn bg-yellow-400 text-black px-4 py-2 rounded-full font-semibold hover:bg-yellow-300 transition w-full">
    Book Now
  </button>
</article>
