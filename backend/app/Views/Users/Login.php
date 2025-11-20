<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>ConcertEase | Login</title>
  <link rel="shortcut icon" type="image/png" href="/assets/Gemini_Generated_Image_5nnm915nnm915nnm.ico" />
  <script src="https://cdn.tailwindcss.com"></script>

  <style>
    body {
      background: linear-gradient(to bottom, #1e1b4b, #6d28d9, #db2777);
      color: white;
      font-family: 'Poppins', sans-serif;
      min-height: 100vh;
      display: flex;
      flex-direction: column;
    }
    .login-container {
      flex-grow: 1;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 2rem;
    }
    .login-card {
      background: rgba(0, 0, 0, 0.4);
      border-radius: 1rem;
      padding: 2.5rem;
      max-width: 400px;
      width: 100%;
      text-align: center;
      box-shadow: 0 0 25px rgba(0, 0, 0, 0.3);
    }
    input {
      width: 100%;
      padding: 0.75rem;
      border-radius: 0.5rem;
      background: rgba(255, 255, 255, 0.2);
      color: white;
      border: none;
      outline: none;
    }
    input:focus {
      outline: 2px solid #facc15;
    }
    button {
      width: 100%;
      background-color: #facc15;
      color: #000;
      font-weight: 600;
      border-radius: 9999px;
      padding: 0.75rem;
      transition: 0.3s;
    }
    button:hover {
      background-color: #fde047;
    }
  </style>
</head>

<body>
  <?= view('components/header') ?>

  <section class="login-container">
    <div class="login-card">
      <h2 class="text-2xl font-bold mb-4 text-yellow-300">Welcome Back to ConcertEase</h2>
      <p class="text-gray-300 mb-6 text-sm">Login to book your favorite concerts and manage your account.</p>

      <form action="#" method="POST" class="space-y-4 text-left">
        <div>
          <label for="email" class="text-sm block mb-1">Email Address</label>
          <input type="email" id="email" name="email" placeholder="Enter your email" required>
        </div>

        <div>
          <label for="password" class="text-sm block mb-1">Password</label>
          <input type="password" id="password" name="password" placeholder="Enter your password" required>
        </div>

        <div class="flex items-center justify-between text-sm mt-2">
          <label><input type="checkbox" class="accent-yellow-400 mr-1"> Remember me</label>
          <a href="#" class="text-yellow-300 hover:underline">Forgot password?</a>
        </div>

        <button type="submit" class="mt-4">Login</button>
      </form>

      <div class="mt-6 text-sm text-gray-300">
        Don’t have an account?
        <a href="/SignUp" class="text-yellow-300 font-semibold hover:underline">Sign Up</a>
      <?= view('components/buttons/back_button', [
    'href' => '/',
    'label' => 'Back to Home'
  ]) ?>

  </section>

  <?= view('components/footer') ?>
</body>
</html>
