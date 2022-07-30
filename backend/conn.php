<?php

// DB Connection Info
$dbHost = 'localhost';
$dbName = 'fivepd';
$dbUser = 'root';
$dbPass = '';

// Connect with DB
$conn = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUser, $dbPass);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
