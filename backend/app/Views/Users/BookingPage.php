<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Book Tickets | ConcertEase</title>
  <link rel="shortcut icon" type="image/png" href="/assets/Gemini_Generated_Image_5nnm915nnm915nnm.ico" />
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-[#0a192f] to-[#112240] text-white min-h-screen">
  <!-- Header -->
  <header class="p-6 flex justify-between items-center bg-[#0b1b33] shadow-lg">
    <div class="flex items-center space-x-3">
    <img src="assets/Gemini_Generated_Image_5nnm915nnm915nnm.ico" alt="ConcertEase Logo" class="w-10 h-10 rounded-full border-2 border-yellow-400">
    <h1 class="text-2xl font-bold tracking-wide text-white">ConcertEase</h1>
  </div>
    <nav>
      <a href="index.html" class="mx-4 text-gray-300 hover:text-yellow-400 transition">Home</a>
      <a href="login.html" class="mx-4 text-gray-300 hover:text-yellow-400 transition">Login</a>
      <a href="signup.html" class="mx-4 text-gray-300 hover:text-yellow-400 transition">SignUp</a>
    </nav>
  </header>

  <!-- Main Section -->
  <section class="py-16 px-6 max-w-7xl mx-auto">
    <h2 class="text-4xl font-bold text-center mb-10">Available Concerts</h2>

    <!-- Concert Cards -->
    <div id="concert-list" class="grid sm:grid-cols-2 lg:grid-cols-3 gap-10 max-w-6xl mx-auto px-6">
      <!-- Existing Cards -->
      <div class="concert-card bg-white bg-opacity-10 p-5 rounded-xl shadow-lg hover:scale-105 transition-transform duration-300"
           data-event="Taylor Swift | The Eras Tour">
        <div class="overflow-hidden rounded-lg mb-4 h-[420px] flex justify-center">
          <img src="https://images.bauerhosting.com/empire/2023/10/taylor-swift-eras-tour-concert-film.jpg?ar=16%3A9&fit=crop&crop=top&auto=format&w=1440&q=80" alt="Taylor Swift" class="h-full object-cover rounded-lg">
        </div>
        <h4 class="text-2xl font-semibold text-yellow-400">Taylor Swift | The Eras Tour</h4>
        <p class="text-gray-300 text-sm mb-4">December 13, 2025 — Mall of Asia Arena</p>
        <button class="book-btn px-4 py-2 bg-yellow-400 text-black rounded-full text-sm font-semibold hover:bg-yellow-300 w-full transition">Book Now</button>
      </div>

      <div class="concert-card bg-white bg-opacity-10 p-5 rounded-xl shadow-lg hover:scale-105 transition-transform duration-300"
           data-event="Imagine Dragons | Live in Manila">
        <div class="overflow-hidden rounded-lg mb-4 h-[420px] flex justify-center">
          <img src="https://upload.wikimedia.org/wikipedia/commons/0/04/Imagine_Dragons%2C_Roundhouse%2C_London_%2835390234536%29.jpg" alt="Imagine Dragons" class="h-full object-cover rounded-lg">
        </div>
        <h4 class="text-2xl font-semibold text-yellow-400">Imagine Dragons | Live in Manila</h4>
        <p class="text-gray-300 text-sm mb-4">November 20, 2025 — Araneta Coliseum</p>
        <button class="book-btn px-4 py-2 bg-yellow-400 text-black rounded-full text-sm font-semibold hover:bg-yellow-300 w-full transition">Book Now</button>
      </div>

      <div class="concert-card bg-white bg-opacity-10 p-5 rounded-xl shadow-lg hover:scale-105 transition-transform duration-300"
           data-event="Michael Bublé | Jazz Nights">
        <div class="overflow-hidden rounded-lg mb-4 h-[420px] flex justify-center">
          <img src="https://i8.amplience.net/i/naras/Michael_Buble_Press_Photo_Credit_Sarah_Krick" alt="Michael Bublé" class="h-full object-cover rounded-lg">
        </div>
        <h4 class="text-2xl font-semibold text-yellow-400">Michael Bublé | Jazz Nights</h4>
        <p class="text-gray-300 text-sm mb-4">October 28, 2025 — New Frontier Theater</p>
        <button class="book-btn px-4 py-2 bg-yellow-400 text-black rounded-full text-sm font-semibold hover:bg-yellow-300 w-full transition">Book Now</button>
      </div>

      <!-- New Cards -->
      <div class="concert-card bg-white bg-opacity-10 p-5 rounded-xl shadow-lg hover:scale-105 transition-transform duration-300"
           data-event="Jason Derulo | World Tour">
        <div class="overflow-hidden rounded-lg mb-4 h-[420px] flex justify-center">
          <img src="https://images1.smtickets.com/images/portrait_27052025194947.jpg" alt="Jason Derulo" class="h-full object-cover rounded-lg">
        </div>
        <h4 class="text-2xl font-semibold text-yellow-400">Jason Derulo | World Tour</h4>
        <p class="text-gray-300 text-sm mb-4">November 22, 2025 — SM Mall of Asia Arena</p>
        <button class="book-btn px-4 py-2 bg-yellow-400 text-black rounded-full text-sm font-semibold hover:bg-yellow-300 w-full transition">Book Now</button>
      </div>

      <div class="concert-card bg-white bg-opacity-10 p-5 rounded-xl shadow-lg hover:scale-105 transition-transform duration-300"
           data-event="BlackPink | Born Pink World Tour">
        <div class="overflow-hidden rounded-lg mb-4 h-[420px] flex justify-center">
          <img src="https://images1.smtickets.com/images/portrait_23072025231047.jpg" alt="BlackPink" class="h-full object-cover rounded-lg">
        </div>
        <h4 class="text-2xl font-semibold text-yellow-400">BlackPink | Born Pink World Tour</h4>
        <p class="text-gray-300 text-sm mb-4">November 22, 2025 — SM Mall of Asia Arena</p>
        <button class="book-btn px-4 py-2 bg-yellow-400 text-black rounded-full text-sm font-semibold hover:bg-yellow-300 w-full transition">Book Now</button>
      </div>

      <div class="concert-card bg-white bg-opacity-10 p-5 rounded-xl shadow-lg hover:scale-105 transition-transform duration-300"
           data-event="Doja Cat | Planet Her Live">
        <div class="overflow-hidden rounded-lg mb-4 h-[420px] flex justify-center">
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTc6jcTKGJKRKcXmB2NZZY9Eju0l0LdptdCpw&s" alt="Doja Cat" class="h-full object-cover rounded-lg">
        </div>
        <h4 class="text-2xl font-semibold text-yellow-400">Doja Cat | Planet Her Live</h4>
        <p class="text-gray-300 text-sm mb-4">December 7, 2025 — SM Mall of Asia Arena</p>
        <button class="book-btn px-4 py-2 bg-yellow-400 text-black rounded-full text-sm font-semibold hover:bg-yellow-300 w-full transition">Book Now</button>
      </div>
    </div>
  </section>

 <!-- Seat Selection Modal -->
<div id="seatModal" class="hidden fixed inset-0 bg-black bg-opacity-70 flex justify-center items-center z-50">
  <div class="bg-[#0a192f] rounded-2xl p-8 max-w-5xl w-full relative text-center shadow-2xl border border-yellow-400/20">
    <h2 id="modalTitle" class="text-2xl font-bold mb-6 text-yellow-400">Select Your Seats</h2>

    <!-- Stage -->
    <div class="bg-gray-200 text-black font-bold py-2 rounded-t-lg mb-8 w-1/2 mx-auto shadow-md">STAGE</div>

    <!-- Seating Map (Landscape Layout) -->
    <div id="seatMap" class="flex flex-col items-center space-y-10 mb-8">
      <!-- VIP Section -->
      <div class="w-full flex flex-col items-center">
        <p class="text-yellow-400 font-semibold mb-3 text-lg">🎖 VIP (₱15,000)</p>
        <div class="flex justify-center flex-wrap gap-3 w-3/4" id="vipSeats"></div>
      </div>

      <!-- Regular Section -->
      <div class="w-full flex flex-col items-center">
        <p class="text-yellow-400 font-semibold mb-3 text-lg">💎 Regular (₱8,000)</p>
        <div class="flex justify-center flex-wrap gap-3 w-4/5" id="regularSeats"></div>
      </div>

      <!-- General Admission Section -->
      <div class="w-full flex flex-col items-center">
        <p class="text-yellow-400 font-semibold mb-3 text-lg">🎫 Gen Ad (₱3,000)</p>
        <div class="flex justify-center flex-wrap gap-3 w-full" id="genSeats"></div>
      </div>
    </div>

    <!-- Summary -->
    <div class="space-y-2 mb-6">
      <p class="text-gray-300">Selected Seats: <span id="selectedCount" class="font-bold text-yellow-400">0</span></p>
      <p class="text-gray-300">Total Price: <span id="totalPrice" class="font-bold text-yellow-400">₱0</span></p>
    </div>

    <!-- Buttons -->
    <div class="flex justify-center space-x-4">
      <button id="confirmBooking" class="bg-yellow-400 text-black px-6 py-2 rounded-lg font-semibold hover:bg-yellow-300 transition shadow-md">
        Confirm Booking
      </button>
      <button id="closeModal" class="bg-transparent border border-gray-500 text-gray-300 px-6 py-2 rounded-lg font-semibold hover:bg-gray-700 transition">
        Close
      </button>
    </div>
  </div>
</div>



  <script>
    const seatModal = document.getElementById('seatModal');
    const modalTitle = document.getElementById('modalTitle');
    const selectedCount = document.getElementById('selectedCount');
    const totalPrice = document.getElementById('totalPrice');
    let selectedSeats = [];
    let prices = { vip: 15000, regular: 8000, gen: 3000 };

    document.querySelectorAll('.book-btn').forEach(btn => {
      btn.addEventListener('click', (e) => {
        const card = e.target.closest('.concert-card');
        modalTitle.textContent = `🎵 ${card.dataset.event}`;
        seatModal.classList.remove('hidden');
        selectedSeats = [];
        generateSeats();
        updateSummary();
      });
    });

    document.getElementById('closeModal').addEventListener('click', () => {
      seatModal.classList.add('hidden');
      selectedSeats = [];
    });

    function generateSeats() {
      const vipContainer = document.getElementById('vipSeats');
      const regContainer = document.getElementById('regularSeats');
      const genContainer = document.getElementById('genSeats');
      vipContainer.innerHTML = '';
      regContainer.innerHTML = '';
      genContainer.innerHTML = '';

      for (let i = 1; i <= 12; i++) createSeat(vipContainer, 'VIP', i);
      for (let i = 1; i <= 24; i++) createSeat(regContainer, 'Regular', i);
      for (let i = 1; i <= 40; i++) createSeat(genContainer, 'Gen', i);
    }

    function createSeat(container, type, num) {
      const seat = document.createElement('div');
      seat.textContent = num;
      seat.className = 'w-8 h-8 flex items-center justify-center text-sm font-semibold rounded cursor-pointer transition transform hover:scale-110';
      
      if (type === 'VIP') seat.classList.add('bg-yellow-400', 'text-black');
      if (type === 'Regular') seat.classList.add('bg-[#233554]', 'hover:bg-yellow-400');
      if (type === 'Gen') seat.classList.add('bg-[#1b2a4a]', 'hover:bg-yellow-400');

      seat.addEventListener('click', () => toggleSeat(seat, type, num));
      container.appendChild(seat);
    }

    function toggleSeat(seat, type, num) {
      const seatId = `${type}-${num}`;
      if (selectedSeats.includes(seatId)) {
        selectedSeats = selectedSeats.filter(s => s !== seatId);
        seat.classList.remove('scale-110', 'ring', 'ring-yellow-300');
      } else {
        selectedSeats.push(seatId);
        seat.classList.add('scale-110', 'ring', 'ring-yellow-300');
      }
      updateSummary();
    }

    function updateSummary() {
      selectedCount.textContent = selectedSeats.length;
      let total = 0;
      selectedSeats.forEach(s => {
        if (s.startsWith('VIP')) total += prices.vip;
        else if (s.startsWith('Regular')) total += prices.regular;
        else total += prices.gen;
      });
      totalPrice.textContent = `₱${total.toLocaleString()}`;
    }

    document.getElementById('confirmBooking').addEventListener('click', () => {
      if (selectedSeats.length === 0) {
        alert('Please select at least one seat.');
        return;
      }
      const eventName = modalTitle.textContent.replace('🎵 ', '');
      localStorage.setItem('concertName', eventName);
      localStorage.setItem('totalAmount', totalPrice.textContent.replace('₱', '').replace(/,/g, ''));
      alert(`🎫 Booking confirmed for ${selectedSeats.length} seat(s)!\nTotal: ${totalPrice.textContent}`);
      seatModal.classList.add('hidden');
      selectedSeats = [];
      window.location.href = "PaymentMethod.html";
    });
  </script>
</body>
</html>