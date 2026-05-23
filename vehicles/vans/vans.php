<!DOCTYPE html>
<html lang="uk">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="../../main.css " />
    <link rel="stylesheet" href="vans.css" />
    <title>InfoVehicles - Фургони</title>
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
                  <td class="vans">
                    <a>Фургони</a>
                  </td>
                  <td>
                    <a href="../../vehicles/tractors/tractors.php">Трактори</a>
                  </td>
                  <td>
                    <a href="../../vehicles/minibuses/minibuses.php"
                      >Мікроавтобуси</a
                    >
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
            <h3>Mercedes-Benz Sprinter</h3>
            <img src="../img/vans/Mercedes-Benz Sprinter.png" alt="Mercedes-Benz Sprinter" />
            <p>
                Засновник: Карл Бенц і Готтліб Даймлер (компанія Mercedes-Benz, Німеччина). <br>
                Зовнішній вигляд: високий вантажний фургон із прямими лініями та великою передньою решіткою. <br>
                Кузов / Аеродинаміка: обтічний кузов із високим дахом та оптимізованими лініями для вантажоперевезень та економії палива. <br>
                Салон: практичний та комфортний для водія, зручні сидіння та функціональна панель керування. <br>
                Технічні характеристики: дизельні та бензинові двигуни 2.1–3.0 л, потужність до 190 к.с., задній або повний привід, 7-ступенева АКПП. <br>
                Особливості: велика вантажопідйомність, надійність та універсальність для бізнесу.
            </p>
          </div>
          <div class="slide">
            <h3>Ford Transit</h3>
            <img src="../img/vans/Ford Transit.png" alt="Ford Transit" />
            <p>
                Засновник: Генрі Форд (компанія Ford Motor Company, США). <br>
                Зовнішній вигляд: класичний вантажний фургон із прямим кузовом та великими фарами. <br>
                Кузов / Аеродинаміка: високий та просторий кузов із плавними лініями для покращення ефективності та вантажопідйомності. <br>
                Салон: практичний, зручний для водія та пасажира, сучасні панелі керування. <br>
                Технічні характеристики: дизельні та бензинові двигуни 2.0–3.5 л, потужність до 185 к.с., задній або передній привід, 6-ступенева АКПП. <br>
                Особливості: надійність, висока вантажопідйомність та універсальність для комерційного використання.
            </p>
          </div>
          <div class="slide">
            <h3>Volkswagen Crafter</h3>
            <img
              src="../img/vans/Volkswagen Crafter.png" alt="Volkswagen Crafter"/>
            <p>
                Засновник: Фердинанд Порше (компанія Volkswagen AG, Німеччина). <br>
                Зовнішній вигляд: сучасний вантажний фургон із плавними обводами та великою передньою частиною. <br>
                Кузов / Аеродинаміка: обтічний кузов із високим дахом та оптимізованими лініями для економії палива та простору для вантажу. <br>
                Салон: комфортний і практичний для водія та пасажира, сучасна панель керування та зручні сидіння. <br>
                Технічні характеристики: дизельні двигуни 2.0–2.5 л, потужність до 177 к.с., передній або задній привід, 6-ступенева АКПП. <br>
                Особливості: велика вантажопідйомність, економічність та надійність для бізнесу.
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
