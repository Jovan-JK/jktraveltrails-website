<?php
session_start();
if (!isset($_SESSION['admin_logged_in'])) {
    header("Location: login.php");
    exit();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Admin Dashboard | JK Travel Trails</title>
    <link rel="icon" type="image/x-icon" href="Logos/JK TRAVELS.png">
    <link rel="stylesheet" href="styles/dashboard.css">
    <script src="scripts.js" defer></script> 
</head>
<body>
    <div class="dashboard-container">
        <!-- Sidebar -->
        <aside class="sidebar">
            <div class="sidebar-header">
                <h2>JK Travel Trails</h2>
            </div>
            <nav>
                <ul>
                    <li><a href="admin.php">Dashboard Overview</a></li>
                    <li><a href="#">Bookings</a></li>
                    <li><a href="report.php">Reports</a></li>
                    <li><a href="#">Clients</a></li>
                    <li><a href="#">Tour Management</a></li>
                </ul>
            </nav>
        </aside>

        <!-- Main Content Area -->
        <mai class="main-content">
            <header class="topbar">
                <h1>Admin Dashboard</h1>
                <!-- Date Picker for Filtering Reports -->
                <div class="date-filter">
                    <input type="date" id="start-date" name="start-date">
                    <span>to</span>
                    <input type="date" id="end-date" name="end-date">
                    <button class="filter-button" id="filter-button">Filter</button>
                </div>
            </header>

            <!-- Dashboard Widgets/Stats -->
            <section class="dashboard-stats">
                <div class="stat-card" id="total-bookings">
                    <h3>Total Bookings</h3>
                    <p>320</p> <!-- Will be dynamically updated -->
                </div>
                <div class="stat-card" id="total-revenue">
                    <h3>Revenue</h3>
                    <p>$45,000</p> <!-- Will be dynamically updated -->
                </div>
                <div class="stat-card" id="popular-destination">
                    <h3>Popular Destination</h3>
                    <p>Jinja</p> <!-- Will be dynamically updated -->
                </div>
                <div class="stat-card" id="upcoming-tours">
                    <h3>Upcoming Tours</h3>
                    <p>12</p> <!-- Will be dynamically updated -->
                </div>
            </section>

                        <!-- Bookings and Report Display Section -->
                        <section class="reports-section">
                            <h2>Bookings Overview</h2>
                            <table>
                                <thead>
                                    <tr>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Email</th>
                                        <th>Destination</th>
                                        <th>start Date</th>
                                    </tr>
                                </thead>
                                <tbody id="booking-data">
                                    <!-- Booking data will be dynamically updated here -->
                                </tbody>
                            </table>
            </section>
            
            <div id="reportResult"></div>
            
        </main>


<script>
    document.getElementById('filter-button').addEventListener('click', function() {
    // Get the start and end date from the input fields
    const startDate = document.getElementById('start-date').value;
    const endDate = document.getElementById('end-date').value;

    if (!startDate || !endDate) {
        alert('Please select both start and end dates.');
        return;
    }

    // Example of how you would fetch filtered data from the server (Replace URL with your actual endpoint)
    fetch(`api/getFilteredData.php?startDate=${startDate}&EndDate=${endDate}`)
        .then(response => response.json())
        .then(data => {
            // Update the dashboard stats with the fetched data
            document.getElementById('total-bookings').querySelector('p').textContent = data.totalBookings;
            document.getElementById('total-revenue').querySelector('p').textContent = `$${data.revenue}`;
            document.getElementById('popular-destination').querySelector('p').textContent = data.popularDestination;
            document.getElementById('upcoming-tours').querySelector('p').textContent = data.upcomingTours;

            // Update the bookings table
            const bookingDataElement = document.getElementById('booking-data');
            bookingDataElement.innerHTML = ''; // Clear the table

            data.bookings.forEach(booking => {
                const row = document.createElement('tr');
                row.innerHTML = `
                    <td>${booking.fname}</td>
                    <td>${booking.lname}</td>
                    <td>${booking.email}</td>
                    <td>${booking.destination}</td>
                    <td>${booking.startDate}</td>
                `;
                bookingDataElement.appendChild(row);
            });
        })
        .catch(error => console.error('Error fetching data:', error));
});
</script>

    </div>
</body>
</html>
