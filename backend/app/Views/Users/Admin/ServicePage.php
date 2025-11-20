<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ConcertEase — Manage Concert Events</title>
    <link rel="shortcut icon" type="image/png" href="/assets/Gemini_Generated_Image_5nnm915nnm915nnm.ico" />
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            background: linear-gradient(to bottom, #1e1b4b, #6d28d9, #db2777);
            color: white;
            font-family: 'Poppins', sans-serif;
        }

        .table-container {
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 1rem;
            padding: 1.5rem;
        }

        th,
        td {
            padding: 0.75rem 1rem;
            text-align: left;
        }

        th {
            color: #facc15;
            text-transform: uppercase;
            font-size: 0.875rem;
        }

        tr:hover {
            background-color: rgba(255, 255, 255, 0.1);
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

        .status {
            font-weight: 600;
            border-radius: 9999px;
            padding: 0.25rem 0.75rem;
            font-size: 0.75rem;
        }

        .upcoming {
            background: #facc15;
            color: #000;
        }

        .ongoing {
            background: #22c55e;
            color: #fff;
        }

        .completed {
            background: #6b7280;
            color: #fff;
        }
    </style>
</head>

<body class="p-10">

    <!-- Header -->
    <header class="flex justify-between items-center mb-10">
        <div>
            <h1 class="font-bold text-yellow-400 text-3xl">Manage Concert Events</h1>
            <p class="text-white/70 text-sm">Add, update, or delete concerts from the system.</p>
        </div>
        <div class="flex gap-3">
            <a href="admin/DashboardAdminPage" class="btn">← Back to Dashboard</a>
            <button class="bg-yellow-400 hover:bg-yellow-300 border-none text-black btn">+ Add New Concert</button>
        </div>
    </header>

    <!-- Table -->
    <section class="table-container overflow-x-auto">
        <table class="min-w-full">
            <thead>
                <tr class="border-white/30 border-b">
                    <th>Event Name</th>
                    <th>Artist</th>
                    <th>Venue</th>
                    <th>Date</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>

            <tbody class="text-sm">
                <tr class="border-white/10 border-b">
                    <td>Jason Derulo in Manila</td>
                    <td>Jason Derulo</td>
                    <td>SM Mall of Asia</td>
                    <td>November 22, 2025</td>
                    <td><span class="status upcoming">Upcoming</span></td>
                    <td class="space-x-2">
                        <button class="text-xs btn">Edit</button>
                        <button class="hover:bg-red-400 border-red-400 text-red-400 hover:text-black text-xs btn">Delete</button>
                    </td>
                </tr>

                <tr class="border-white/10 border-b">
                    <td>Blackpink Deadline Concert</td>
                    <td>Blackpink</td>
                    <td>SM Mall of Asia</td>
                    <td>November 28, 2025</td>
                    <td><span class="status upcoming">Upcoming</span></td>
                    <td class="space-x-2">
                        <button class="text-xs btn">Edit</button>
                        <button class="hover:bg-red-400 border-red-400 text-red-400 hover:text-black text-xs btn">Delete</button>
                    </td>
                </tr>

                <tr>
                    <td>Tour Mavie</td>
                    <td>Doja Cat</td>
                    <td>SM Mall of Asia</td>
                    <td>December 07,2025</td>
                    <td><span class="status upcoming">Upcoming</span></td>
                    <td class="space-x-2">
                        <button class="text-xs btn">Edit</button>
                        <button class="hover:bg-red-400 border-red-400 text-red-400 hover:text-black text-xs btn">Delete</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </section>

</body>

</html>