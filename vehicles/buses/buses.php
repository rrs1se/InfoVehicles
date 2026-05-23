<!DOCTYPE html>
<html lang="uk">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="../../main.css " />
    <link rel="stylesheet" href="buses.css" />
    <title>InfoVehicles - Автобуси</title>
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
                  <td class="passenger">
                    <a href="../passenger/passenger.php">Легкові автомобілі</a>
                  </td>
                  <td>
                    <a href="../../vehicles/sport/sport.php">Спорткари</a>
                  </td>
                  <td>
                    <a href="../../vehicles/trucks/trucks.php">Вантажівки</a>
                  </td>
                  <td class="buses">
                    <a>Автобуси</a>
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
            <h3>Mercedes-Benz Citaro</h3>
            <img src="../img/buses/Mercedes-Benz Citaro.jpg" alt="Mercedes-Benz Citaro" />
            <p>
              Засновник: Mercedes-Benz / Daimler AG (Німеччина). <br />
              Зовнішній вигляд: міський низькопідлоговий автобус із великими панорамними вікнами, округлими лініями кузова, сучасною світлотехнікою та характерною передньою панеллю Mercedes. <br /> 
              Кузов / аеродинаміка: оптимізований для міських маршрутів — мінімальний опір повітря, широкі двері для швидкої посадки, низька підлога, різні довжини кузова (12–18 м). <br />
              Салон: просторий, з ергономічними сидіннями, широкими проходами, поручнями, системою кондиціонування, великими вікнами; можливі варіанти з місцями для людей з інвалідністю. <br />
              Технічні характеристики: дизельні, гібридні або газові двигуни потужністю ~250–350 к.с.; автоматичні коробки передач; спеціально налаштована міська підвіска. <br />
              Особливості: дуже надійний міський автобус, низькі вібрації, комфорт для пасажирів, популярний у Європі та великих містах.
            </p>
          </div>
          <div class="slide">
            <h3>Solaris Urbino</h3>
            <img src="../img/buses/Solaris Urbino.png" alt="Solaris Urbino" />
            <p>
              Засновник: Solaris Bus & Coach (Польща). <br />
              Зовнішній вигляд: сучасний мегаполісний автобус з характерним «квадратним» дизайном, великими вікнами, широкою передньою лінією та LED-оптикою. <br />
              Кузов / аеродинаміка: низькопідлогова конструкція, оптимізована для міських умов; різні конфігурації (Urbino 12, Urbino 18, електробуси, тролейбуси). <br />
              Салон: світлий та просторий, з великими панорамними вікнами, зручними сидіннями, поручнями, кондиціонуванням, низьким рівнем шуму; можливі USB-зарядні порти, інформаційні монітори. <br />
              Технічні характеристики: залежно від версії — дизель, електро, гібрид; потужність електромоторів або дизельних двигунів — 200–350 к.с.; сучасні системи рекуперації в електросеріях. <br />
              Особливості: один із найпопулярніших міських автобусів у Європі; екологічність, плавний хід, можливість повної електричної конфігурації.
            </p>
          </div>
          <div class="slide">
            <h3>Setra ComfortClass</h3>
            <img src="../img/buses/Setra ComfortClass.png" alt="Setra ComfortClass" />
            <p>
              Засновник: Setra (частина EvoBus / Daimler Buses, Німеччина). <br />
              Зовнішній вигляд: міжміський та туристичний автобус із преміальним дизайном, плавними обрисами, великою хромованою решіткою, елегантними фарами й високим кузовом. <br />
              Кузов / аеродинаміка: висока туристична платформа з оптимізованим обтіканням, великими багажними відсіками, жорстким кузовом та хорошими показниками шумопоглинання. <br />
              Салон: преміальний рівень — комфортабельні крісла, індивідуальні полички, м’яке освітлення, великий простір, мультимедійні системи, зручні підлокітники; ідеальний для тривалих подорожей. <br />
              Технічні характеристики: дизельні двигуни потужністю ~350–450 к.с.; автоматична коробка передач; високоефективні гальмівні системи та стабілізація. <br />
              Особливості: комфорт, надійність, низький рівень шуму в салоні, популярність у туристичних перевізників, високий клас безпеки.
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
