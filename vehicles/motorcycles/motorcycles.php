<!DOCTYPE html>
<html lang="uk">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="../../main.css " />
    <link rel="stylesheet" href="motorcycles.css" />
    <title>InfoVehicles - Мотоцикли</title>
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
                  <td class="motorcycles">
                    <a>Мотоцикли</a>
                  </td>
                  <td>
                    <a href="../../vehicles/electro/electro.php">Електромобілі</a>
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
            <h3>Harley-Davidson Street Glide</h3>
            <img src="../img/motorcycles/Harley-Davidson Street Glide.png" alt="Harley-Davidson Street Glide" />
            <p>
                Засновник: Вільям С. Харлі та Артур Девідсон (компанія Harley-Davidson, США). <br>
                Зовнішній вигляд: класичний круїзер із широким переднім обтікачем і хромованими елементами. <br>
                Кузов / Аеродинаміка: обтічний кузов із фронтальним обтікачем, оптимізований для комфортної їзди на великі відстані. <br>
                Салон: широке сидіння для водія та пасажира, зручне розташування керма та педалей. <br>
                Технічні характеристики: двигун V-Twin 1746 см³, потужність до 94 к.с., коробка передач 6-ступенева, максимальна швидкість ~180 км/год. <br>
                Особливості: легендарний звук двигуна, комфорт на довгі дистанції, класичний американський дизайн.
            </p>
          </div>
          <div class="slide">
            <h3>Yamaha YZF-R1</h3>
            <img src="../img/motorcycles/Yamaha YZF-R1.png" alt="Yamaha YZF-R1" />
            <p>
                Засновник: Тору Судзукі та компанія Yamaha Motor Co., Ltd. (Японія). <br>
                Зовнішній вигляд: спортивний мотоцикл із гострими лініями та аеродинамічними обтікачами. <br>
                Кузов / Аеродинаміка: обтічний спортивний кузов із активними повітряними каналами для зменшення опору та охолодження двигуна. <br>
                Салон: вузьке спортивне сидіння, кермо й педалі для агресивної посадки водія. <br>
                Технічні характеристики: 998 см³ рядний 4-циліндровий двигун, 200 к.с., 6-ступенева коробка, розгін 0–100 км/год ~2.7 с. <br>
                Особливості: трекові технології, висока керованість та аеродинамічна ефективність.
            </p>
          </div>
          <div class="slide">
            <h3>Ducati Panigale V4</h3>
            <img
              src="../img/motorcycles/Ducati Panigale V4.png" alt="Ducati Panigale V4"/>
            <p>
                Засновник: Адріано та Маріо Дукаті (компанія Ducati Motor Holding S.p.A., Італія). <br>
                Зовнішній вигляд: агресивний спортбайк із гострими гранями та характерними фарами. <br>
                Кузов / Аеродинаміка: обтічний корпус із повітрозабірниками та аеродинамічними елементами для стабільності на високих швидкостях. <br>
                Салон: вузьке сидіння для водія, спортивне кермо й педалі для трекової посадки. <br>
                Технічні характеристики: 1103 см³ V4 двигун, потужність 214 к.с., 6-ступенева коробка, розгін 0–100 км/год ~2.9 с. <br>
                Особливості: високопродуктивний трековий мотоцикл, легкий та маневрений, характерний італійський дизайн.
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
