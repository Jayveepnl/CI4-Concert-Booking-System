<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>ConcertEase Mood Board</title>
  <link rel="shortcut icon" type="image/png" href="/Gemini_Generated_Image_5nnm915nnm915nnm.ico" />
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    @keyframes fadeInUp {
      from { opacity: 0; transform: translateY(30px); }
      to { opacity: 1; transform: translateY(0); }
    }
    .fade-in-up { opacity: 0; animation: fadeInUp 0.8s ease forwards; }
    .fade-in-up.delay-1 { animation-delay: 0.2s; }
    .fade-in-up.delay-2 { animation-delay: 0.4s; }
    .fade-in-up.delay-3 { animation-delay: 0.6s; }
  </style>
</head>

<body class="bg-white text-gray-800 min-h-screen font-sans">

  <!-- Header -->
  <header class="flex items-center justify-between p-6 bg-purple bg-opacity-30 backdrop-blur-md sticky top-0 z-10">
    <div class="flex items-center space-x-3">
      <img src="assets/Gemini_Generated_Image_5nnm915nnm915nnm.ico" alt="ConcertEase Logo" class="w-10 h-10 rounded-full">
      <h1 class="text-2xl font-bold tracking-wide text-yellow-400">ConcertEase</h1>
    </div>
    <nav class="flex items-center space-x-6 text-sm">
      <a href="index.html" class="hover:text-black-300">Home</a>
      <a href="events.html" class="hover:text-black-300">Upcoming</a>
      <a href="contact.html" class="hover:text-black-300">Contact</a>
      <a href="moodboard.html" class="px-4 py-2 border border-yellow-400 text-black-400 rounded-full font-semibold hover:bg-black-400 hover:text-yellow transition">Moodboard</a>
      <a href="roadmap.html" class="px-4 py-2 border border-yellow-400 text-black-400 rounded-full font-semibold hover:bg-black-400 hover:text-yellow transition">Roadmap</a>
      <a href="login.html" class="px-4 py-2 border border-yellow-400 text-black-400 rounded-full font-semibold hover:bg-black-400 hover:text-yellow transition">Login</a>
      <a href="signup.html" class="px-4 py-2 border border-yellow-400 text-black-400 rounded-full font-semibold hover:bg-black-400 hover:text-yellow transition">SignUp</a>
  </header>

  <!-- Main Content -->
  <main class="max-w-6xl mx-auto px-6 space-y-16 mt-12">

    <!-- Typography Section -->
    <section class="fade-in-up delay-2">
      <h2 class="text-2xl font-bold mb-6 text-[#112240]">✍️ Typography</h2>
      <div class="space-y-4">
        <div class="bg-gray-100 p-6 rounded-xl hover:scale-105 transition border border-gray-200">
          <p class="text-yellow-600 font-bold text-lg">Heading Font</p>
          <h1 class="text-4xl font-extrabold tracking-wide text-[#112240]">Poppins — Bold & Modern</h1>
        </div>
        <div class="bg-gray-100 p-6 rounded-xl hover:scale-105 transition border border-gray-200">
          <p class="text-yellow-600 font-bold text-lg">Body Font</p>
          <p class="text-gray-700 text-lg leading-relaxed">
            Inter — Clean and readable for paragraphs, ensuring comfort during long reads.
          </p>
        </div>
      </div>
    </section>

    <!-- Buttons Section -->
    <section class="fade-in-up delay-3">
      <h2 class="text-2xl font-bold mb-6 text-[#112240]">🟡 Buttons</h2>

      <!-- Light Mode -->
      <div class="mb-8">
        <h3 class="text-lg font-semibold mb-4 text-gray-700">Light Mode</h3>
        <div class="flex flex-wrap gap-4 justify-center bg-gray-50 p-6 rounded-xl border border-gray-200">
          <button class="bg-yellow-400 text-black font-semibold px-6 py-2 rounded-full hover:bg-yellow-300 transition transform hover:scale-105">Primary</button>
          <button class="bg-[#b00088] text-white font-semibold px-6 py-2 rounded-full hover:bg-[#b91c1c] transition transform hover:scale-105">Secondary</button>
          <button class="bg-transparent border border-yellow-400 text-yellow-500 font-semibold px-6 py-2 rounded-full hover:bg-yellow-400 hover:text-black transition transform hover:scale-105">Border</button>
          <button class="bg-gray-300 text-gray-500 font-semibold px-6 py-2 rounded-full cursor-not-allowed opacity-70">Disabled</button>
        </div>
      </div>

      <!-- Dark Mode -->
      <div>
        <h3 class="text-lg font-semibold mb-4 text-gray-700">Dark Mode</h3>
        <div class="flex flex-wrap gap-4 justify-center bg-[#0a192f] p-6 rounded-xl border border-gray-700">
          <button class="bg-yellow-400 text-black font-semibold px-6 py-2 rounded-full hover:bg-yellow-300 transition transform hover:scale-105">Primary</button>
          <button class="bg-[#b00088] text-white font-semibold px-6 py-2 rounded-full hover:bg-[#b91c1c] transition transform hover:scale-105">Secondary</button>
          <button class="bg-transparent border border-yellow-400 text-yellow-400 font-semibold px-6 py-2 rounded-full hover:bg-yellow-400 hover:text-black transition transform hover:scale-105">Border</button>
          <button class="bg-gray-700 text-gray-500 font-semibold px-6 py-2 rounded-full cursor-not-allowed opacity-60">Disabled</button>
        </div>
      </div>
    </section>

    <!-- Sample Cards Section -->
    <section class="fade-in-up delay-3">
      <h2 class="text-2xl font-bold mb-6 text-[#112240]">💳 Sample UI Cards</h2>
      <div class="grid md:grid-cols-3 gap-8">
        <div class="bg-gray-100 rounded-xl p-6 hover:scale-105 transition transform shadow-lg border border-gray-200">
          <h4 class="text-xl font-semibold text-yellow-600 mb-2">Event Card</h4>
          <p class="text-gray-700 text-sm mb-4">Used for upcoming concerts — includes artist, date, and location.</p>
          <button class="bg-yellow-400 text-black px-4 py-2 rounded-full font-semibold hover:bg-yellow-300">Book Now</button>
        </div>
        <div class="bg-gray-100 rounded-xl p-6 hover:scale-105 transition transform shadow-lg border border-gray-200">
          <h4 class="text-xl font-semibold text-yellow-600 mb-2">Login Card</h4>
          <p class="text-gray-700 text-sm mb-4">Simple user interface for authentication and access control.</p>
          <button class="bg-[#b00088] text-white px-4 py-2 rounded-full font-semibold hover:bg-[#b91c1c]">Sign In</button>
        </div>
        <div class="bg-gray-100 rounded-xl p-6 hover:scale-105 transition transform shadow-lg border border-gray-200">
          <h4 class="text-xl font-semibold text-yellow-600 mb-2">Signup Card</h4>
          <p class="text-gray-700 text-sm mb-4">Allows users to register for an account before booking.</p>
          <button class="bg-transparent border border-yellow-500 text-yellow-600 px-4 py-2 rounded-full font-semibold hover:bg-yellow-400 hover:text-black">Sign Up</button>
        </div>
      </div>
    </section>

    <!-- Logos Section -->
    <section class="mt-24 mb-20 text-center fade-in-up">
      <h2 class="text-2xl font-bold mb-10 text-[#112240]">🎵 Logos</h2>
      <div class="flex flex-wrap justify-center gap-16">
        <div class="bg-gray-100 p-10 rounded-xl hover:scale-105 transition flex flex-col items-center border border-gray-200">
          <div class="w-28 h-28 bg-yellow-400 rounded-full flex items-center justify-center text-black font-bold text-4xl shadow-md">CE</div>
          <p class="mt-4 text-gray-700 font-medium">Main — Circle</p>
        </div>
        <div class="bg-gray-100 p-10 rounded-xl hover:scale-105 transition flex flex-col items-center border border-gray-200">
          <div class="w-28 h-28 bg-yellow-400 flex items-center justify-center text-black font-bold text-4xl rounded-md shadow-md">CE</div>
          <p class="mt-4 text-gray-700 font-medium">Main — Square</p>
        </div>
      </div>
    </section>
  </main>

  <!-- Footer -->
  <footer class="text-center text-gray-500 py-8 mt-8 border-t border-gray-200">
    © 2025 ConcertEase | Designed for an immersive music experience 🎶
  </footer>

</body>
</html>
