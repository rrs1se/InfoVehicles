<!DOCTYPE html>
<html lang="uk">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="../../main.css " />
    <link rel="stylesheet" href="coupe.css" />
    <title>InfoVehicles - Купе</title>
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
                  <td>
                    <a href="../../vehicles/minibuses/minibuses.php">Мікроавтобуси</a>
                  </td>
                </tr>
                <tr>
                  <td class="coupe">
                    <a>Купе</a>
                  </td>
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
            <h3>BMW 4 Series Coupe</h3>
            <img src="../img/coupe/BMW 4 Series Coupe.png" alt="BMW 4 Series Coupe" />
            <p>
                Засновник: Карл Рапп та компанія BMW (Німеччина). <br>
                Зовнішній вигляд: спортивне двохдверне купе з агресивним дизайном та низьким профілем. <br>
                Кузов / Аеродинаміка: обтічний кузов із низьким опором повітря для високої швидкості та маневреності. <br>
                Салон: сучасний інтер’єр із комфортними сидіннями та цифровою панеллю приладів. <br>
                Технічні характеристики: бензинові та дизельні двигуни 2.0–3.0 л, потужність до 382 к.с., задній або повний привід, 8-ступенева АКПП. <br>
                Особливості: спортивний характер, динаміка, висока керованість.
            </p>
          </div>
          <div class="slide">
            <h3>Audi A5 Coupe</h3>
            <img src="../img/coupe/Audi A5 Coupe.png" alt="Audi A5 Coupe" />
            <p>
                Засновник: Аугуст Хорьх та компанія Audi (Німеччина). <br>
                Зовнішній вигляд: елегантне двохдверне купе з плавними лініями та широкою решіткою. <br>
                Кузов / Аеродинаміка: обтічний корпус для зменшення опору повітря та підвищення ефективності. <br>
                Салон: комфортний та сучасний, цифрова панель приладів та ергономічне кермо. <br>
                Технічні характеристики: бензинові та дизельні двигуни 2.0–3.0 л, потужність до 354 к.с., передній або повний привід, 7-ступенева АКПП S tronic. <br>
                Особливості: баланс комфорту та спортивності, елегантний дизайн.
            </p>
          </div>
          <div class="slide">
            <h3>Mercedes-Benz C-Class Coupe</h3>
            <img
              src="../img/coupe/Mercedes-Benz C-Class Coupe.png" alt="Mercedes-Benz C-Class Coupe"/>
            <p>
                Засновник: Карл Бенц і Готтліб Даймлер, компанія Mercedes-Benz (Німеччина). <br>
                Зовнішній вигляд: стильне двохдверне купе з характерною великою решіткою та світлодіодними фарами. <br>
                Кузов / Аеродинаміка: обтічний кузов для високої швидкості та естетичного вигляду. <br>
                Салон: розкішний інтер’єр із сучасними технологіями та комфортними сидіннями. <br>
                Технічні характеристики: бензинові та дизельні двигуни 2.0–4.0 л, потужність до 503 к.с., задній або повний привід, 9-ступенева АКПП. <br>
                Особливості: поєднання розкоші та спортивності, високі технології та керованість.
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
