<!DOCTYPE html>
<html lang="uk">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="../../main.css " />
    <link rel="stylesheet" href="suvs.css" />
    <title>InfoVehicles - Позашляховики</title>
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
                  <td class="suvs">
                    <a>Позашляховики</a>
                  </td>
                  <td>
                    <a href="../../vehicles/pickups/pickups.php">Пікапи</a>
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
            <h3>Toyota Land Cruiser</h3>
            <img src="../img/suvs/Toyota Land Cruiser.png" alt="Toyota Land Cruiser" />
            <p>
              Засновник: Кіічіро Тойода (компанія Toyota Motor Corporation, Японія). <br />
              Зовнішній вигляд: масивний позашляховий дизайн із рубаними формами, великою решіткою радіатора та впізнаваною оптикою. <br />
              Кузов / аеродинаміка: рамна конструкція з високим кліренсом, посиленими елементами та формами, оптимізованими для стійкості на бездоріжжі. <br />
              Салон: преміальні матеріали, зокрема шкіра та акценти з дерева й металу. <br />
              Технічні характеристики: двигуни V6 або V8 (залежно від покоління), потужність до ~415 к.с., розгін 0–100 км/год ~6.7 с, повний привід, 10-ступенева АКПП. <br />
              Особливості: легендарна надійність, висока прохідність, довговічність і статус одного з найміцніших позашляховиків.
            </p>
          </div>
          <div class="slide">
            <h3>Jeep Wrangler</h3>
            <img src="../img/suvs/Jeep Wrangler.png" alt="Jeep Wrangler" />
            <p>
              Засновник: компанія Willys-Overland (США). <br />
              Зовнішній вигляд: квадратний утилітарний дизайн із прямими лініями, знімними дверима та дахом, фірмовою решіткою з сімома прорізами. <br />
              Кузов / аеродинаміка: міцна конструкція з пласкими панелями та високим кліренсом, створена для максимальної прохідності, а не аеродинаміки. <br />
              Салон: міцні водостійкі матеріали та практичне компонування для офроуду. <br>
              Технічні характеристики: двигуни від 2.0 до 6.4 л (до 470 к.с. у Rubicon 392), повний привід, блокування диференціалів, 8-ступенева АКПП. <br />
              Особливості: екстремальна прохідність, можливість знімати дах і двері, величезний потенціал для тюнінгу.
            </p>
          </div>
          <div class="slide">
            <h3>Mercedes-Benz G-Class</h3>
            <img
              src="../img/suvs/Mercedes-Benz G-Class.png" alt="Mercedes-Benz G-Class"
            />
            <p>
              Засновник: Карл Бенц і Готтліб Даймлер (компанія Mercedes-Benz, Німеччина). <br />
              Зовнішній вигляд: культовий кубічний дизайн із прямими лініями, круглими фарами та характерними зовнішніми петлями дверей. <br />
              Кузов / аеродинаміка: рамна конструкція з плоскими поверхнями, створена для витривалості й стабільності в складних умовах. <br />
              Салон: преміальні матеріали — шкіра Nappa, дерево та метал. <br />
              Технічні характеристики: V8 BiTurbo (до 585 к.с. у AMG), розгін 0–100 км/год ~4.5 с, постійний повний привід 4MATIC, 9-ступенева трансмісія. <br />
              Особливості: поєднання люксу та екстремальної прохідності, статус культового позашляховика й упізнаваний силует.
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
