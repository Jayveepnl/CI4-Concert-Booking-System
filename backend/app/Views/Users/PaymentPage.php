<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Payment Management - ConcertEase</title>
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
            transition: 0.3s;
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
            transition: 0.3s;
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
                <img src="assets/Gemini_Generated_Image_5nnm915nnm915nnm.ico" class="shadow-md rounded-full w-10 h-10" />
                <h1 class="font-bold text-yellow-400 text-xl">ConcertEase Admin</h1>
            </div>

            <nav class="space-y-2">
                <a class="menu-item" href="/admin/dashboard">Dashboard Overview</a>
                <a class="menu-item" href="/Service">Manage Concert Events</a>
                <a class="menu-item" href="/AccountPage">User Management</a>
                <a class="menu-item" href="/Request">Ticket Bookings</a>
                <a class="bg-yellow-400 text-black menu-item" href="/Payments">Payment Management</a>
            </nav>
        </div>

        <div class="mt-10">
            <a href="/landingPage" class="w-full text-center btn">← Back to Home</a>
        </div>
    </aside>

    <!-- Main Content -->
    <main class="flex-1 p-10 overflow-y-auto">
        <header class="flex justify-between items-center mb-10">
            <h1 class="font-bold text-yellow-400 text-3xl">Payment Management</h1>
            <button class="btn">Logout</button>
        </header>

        <!-- Payment Table -->
        <section class="card">
            <h2 class="mb-4 font-semibold text-yellow-400 text-xl">Recent Payments</h2>
            <div class="overflow-x-auto">
                <table class="w-full text-white/90 text-left">
                    <thead class="text-yellow-300">
                        <tr>
                            <th class="p-3">Payment ID</th>
                            <th class="p-3">User</th>
                            <th class="p-3">Concert</th>
                            <th class="p-3">Amount</th>
                            <th class="p-3">Status</th>
                            <th class="p-3">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-white/20 border-t">
                            <td class="p-3">#001</td>
                            <td class="p-3">Juan Dela Cruz</td>
                            <td class="p-3">RockFest 2025</td>
                            <td class="p-3">₱2,500</td>
                            <td class="p-3 text-green-300">Paid</td>
                            <td class="p-3"><button class="btn">View</button></td>
                        </tr>
                        <tr class="border-white/20 border-t">
                            <td class="p-3">#002</td>
                            <td class="p-3">Maria Santos</td>
                            <td class="p-3">Jazz Night</td>
                            <td class="p-3">₱1,850</td>
                            <td class="p-3 text-yellow-300">Pending</td>
                            <td class="p-3"><button class="btn">Verify</button></td>
                        </tr>
                        <tr class="border-white/20 border-t">
                            <td class="p-3">#003</td>
                            <td class="p-3">Pedro Lopez</td>
                            <td class="p-3">Pop Gala</td>
                            <td class="p-3">₱3,200</td>
                            <td class="p-3 text-red-300">Failed</td>
                            <td class="p-3"><button class="btn">Retry</button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>
    </main>
</body>

</html>