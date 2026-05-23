<!DOCTYPE html>
<html lang="uk">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="../../main.css " />
    <link rel="stylesheet" href="tractors.css" />
    <title>InfoVehicles - Трактори</title>
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
                  <td class="tractors">
                    <a>Трактори</a>
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
            <h3>John Deere 8R</h3>
            <img src="../img/tractors/John Deere 8R.png" alt="John Deere 8R" />
            <p>
                Засновник: Джон Дір (John Deere, США). <br>
                Зовнішній вигляд: великий сучасний трактор із яскраво-зеленим забарвленням і жовтими колесами. <br>
                Кузов / Аеродинаміка: обтічний корпус для зниження опору повітря та ефективності при роботі на полі. <br>
                Салон: просторий та комфортний, з ергономічним кермом, панеллю управління і кондиціонером. <br>
                Технічні характеристики: дизельний двигун 6.8–9.0 л, потужність до 410 к.с., 4- або 4WD, коробка передач Powershift або CVT. <br>
                Особливості: висока тяга, надійність, універсальність для великих сільгоспоперацій.
            </p>
          </div>
          <div class="slide">
            <h3>Massey Ferguson 7700</h3>
            <img src="../img/tractors/Massey Ferguson 7700.png" alt="Massey Ferguson 7700" />
            <p>
                Засновник: Чарльз Фергюсон і компанія Massey Ferguson (Велика Британія). <br>
                Зовнішній вигляд: класичний червоний трактор із сучасним дизайном та великими колесами. <br>
                Кузов / Аеродинаміка: компактний, але потужний корпус для роботи з різними причепами та навісним обладнанням. <br>
                Салон: комфортний для оператора, зручні сидіння та сучасна панель керування. <br>
                Технічні характеристики: дизельний двигун 4.9–6.6 л, потужність до 240 к.с., 4WD, трансмісія Dyna-6 або Dyna-VT. <br>
                Особливості: економічність, маневреність, підходить для середніх та великих господарств.
            </p>
          </div>
          <div class="slide">
            <h3>New Holland T7</h3>
            <img
              src="../img/tractors/New Holland T7.png" alt="New Holland T7"/>
            <p>
                Засновник: Фернандо Фіореллі, компанія New Holland (Італія/США). <br>
                Зовнішній вигляд: великий синій трактор із сучасним дизайном та високим клиренсом. <br>
                Кузов / Аеродинаміка: обтічний для ефективної роботи на полях і економії палива. <br>
                Салон: просторний та зручний, з панеллю управління IntelliView і кондиціонером. <br>
                Технічні характеристики: дизельний двигун 6.7–8.7 л, потужність до 300 к.с., 4WD, коробка передач AutoCommand або Powershift. <br>
                Особливості: висока продуктивність, надійність, універсальний для різних сільгоспоперацій.
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
