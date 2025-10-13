<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <title>ConcertEase | Online Concert Booking</title>
  <link rel="shortcut icon" type="image/png" href="/assets/Gemini_Generated_Image_5nnm915nnm915nnm.ico" />
  <script src="https://cdn.tailwindcss.com"></script>

  <style>
    body {
      background: linear-gradient(to bottom, #1e1b4b, #6d28d9, #db2777);
      color: white;
      font-family: 'Poppins', sans-serif;
    }

    .hero {
      background: url('https://wallpapers.com/images/featured/concert-background-dd0syeox7rmi78l0.jpg') no-repeat center center/cover;
      position: relative;
      height: 90vh;
    }

    .hero::before {
      content: "";
      position: absolute;
      inset: 0;
      background: rgba(0, 0, 0, 0.6);
    }

    .hero-content {
      position: relative;
      z-index: 10;
    }

    .btn {
      display: inline-block;
      padding: 0.75rem 1.75rem;
      border-radius: 9999px;
      font-weight: 600;
      transition: 0.3s;
      border: 2px solid #facc15;
      color: #facc15;
    }

    .btn:hover {
      background-color: #facc15;
      color: #000;
    }
  </style>
</head>

<body class="flex flex-col min-h-screen">

  <!-- Header -->
  <?= view('components/header') ?>

  <!-- Hero Section -->
  <section class="flex flex-col justify-center items-center px-6 text-center hero">
    <div class="max-w-3xl hero-content">
      <h1 class="mb-6 font-extrabold text-5xl md:text-6xl">Experience the Music Like Never Before</h1>
      <p class="mb-10 text-gray-200 text-lg">
        Book your favorite concerts, discover new artists, and feel the rhythm — all from one platform.
      </p>

    </div>
  </section>

  <!-- Upcoming Events -->
  <section id="events" class="bg-black/30 py-20 text-center">
    <h2 class="mb-10 font-bold text-4xl">Upcoming Concerts</h2>
    <div class="gap-10 grid sm:grid-cols-2 lg:grid-cols-3 mx-auto px-6 max-w-6xl">

      <?= view('components/cards/landingpage-card', [
        'title' => 'Jason Derulo',
        'excerpt' => 'November 22, 2025 — SM Mall of Asia',
        'image' => 'https://images1.smtickets.com/images/portrait_27052025194947.jpg',
        'href' => 'booking.php'
      ]) ?>

      <?= view('components/cards/landingpage-card', [
        'title' => 'BlackPink World Tour',
        'excerpt' => 'November 22, 2025 — SM Mall of Asia',
        'image' => 'https://images1.smtickets.com/images/portrait_23072025231047.jpg',
        'href' => 'booking.php'
      ]) ?>

      <?= view('components/cards/landingpage-card', [
        'title' => 'Doja Cat',
        'excerpt' => 'December 7, 2025 — SM Mall of Asia',
        'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTc6jcTKGJKRKcXmB2NZZY9Eju0l0LdptdCpw&s',
        'href' => 'booking.php'
      ]) ?>
    </div>
  </section>

  <!-- Contact -->
  <section id="contact" class="bg-black/40 py-16 text-center">
    <h3 class="mb-6 font-bold text-3xl">Contact Us</h3>
    <p class="mb-6 text-gray-300">Have questions or need help with your booking? Reach out to
      <span class="text-yellow-300">support@concertease.com</span>.
    </p>
    <a href="mailto:support@concertease.com" class="btn">Email Us</a>
  </section>

  <!-- Footer -->
  <?= view('components/footer') ?>
</body>

</html>