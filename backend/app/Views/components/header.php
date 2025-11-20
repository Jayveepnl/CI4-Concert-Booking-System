<?php $session = session(); ?>

<header class="top-0 z-10 sticky bg-black/30 backdrop-blur-md">
  <div class="flex justify-between items-center mx-auto px-6 py-4 max-w-6xl">

    <div class="flex items-center space-x-3">
      <img src="/assets/Gemini_Generated_Image_5nnm915nnm915nnm.ico"
        alt="ConcertEase Logo"
        class="border-2 border-yellow-400 rounded-full w-10 h-10">
      <h1 class="font-bold text-yellow-300 text-lg">ConcertEase</h1>
    </div>

    <nav class="flex space-x-4">

      <a href="/landingPage" class="bg-yellow-400 hover:bg-yellow-300 px-4 py-1.5 rounded-full font-semibold text-black transition">Home</a>
      <a href="/MoodBoard" class="bg-yellow-400 hover:bg-yellow-300 px-4 py-1.5 rounded-full font-semibold text-black transition">Moodboard</a>
      <a href="/RoadMap" class="bg-yellow-400 hover:bg-yellow-300 px-4 py-1.5 rounded-full font-semibold text-black transition">Roadmap</a>

      <?php if (! $session->has('user')): ?>
        <a href="/login" class="bg-yellow-400 hover:bg-yellow-300 px-4 py-1.5 rounded-full font-semibold text-black transition">Login</a>
      <?php else: ?>
        <form action="/logout" method="post">
          <button type="submit"
            class="bg-yellow-400 hover:bg-yellow-300 px-4 py-1.5 rounded-full font-semibold text-black transition">
            Logout
          </button>
        </form>
      <?php endif; ?>

      <a href="/signup" class="bg-yellow-400 hover:bg-yellow-300 px-4 py-1.5 rounded-full font-semibold text-black transition">Sign Up</a>

    </nav>

  </div>
</header>