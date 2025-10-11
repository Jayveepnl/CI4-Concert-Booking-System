<a href="<?= esc($href ?? 'javascript:history.back()') ?>" 
   class="inline-flex items-center space-x-2 px-5 py-2 border-2 border-yellow-400 text-yellow-400 rounded-full 
          hover:bg-yellow-400 hover:text-black transition font-semibold">
  <svg xmlns="http://www.w3.org/2000/svg" 
       fill="none" viewBox="0 0 24 24" 
       stroke-width="2" stroke="currentColor" 
       class="w-5 h-5">
    <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
  </svg>
  <span><?= esc($label ?? 'Back') ?></span>
</a>
