<!DOCTYPE html>
<html lang="uk">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="../../main.css " />
    <link rel="stylesheet" href="sport.css" />
    <title>InfoVehicles - Спорткари</title>
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
                  <td class="sport">
                    <a>Спорткари</a>
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
        <?php
          include_once("../../db_individual.php");

          $fields = [
              'Founder',
              'Appearance',
              'Body / Aerodynamics',
              'Cabin',
              'Technical specifications',
              'Features'
          ];

          $query = $mysql->query("SELECT * FROM sport ORDER BY id");
        ?>
        <div class="slides">
          <?php
            $first = true;
            while ($data = $query->fetch_assoc()):
          ?>
          <div class="slide <?php echo $first ? 'active' : ''; ?>">
            <h3><?php echo htmlspecialchars($data['Name']); ?></h3>
            <img src="<?php echo htmlspecialchars($data['img']); ?>" alt="<?php echo htmlspecialchars($data['Name']); ?>" />
            <p>
              <?php
                foreach ($fields as $field) {
                  if (!empty($data[$field])) {
                    echo htmlspecialchars($data[$field]) . '<br><br>';
                  }
                }
              ?>
            </p>
          </div>
          <?php
            $first = false;
            endwhile;
            $mysql->close();
          ?>
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
