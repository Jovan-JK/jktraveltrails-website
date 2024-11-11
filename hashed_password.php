<?php
require 'includes/dbh.inc.php'; // Database connection file

// Set the username and plain-text password
$username = "Admin@JKTravelTrails";
$plainPassword = "Admin@JK@2020";

// Hash the password
$hashedPassword = password_hash($plainPassword, PASSWORD_DEFAULT);

// Insert the admin into the database
$stmt = $pdo->prepare("INSERT INTO admins (username, password) VALUES (:username, :password)");
$stmt->execute(['username' => $username, 'password' => $hashedPassword]);

echo "Admin created successfully!";
