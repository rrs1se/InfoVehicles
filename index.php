<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="main.css" />
    <title>InfoVehicles - Інформація про транспортні засоби</title>
  </head>
  <a href="survey/survey.php" class="survey">Опитування</a>
  <body>
    <header class="header">
      <div class="header-container">
        <h1 class="animtitle">InfoVehicles</h1>
        <div id="clock"></div>
        <script src="clock.js"></script>
        <nav class="navigation">
          <div class="category">Категорії
            <div class="category-anim">
              <table class="category-table">
                <tr>
                  <td>
                    <a href="vehicles/passenger/passenger.php"
                      >Легкові автомобілі</a
                    >
                  </td>
                  <td><a href="vehicles/sport/sport.php">Спорткари</a></td>
                  <td><a href="vehicles/trucks/trucks.php">Вантажівки</a></td>
                  <td><a href="vehicles/buses/buses.php">Автобуси</a></td>
                </tr>
                <tr>
                  <td><a href="vehicles/suvs/suvs.php">Позашляховики</a></td>
                  <td><a href="vehicles/pickups/pickups.php">Пікапи</a></td>
                  <td>
                    <a href="vehicles/motorcycles/motorcycles.php"
                      >Мотоцикли</a
                    >
                  </td>
                  <td>
                    <a href="vehicles/electro/electro.php">Електромобілі</a>
                  </td>
                </tr>
                <tr>
                  <td><a href="vehicles/hybrids/hybrids.php">Гібриди</a></td>
                  <td><a href="vehicles/vans/vans.php">Фургони</a></td>
                  <td><a href="vehicles/tractors/tractors.php">Трактори</a></td>
                  <td>
                    <a href="vehicles/minibuses/minibuses.php"
                      >Мікроавтобуси</a
                    >
                  </td>
                </tr>
                <tr>
                  <td><a href="vehicles/coupe/coupe.php">Купе</a></td>
                  <td>
                    <a href="vehicles/cabriolets/cabriolets.php">Кабріолети</a>
                  </td>
                  <td><a href="vehicles/spec/spec.php">Спецтехніка</a></td>
                  <td><a href="vehicles/campers/campers.php">Кемпери</a></td>
                </tr>
              </table>
            </div>
          </div> |
          <a href="news/news.php">Новини</a>
        </nav>
      </div>
    </header>
    <audio id="player"><source src="audio/bg_music.mp3" type="audio/mpeg" />Ваш браузер не підтримує аудіо.</audio>
    <input class="volumeController" type="range" id="volumeControl" min="0" max="0.05" step="0.00000001" value="0.05" />
    <button id="startBtn" class="startBtn">▶️</button>
    <button id="pauseBtn" class="pauseBtn">⏸️</button>
    <script>
      const audioPlayer = document.getElementById("player");
      const volumeSlider = document.getElementById("volumeControl");
      const range = document.getElementById("volumeControl");
      const startBtn = document.getElementById("startBtn");
      const pauseBtn = document.getElementById("pauseBtn");

      audioPlayer.volume = volumeSlider.value;

      volumeSlider.addEventListener("input", () => {
        audioPlayer.volume = volumeSlider.value;
      });

      function updateSliderBackground(el) {
        const value = el.value;
        const min = el.min;
        const max = el.max;
        const percentage = ((value - min) / (max - min)) * 100;

        el.style.background = `linear-gradient(to right, #1db954 ${percentage}%, #555 ${percentage}%)`;
      }

      updateSliderBackground(range);

      range.addEventListener("input", function () {
        updateSliderBackground(this);
      });

      startBtn.addEventListener("click", () => {
        audioPlayer.play();
      });

      pauseBtn.addEventListener("click", () => {
        audioPlayer.pause();
      });
    </script>
    <section class="content">
      <img src="img/m5.png" alt="Автомобіль" />
      <h2 style="text-align: center">Автомобіль</h2>
      <hr />
      <p>
        <b><u>Автомобі́ль</u></b> <i>(від лат. automobĭlis — самохідний)</i> —
        колісний транспортний засіб, що приводиться в рух двигуном внутрішнього
        згоряння або електричним двигуном і призначений для перевезення
        пасажирів або вантажів по твердому покриттю доріг.
      </p>
      <p>
        Історія автомобіля починається з винаходу першого у світі двигуна
        внутрішнього згоряння, який у 1860 році створив бельгійський винахідник
        Етьєн Ленуар. У 1870-х роках німецький винахідник Карл Бенц розробив і
        запатентував перший автомобіль із бензиновим двигуном. У 1886 році він
        заснував компанію Benz & Cie., яка стала найбільшою автомобільною
        компанією у світі на початку XX століття. У 1908 році Генрі Форд
        запровадив конвеєрне виробництво автомобілів, що значно знизило їхню
        вартість і зробило їх доступними для широких верств населення.
      </p>
      <p>
        Сучасні автомобілі оснащені різноманітними системами безпеки, комфорту
        та розваг, такими як антиблокувальна система гальм (ABS), подушки
        безпеки, клімат-контроль, мультимедійні системи та інші. Вони також
        можуть бути обладнані різними типами двигунів, включаючи бензинові,
        дизельні, гібридні та електричні.
      </p>
      <p>
        Автомобілі відіграють важливу роль у сучасному суспільстві,
        забезпечуючи:
      </p>
      <ol>
        <li class="customlist1">мобільність</li>
        <li class="customlist2">розвиток економіки</li>
        <li class="customlist3">сприяючи глобалізації</li>
      </ol>
      <p>
        Вони дозволяють людям швидко пересуватися між містами, перевозити товари
        та надають свободу вибору маршруту.
      </p>
      <h2 style="text-align: center">Автосалони Дніпра</h2>
      <hr />
      <p class="dealerships">
        Нижче наведена карта з розташуванням деяких автосалонів у місті Дніпро
      </p>
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d84671.78863598061!2d35.03465141427619!3d48.45665626924446!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1z0JDQstGC0L7RgdCw0LvQvtC9!5e0!3m2!1suk!2sua!4v1759157533321!5m2!1suk!2sua"
        width="800px"
        height="450px"
        style="border: 0; border-radius: 10px"
        loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"
      ></iframe>
    </section>
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
