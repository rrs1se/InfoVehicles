<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION['name'] = $_POST["name"];
    $_SESSION['surname'] = $_POST["surname"];
    $_SESSION['email'] = $_POST["email"];
    $_SESSION['vehicle'] = $_POST["vehicle"];
    $_SESSION['priority'] = $_POST["priority"];
    $feedback = $_POST["good/notbad/bad"];
}
?>
<!DOCTYPE html>
<html lang="uk">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Опитування</title>
    <link rel="stylesheet" href="survey.css" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css"
    />
  </head>
  <body>
    <div class="page-wrapper">
      <div class="survey-content">
        <?php echo "<h2>" . $_SESSION['name'] . ", дякуємо Вам за участь в опитуванні!" . "</h2>";?>
        <form action="survey.php" method="post">
        <?php
        echo "<p><br>Ваші відповіді:</p>";
        echo "<ul>";
        echo "<li>" . "Ім'я: " . $_SESSION['name'] . "</li>";
        echo "<li>" . "Прізвище: " . $_SESSION['surname'] . "</li>";
        echo "<li>" . "Електронна пошта: " . $_SESSION['email'] . "</li>";
        switch ($_SESSION['vehicle']) {
            case 'passenger':
                $_SESSION['vehicle'] = 'Легковий автомобіль';
                break;
            case 'suv':
                $_SESSION['vehicle'] = 'Позашляховик';
                break;
            case 'motorcycle':
                $_SESSION['vehicle'] = 'Мотоцикл';
                break;
            case 'electric':
                $_SESSION['vehicle'] = 'Електромобіль';
                break;
        }
        echo "<li>" . "Тип транспорту: " . $_SESSION['vehicle'] . "</li>";
        switch ($_SESSION['priority']) {
            case 'safety':
                $_SESSION['priority'] = 'Безпека';
                break;
            case 'speed':
                $_SESSION['priority'] = 'Швидкість';
                break;
            case 'eco':
                $_SESSION['priority'] = 'Екологічність';
                break;
            case 'comfort':
                $_SESSION['priority'] = 'Комфорт';
                break;
        }
        echo "<li>Пріоритети: " . $_SESSION['priority'] . "</li>";
        switch ($feedback) {
            case 'good':
                $feedback = 'Гарний';
                break;
            case 'notbad':
                $feedback = 'Непоганий';
                break;
            case 'bad':
                $feedback = 'Не дуже';
                break;
        }
        echo "<li>Думка про сайт: $feedback</li>";
        echo "</ul>";
        ?>
        <a style="text-align: center;" href="../index.php">На головну</a>
        </form>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr/dist/l10n/uk.js"></script>
    <script>
      flatpickr("#datePicker", {
        locale: "uk",
        dateFormat: "d.m.Y",
      });
    </script>
  </body>
  <script>
    document.querySelectorAll("input[required]").forEach((input) => {
      input.addEventListener("invalid", function () {
        if (!this.value) {
          this.setCustomValidity("Це поле обов'язкове");
        } else {
          this.setCustomValidity("");
        }
      });

      input.addEventListener("input", function () {
        this.setCustomValidity("");
      });
    });
  </script>
  <footer>
    <p style="text-align: center; font-size: 14px; margin-top: 23px">
      &copy;
      <?php
        echo date("Y");
      ?> 
      InfoVehicles. Всі права захищені.
    </p>
  </footer>
</html>
