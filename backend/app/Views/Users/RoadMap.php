<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>ConcertEase – Roadmap</title>
  <link rel="shortcut icon" type="image/png" href="/assets/music_icon.ico" />
  <script src="https://cdn.tailwindcss.com"></script>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Righteous&family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">

  <style>
    body {
      font-family: 'Roboto Slab', serif;
    }

    .heading {
      font-family: 'Righteous', sans-serif;
    }
  </style>
</head>

<body class="bg-fixed bg-cover bg-center text-[#2b1b1b] flex flex-col min-h-screen"
  style="background-image: url('https://images.unsplash.com/photo-1506157786151-b8491531f063?auto=format&fit=crop&w=1200&q=80');">

  <!-- HEADER -->
  <?= view('components/header.php') ?>

  <!-- Page Wrapper -->
  <div class="flex-grow bg-gradient-to-b from-[rgba(50,30,30,0.6)] to-[rgba(80,60,60,0.4)] px-4 py-10">
    <div class="mx-auto max-w-5xl">

      <!-- Top Bar with Back Button -->
      <div class="flex justify-between items-center mb-6">
        <h1 class="text-4xl text-white heading drop-shadow-sm">🎶 ConcertEase Roadmap</h1>

        <?= view('components/buttons/back_button', [
          'href' => '/',
          'label' => 'Back to Home'
        ]) ?>
      </div>

      <p class="text-[#f2e9e4] text-sm mb-10">
        Explore ConcertEase’s feature roadmap — where live music meets modern booking convenience.
      </p>

      <!-- Roadmap Cards -->
      <div class="space-y-5">
        <?= view('components/cards/roadmap_cards', [
          "title" => "User Authentication System",
          "description" => "Implement secure login, signup, and role-based access for admins and concertgoers.",
          "status" => "In Progress",
          "priority" => "High",
          "statusClass" => "bg-yellow-400"
        ]) ?>

        <?= view('components/cards/roadmap_cards', [
          "title" => "Concert Listings and Booking",
          "description" => "Display upcoming concerts with real-time ticket availability and booking options.",
          "status" => "In Progress",
          "priority" => "High",
          "statusClass" => "bg-yellow-400"
        ]) ?>

        <?= view('components/cards/roadmap_cards', [
          "title" => "Seat Selection Interface",
          "description" => "Interactive seat maps for users to select specific seats during booking.",
          "status" => "Planned",
          "priority" => "Medium",
          "statusClass" => "bg-blue-400"
        ]) ?>

        <?= view('components/cards/roadmap_cards', [
          "title" => "Payment Integration",
          "description" => "Enable secure payments through GCash, PayPal, and credit cards.",
          "status" => "Planned",
          "priority" => "Medium",
          "statusClass" => "bg-blue-400"
        ]) ?>

        <?= view('components/cards/roadmap_cards', [
          "title" => "User Feedback System",
          "description" => "Allow attendees to rate concerts and leave feedback for future improvements.",
          "status" => "Backlog",
          "priority" => "Low",
          "statusClass" => "bg-purple-500"
        ]) ?>
      </div>
    </div>
  </div>

  <!-- FOOTER -->
  <?= view('components/footer.php') ?>

</body>
</html>
