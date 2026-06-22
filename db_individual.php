<?php
  $mysql = @new mysqli("localhost", "webtechnology", "webtechnology", "individual");

  if ($mysql->connect_errno) {
    die("Помилка підключення до БД: " . $mysql->connect_error);
  }
?>