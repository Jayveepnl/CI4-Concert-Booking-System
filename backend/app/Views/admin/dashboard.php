<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ConcertEase Admin Dashboard</title>
    <link rel="shortcut icon" type="image/png" href="/assets/Gemini_Generated_Image_5nnm915nnm915nnm.ico" />
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            background: linear-gradient(to bottom, #1e1b4b, #6d28d9, #db2777);
            color: white;
            font-family: 'Poppins', sans-serif;
        }

        .sidebar {
            background: rgba(0, 0, 0, 0.4);
            backdrop-filter: blur(10px);
            height: 100vh;
        }

        .menu-item {
            display: block;
            padding: 0.75rem 1rem;
            border-radius: 0.5rem;
            font-weight: 500;
            transition: all 0.3s;
            color: #facc15;
        }

        .menu-item:hover {
            background: #facc15;
            color: #000;
        }

        .card {
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 1rem;
            padding: 1.5rem;
            transition: all 0.3s;
        }

        .card:hover {
            transform: translateY(-5px);
            background: rgba(255, 255, 255, 0.15);
        }

        .btn {
            display: inline-block;
            padding: 0.5rem 1.25rem;
            border-radius: 9999px;
            font-weight: 600;
            border: 2px solid #facc15;
            color: #facc15;
            transition: 0.3s;
        }

        .btn:hover {
            background-color: #facc15;
            color: #000;
        }
    </style>
</head>

<body class="flex">

    <!-- Sidebar -->
    <aside class="flex flex-col justify-between p-6 w-64 sidebar">
        <div>
            <div class="flex items-center space-x-3 mb-10">
                <img src="assets/Gemini_Generated_Image_5nnm915nnm915nnm.ico" alt="Logo" class="shadow-md rounded-full w-10 h-10">
                <h1 class="font-bold text-yellow-400 text-xl">ConcertEase Admin</h1>
            </div>

            <nav class="space-y-2">
                <a href="/admin/dashboard" class="menu-item"> Dashboard Overview</a>
                <a href="/ServicePage" class="menu-item"> Manage Concert Events</a>
                <a href="/AccountPage" class="menu-item"> User Management</a>
                <a href="/Request" class="menu-item"> Ticket Bookings</a>
                <a href="/PaymentPage" class="menu-item"> Payment Management</a>
            </nav>
        </div>

        <div class="mt-10">
            <a href="/landingPage" class="w-full text-center btn">← Back to Home</a>
        </div>
    </aside>

    <!-- Main Content -->
    <main class="flex-1 p-10 overflow-y-auto">
        <header class="flex justify-between items-center mb-10">
            <h1 class="font-bold text-yellow-400 text-3xl">Admin Dashboard</h1>

            <!-- ✅ Working Logout Button -->
            <form action="/logout" method="post">
                <button type="submit" class="btn">Logout</button>
            </form>
        </header>

        <!-- Overview Cards -->
        <section class="gap-6 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 mb-10">
            <div class="text-center card">
                <h2 class="font-bold text-yellow-400 text-2xl">0</h2>
                <p class="mt-1 text-white/80 text-sm">Total Users</p>
            </div>
            <div class="text-center card">
                <h2 class="font-bold text-yellow-400 text-2xl">0</h2>
                <p class="mt-1 text-white/80 text-sm">Total Concerts</p>
            </div>
            <div class="text-center card">
                <h2 class="font-bold text-yellow-400 text-2xl">0</h2>
                <p class="mt-1 text-white/80 text-sm">Tickets Sold</p>
            </div>
            <div class="text-center card">
                <h2 class="font-bold text-yellow-400 text-2xl">0</h2>
                <p class="mt-1 text-white/80 text-sm">Total Revenue</p>
            </div>
        </section>

        <!-- Manage Sections -->
        <section class="gap-6 grid md:grid-cols-2">
            <div class="card">
                <h3 class="mb-2 font-semibold text-yellow-400 text-xl"> Manage Concert Events</h3>
                <p class="mb-4 text-white/80 text-sm">Add, update, and deactivate concert events such as artist, venue, and ticket categories.</p>
                <a href="/ServicePage" class="btn">Go to Events</a>
            </div>

            <div class="card">
                <h3 class="mb-2 font-semibold text-yellow-400 text-xl"> User Management</h3>
                <p class="mb-4 text-white/80 text-sm">Manage attendees, organizers, and admins. Edit roles or deactivate users.</p>
                <a href="/AccountPage" class="btn">Manage Users</a>
            </div>

            <div class="card">
                <h3 class="mb-2 font-semibold text-yellow-400 text-xl"> Ticket Booking Requests</h3>
                <p class="mb-4 text-white/80 text-sm">Approve, modify, or cancel ticket bookings, and track pending requests.</p>
                <a href="/Request" class="btn">View Bookings</a>
            </div>

            <div class="card">
                <h3 class="mb-2 font-semibold text-yellow-400 text-xl"> Payment Management</h3>
                <p class="mb-4 text-white/80 text-sm">Track all user payments and verify transaction statuses per event.</p>
                <a href="/PaymentPage" class="btn">Check Payments</a>
            </div>
        </section>
    </main>

</body>

</html>