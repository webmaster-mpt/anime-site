<?php
require "db.php";
?>
<?php if (isset($_SESSION['logged_user'])):?>
<? require "header.php"?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<div class="container">
  <div class="text">
    <br><br>
  <div class="d-flex flex-wrap">
    <div class="card mb-4 shadow-sm"style="width:100%;opacity:0.7;color:#000000;background-color:#B22222;font-family: cursive">
      <div class="card-header">
        <h2 class="my-0 font-weight-normal">Новости-сайта</h2>
        <a href="poisk.php" style="text-decoration:none;color:#000000;background-color:#00FA9A;font-family: cursive;white-space: nowrap; opacity:0.8">Поиск по сайту</a>
      </div>
    </div>
    <div class="card mb-4 shadow-sm"style="width:100%;opacity:0.9;color:#000000;background-color:#66CDAA;font-family: cursive">
      <div class="card-header">
        <h2 class="my-0 font-weight-normal">Для начало.</h2>
        <h4 class="my-0 font-weight-normal">Часть сайта уже создано, к тому времени как это будет показано скорее всего всё запланированное уже будет сделано.(покрайней мере надееюсь на это)</h4>
      </div>
    </div>
  </div>
  <div class="card mb-4 shadow-sm"style="width:100%;opacity:0.9;color:#000000;background-color:#66CDAA;font-family: cursive">
    <div class="card-header">
      <h2 class="my-0 font-weight-normal">Начинаем</h2>
      <h4 class="my-0 font-weight-normal">На сайт были добавлены всеми известные фильмы, серии аниме:Наруто, Токийский гуль, Блич.
        <br> Поисковик уже работает. Можете пользоваться.
        <br>"Анонсы" в данной вкладке уже есть информация о новинках аниме
        <br>(дата последнего обновления:10/11/2019)</h4>
    </div>
  </div>
  <div class="card mb-4 shadow-sm"style="width:100%;opacity:0.9;color:#000000;background-color:#66CDAA;font-family: cursive">
    <div class="card-header">
      <h2 class="my-0 font-weight-normal">Проблемы на сайте</h2>
      <h4 class="my-0 font-weight-normal">Все плееры были взяты с разных сайтов. В плеерах присутствует встроенная реклама.
      <br> "Правила сайта" при регистрации домена сайта данная вкладка будет работать.</h4>
    </div>
  </div>
</div>
<? require "footer.php"?>
<?php else :?>
<link rel = "stylesheet" href = "/css/styles.css">
<nav>
  <ul class="main">
    <li><a href="index.php">Главная</a></li>
    <li><a href="news.html">Новости</a></li>
    <li><a href="">Каталог</a>
      <ul class="drop menu3">
        <li><a href="catalog.php">Каталог аниме</a></li>
        <li><a href="anons.html">Анонсы</a></li>
      </ul>
    </li>
    <li><a href="">Сообщество</a>
      <ul class="drop menu4">
        <li><a href="user.html">Пользователи</a></li>
      </ul>
    </li>
    <li><a href="">Помощь</a>
      <ul class="drop menu5">
        <li><a href="pravila.php">Правила сайта</a></li>
          <li><a href="sait.html">О сайте fasa_anime</a></li>
      </ul>
    </li>
    <li><a href="/login.php">Авторизоваться</a>
      <ul class="drop menu6">
        <li><a href="/signup.php">Регистрация</a></li>
      </ul>
    </li>
  </ul>
</nav>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<div class="container">
  <div class="text">
    <br><br>
  <div class="d-flex flex-wrap">
    <div class="card mb-4 shadow-sm"style="width:100%;opacity:0.7;color:#000000;background-color:#B22222;font-family: cursive">
      <div class="card-header">
        <h2 class="my-0 font-weight-normal">Новости-сайта</h2>
      </div>
    </div>
    <div class="card mb-4 shadow-sm"style="width:100%;opacity:0.9;color:#000000;background-color:#66CDAA;font-family: cursive">
      <div class="card-header">
        <h2 class="my-0 font-weight-normal">Для начало.</h2>
        <h4 class="my-0 font-weight-normal">Часть сайта уже создано, к тому времени как это будет показано скорее всего всё запланированное уже будет сделано.(покрайней мере надееюсь на это)</h4>
      </div>
    </div>
  </div>
  <div class="card mb-4 shadow-sm"style="width:100%;opacity:0.9;color:#000000;background-color:#66CDAA;font-family: cursive">
    <div class="card-header">
      <h2 class="my-0 font-weight-normal">Начинаем</h2>
      <h4 class="my-0 font-weight-normal">На сайт были добавлены всеми известные фильмы, серии аниме:Наруто, Токийский гуль, Блич.
        <br> Поисковик уже работает. Можете пользоваться.
        <br>"Анонсы" в данной вкладке уже есть информация о новинках аниме
        <br>(дата последнего обновления:10/11/2019)</h4>
    </div>
  </div>
  <div class="card mb-4 shadow-sm"style="width:100%;opacity:0.9;color:#000000;background-color:#66CDAA;font-family: cursive">
    <div class="card-header">
      <h2 class="my-0 font-weight-normal">Проблемы на сайте</h2>
      <h4 class="my-0 font-weight-normal">Все плееры были взяты с разных сайтов. В плеерах присутствует встроенная реклама.
      <br> "Правила сайта" при регистрации домена сайта данная вкладка будет работать.</h4>
    </div>
  </div>
</div>
<? require "footer.php"?>
<?php endif;?>
