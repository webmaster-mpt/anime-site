<?php
require "db.php";

unset($_SESSION['logged_user']);
header('location:/');
?>
<nav>
  <ul class="main">
    <li><a href="index.php">Главная</a></li>
    <li><a href="/vid/news.php">Новости</a></li>
    <li><a href="">Каталог</a>
      <ul class="drop menu3">
        <li><a href="/vid/catalog.php">Каталог аниме</a></li>
        <li><a href="/vid/anons.php">Анонсы</a></li>
      </ul>
    </li>
    <li><a href="">Сообщество</a>
      <ul class="drop menu4">
        <li><a href="/vid/user.php">Пользователи</a></li>
      </ul>
    </li>
    <li><a href="">Помощь</a>
      <ul class="drop menu5">
        <li><a href="/vid/pravila.php">Правила сайта</a></li>
          <li><a href="/vid/sait.php">О сайте fasa_anime</a></li>
      </ul>
    </li>
    <li><a href="/logout.php">Выйти</a>
    </li>
  </ul>
</nav>
