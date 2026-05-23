<!DOCTYPE html>
<html lang="uk">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="../../main.css " />
    <link rel="stylesheet" href="minibuses.css" />
    <title>InfoVehicles - Мікроавтобуси</title>
  </head>
  <body>
    <header class="header">
      <div class="header-container">
        <h1 class="animtitle">InfoVehicles</h1>
        <nav class="navigation">
          <a href="../../index.php">Головна</a> |
          <div class="category">
            Категорії
            <div class="category-anim">
              <table class="category-table">
                <tr>
                  <td>
                    <a href="../../vehicles/passenger/passenger.php">Легкові автомобілі</a>
                  </td>
                  <td>
                    <a href="../../vehicles/sport/sport.php">Спорткари</a>
                  </td>
                  <td>
                    <a href="../../vehicles/trucks/trucks.php">Вантажівки</a>
                  </td>
                  <td>
                    <a href="../../vehicles/buses/buses.php">Автобуси</a>
                  </td>
                </tr>
                <tr>
                  <td>
                    <a href="../../vehicles/suvs/suvs.php">Позашляховики</a>
                  </td>
                  <td>
                    <a href="../../vehicles/pickups/pickups.php">Пікапи</a>
                  </td>
                  <td>
                    <a href="../../vehicles/motorcycles/motorcycles.php">Мотоцикли</a>
                  </td>
                  <td>
                    <a href="../../vehicles/electro/electro.php">Електромобілі</a>
                  </td>
                </tr>
                <tr>
                  <td>
                    <a href="../../vehicles/hybrids/hybrids.php">Гібриди</a>
                  </td>
                  <td>
                    <a href="../../vehicles/vans/vans.php">Фургони</a>
                  </td>
                  <td>
                    <a href="../../vehicles/tractors/tractors.php">Трактори</a>
                  </td>
                  <td class="minibuses">
                    <a>Мікроавтобуси</a>
                  </td>
                </tr>
                <tr>
                  <td><a href="../../vehicles/coupe/coupe.php">Купе</a></td>
                  <td>
                    <a href="../../vehicles/cabriolets/cabriolets.php"
                      >Кабріолети</a
                    >
                  </td>
                  <td>
                    <a href="../../vehicles/spec/spec.php">Спецтехніка</a>
                  </td>
                  <td>
                    <a href="../../vehicles/campers/campers.php">Кемпери</a>
                  </td>
                </tr>
              </table>
            </div>
          </div>
          | <a href="../../news/news.php">Новини</a>
        </nav>
      </div>
    </header>
    <section class="category-list">
      <div class="sport-vehicles-slider">
        <button class="slider-btn left" onclick="prevSlide()">&#10094;</button>
        <div class="slides">
          <div class="slide active">
            <h3>Ford Transit</h3>
            <img src="../img/minibuses/Ford Transit.png" alt="Ford Transit" />
            <p>
                Засновник: Генрі Форд, компанія Ford (США). <br>
                Зовнішній вигляд: класичний високий мікроавтобус із прямими лініями та великим передком. <br>
                Кузов / Аеродинаміка: обтічний кузов для економії палива та зручності перевезень пасажирів і вантажів. <br>
                Салон: зручний та практичний для водія і пасажирів, функціональна панель керування. <br>
                Технічні характеристики: дизельні та бензинові двигуни 2.0–3.5 л, потужність до 185 к.с., передній або задній привід, 6-ступенева АКПП. <br>
                Особливості: універсальність, надійність та комфорт для малого бізнесу та перевезень.
            </p>
          </div>
          <div class="slide">
            <h3>Volkswagen Transporter</h3>
            <img src="../img/minibuses/Volkswagen Transporter.png" alt="Volkswagen Transporter" />
            <p>
                Засновник: Фердинанд Порше та компанія Volkswagen (Німеччина). <br>
                Зовнішній вигляд: компактний і сучасний мікроавтобус із плавними лініями та круглими фарами. <br>
                Кузов / Аеродинаміка: обтічний кузов для зменшення витрати палива та зручності перевезень. <br>
                Салон: комфортний інтер’єр, ергономічні сидіння та інтуїтивна панель керування. <br>
                Технічні характеристики: дизельні та бензинові двигуни 2.0–3.0 л, потужність до 204 к.с., передній або повний привід, 7-ступенева АКПП. <br>
                Особливості: надійність, економічність, широкий вибір модифікацій для бізнесу та пасажирських перевезень.
            </p>
          </div>
          <div class="slide">
            <h3>Mercedes-Benz Vito</h3>
            <img
              src="../img/minibuses/Mercedes-Benz Vito.png" alt="Mercedes-Benz Vito"/>
            <p>
                Засновник: Карл Бенц і Готтліб Даймлер, компанія Mercedes-Benz (Німеччина). <br>
                Зовнішній вигляд: сучасний мікроавтобус із плавними лініями та великою решіткою передка. <br>
                Кузов / Аеродинаміка: обтічний кузов із низьким опором повітря для економії палива. <br>
                Салон: зручний для водія і пасажирів, практичні сидіння та сучасна панель приладів. <br>
                Технічні характеристики: дизельні та бензинові двигуни 1.6–2.2 л, потужність до 190 к.с., задній або повний привід, 7-ступенева АКПП. <br>
                Особливості: комфорт, надійність та універсальність для перевезень малого бізнесу та пасажирів.
            </p>
          </div>
        </div>
        <button class="slider-btn right" onclick="nextSlide()">&#10095;</button>
      </div>
    </section>
    <script>
      let currentSlide = 0;
      const slides = document.querySelectorAll(".slide");

      function showSlide(index) {
        slides.forEach((slide, i) => {
          slide.classList.toggle("active", i === index);
        });
      }

      function nextSlide() {
        currentSlide = (currentSlide + 1) % slides.length;
        showSlide(currentSlide);
      }

      function prevSlide() {
        currentSlide = (currentSlide - 1 + slides.length) % slides.length;
        showSlide(currentSlide);
      }

      showSlide(currentSlide);
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
  </body>
</html>
