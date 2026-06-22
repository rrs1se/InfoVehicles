<?php session_start();?>
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
        <h2>Опитування</h2>
        <form action="processing.php" method="post">
          Ім'я:
          <input
            type="text"
            name="name"
            required
          /><br /><br />
          Прізвище:
          <input
            type="text"
            name="surname"
            required
          /><br /><br />
          Електронна пошта:
          <input
            type="email"
            name="email"
            required
          /><br /><br />

          <p>Який тип транспорту вам найбільше подобається?</p>
          <label
            ><input
              type="radio"
              name="vehicle"
              value="passenger"
              required
            />Легковий автомобіль</label
          ><br />
          <label
            ><input
              type="radio"
              name="vehicle"
              value="suv"
              required
            />Позашляховик</label
          ><br />
          <label
            ><input
              type="radio"
              name="vehicle"
              value="motorcycle"
              required
            />Мотоцикл</label
          ><br />
          <label
            ><input
              type="radio"
              name="vehicle"
              value="electric"
              required
            />Електромобіль</label
          ><br />
          <p>Що для вас найважливіше у транспортному засобі?</p>
          <label><input type="radio" name="priority" value="safety" required/>Безпека</label><br />
          <label><input type="radio" name="priority" value="speed" required/>Швидкість</label><br />
          <label><input type="radio" name="priority" value="eco" required/>Екологічність</label><br />
          <label><input type="radio" name="priority" value="comfort" required/>Комфорт</label><br /><br />
          <p>Як вам наш сайт?</p>
          <label><input type="radio" name="good/notbad/bad" value="good" required/>Гарний</label>
          <label><input type="radio" name="good/notbad/bad" value="notbad" required/>Непоганий</label>
          <label><input type="radio" name="good/notbad/bad" value="bad" required/>Не дуже</label><br/><br/>
          <button type="submit">Надіслати</button>
          <button type="reset">Очистити</button>
          <a href="../index.php">На головну</a>
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
      if (input.type === "radio") {
        const radios = document.querySelectorAll(`input[name="${input.name}"]`);
        
        radios.forEach((radio) => {
          radio.addEventListener("invalid", function () {
            radios.forEach(r => r.setCustomValidity(""));
            if (![...radios].some(r => r.checked)) {
              radios.forEach(r => r.setCustomValidity("Виберіть хоча б один з варіантів"));
            }
          });

          radio.addEventListener("change", function () {
            radios.forEach(r => r.setCustomValidity(""));
          });
        });

      } 
      else {
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
      }
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
