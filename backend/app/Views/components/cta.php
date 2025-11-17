<?php
// Component: components/cta.php
// Usage example:
// <?= view('components/cta', [
//     'heading' => 'Get Ready for the Ultimate Live Experience!',
//     'sub' => 'Book your next concert ticket today and be part of unforgettable moments under the lights.',
//     'primary' => ['label' => 'Book Now', 'href' => '/booking']
// ]) 
?>

<section id="cta-section"
    class="relative bg-cover bg-center py-12 md:py-20 text-white w-full overflow-hidden"
    style="background-image: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.5)), 
           url('https://images.unsplash.com/photo-1518972559570-7cc1309f3229?auto=format&fit=crop&w=1470&q=80');">

    <!-- Animated overlay lights -->
    <div class="absolute inset-0 opacity-20 pointer-events-none">
        <div class="absolute top-8 left-12 w-3 h-3 bg-yellow-400 rounded-full animate-ping"></div>
        <div class="absolute top-20 right-20 w-2 h-2 bg-pink-500 rounded-full animate-bounce"></div>
        <div class="absolute bottom-12 left-1/3 w-3 h-3 bg-blue-400 rounded-full animate-pulse"></div>
    </div>

    <!-- Gradient overlay -->
    <div class="absolute inset-0 bg-gradient-to-br from-purple-900/70 via-black/40 to-indigo-800/50"></div>

    <!-- Container -->
    <div class="relative z-10 flex flex-col lg:flex-row items-center justify-center max-w-6xl mx-auto px-6 gap-8 lg:gap-12">

        <!-- CTA Content Box -->
        <div class="relative flex-1 text-left bg-white/10 backdrop-blur-md border border-white/20 rounded-2xl 
            p-8 md:p-10 w-full lg:max-w-4xl shadow-xl hover:shadow-2xl 
            transition-all duration-700 transform hover:-translate-y-1 hover:scale-[1.02]">

            <!-- Decorative music icon -->
            <div class="absolute -top-4 left-1/2 -translate-x-1/2 w-10 h-10 bg-gradient-to-r from-yellow-400 to-pink-500 
                        rounded-full flex items-center justify-center shadow-lg">
                <svg class="w-5 h-5 text-black" fill="none" stroke="currentColor" stroke-width="2"
                     viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M9 19V6l12-2v13M9 19a2 2 0 104 0 2 2 0 00-4 0z" />
                </svg>
            </div>

            <?php if (!empty($heading)): ?>
                <h2 class="mb-3 font-['Righteous'] text-3xl md:text-4xl font-bold text-yellow-400 leading-snug 
                           transform transition duration-500 hover:scale-105">
                    <?= esc($heading) ?>
                </h2>
            <?php endif; ?>

            <?php if (!empty($sub)): ?>
                <p class="mb-6 text-gray-200 text-base md:text-lg leading-relaxed opacity-90 
                           transition duration-500 hover:opacity-100">
                    <?= esc($sub) ?>
                </p>
            <?php endif; ?>

            <div class="flex flex-col sm:flex-row gap-3 justify-center lg:justify-start">
                <?php if (!empty($primary)): ?>
                    <?= view('components/buttons/primary_button', [
                        'label' => $primary['label'],
                        'href' => $primary['href'],
                        'class' => 'text-sm md:text-base px-6 py-3 bg-gradient-to-r from-yellow-400 to-pink-500 
                                    hover:from-pink-500 hover:to-yellow-400 text-black font-semibold 
                                    shadow-lg hover:shadow-xl transform hover:-translate-y-1 transition-all duration-300 rounded-full'
                    ]) ?>
                <?php endif; ?>
            </div>
        </div>

        <!-- Concert Image -->
        <div class="flex-1 flex justify-center lg:justify-start items-center w-full mt-6 lg:mt-0 z-10 
opacity-0 translate-y-6 transition-all duration-[1200ms] ease-out delay-300 
motion-safe:opacity-100 motion-safe:translate-y-0">
            <img src="https://png.pngtree.com/png-vector/20230802/ourmid/pngtree-concert-crowd-music-festival-audience-vector-png-image_6829962.png"
                alt="Concert Crowd Illustration"
                class="w-full max-w-[520px] lg:max-w-[620px] object-contain drop-shadow-xl hover:drop-shadow-2xl 
               transition duration-700 transform hover:rotate-1 rounded-xl">
        </div>
    </div>
</section>
