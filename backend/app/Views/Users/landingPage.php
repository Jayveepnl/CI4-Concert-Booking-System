<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>ConcertEase | Online Concert Booking</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-b from-indigo-900 via-purple-800 to-pink-600 text-white font-sans min-h-screen">
  <!-- Navbar -->
  <header class="flex items-center justify-between p-6 bg-black bg-opacity-30 backdrop-blur-md sticky top-0 z-10">
    <h1 class="text-2xl font-bold tracking-wide">🎵 ConcertEase</h1>
    <nav class="flex items-center space-x-6 text-sm">
      <a href="#home" class="hover:text-yellow-300">Home</a>
      <a href="#events" class="hover:text-yellow-300">Upcoming</a>
      <a href="#contact" class="hover:text-yellow-300">Contact</a>

      <!-- Added Buttons -->
      <a href="moodboard.html" class="px-4 py-2 border border-yellow-400 text-yellow-400 rounded-full font-semibold hover:bg-yellow-400 hover:text-black transition">Moodboard</a>
      <a href="roadmap.html" class="px-4 py-2 border border-yellow-400 text-yellow-400 rounded-full font-semibold hover:bg-yellow-400 hover:text-black transition">Roadmap</a>

      <!-- Existing Buttons -->
      <a href="login.html" class="px-4 py-2 border border-yellow-400 text-yellow-400 rounded-full font-semibold hover:bg-yellow-400 hover:text-black transition">Login</a>
      <a href="signup.html" class="px-4 py-2 bg-yellow-400 text-black rounded-full font-semibold hover:bg-yellow-300 transition">Sign Up</a>
    </nav>
  </header>

  <!-- Hero Section -->
  <section 
    id="home" 
    class="relative flex flex-col items-center justify-center text-center h-[90vh] px-6 bg-cover bg-center bg-no-repeat" 
    style="background-image: url('https://wallpapers.com/images/featured/concert-background-dd0syeox7rmi78l0.jpg');">

    <div class="absolute inset-0 bg-black bg-opacity-50"></div>

    <div class="relative z-10 flex flex-col items-center text-center">
      <h2 class="text-5xl md:text-6xl font-extrabold mb-4 leading-tight text-white drop-shadow-lg">
        Experience the Music Like Never Before
      </h2>
      <p class="max-w-2xl mx-auto text-lg text-gray-200 mb-8 text-center">
        Book your favorite concerts, discover new artists, and feel the rhythm — all from one platform.
      </p>
      <a href="booking.html" 
        class="px-8 py-3 bg-yellow-400 text-black rounded-full text-lg font-semibold hover:bg-yellow-300 transition">
        Get Tickets
      </a>
    </div>
  </section>


  <!-- Upcoming Events Section -->
  <section id="events" class="py-20 text-center">
    <h3 class="text-4xl font-extrabold mb-8">Upcoming Concerts</h3>
    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-10 max-w-6xl mx-auto px-6">
      <div class="bg-white bg-opacity-10 p-5 rounded-xl shadow-lg hover:scale-105 transition-transform duration-300">
        <div class="overflow-hidden rounded-lg mb-4 h-[420px] flex justify-center">
          <img src="https://images1.smtickets.com/images/portrait_27052025194947.jpg" alt="Jason Derulo" class="h-full object-cover rounded-lg">
        </div>
        <h4 class="text-2xl font-semibold">Jason Derulo</h4>
        <p class="text-gray-300 text-sm mb-4">November 22, 2025 — SM Mall of Asia</p>
        <a href="booking.html" class="px-4 py-2 bg-yellow-400 text-black rounded-full text-sm font-semibold hover:bg-yellow-300">Book Now</a>
      </div>

      <div class="bg-white bg-opacity-10 p-5 rounded-xl shadow-lg hover:scale-105 transition-transform duration-300">
        <div class="overflow-hidden rounded-lg mb-4 h-[420px] flex justify-center">
          <img src="https://images1.smtickets.com/images/portrait_23072025231047.jpg" alt="BlackPink" class="h-full object-cover rounded-lg">
        </div>
        <h4 class="text-2xl font-semibold">BlackPink World Tour</h4>
        <p class="text-gray-300 text-sm mb-4">November 22, 2025 — SM Mall of Asia</p>
        <a href="booking.html" class="px-4 py-2 bg-yellow-400 text-black rounded-full text-sm font-semibold hover:bg-yellow-300">Book Now</a>
      </div>

      <div class="bg-white bg-opacity-10 p-5 rounded-xl shadow-lg hover:scale-105 transition-transform duration-300">
        <div class="overflow-hidden rounded-lg mb-4 h-[420px] flex justify-center">
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTc6jcTKGJKRKcXmB2NZZY9Eju0l0LdptdCpw&s" alt="Doja Cat" class="h-full object-cover rounded-lg">
        </div>
        <h4 class="text-2xl font-semibold">Doja Cat</h4>
        <p class="text-gray-300 text-sm mb-4">December 7, 2025 — SM Mall of Asia</p>
        <a href="booking.html" class="px-4 py-2 bg-yellow-400 text-black rounded-full text-sm font-semibold hover:bg-yellow-300">Book Now</a>
      </div>
    </div>
  </section>

  <!-- Contact Section -->
  <section id="contact" class="py-20 bg-black bg-opacity-30 text-center">
    <h3 class="text-3xl font-bold mb-8">Contact Us</h3>
    <p class="max-w-xl mx-auto text-gray-300 mb-8">
      Have questions or need help with your booking? Reach out to our team anytime at 
      <span class="text-yellow-300">support@concertease.com</span>.
    </p>
    <a href="mailto:support@concertease.com" class="px-6 py-2 bg-yellow-400 text-black rounded-full font-semibold hover:bg-yellow-300">Email Us</a>
  </section>

  <!-- Footer -->
  <footer class="text-center py-6 text-sm bg-black bg-opacity-40">
    © 2025 ConcertEase — All Rights Reserved.
  </footer>
</body>
</html>