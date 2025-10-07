<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>ConcertEase — Roadmap</title>
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
  <header class="max-w-6xl mx-auto px-6 py-8 flex justify-between items-center">
    <div>
      <h1 class="text-2xl font-extrabold text-[#112240]">ConcertEase Roadmap</h1>
      <p class="text-sm text-gray-600">High-level plan and status for upcoming features.</p>
    </div>
    <a href="index.html" class="block mt-6 text-sm text-black-400 hover:underline">← Back to Home</a>
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