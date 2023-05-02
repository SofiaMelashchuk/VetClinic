<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Veterinary clinic</title>
  <script src="functions.js"></script>
  <link rel="stylesheet" type = "text/css" href="style.css">
</head>
<body>
<header>
  <nav>
    <ul>
      <?php require_once('parts/menu.php') ?>
    </ul>
  </nav>
</header>
<h1 id="nameFixed">Ветеринарна клініка</h1>

<div class="text-container">
  <p>Наша клініка пропонує повний спектр послуг, від загальної медицини до
    хірургічного втручання та лікування. Ми використовуємо найсучасніші методи
    діагностики та лікування, щоб забезпечити вашим тваринам найкращий можливий
    догляд та лікування.</p>
</div>

<div class="procedure-container">
  <h1>Список процедур та їхня ціна:</h1>

  <table>
    <tr>
      <th>ПРОЦЕДУРА</th>
      <th>ЦІНА</th>
      <th>ТРИВАЛІСТЬ</th>
    </tr>
    <tr>
      <td class="tooltip">
	  <a href="/appointment?service=choice1">Огляд тварини</a>
        <span class="tooltip-text">Огляд тварини включає оцінку загального стану здоров'я вашого домашнього улюбленця, визначення віку, ваги, вимірювання температури, перевірку зубів, очей, вух, шкіри та серця.</span>
      </td>
      <td>50 грн</td>
      <td>30-60 хв</td>
    </tr>
    <tr>
      <td class="tooltip">
	  <a href="/appointment?service=choice2">Вакцинація</a>
        <span class="tooltip-text">Вакцинація - це профілактичне щеплення, яке забезпечує імунітет тварини від ряду інфекційних захворювань. Вакцинація допомагає зберегти здоров'я вашого улюбленця та запобігти поширенню хвороб.</span>
      </td>
      <td>200 грн</td>
      <td>10-15 хв</td>
    </tr>
    <tr>
      <td class="tooltip">
	  <a href="/appointment?service=choice3">Стерилізація/Кастрація</a>
        <span class="tooltip-text">Стерилізація (для самок) та кастрація (для самців) - це хірургічні операції, спрямовані на видалення репродуктивних органів тварини. Ці процедури можуть запобігти небажаному розведенню, покращити здоров'я та поведінку тварини.</span>
      </td>
      <td>500 грн</td>
      <td>від 1 до 4 год</td>
    </tr>
    <tr>
      <td class="tooltip">
	  <a href="/appointment?service=choice4">Лікування захворювань</a>
        <span class="tooltip-text">Лікування захворювань включає в себе діагностику та лікування широкого спектра хвороб, таких як інфекційні, паразитарні, гормональні, дерматологічні, ортопедичні та інші стани. Лікарі ветеринарної клініки використовують найсучасніші методи для надання кращого лікування вашому улюбленцю.</span>
      </td>
      <td>від 100 грн до 1000 грн</td>
      <td></td>
    </tr>
    <tr>
      <td class="tooltip">
	  <a href="/appointment?service=choice5">Рентген</a>
        <span class="tooltip-text">Рентген - це діагностична процедура, яка дозволяє отримати зображення внутрішніх структур тварини, таких як кістки, органи та тканини. Рентген допомагає виявити переломи, травми, утворення, захворювання серця та легенів, а також інші стани.</span>
      </td>
      <td>300 грн</td>
      <td>30-60 хв</td>
    </tr>
  </table>
</div>
<h1>Відгуки</h1>
<div class="carousel">
  <button class="carousel-button prev" onclick="prevSlide()">&lt;</button>
  <div class="carousel-slide active">
    <p class="review">Неймовірний досвід у цій ветеринарній клініці! Нашому собакові допомогли швидко та професійно. Лікарі дуже уважні та чуйні до пацієнтів. Рекомендую всім!</p>
  </div>
  <div class="carousel-slide">
    <p class="review">Відвідав цю клініку зі своїм котом, і нам забезпечили відмінний сервіс. Всі працівники доброзичливі та ввічливі. Нашому коту було комфортно під час візиту. З радістю повернемося сюди знову.</p>
  </div>
  <div class="carousel-slide">
    <p class="review">Дуже задоволена роботою цієї ветеринарної клініки! Ми з моїм песиком отримали швидку та якісну допомогу. Ціни приємно здивували. Обов'язково рекомендую цю клініку своїм друзям!</p>
  </div>
  <button class="carousel-button next" onclick="nextSlide()">&gt;</button>
</div>
<script src="scripts.js"></script>
</body>
</html>