<div class="bg-black/40 rounded-2xl overflow-hidden shadow-lg card-hover flex flex-col items-center text-center">
  <div class="w-full flex justify-center bg-black/30">
    <img 
      src="<?= $image ?>" 
      alt="<?= $title ?>" 
      class="object-contain w-full max-h-[450px] transition-transform duration-300 hover:scale-105"
    >
  </div>

  <div class="p-6 w-full">
    <h4 class="text-2xl font-semibold mb-2 text-yellow-300"><?= $title ?></h4>
    <p class="text-gray-300 mb-4 text-sm md:text-base"><?= $excerpt ?></p>
    <a href="<?= $href ?>" 
       class="inline-block bg-yellow-400 text-black px-5 py-2 rounded-full font-semibold hover:bg-yellow-300 btn-main">
       Book Now
    </a>
  </div>
</div>
