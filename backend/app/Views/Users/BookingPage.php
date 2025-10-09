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
  <!-- Logo + Title -->
  <div class="flex items-center space-x-3">
    <img src="assets/Gemini_Generated_Image_5nnm915nnm915nnm.ico" alt="ConcertEase Logo" class="w-10 h-10 rounded-full border-2 border-yellow-400">
    <h1 class="text-2xl font-bold tracking-wide text-white">ConcertEase</h1>
  </div>

  <!-- Navigation Buttons -->
  <nav class="flex items-center space-x-4 text-sm text-white">
    <?= view('components/Booking-button', ['text' => 'Moodboard', 'href' => 'moodboard.html', 'color' => 'yellow', 'size' => 'px-4 py-2 text-sm']) ?>
    <?= view('components/Booking-button', ['text' => 'Roadmap', 'href' => 'roadmap.html', 'color' => 'yellow', 'size' => 'px-4 py-2 text-sm']) ?>
    <?= view('components/Booking-button', ['text' => 'Login', 'href' => 'login.html', 'color' => 'yellow', 'size' => 'px-4 py-2 text-sm']) ?>
    <?= view('components/Booking-button', ['text' => 'Sign Up', 'href' => 'signup.html', 'color' => 'yellow', 'size' => 'px-4 py-2 text-sm']) ?>
  </nav>
</header>


  <!-- Main Section -->
  <section class="py-16 px-6 max-w-7xl mx-auto">
    <h2 class="text-4xl font-bold text-center mb-10">Available Concerts</h2>

    <!-- Concerts Grid -->
    <div class="gap-6 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3">

      <?php
        $concerts = [
          [
            'title' => 'Taylor Swift | The Eras Tour',
            'excerpt' => 'December 13, 2025 — Mall of Asia Arena',
            'image' => 'https://images.bauerhosting.com/empire/2023/10/taylor-swift-eras-tour-concert-film.jpg?ar=16%3A9&fit=crop&crop=top&auto=format&w=1440&q=80'
          ],
          [
            'title' => 'Imagine Dragons | Live in Manila',
            'excerpt' => 'November 20, 2025 — Araneta Coliseum',
            'image' => 'https://upload.wikimedia.org/wikipedia/commons/0/04/Imagine_Dragons%2C_Roundhouse%2C_London_%2835390234536%29.jpg'
          ],
          [
            'title' => 'Michael Bublé | Jazz Nights',
            'excerpt' => 'October 28, 2025 — New Frontier Theater',
            'image' => 'https://i8.amplience.net/i/naras/Michael_Buble_Press_Photo_Credit_Sarah_Krick'
          ],
          [
            'title' => 'Jason Derulo | World Tour',
            'excerpt' => 'November 22, 2025 — SM Mall of Asia Arena',
            'image' => 'https://images1.smtickets.com/images/portrait_27052025194947.jpg'
          ],
          [
            'title' => 'BlackPink | Born Pink World Tour',
            'excerpt' => 'November 22, 2025 — SM Mall of Asia Arena',
            'image' => 'https://images1.smtickets.com/images/portrait_23072025231047.jpg'
          ],
          [
            'title' => 'Doja Cat | Planet Her Live',
            'excerpt' => 'December 7, 2025 — SM Mall of Asia Arena',
            'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTc6jcTKGJKRKcXmB2NZZY9Eju0l0LdptdCpw&s'
          ],
        ];

        foreach ($concerts as $concert) {
          echo view('components/cards/booking-card', [
            'title' => $concert['title'],
            'excerpt' => $concert['excerpt'],
            'image' => $concert['image']
          ]);
        }
      ?>
    </div>
  </section>
</body>
</html>
