<?php

require_once('db.php');

// Get data from the form
$name = $_POST['name'];
$pet = $_POST['pet'];
$problem = $_POST['problem'];
$service = $_POST['service'];
$phone = $_POST['phone'];
$appointment_date = $_POST['appointment-date'];

// Prepare and bind a statement
$stmt = $conn->prepare('INSERT INTO appointments (name, pet, problem, service, phone, appointment_date) VALUES (?, ?, ?, ?, ?, ?)');
$stmt->bind_param('ssssss', $name, $pet, $problem, $service, $phone, $appointment_date);

// Execute the statement
if ($stmt->execute()) {
	echo 'Your appointment has been booked successfully' . PHP_EOL;
} else {
	echo 'Error: ' . $stmt->error;
}

// Close the statement and the connection
$stmt->close();
$conn->close();

echo "<a href=" . $_SERVER['HTTP_REFERER'] . ">Back</a>";

?>