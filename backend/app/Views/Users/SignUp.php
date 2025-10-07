<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>ConcertEase | Sign Up</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-b from-indigo-900 via-purple-800 to-pink-600 text-white font-sans min-h-screen flex items-center justify-center">

  <!-- Sign Up Card -->
  <div class="bg-black bg-opacity-40 p-10 rounded-2xl shadow-2xl w-full max-w-md text-center">
    <h1 class="text-3xl font-extrabold mb-6">🎶 Join ConcertEase</h1>
    <p class="text-gray-300 mb-8 text-sm">Create an account to start booking your favorite concerts today!</p>

    <!-- Sign Up Form -->
    <form action="#" method="POST" class="space-y-5 text-left">
      <div>
        <label for="name" class="block text-sm font-medium mb-2">Full Name</label>
        <input type="text" id="name" name="name" required
               class="w-full px-4 py-3 rounded-lg bg-white bg-opacity-20 text-white placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-yellow-400">
      </div>

      <div>
        <label for="email" class="block text-sm font-medium mb-2">Email Address</label>
        <input type="email" id="email" name="email" required
               class="w-full px-4 py-3 rounded-lg bg-white bg-opacity-20 text-white placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-yellow-400">
      </div>

      <div>
        <label for="phone" class="block text-sm font-medium mb-2">Phone Number</label>
        <input type="tel" id="phone" name="phone"
               class="w-full px-4 py-3 rounded-lg bg-white bg-opacity-20 text-white placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-yellow-400">
      </div>

      <div>
        <label for="password" class="block text-sm font-medium mb-2">Password</label>
        <input type="password" id="password" name="password" required
               class="w-full px-4 py-3 rounded-lg bg-white bg-opacity-20 text-white placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-yellow-400">
      </div>

      <div>
        <label for="confirm" class="block text-sm font-medium mb-2">Confirm Password</label>
        <input type="password" id="confirm" name="confirm" required
               class="w-full px-4 py-3 rounded-lg bg-white bg-opacity-20 text-white placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-yellow-400">
      </div>

      <button type="submit"
              class="w-full mt-6 bg-yellow-400 text-black font-semibold py-3 rounded-full hover:bg-yellow-300 transition">
        Create Account
      </button>
    </form>

    <!-- Divider -->
    <div class="mt-6 flex items-center justify-center">
      <div class="h-px bg-gray-500 w-1/3"></div>
      <span class="mx-3 text-gray-400 text-sm">or</span>
      <div class="h-px bg-gray-500 w-1/3"></div>
    </div>

    <!-- Already have an account -->
    <p class="mt-6 text-gray-300 text-sm">
      Already have an account?
      <a href="login.html" class="text-yellow-300 font-semibold hover:underline">Sign In</a>
    </p>

    <!-- Back to home -->
    <a href="index.html" class="block mt-6 text-sm text-yellow-400 hover:underline">← Back to Home</a>
  </div>

</body>
</html>