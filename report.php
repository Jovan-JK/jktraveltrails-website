<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

require __DIR__ . '/vendor/autoload.php';
use Dompdf\Dompdf;



// Database connection
try {
    $pdo = new PDO("mysql:host=localhost;dbname=jktraveltrails", "root", ""); // Replace with your DB details
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Query to get the most visited destinations
    $destinationQuery = "
        SELECT destination, COUNT(destination) as visit_count
        FROM contact_form
        GROUP BY destination
        ORDER BY visit_count DESC
        LIMIT 10;"; // Limit to top 10 destinations

    // Query to get the number of travelers per month
    $monthQuery = "
        SELECT MONTHNAME(startDate) as month, COUNT(*) as traveler_count
        FROM contact_form
        GROUP BY month
        ORDER BY traveler_count DESC;
    ";

    // Query to get the number of travelers per destination for each month
    $destinationMonthQuery = "
        SELECT destination, MONTHNAME(startDate) as month, COUNT(*) as traveler_count
        FROM contact_form
        GROUP BY destination, month
        ORDER BY destination, month;
    ";

    // Query to get the percentage of travelers by tour kind
    $tourTypeQuery = "
        SELECT tour_kind, COUNT(*) as tour_count, 
               (COUNT(*) / (SELECT COUNT(*) FROM contact_form) * 100) as percentage
        FROM contact_form
        GROUP BY tour_kind;
    ";

    // Execute the queries
    $stmtDestinations = $pdo->prepare($destinationQuery);
    $stmtDestinations->execute();
    $mostVisitedDestinations = $stmtDestinations->fetchAll(PDO::FETCH_ASSOC);

    $stmtMonths = $pdo->prepare($monthQuery);
    $stmtMonths->execute();
    $popularMonths = $stmtMonths->fetchAll(PDO::FETCH_ASSOC);

    $stmtDestinationMonth = $pdo->prepare($destinationMonthQuery);
    $stmtDestinationMonth->execute();
    $travelersPerDestinationMonth = $stmtDestinationMonth->fetchAll(PDO::FETCH_ASSOC);

    $stmtTourType = $pdo->prepare($tourTypeQuery);
    $stmtTourType->execute();
    $tourTypePercentage = $stmtTourType->fetchAll(PDO::FETCH_ASSOC);

} catch (PDOException $e) {
    die("Database Query failed: " . $e->getMessage());
}

ob_start(); 
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <title>Reports | JK Travel Trails</title>
    
    <link rel="icon" type="image/x-icon" href="Logos/JK TRAVELS.png">


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            padding: 20px;
            background-color: #f4f4f4;
        }
        .report-container {
            background: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }
        h1 {
            color: red;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        
        }



        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <div class="report_container">
            <h1>JK Travel Trails Travel Report</h1>

            <h2>Most Visited Destinations</h2>
            <table>
                <tr>
                    <th>Destination</th>
                    <th>Visit Count</th>
                </tr>
                <?php
                if (!empty($mostVisitedDestinations)) {
                    foreach ($mostVisitedDestinations as $destination) {
                        echo "<tr>
                                <td>{$destination['destination']}</td>
                                <td>{$destination['visit_count']}</td>
                            </tr>";
                    }
                } else {
                    echo "<tr><td colspan='2'>No data found</td></tr>";
                }
                ?>
            </table>

            <h2>Popular Travel Months</h2>
            <table>
                <tr>
                    <th>Month</th>
                    <th>Traveler Count</th>
                </tr>
                <?php
                if (!empty($popularMonths)) {
                    foreach ($popularMonths as $month) {
                        echo "<tr>
                                <td>{$month['month']}</td>
                                <td>{$month['traveler_count']}</td>
                            </tr>";
                    }
                } else {
                    echo "<tr><td colspan='2'>No data found</td></tr>";
                }
                ?>
            </table>

            <h2>Number of Travelers per Destination for Each Month</h2>
            <table>
                <tr>
                    <th>Destination</th>
                    <th>Month</th>
                    <th>Traveler Count</th>
                </tr>
                <?php
                if (!empty($travelersPerDestinationMonth)) {
                    foreach ($travelersPerDestinationMonth as $row) {
                        echo "<tr>
                                <td>{$row['destination']}</td>
                                <td>{$row['month']}</td>
                                <td>{$row['traveler_count']}</td>
                            </tr>";
                    }
                } else {
                    echo "<tr><td colspan='3'>No data found</td></tr>";
                }
                ?>
            </table>

            <h2>Percentage of Travelers by Tour Type</h2>
            <table>
                <tr>
                    <th>Tour Type</th>
                    <th>Traveler Count</th>
                    <th>Percentage</th>
                </tr>
                <?php
                if (!empty($tourTypePercentage)) {
                    foreach ($tourTypePercentage as $tourType) {
                        echo "<tr>
                                <td>{$tourType['tour_kind']}</td>
                                <td>{$tourType['tour_count']}</td>
                                <td>" . round($tourType['percentage'], 2) . "%</td>
                            </tr>";
                    }
                } else {
                    echo "<tr><td colspan='3'>No data found</td></tr>";
                }
                ?>
            </table>
    </div>

    


</body>
</html>

<?php


// Capture the HTML output
$html = ob_get_clean();

// Create an instance of DOMPDF
$dompdf = new Dompdf();
$dompdf->loadHtml($html);  // Load HTML content into DOMPDF

// Set paper size and orientation (optional)
$dompdf->setPaper('A4', 'portrait');

//Render the PDF from the HTML content
$dompdf->render();

// Output the PDF to the browser
$dompdf->stream("travel_report.pdf", ["Attachment" => false]);
