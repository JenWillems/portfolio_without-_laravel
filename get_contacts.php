<?php

// Database credentials
$host = '127.0.0.1';
$db = 'portfolio_jen';
$user = 'root';
$pass = ''; // set your DB password
$charset = 'utf8mb4';

// Set up DSN
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

// Set up PDO
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);

    // Query the contacts table
    $stmt = $pdo->query("SELECT * FROM contacts");
    $contacts = $stmt->fetchAll();

    // Return JSON
    header('Content-Type: application/json');
    echo json_encode($contacts);
} catch (\PDOException $e) {
    http_response_code(500);
    echo json_encode(['error' => $e->getMessage()]);
}

