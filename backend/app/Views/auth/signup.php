<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>ConcertEase | Sign Up</title>
  <link rel="shortcut icon" href="/assets/Gemini_Generated_Image_5nnm915nnm915nnm.ico" />
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    body {
      background: linear-gradient(to bottom, #312e81, #6b21a8, #db2777);
      font-family: 'Poppins', sans-serif;
      position: relative;
      overflow: hidden;
    }

    body::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><circle cx="50" cy="50" r="2" fill="rgba(255,255,255,0.1)"/><circle cx="20" cy="30" r="1" fill="rgba(255,255,255,0.05)"/><circle cx="80" cy="70" r="1.5" fill="rgba(255,255,255,0.08)"/><circle cx="10" cy="80" r="1" fill="rgba(255,255,255,0.06)"/><circle cx="90" cy="20" r="1.2" fill="rgba(255,255,255,0.07)"/></svg>') repeat;
      pointer-events: none;
      z-index: -1;
    }

    .card {
      background: linear-gradient(to bottom, #251f66, #5a1a95, #b91c63);
      /* Darker version */
      backdrop-filter: blur(8px);
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.5), 0 0 30px rgba(219, 39, 119, 0.25);
      border: 1px solid rgba(255, 255, 255, 0.1);
      position: relative;
      border-radius: 1rem;
    }

    .card::before {
      content: '';
      position: absolute;
      top: -2px;
      left: -2px;
      right: -2px;
      bottom: -2px;
      background: linear-gradient(45deg, #ff5a5a, #4ea5c0, #3e94bf, #f8b820, #ec7b1f);
      border-radius: 16px;
      z-index: -1;
      opacity: 0.7;
      animation: glow 3s ease-in-out infinite alternate;
    }

    @keyframes glow {
      0% {
        opacity: 0.5;
      }

      100% {
        opacity: 1;
      }
    }

    input:focus {
      background-color: rgba(255, 255, 255, 0.2);
      box-shadow: 0 0 10px rgba(219, 39, 119, 0.5);
    }

    button:hover {
      transform: scale(1.03);
      box-shadow: 0 0 20px rgba(251, 191, 36, 0.6);
    }

    .concert-icon {
      width: 50px;
      height: 50px;
      margin: 0 auto 10px;
      filter: drop-shadow(0 0 10px rgba(255, 255, 255, 0.5));
    }
  </style>
</head>

<body class="flex justify-center items-center min-h-screen text-white">
  <div class="p-10 rounded-2xl w-full max-w-2xl card">
    <div class="mb-4 text-center">
      <svg class="concert-icon" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M12 2L13.09 8.26L20 9L13.09 9.74L12 16L10.91 9.74L4 9L10.91 8.26L12 2Z" fill="#FFD700" />
        <path d="M12 2L13.09 8.26L20 9L13.09 9.74L12 16L10.91 9.74L4 9L10.91 8.26L12 2Z" fill="none" stroke="#FFD700" stroke-width="0.5" />
      </svg>
    </div>
    <h1 class="mb-2 font-extrabold text-3xl text-center">Create Your ConcertEase Account</h1>
    <p class="mb-8 text-gray-300 text-sm text-center">Sign up to explore concerts and exclusive events.</p>
    <form action="/signup" method="post" novalidate class="space-y-6">
      <?= csrf_field() ?>
      <!-- Name Fields (Vertical Layout) -->
      <div class="space-y-4">
        <!-- First Name -->
        <div>
          <label class="block mb-1 font-semibold">First Name</label>
          <input type="text" name="first_name" required value="<?= esc($old['first_name'] ?? '') ?>" placeholder="First name" class="w-full px-4 py-3 rounded-lg bg-white bg-opacity-20 text-white placeholder-gray-300 border <?= isset($errors['first_name']) ? 'border-red-500' : 'border-gray-300' ?>">
          <?php if (!empty($errors['first_name'])): ?>
            <p class="mt-1 text-red-400 text-sm"><?= esc($errors['first_name']) ?></p>
          <?php endif; ?>
        </div>
        <!-- Middle Name -->
        <div>
          <label class="block mb-1 font-semibold">Middle Name</label>
          <input type="text" name="middle_name" value="<?= esc($old['middle_name'] ?? '') ?>" placeholder="Optional" class="w-full px-4 py-3 rounded-lg bg-white bg-opacity-20 text-white placeholder-gray-300 border <?= isset($errors['middle_name']) ? 'border-red-500' : 'border-gray-300' ?>">
          <?php if (!empty($errors['middle_name'])): ?>
            <p class="mt-1 text-red-400 text-sm"><?= esc($errors['middle_name']) ?></p>
          <?php endif; ?>
        </div>
        <!-- Last Name -->
        <div>
          <label class="block mb-1 font-semibold">Last Name</label>
          <input type="text" name="last_name" required value="<?= esc($old['last_name'] ?? '') ?>" placeholder="Last name" class="w-full px-4 py-3 rounded-lg bg-white bg-opacity-20 text-white placeholder-gray-300 border <?= isset($errors['last_name']) ? 'border-red-500' : 'border-gray-300' ?>">
          <?php if (!empty($errors['last_name'])): ?>
            <p class="mt-1 text-red-400 text-sm"><?= esc($errors['last_name']) ?></p>
          <?php endif; ?>
        </div>
      </div>
      <!-- Email -->
      <div>
        <label class="block mb-1 font-semibold">Email Address</label>
        <input type="email" name="email" required value="<?= esc($old['email'] ?? '') ?>" placeholder="Enter your email" class="w-full px-4 py-3 rounded-lg bg-white bg-opacity-20 text-white placeholder-gray-300 border <?= isset($errors['email']) ? 'border-red-500' : 'border-gray-300' ?>">
        <?php if (!empty($errors['email'])): ?>
          <p class="mt-1 text-red-400 text-sm"><?= esc($errors['email']) ?></p>
        <?php endif; ?>
      </div>
      <!-- Password -->
      <div>
        <label class="block mb-1 font-semibold">Password</label>
        <input id="password" type="password" name="password" required placeholder="Create a password" class="w-full px-4 py-3 rounded-lg bg-white bg-opacity-20 text-white placeholder-gray-300 border <?= isset($errors['password']) ? 'border-red-500' : 'border-gray-300' ?>">
        <ul class="space-y-1 mt-2 text-sm">
          <li id="rule-length" class="text-red-400">• At least 8 characters</li>
          <li id="rule-upper" class="text-red-400">• At least one uppercase letter</li>
          <li id="rule-special" class="text-red-400">• At least one special character (! @ # $ %)</li>
        </ul>
        <?php if (!empty($errors['password'])): ?>
          <p class="mt-1 text-red-400 text-sm"><?= esc($errors['password']) ?></p>
        <?php endif; ?>
      </div>
      <!-- Confirm Password -->
      <div>
        <label class="block mb-1 font-semibold">Confirm Password</label>
        <input id="password_confirm" type="password" name="password_confirm" required placeholder="Re-enter your password" class="w-full px-4 py-3 rounded-lg bg-white bg-opacity-20 text-white placeholder-gray-300 border <?= isset($errors['password_confirm']) ? 'border-red-500' : 'border-gray-300' ?>">
        <p id="passwordMatch" class="hidden mt-1 text-sm"></p>
        <?php if (!empty($errors['password_confirm'])): ?>
          <p class="mt-1 text-red-400 text-sm"><?= esc($errors['password_confirm']) ?></p>
        <?php endif; ?>
      </div>
      <!-- Submit -->
      <button id="registerBtn" type="submit" class="bg-yellow-400 disabled:opacity-40 py-3 rounded-full w-full font-semibold text-black transition"> Create Account </button>
      <!-- Login Link -->
      <p class="mt-4 text-gray-300 text-sm text-center"> Already have an account? <a href="/login" class="font-semibold text-yellow-300 hover:underline">Login</a> </p>
      <!-- Back Button Component -->
      <?= view('components/buttons/back_button', ['href' => '/', 'label' => 'Back to Home']) ?>
    </form>
  </div>
  <!-- Password Validation Script -->
  <script>
    const passwordInput = document.getElementById("password");
    const confirmPassword = document.getElementById("password_confirm");
    const registerBtn = document.getElementById("registerBtn");
    const ruleLength = document.getElementById("rule-length");
    const ruleUpper = document.getElementById("rule-upper");
    const ruleSpecial = document.getElementById("rule-special");

    function updateRule(element, condition) {
      condition ? element.classList.replace("text-red-400", "text-green-400") : element.classList.replace("text-green-400", "text-red-400");
    }

    passwordInput.addEventListener("input", () => {
      const v = passwordInput.value;
      updateRule(ruleLength, v.length >= 8);
      updateRule(ruleUpper, /[A-Z]/.test(v));
      updateRule(ruleSpecial, /[!@#$%]/.test(v));
      checkMatch();
    });

    confirmPassword.addEventListener("input", checkMatch);

    function checkMatch() {
      const msg = document.getElementById("passwordMatch");
      if (!confirmPassword.value) {
        msg.classList.add("hidden");
        registerBtn.disabled = true;
        return;
      }
      if (passwordInput.value === confirmPassword.value) {
        msg.textContent = "Passwords match ✓";
        msg.className = "text-green-400 text-sm mt-1";
      } else {
        msg.textContent = "Passwords do not match";
        msg.className = "text-red-400 text-sm mt-1";
      }
      registerBtn.disabled = !(
        ruleLength.classList.contains("text-green-400") &&
        ruleUpper.classList.contains("text-green-400") &&
        ruleSpecial.classList.contains("text-green-400") &&
        passwordInput.value === confirmPassword.value
      );
    }
  </script>
</body>

</html>