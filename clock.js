function updateClock() {
  let clock = document.getElementById('clock');
  let now = new Date();

  let hours = String(now.getHours()).padStart(2, '0');
  let minutes = String(now.getMinutes()).padStart(2, '0');
  let seconds = String(now.getSeconds()).padStart(2, '0');

  let options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
  let dateStr = now.toLocaleDateString('uk-UA', options);

  dateStr = dateStr.replace(/пʼятницю/, "П'ятниця").replace(/понеділок/, "Понеділок").replace(/вівторок/, "Вівторок").replace(/середу/, "Середа").replace(/четвер/, "Четвер").replace(/суботу/, "Субота").replace(/неділю/, "Неділя");

  clock.innerHTML = `<span>${hours}:${minutes}:${seconds}</span><span>${dateStr}</span>`;
}

updateClock();

setInterval(updateClock, 1000);