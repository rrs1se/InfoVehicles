<!DOCTYPE html>
<html lang="uk">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="../../main.css " />
    <link rel="stylesheet" href="spec.css" />
    <title>InfoVehicles - Спецтехніка</title>
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
                  <td>
                    <a href="../../vehicles/coupe/coupe.php">Купе</a>
                  </td>
                  <td>
                    <a href="../../vehicles/cabriolets/cabriolets.php">Кабріолети</a>
                  </td>
                  <td class="spec">
                    <a>Спецтехніка</a>
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
            <h3>Caterpillar 320D Excavator</h3>
            <img src="../img/spec/Caterpillar 320D Excavator.png" alt="Caterpillar 320D Excavator" />
            <p>
                Засновник: Бенджамін Кеттлер і компанія Caterpillar (США). <br>
                Зовнішній вигляд: великий екскаватор із важкою стрілою та ковшем, жовте забарвлення. <br>
                Кузов / Аеродинаміка: міцна та стійка конструкція для роботи на будівельних майданчиках. <br>
                Салон: комфортна кабіна для оператора з панеллю управління, кондиціонером та оглядовими вікнами. <br>
                Технічні характеристики: дизельний двигун 6.7 л, потужність до 155 к.с., гусеничний хід. <br>
                Особливості: надійність, висока продуктивність, здатність працювати в складних умовах.
            </p>
          </div>
          <div class="slide">
            <h3>JCB 3CX Backhoe Loader</h3>
            <img src="../img/spec/JCB 3CX Backhoe Loader.png" alt="JCB 3CX Backhoe Loader" />
            <p>
                Засновник: Джозеф Сиріл Баттерфілд, компанія JCB (Велика Британія). <br>
                Зовнішній вигляд: комбінований навантажувач із фронтальним ковшем та екскаваторним рукавом, жовте забарвлення. <br>
                Кузов / Аеродинаміка: міцна рама для універсальної роботи на будівництві та сільському господарстві. <br>
                Салон: комфортна кабіна з панеллю управління, кондиціонером та гарним оглядом. <br>
                Технічні характеристики: дизельний двигун 4.4 л, потужність до 92 к.с., колісна база з поворотним передком. <br>
                Особливості: універсальність, легкість у маневруванні та надійність при різних роботах.
            </p>
          </div>
          <div class="slide">
            <h3>Komatsu WA320 Wheel Loader</h3>
            <img
              src="../img/spec/Komatsu WA320 Wheel Loader.png" alt="Komatsu WA320 Wheel Loader"/>
            <p>
                Засновник: Комацу Сейкі Сейсан Ко., Лтд., Японія. <br>
                Зовнішній вигляд: великий фронтальний навантажувач із ковшем для перевезення сипких матеріалів. <br>
                Кузов / Аеродинаміка: міцна конструкція для роботи в кар’єрах та будівництві. <br>
                Салон: сучасна кабіна з комфортними сидіннями, панеллю керування та кондиціонером. <br>
                Технічні характеристики: дизельний двигун 6.6 л, потужність до 163 к.с., колісна база. <br>
                Особливості: висока вантажопідйомність, стабільність та ефективність у важких умовах.
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
