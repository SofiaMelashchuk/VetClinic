<?php
// Connect to the database
$servername = '127.0.0.1';
$username = 'tsukrtec_vet';
$dbname = 'tsukrtec_vet';
$password = 'o1j%}qS9ITn=';

// Create a new connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
	die('Connection failed: ' . $conn->connect_error);
}