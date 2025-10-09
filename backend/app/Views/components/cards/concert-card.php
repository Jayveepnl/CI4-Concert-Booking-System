<?php
// Component: components/cards/concert-card.php
// Data contract:
// $title: string
// $excerpt: string (date + venue)
// $image: string|null
?>
<article class="concert-card bg-white/10 backdrop-blur-md rounded-xl shadow-lg overflow-hidden hover:scale-105 transition-transform duration-300" data-event="<?= esc($title) ?>">
    <?php if (!empty($image)): ?>
        <div class="overflow-hidden h-[420px] flex justify-center">
            <img src="<?= esc($image) ?>" alt="<?= esc($title) ?>" class="w-full h-full object-cover rounded-lg transition-transform duration-500 hover:scale-110">
        </div>
    <?php endif; ?>
    <div class="p-4">
        <?php if (!empty($title)): ?>
            <h3 class="mb-2 font-semibold text-2xl text-yellow-400 truncate"><?= esc($title) ?></h3>
        <?php endif; ?>
        <?php if (!empty($excerpt)): ?>
            <p class="mb-4 text-gray-300 text-sm"><?= esc($excerpt) ?></p>
        <?php endif; ?>
        <button class="book-btn w-full py-2 bg-yellow-400 text-black font-semibold rounded-full text-sm hover:bg-yellow-300 transition">
            Book Now
        </button>
    </div>
</article>
