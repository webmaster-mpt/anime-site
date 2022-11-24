<link rel = "stylesheet" href = "/css/styles.css">
<div class="img">
</div>
  <nav>
    <ul class="main">
      <li><a href="/">Главная</a></li>
      <li><a href="/news.php">Новости</a></li>
      <li><a href="">Каталог</a>
        <ul class="drop menu3">
          <li><a href="/catalog.php">Каталог аниме</a></li>
          <li><a href="/anons.php">Анонсы</a></li>
        </ul>
      </li>
      <li><a href="">Сообщество</a>
        <ul class="drop menu4">
          <li><a href="/user.php">Пользователи</a></li>
        </ul>
      </li>
      <li><a href="">Помощь</a>
        <ul class="drop menu5">
          <li><a href="/pravila.php">Правила сайта</a></li>
            <li><a href="/sait.php">О сайте fasa_anime</a></li>
        </ul>
      </li>
      <li><a href="/logout.php">Выйти(<?php echo $_SESSION['logged_user']->login;?>)</a></li>
    </ul>
  </nav>
