<!DOCTYPE html>
<html lang="uk">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Новини — InfoVehicles</title>
    <link rel="stylesheet" href="..\main.css" />
  </head>
  <body>
    <header class="header">
      <div class="header-container">
        <h1 class="animtitle">InfoVehicles</h1>
        <nav class="navigation">
          <a href="../index.php">Головна</a> |
          <div class="category">
            Категорії
            <div class="category-anim">
              <table class="category-table">
                <tr>
                  <td><a href="../vehicles/passenger/passenger.php">Легкові автомобілі</a></td>
                  <td><a href="../vehicles/sport/sport.php">Спорткари</a></td>
                  <td><a href="../vehicles/trucks/trucks.php">Вантажівки</a></td>
                  <td><a href="../vehicles/buses/buses.php">Автобуси</a></td>
                </tr>
                <tr>
                  <td><a href="../vehicles/suvs/suvs.php">Позашляховики</a></td>
                  <td><a href="../vehicles/pickups/pickups.php">Пікапи</a></td>
                  <td><a href="../vehicles/motorcycles/motorcycles.php">Мотоцикли</a></td>
                  <td><a href="../vehicles/electro/electro.php">Електромобілі</a></td>
                </tr>
                <tr>
                  <td><a href="../vehicles/hybrids/hybrids.php">Гібриди</a></td>
                  <td><a href="../vehicles/vans/vans.php">Фургони</a></td>
                  <td><a href="../vehicles/tractors/tractors.php">Трактори</a></td>
                  <td><a href="../vehicles/minibuses/minibuses.php">Мікроавтобуси</a></td>
                </tr>
                <tr>
                  <td><a href="../vehicles/coupe/coupe.php">Купе</a></td>
                  <td><a href="../vehicles/cabriolets/cabriolets.php">Кабріолети</a></td>
                  <td><a href="../vehicles/spec/spec.php">Спецтехніка</a></td>
                  <td><a href="../vehicles/campers/campers.php">Кемпери</a></td>
                </tr>
              </table>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <audio id="player">
      <source src="../audio/bg_music.mp3" type="audio/mpeg" />
      Ваш браузер не підтримує аудіо.
    </audio>
    <input
      class="volumeController"
      type="range"
      id="volumeControl"
      min="0"
      max="0.05"
      step="0.00000001"
      value="0.05"
    />
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
    <section class="news-content">
      <iframe src="https://eauto.org.ua/news" loading="lazy"></iframe>
    </section>
  </body>
</html>
