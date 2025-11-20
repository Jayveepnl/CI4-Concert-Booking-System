<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ConcertEase — Request Management</title>
    <link rel="shortcut icon" type="image/png" href="/assets/Gemini_Generated_Image_5nnm915nnm915nnm.ico" />
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            background: linear-gradient(to bottom, #1e1b4b, #6d28d9, #db2777);
            color: white;
            font-family: 'Poppins', sans-serif;
            min-height: 100vh;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            border-radius: 1rem;
            overflow: hidden;
        }

        th,
        td {
            padding: 1rem;
            text-align: left;
        }

        th {
            background-color: rgba(250, 204, 21, 0.2);
            color: #facc15;
            text-transform: uppercase;
            font-size: 0.875rem;
            letter-spacing: 0.05em;
        }

        tr:nth-child(even) {
            background-color: rgba(255, 255, 255, 0.05);
        }

        tr:hover {
            background-color: rgba(255, 255, 255, 0.1);
        }

        .btn {
            display: inline-block;
            padding: 0.5rem 1.25rem;
            border-radius: 9999px;
            font-weight: 600;
            transition: 0.3s;
            border: 2px solid #facc15;
            color: #facc15;
            font-size: 0.875rem;
        }

        .btn:hover {
            background-color: #facc15;
            color: #000;
        }

        .card {
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 1rem;
            padding: 1.5rem;
            margin-top: 2rem;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>

<body class="p-6">

    <!-- Header -->
    <header class="flex justify-between items-center mb-10">
        <div>
            <h1 class="font-bold text-yellow-400 text-3xl">Ticket Requests</h1>
            <p class="text-white/70 text-sm">Manage concert ticket booking requests below.</p>
        </div>
        <a href="admin/DashboardAdminPage" class="btn">← Back to Dashboard</a>
    </header>

    <!-- Request Table -->
    <div class="overflow-x-auto card">
        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Customer Name</th>
                    <th>Event</th>
                    <th>Date</th>
                    <th>Tickets</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>01</td>
                    <td>Maria Santos</td>
                    <td>Blackpink World Tour</td>
                    <td>Nov 23, 2025</td>
                    <td>2 VIP</td>
                    <td><span class="font-semibold text-yellow-400">Pending</span></td>
                    <td>
                        <button class="mr-2 btn">Approve</button>
                        <button class="btn">Cancel</button>
                    </td>
                </tr>
                <tr>
                    <td>02</td>
                    <td>Joshua Reyes</td>
                    <td>Coldplay Live in Manila</td>
                    <td>Dec 5, 2025</td>
                    <td>4 GA</td>
                    <td><span class="font-semibold text-green-400">Approved</span></td>
                    <td>
                        <button class="btn">View</button>
                    </td>
                </tr>
                <tr>
                    <td>03</td>
                    <td>Ana Lopez</td>
                    <td>Harry Styles Concert</td>
                    <td>Oct 29, 2025</td>
                    <td>1 VIP</td>
                    <td><span class="font-semibold text-red-400">Cancelled</span></td>
                    <td>
                        <button class="btn">View</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

</body>

</html>