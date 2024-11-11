<?php
// database.php
include 'dbh.inc.php';

// Set the content type to JSON
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Fetch parameters from the request
    $start_date = $_POST['startDate'] ?? null;
    $end_date = $_POST['EndDate'] ?? null;

    if (!$start_date || !$end_date) {
        echo json_encode(['error' => 'Missing start_date or end_date parameters']);
        exit();
    }

    // Your SQL query
    try {
        $stmt = $pdo->prepare("SELECT * FROM contact_form WHERE startDate BETWEEN :startDate AND :EndDate");
        $stmt->bindParam(':startDate', $start_date);
        $stmt->bindParam(':EndDate', $end_date);
        $stmt->execute();

        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($results);
    } catch (PDOException $e) {
        echo json_encode(['error' => 'Database error: ' . $e->getMessage()]);
    }
}

