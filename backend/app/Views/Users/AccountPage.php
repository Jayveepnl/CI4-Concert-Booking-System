<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ConcertEase — Admin Account</title>
    <link rel="shortcut icon" type="image/png" href="/assets/Gemini_Generated_Image_5nnm915nnm915nnm.ico" />
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            background: linear-gradient(to bottom, #1e1b4b, #6d28d9, #db2777);
            color: white;
            font-family: 'Poppins', sans-serif;
            min-height: 100vh;
        }

        .card {
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 1rem;
            padding: 2rem;
            max-width: 700px;
            margin: auto;
            margin-top: 4rem;
        }

        label {
            display: block;
            font-size: 0.875rem;
            color: #facc15;
            margin-bottom: 0.25rem;
            font-weight: 600;
        }

        input {
            width: 100%;
            padding: 0.6rem 1rem;
            border-radius: 0.5rem;
            border: none;
            outline: none;
            background-color: rgba(255, 255, 255, 0.15);
            color: white;
            transition: 0.3s;
        }

        input:focus {
            background-color: rgba(255, 255, 255, 0.25);
        }

        .btn {
            display: inline-block;
            padding: 0.75rem 1.5rem;
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

        .form-group {
            margin-bottom: 1.25rem;
        }
    </style>
</head>

<body class="p-6">

    <!-- Header -->
    <header class="flex justify-between items-center mb-10">
        <div>
            <h1 class="font-bold text-yellow-400 text-3xl">Admin Account</h1>
            <p class="text-white/70 text-sm">View and update your account details below.</p>
        </div>
        <a href="/admin/dashboard" class="btn">← Back to Dashboard</a>
    </header>

    <!-- Account Form -->
    <div class="card">
        <form action="#" method="POST">
            <div class="form-group">
                <label for="fullname">Full Name</label>
                <input id="fullname" name="fullname" type="text" placeholder="Enter your full name" value="Admin User" required>
            </div>

            <div class="form-group">
                <label for="email">Email Address</label>
                <input id="email" name="email" type="email" placeholder="Enter your email" value="admin@concertease.com" required>
            </div>

            <div class="form-group">
                <label for="role">Role</label>
                <input id="role" name="role" type="text" value="Administrator" disabled class="opacity-70 cursor-not-allowed">
            </div>

            <div class="form-group">
                <label for="password">New Password</label>
                <input id="password" name="password" type="password" placeholder="Enter new password">
            </div>

            <div class="form-group">
                <label for="confirm-password">Confirm New Password</label>
                <input id="confirm-password" name="confirm-password" type="password" placeholder="Confirm new password">
            </div>

            <div class="flex justify-end mt-6">
                <button type="submit" class="btn">Save Changes</button>
            </div>
        </form>
    </div>

</body>

</html>