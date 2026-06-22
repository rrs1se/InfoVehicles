<!DOCTYPE html>
<html lang="uk">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="../../main.css " />
    <link rel="stylesheet" href="pickups.css" />
    <title>InfoVehicles - Пікапи</title>
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
                    <a href="../../vehicles/passenger/passenger.php"
                      >Легкові автомобілі</a
                    >
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
                  <td class="pickups">
                    <a>Пікапи</a>
                  </td>
                  <td>
                    <a href="../../vehicles/motorcycles/motorcycles.php"
                      >Мотоцикли</a
                    >
                  </td>
                  <td>
                    <a href="../../vehicles/electro/electro.php"
                      >Електромобілі</a
                    >
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
            <h3>Ford F-150</h3>
            <img src="../img/pickups/Ford F-150.png" alt="Ford F-150" />
            <p>
                Засновник: Генрі Форд (компанія Ford Motor Company, США). <br>
                Зовнішній вигляд: міцний і масивний дизайн з широкою решіткою радіатора та великими фарами. <br>
                Кузов / Аеродинаміка: рамний кузов із високим кліренсом, оптимізованою формою для вантажопідйомності та стабільності на дорозі. <br>
                Салон: практичні та преміальні матеріали, зручні крісла, сучасні оздоблення та функціональні панелі. <br>
                Технічні характеристики: бензинові та дизельні двигуни від 3.3 до 5.0 л, потужність до 450 к.с., розгін 0-100 км/год ~5.9 с, задній або повний привід, 10-ступенева АКПП. <br>
                Особливості: висока вантажопідйомність, легендарна надійність, здатність до роботи в найважчих умовах.
            </p>
          </div>
          <div class="slide">
            <h3>Toyota Hilux</h3>
            <img src="../img/pickups/Toyota Hilux.png" alt="Toyota Hilux" />
            <p>
                Засновник: Кіічіро Тойода (компанія Toyota Motor Corporation, Японія). <br>
                Зовнішній вигляд: строгий позашляховий стиль із широкими крилами та високою посадкою. <br>
                Кузов / Аеродинаміка: міцний рамний кузов із захисними елементами та оптимізованою формою для стабільності та прохідності. <br>
                Салон: практичні та преміальні матеріали, комфортні сидіння, просторе компонування для водія та пасажирів. <br>
                Технічні характеристики: бензинові та дизельні двигуни 2.4–2.8 л, потужність до 204 к.с., розгін 0-100 км/год ~11 с, задній або повний привід, 6-ступенева АКПП. <br>
                Особливості: легендарна надійність, витривалість у складних умовах та висока прохідність.
            </p>
          </div>
          <div class="slide">
            <h3>Chevrolet Silverado</h3>
            <img
              src="../img/pickups/Chevrolet Silverado.png" alt="Chevrolet Silverado"/>
            <p>
                Засновник: Вільям Дюрант (компанія Chevrolet, США). <br>
                Зовнішній вигляд: масивний і агресивний дизайн із широкою решіткою та брутальними лініями кузова. <br>
                Кузов / Аеродинаміка: рамний кузов із високим кліренсом і формою, що забезпечує стабільність та вантажопідйомність. <br>
                Салон: преміальні та практичні матеріали, зручні сидіння, сучасна панель приладів і просторе компонування. <br>
                Технічні характеристики: бензинові двигуни від 4.3 до 6.2 л, потужність до 420 к.с., розгін 0-100 км/год ~6.0 с, задній або повний привід, 10-ступенева АКПП. <br>
                Особливості: велика вантажопідйомність, надійність та здатність працювати в будь-яких умовах.
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
