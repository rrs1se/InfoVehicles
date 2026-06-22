<!DOCTYPE html>
<html lang="uk">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="../../main.css " />
    <link rel="stylesheet" href="passenger.css" />
    <title>InfoVehicles - Легкові автомобілі</title>
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
                    <a>Легкові автомобілі</a>
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
            <h3>Renault Duster</h3>
            <img src="../img/passenger/Renault Duster.png" alt="Renault Duster" />
            <p>
              Засновник: Renault Group (французька компанія, материнська структура - Renault SA) <br />
              Зовнішній вигляд: компактний кросовер; простий і практичний дизайн із пластиковим захистом по низу кузова, масивними колісними арками, прямою лінією даху. <br /> 
              Кузов / аеродинаміка: підвищений кліренс, рампа-пластик, більше практичності, а не спортивної аеродинаміки. <br />
              Салон: функціональний, але не ультрапреміум - матеріали: тканина або простіший шкірозамінник, пластик, інколи елементи із м’якої обробки, зручні сидіння, достатньо місця, простий центральний екран / приладова панель. <br />
              Технічні характеристики: за версіями - бензинові та дизельні двигуни, є м’який гібрид; наприклад, в Україні доступна версія 1,5л дизель (115 к.с.) - передній привід, 6-ступенева механічна коробка, максимальна швидкість ~180 км/год, розгін до 100 км/год - близько 10,2 секунди. <br />
              Особливості: практичність, надійність, хороша прохідність для свого класу, низька вартість обслуговування.
            </p>
          </div>
          <div class="slide">
            <h3>Toyota RAV4</h3>
            <img src="../img/passenger/Toyota RAV4.png" alt="Toyota RAV4" />
            <p>
              Засновник: Toyota Motor Corporation (Японія) <br />
              Зовнішній вигляд: класичний кросовер-SUV дизайн — чіткі лінії, агресивна решітка, стійкий і масивний силует, солідні пропорції. <br />
              Кузов / аеродинаміка: хоча це SUV, він спрямований і на міську, і на “позаасфальтову” їзду — конструкція на платформі TNGA-K, яка дає гарний баланс між жорсткістю та ефективністю. <br />
              Салон: сучасний інтер’єр, високоякісні матеріали, хороше планування — мультимедійна система, зручні сидіння, просторість, практичні рішення. <br />
              Технічні характеристики: різні варіанти двигунів, залежно від ринку — наприклад, версія з 2,5 л І4, ~203 к.с., 8-ступенева автоматична трансмісія по даним для деяких варіантів. Привід: є повний (AWD) варіанти. <br />
              Особливості: надійність Toyota, хороша керованість, економічність певних версій (гібриди є у моделей RAV4), гнучкість як для міста, так і невеликого бездоріжжя.
            </p>
          </div>
          <div class="slide">
            <h3>Mazda CX-5</h3>
            <img src="../img/passenger/Mazda CX-5.png" alt="Mazda CX-5" />
            <p>
              Засновник: Mazda Motor Corporation (Японія) <br />
              Зовнішній вигляд: елегантний кросовер; дизайн Mazda у стилі “Kodo” — плавні лінії, динамічна, але стримана форма, стильні фари, пропорції, які підкреслюють баланс між спортом і практичністю. <br />
              Кузов / аеродинаміка: кузов добре збалансований: міський кросовер з оптимізованою аеродинамікою, щоб мінімізувати опір повітря, але в той же час достатньо простір. <br />
              Салон: преміальні ознаки — в найбагатших комплектаціях є шкіра, м’які вставки, хороша ергономіка, сучасна панель приладів, мультимедійні екрани, комфортні сидіння. <br />
              Технічні характеристики: залежно від версії — бензинові двигуни Skyactiv; наприклад, використовуються двигуни 2.0 або 2.5 л, варіанти з повним приводом. (У нових поколіннях може бути легкий гібрид, залежно від ринку.) <br />
              Особливості: приємне водіння (Mazda підкреслює задоволення від керування), надійність, збалансована динаміка + економія пального, стильний вигляд.
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
