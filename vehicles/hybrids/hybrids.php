<!DOCTYPE html>
<html lang="uk">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="../../main.css " />
    <link rel="stylesheet" href="hybrids.css" />
    <title>InfoVehicles - Гібриди</title>
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
                  <td class="hybrids">
                    <a>Гібриди</a>
                  </td>
                  <td><a href="../../vehicles/vans/vans.php">Фургони</a></td>
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
            <h3>Toyota Prius</h3>
            <img src="../img/hybrids/Toyota Prius.png" alt="Toyota Prius" />
            <p>
                Засновник: Кіічіро Тойода (компанія Toyota Motor Corporation, Японія). <br>
                Зовнішній вигляд: компактний хетчбек із плавними обводами та характерною трикутною задньою частиною. <br>
                Кузов / Аеродинаміка: обтічний кузов з низьким коефіцієнтом аеродинамічного опору для підвищення ефективності. <br>
                Салон: практичні та преміальні матеріали, комфортні сидіння та зручна панель керування. <br>
                Технічні характеристики: 1.8 л бензиновий двигун + електромотор, сумарна потужність до 122 к.с., передній привід, CVT-трансмісія. <br>
                Особливості: економічність, низький рівень викидів, надійність та простота експлуатації.
            </p>
          </div>
          <div class="slide">
            <h3>Lexus RX 450h</h3>
            <img src="../img/hybrids/Lexus RX 450h.avif" alt="Lexus RX 450h" />
            <p>
                Засновник: Тору Фудзіта (компанія Lexus, Японія). <br>
                Зовнішній вигляд: стильний кросовер із сучасною оптикою та витонченими лініями кузова. <br>
                Кузов / Аеродинаміка: обтічний кузов із плавними формами та оптимізованою аеродинамікою для економії палива. <br>
                Салон: преміальні матеріали, зручні сидіння та сучасна мультимедійна панель. <br>
                Технічні характеристики: бензиновий V6 + електромотор, сумарна потужність до 308 к.с., повний привід, CVT-трансмісія. <br>
                Особливості: комфорт, низькі викиди, гібридні технології для щоденного використання.
            </p>
          </div>
          <div class="slide">
            <h3>BMW 330e</h3>
            <img
              src="../img/hybrids/BMW 330e.png" alt="BMW 330e"/>
            <p>
                Засновник: Карл Бенц і Готтліб Даймлер (компанія BMW AG, Німеччина). <br>
                Зовнішній вигляд: спортивний седан із класичними лініями BMW та сучасною оптикою. <br>
                Кузов / Аеродинаміка: обтічний кузов із оптимізованими лініями для ефективності та динаміки. <br>
                Салон: преміальні матеріали, зручні спортивні сидіння та сучасна цифрова панель керування. <br>
                Технічні характеристики: 2.0 л бензиновий двигун + електромотор, сумарна потужність до 292 к.с., задній або повний привід, 8-ступенева АКПП. <br>
                Особливості: поєднання динаміки та економії палива, передові технології та комфорт водіння.
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
