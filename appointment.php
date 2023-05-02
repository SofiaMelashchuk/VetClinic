<?php
	require_once('db.php');
	
	// Query the database
$sql = 'SELECT DATE(appointment_date) AS date FROM appointments';
$result = $conn->query($sql);
$conn->close();

$service = '';
if (isset($_GET['service'])) {
	$service = $_GET['service'];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Veterinary clinic</title>
  <script src="functions.js"></script>
  <link rel="stylesheet" type = "text/css" href="style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
  <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
</head>
<body>
<header>
  <nav>
    <ul>
      <?php require_once('parts/menu.php') ?>
    </ul>
  </nav>
</header>
<h1 id="nameFixed">Запис на прийом</h1>

<div class="text-container">
  <p>Ми раді забезпечити нашим клієнтам персоналізований підхід до догляду
    за їх тваринами та допомогти їм у всіх аспектах тваринного лікування.
    Не соромтеся зв'язатися з нами, якщо у вас є будь-які питання або потреби
    в наших послугах.</p>
</div>
<form action="/submit-appointment.php" method="post">
  <label for="name">ПІБ:</label>
  <input type="text" id="name" name="name" placeholder="Введіть ПІБ" required><br><br>

  <label for="pet">Тварина:</label>
  <select id="pet" name="pet" required>
    <option value="" disabled selected>Оберіть тварину</option>
    <option value="choice1">Cсавець</option>
    <option value="choice2">Птах</option>
    <option value="choice3">Рептилія</option>
    <option value="choice4">Земноводна</option>
  </select><br><br>

  <label for="problem">Опис проблеми:</label><br>
  <textarea id="problem" name="problem" placeholder="Опишіть проблему" rows="4" cols="50" required></textarea><br><br>

  <label for="service">Послуга:</label>
  <select id="service" name="service" required>
    <option value="" disabled>Оберіть послугу</option>
    <option <?php echo ($service == 'choice1') ? 'selected' : ''; ?> value="choice1">Огляд тварини</option>
    <option <?php echo ($service == 'choice2') ? 'selected' : ''; ?> value="choice2">Вакцинація</option>
    <option <?php echo ($service == 'choice3') ? 'selected' : ''; ?> value="choice3">Стерилізація/Кастрація</option>
    <option <?php echo ($service == 'choice4') ? 'selected' : ''; ?> value="choice4">Лікування захворювань</option>
    <option <?php echo ($service == 'choice5') ? 'selected' : ''; ?> value="choice5">Рентген</option>
  </select><br><br>

  <label for="phone">Номер телефону:</label>
  <input type="tel" id="phone" name="phone" pattern="^\+380\d{3}\d{2}\d{2}\d{2}$" placeholder="+380XXXXXXXXX" required><br><br>

  <label for="appointment-date">Дата та час запису:</label>
  <input type="text" id="appointment-date" name="appointment-date" placeholder="Оберіть дату та час" required>

  <button type="submit">Записатись на прийом</button>
</form>

<script>
  flatpickr("#appointment-date", {
    enableTime: true,
    dateFormat: "Y-m-d H:i",
    time_24hr: true,
    minDate: new Date(),
    disable: [
        <?php
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			echo "'" . $row['date'] . "',";
		}
	}

?>
	],
  });
</script>
</body>
</html>