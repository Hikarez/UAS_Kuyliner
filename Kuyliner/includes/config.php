<?php
date_default_timezone_set('Asia/Jakarta');
$base_url = 'http://localhost/Kuyliner/';

$servername = "localhost";
$username = "root";
$password = '';
$dbname = "db_kuliner";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_errno) {
    echo "Failed to connect to MySQL: " . $conn->connect_errno;
    exit();
}
