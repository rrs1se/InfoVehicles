<!DOCTYPE html>
<html lang="uk">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="../../main.css " />
    <link rel="stylesheet" href="electro.css" />
    <title>InfoVehicles - Електромобілі</title>
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
                  <td class="electro">
                    <a>Електромобілі</a>
                  </td>
                </tr>
                <tr>
                  <td>
                    <a href="../../vehicles/hybrids/hybrids.php">Гібриди</a>
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
            <h3>Tesla Model S</h3>
            <img src="../img/electro/Tesla Model S.png" alt="Tesla Model S" />
            <p>
                Засновник: Ілон Маск (компанія Tesla, США). <br>
                Зовнішній вигляд: елегантний седан із мінімалістичними лініями та плавними формами. <br>
                Кузов / Аеродинаміка: обтічний кузов із низьким коефіцієнтом аеродинамічного опору та активними елементами для ефективності. <br>
                Салон: преміальні матеріали, мінімалістичний дизайн та великий сенсорний дисплей. <br>
                Технічні характеристики: електродвигун потужністю до 1020 к.с. (Plaid), розгін 0–100 км/год ~2.1 с, повний привід, батарея 100 кВт·год. <br>
                Особливості: високий запас ходу, передові технології автопілота та швидке прискорення.
            </p>
          </div>
          <div class="slide">
            <h3>Nissan Leaf</h3>
            <img src="../img/electro/Nissan Leaf.png" alt="Nissan Leaf" />
            <p>
                Засновник: Йосіро Ікуеда (компанія Nissan, Японія). <br>
                Зовнішній вигляд: компактний хетчбек із плавними обводами та сучасною оптикою. <br>
                Кузов / Аеродинаміка: аеродинамічний кузов із низьким опором повітря для підвищення ефективності батареї. <br>
                Салон: практичні та преміальні матеріали, зручні сидіння та функціональна панель керування. <br>
                Технічні характеристики: електродвигун потужністю до 217 к.с., розгін 0–100 км/год ~7.9 с, передній привід, батарея 62 кВт·год. <br>
                Особливості: економічність, компактність, доступність і безшумна їзда.
            </p>
          </div>
          <div class="slide">
            <h3>Audi e-tron GT</h3>
            <img
              src="../img/electro/Audi e-tron GT.png" alt="Audi e-tron GT"/>
            <p>
                Засновник: Аугуст Хорьх (компанія Audi AG, Німеччина). <br>
                Зовнішній вигляд: спортивний седан із динамічними формами та світлодіодними фарами. <br>
                Кузов / Аеродинаміка: обтічний кузов з активними аеродинамічними елементами для стабільності та зниження опору. <br>
                Салон: преміальні матеріали, сучасна цифрова панель та комфортні спортивні сидіння. <br>
                Технічні характеристики: два електродвигуни, сумарна потужність до 646 к.с., розгін 0–100 км/год ~3.3 с, повний привід, батарея 93 кВт·год. <br>
                Особливості: поєднання спорту та комфорту, високі технології та великий запас ходу.
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
