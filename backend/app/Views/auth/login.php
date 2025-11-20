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
      max-width: 420px;
      width: 100%;
      box-shadow: 0 0 25px rgba(0, 0, 0, 0.3);
    }

    .input-field {
      width: 100%;
      padding: 0.75rem;
      border-radius: 0.75rem;
      background: rgba(255, 255, 255, 0.15);
      color: white;
      border: 1px solid rgba(255, 255, 255, 0.3);
      transition: 0.2s;
    }

    .input-field:focus {
      outline: none;
      border-color: #facc15;
      box-shadow: 0 0 5px #facc15;
    }

    .btn-login {
      width: 100%;
      background-color: #facc15;
      color: #000;
      font-weight: 600;
      border-radius: 9999px;
      padding: 0.75rem;
      transition: 0.3s;
    }

    .btn-login:hover {
      background-color: #fde047;
    }
  </style>
</head>

<body>
  <?= view('components/header') ?>

  <section class="login-container">
    <div class="login-card">
      <h2 class="mb-2 font-bold text-yellow-300 text-2xl text-center">Welcome Back to ConcertEase</h2>
      <p class="mb-6 text-gray-300 text-sm text-center">Login to book your favorite concerts and manage your account.</p>

      <!-- Updated Form Based on Reference -->
      <form action="/login" method="POST" class="space-y-6 text-left">
        <?= csrf_field() ?>

        <!-- Email -->
        <div>
          <label class="block mb-1 font-medium text-yellow-300">Email Address</label>
          <input type="email" name="email" placeholder="Enter your email"
            value="<?= esc($old['email'] ?? '') ?>"
            class="input-field <?= isset($errors['email']) ? 'border-red-500' : '' ?>" />
          <?php if (!empty($errors['email'])): ?>
            <p class="mt-1 text-red-400 text-sm"><?= esc($errors['email']) ?></p>
          <?php endif; ?>
        </div>

        <!-- Password -->
        <div>
          <label class="block mb-1 font-medium text-yellow-300">Password</label>
          <input type="password" name="password" placeholder="Enter your password"
            class="input-field <?= isset($errors['password']) ? 'border-red-500' : '' ?>" />
          <?php if (!empty($errors['password'])): ?>
            <p class="mt-1 text-red-400 text-sm"><?= esc($errors['password']) ?></p>
          <?php endif; ?>
        </div>

        <!-- Forgot Password -->
        <div class="text-sm text-right">
          <a href="/forgot-password" class="font-medium text-yellow-300 hover:text-yellow-400">Forgot password?</a>
        </div>

        <!-- Login Button -->
        <button type="submit" class="btn-login">Login</button>

        <!-- Sign Up -->
        <p class="mt-4 text-gray-300 text-sm text-center">
          Don’t have an account?
          <a href="/SignUp" class="font-semibold text-yellow-300 hover:text-yellow-400">Sign Up</a>
        </p>
      </form>

      <div class="mt-4">
        <?= view('components/buttons/back_button', ['href' => '/', 'label' => 'Back to Home']) ?>
      </div>

    </div>
  </section>

  <?= view('components/footer') ?>
</body>

</html>