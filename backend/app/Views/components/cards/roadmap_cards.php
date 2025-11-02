<div class="bg-[#f9f4ef]/90 rounded-xl shadow-lg p-5 text-[#2b1b1b]">
  <div class="flex justify-between items-center mb-2">
    <h2 class="text-xl font-bold heading"><?= $title ?></h2>
    <span class="text-xs px-3 py-1 rounded-full <?= $statusClass ?> text-white font-semibold"><?= $status ?></span>
  </div>
  <p class="text-sm mb-3"><?= $description ?></p>
  <div class="flex justify-between text-xs text-gray-700">
    <span><strong>Priority:</strong> <?= $priority ?></span>
    <span><strong>Status:</strong> <?= $status ?></span>
  </div>
</div>
