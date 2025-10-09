<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>ConcertEase — Roadmap</title>
   <link rel="shortcut icon" type="image/png" href="/assets/Gemini_Generated_Image_5nnm915nnm915nnm.ico" />
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    .card-shadow { box-shadow: 0 6px 18px rgba(15,23,42,0.06); }
    .timeline-line { width: 3px; background: linear-gradient(#facc15, #112240); border-radius: 999px; }
    .badge { cursor: pointer; transition: transform 0.2s ease, box-shadow 0.2s ease; }
    .badge:hover { transform: scale(1.05); box-shadow: 0 4px 8px rgba(0,0,0,0.1); }

    .badge-planned { background:#ebf5ff; color:#1e40af; }
    .badge-inprogress { background:#ecfdf5; color:#065f46; }
    .badge-backlog { background:#fff7ed; color:#92400e; }
    .badge-done { background:#ecfdf0; color:#065f46; }
    .badge-active { border: 2px solid #facc15; }
  </style>
</head>
<body class="bg-white text-[#0f172a] font-sans">

 <!-- Header -->
<header class="flex flex-col md:flex-row items-center justify-between p-6 bg-gradient-to-r from-purple-700 via-blue-700 to-pink-600 text-white sticky top-0 z-10 shadow-lg rounded-b-xl">
  
  <!-- Logo + Title -->
  <div class="flex items-center space-x-3 mb-4 md:mb-0">
    <img src="assets/Gemini_Generated_Image_5nnm915nnm915nnm.ico" alt="ConcertEase Logo" class="w-12 h-12 rounded-full shadow-md">
    <h1 class="text-2xl md:text-3xl font-bold tracking-wide text-yellow-400">ConcertEase</h1>
  </div>

  <!-- Navigation -->
  <nav class="flex flex-wrap items-center gap-3 md:gap-4 text-sm md:text-base">
    <a href="index.html" class="px-4 py-2 border border-yellow-400 rounded-full font-semibold hover:bg-yellow-400 hover:text-black transition">Home</a>
    <a href="moodboard.html" class="px-4 py-2 border border-yellow-400 rounded-full font-semibold hover:bg-yellow-400 hover:text-black transition">MoodBoard</a>
    <a href="login.html" class="px-4 py-2 border border-yellow-400 rounded-full font-semibold hover:bg-yellow-400 hover:text-black transition">Login</a>
    <a href="signup.html" class="px-4 py-2 border border-yellow-400 rounded-full font-semibold hover:bg-yellow-400 hover:text-black transition">SignUp</a>
  </nav>

  <!-- Subtitle / Description -->
  <div class="mt-4 md:mt-0 text-center md:text-left">
    <h2 class="text-lg md:text-xl font-medium text-white/90">High-level plan & status of upcoming features</h2>
  </div>

</header>


  <!-- Filter Chips -->
  <div class="max-w-6xl mx-auto px-6 mb-6">
    <h2 class="font-medium mb-2">Filter by Status:</h2>
    <div id="filter-chips" class="flex flex-wrap gap-3">
      <span class="badge badge-active px-3 py-1 rounded-full text-sm font-semibold bg-yellow-100 text-yellow-700" data-status="All">All</span>
      <span class="badge badge-planned px-3 py-1 rounded-full text-sm font-semibold" data-status="Planned">Planned</span>
      <span class="badge badge-inprogress px-3 py-1 rounded-full text-sm font-semibold" data-status="In Progress">In Progress</span>
      <span class="badge badge-backlog px-3 py-1 rounded-full text-sm font-semibold" data-status="Backlog">Backlog</span>
      <span class="badge badge-done px-3 py-1 rounded-full text-sm font-semibold" data-status="Done">Done</span>
    </div>
  </div>

  <!-- Roadmap Cards -->
  <main class="max-w-6xl mx-auto px-6 pb-16">
    <div class="grid md:grid-cols-12 gap-8">
      <div class="md:col-span-1 hidden md:flex justify-center">
        <div class="w-2 h-full timeline-line"></div>
      </div>

      <div class="md:col-span-11 space-y-6" id="roadmap-list">

        <!-- Example Cards -->
        <div class="card-shadow bg-white border rounded-lg p-5 flex justify-between items-start hover:shadow-md transition" data-status="In Progress">
          <div class="max-w-[78%]">
            <h3 class="text-lg font-semibold text-[#112240]">Services CRUD (Concert Events)</h3>
            <p class="text-sm text-gray-600 mt-1">Add, update, and deactivate concert events — artist, venue, date & ticket categories.</p>
            <p class="text-xs text-gray-500 mt-3"><strong>Priority:</strong> High</p>
            <div class="text-xs text-gray-500 mt-2">▸ Implementation pipeline</div>
          </div>
          <span class="px-3 py-1 rounded-full text-sm font-semibold badge-inprogress">In Progress</span>
        </div>

        <div class="card-shadow bg-white border rounded-lg p-5 flex justify-between items-start hover:shadow-md transition" data-status="Planned">
          <div class="max-w-[78%]">
            <h3 class="text-lg font-semibold text-[#112240]">User CRUD</h3>
            <p class="text-sm text-gray-600 mt-1">Register users (attendees, organizers, admins), edit profiles, manage roles and deactivation.</p>
            <p class="text-xs text-gray-500 mt-3"><strong>Priority:</strong> High</p>
            <div class="text-xs text-gray-500 mt-2">▸ Implementation pipeline</div>
          </div>
          <span class="px-3 py-1 rounded-full text-sm font-semibold badge-planned">Planned</span>
        </div>

        <div class="card-shadow bg-white border rounded-lg p-5 flex justify-between items-start hover:shadow-md transition" data-status="Planned">
          <div class="max-w-[78%]">
            <h3 class="text-lg font-semibold text-[#112240]">Request CRUD (Ticket Booking)</h3>
            <p class="text-sm text-gray-600 mt-1">Allow booking, viewing, updating and cancelling of tickets.</p>
            <p class="text-xs text-gray-500 mt-3"><strong>Priority:</strong> High</p>
            <div class="text-xs text-gray-500 mt-2">▸ Implementation pipeline</div>
          </div>
          <span class="px-3 py-1 rounded-full text-sm font-semibold badge-planned">Planned</span>
        </div>

        <div class="card-shadow bg-white border rounded-lg p-5 flex justify-between items-start hover:shadow-md transition" data-status="Backlog">
          <div class="max-w-[78%]">
            <h3 class="text-lg font-semibold text-[#112240]">Payment Gateway Integration</h3>
            <p class="text-sm text-gray-600 mt-1">Integrate secure payments (cards, wallets) and handle transaction statuses.</p>
            <p class="text-xs text-gray-500 mt-3"><strong>Priority:</strong> Medium</p>
            <div class="text-xs text-gray-500 mt-2">▸ Implementation pipeline</div>
          </div>
          <span class="px-3 py-1 rounded-full text-sm font-semibold badge-backlog">Backlog</span>
        </div>

        <div class="card-shadow bg-white border rounded-lg p-5 flex justify-between items-start hover:shadow-md transition" data-status="Backlog">
          <div class="max-w-[78%]">
            <h3 class="text-lg font-semibold text-[#112240]">Feedback & Review System</h3>
            <p class="text-sm text-gray-600 mt-1">User reviews, ratings, and event feedback for quality improvement.</p>
            <p class="text-xs text-gray-500 mt-3"><strong>Priority:</strong> Low</p>
            <div class="text-xs text-gray-500 mt-2">▸ Implementation pipeline</div>
          </div>
          <span class="px-3 py-1 rounded-full text-sm font-semibold badge-backlog">Backlog</span>
        </div>

        <div class="card-shadow bg-green-50 border rounded-lg p-5 flex justify-between items-start hover:shadow-md transition" data-status="Done">
          <div class="max-w-[78%]">
            <h3 class="text-lg font-semibold text-[#112240]">System Design & UI Mockups</h3>
            <p class="text-sm text-gray-700 mt-1">Moodboard, landing page, sign-up, login mockups, and component library ready.</p>
            <p class="text-xs text-gray-500 mt-1"><strong>Priority:</strong> High</p>
            <div class="text-xs text-gray-500 mt-2">▸ Implementation pipeline</div>
          </div>
          <span class="px-3 py-1 rounded-full text-sm font-semibold badge-done">Done</span>
        </div>

      </div>
    </div>
  </main>

  <footer class="text-center text-gray-500 py-8 border-t border-gray-100">
    © 2025 ConcertEase | Crafted for live music lovers 🎤
  </footer>

  <!-- JS Filter Logic -->
  <script>
    const chips = document.querySelectorAll('#filter-chips .badge');
    const cards = document.querySelectorAll('#roadmap-list > div');

    chips.forEach(chip => {
      chip.addEventListener('click', () => {
        const status = chip.dataset.status;
        chips.forEach(c => c.classList.remove('badge-active'));
        chip.classList.add('badge-active');

        cards.forEach(card => {
          if (status === 'All' || card.dataset.status === status) {
            card.style.display = 'flex';
            card.classList.add('opacity-100');
            card.classList.remove('opacity-0');
          } else {
            card.classList.add('opacity-0');
            setTimeout(() => card.style.display = 'none', 200);
          }
        });
      });
    });
  </script>

</body>
</html>