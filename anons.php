<?php
require "db.php";
?>
<?php if (isset($_SESSION['logged_user'])):?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<? require "header.php"?>
<? require "anons/anime.php"?>
<? require "footer.php"?>
<?php else :?>
  <link rel = "stylesheet" href = "/css/styles.css">
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
    <li><a href="/login.php">Авторизоваться</a>
      <ul class="drop menu6">
        <li><a href="/signup.php">Регистрация</a></li>
      </ul>
    </li>
  </ul>
</nav>
<div class="container">
  <div class="text">
    <br><br>
    <div class="d-flex flex-wrap">
      <div class="card mb-4 shadow-sm"style="width:100%;opacity:0.7;color:#000000;background-color:#B22222;font-family: cursive">
        <div class="card-header">
          <h2 class="my-0 font-weight-normal">Анонсы</h2>
          <h2 class="my-0 font-weight-normal">Тут публикуется все новинки аниме, в данный момент.(последнее обновления:10/11/2019)</h2> <br>
        </div>
        </div>
        </div>
    </div>
    <div class="d-flex flex-wrap"style="opacity:0.9">
      <div class="card mb-4 shadow-sm" style="width: 100%;">
        <div class="card-header">
          <h2 class="my-0 font-weight-normal" style="color: black;font-size:40px;font-family:cursive;">Посредственность из школы магов 2</h2>
          </div>
          <div class="card-body"style="margin-right:10px;">
            <img src="/img/new/1.jpg" class="img-thumbnail" style="width:20%;margin-right:20px;"align="left">
            <ul class="list-unstyled mt-3 mb-4">
              <li style="background-color:#DCDCDC;font-family: cursive;font-size:20px">2020 | Сериал | Серий: ?? </li>
              <li style="background-color:#00FFFF;font-family: cursive; color:#8B0000;font-size:20px">Жанры: Сёнэн, Террористы, Мистика, Приключения, Романтика,
                 Фантастика, Фэнтези, Магия, Экшен, Школьная жизнь, Сверхъестественное</li>
                 <li style="background-color:#DCDCDC;font-family: cursive;font-size:20px">Возрастной рейтинг: PG-13 (от 13 лет)</li>
                 <li style="background-color:#00FFFF;font-size: 20px; font-family: cursive;font-size:20px">Сезон: зима</li>
                 <li style="background-color:#DCDCDC;font-family: cursive;font-size:20px">Недавно анонсированный второй сезон который начнёт выходить в 2020 году.
                    Пока можете насладиться трейлером в котором красивый, анимированный постер с этой страницы</li>
            </ul>
          </div>
        <div class="card-header">
          <h2 class="my-0 font-weight-normal" style="color: black;font-size:40px;font-family:cursive ">Жизнь в другом мире с нуля: Замороженные узы</h2>
          </div>
          <div class="card-body"style="margin-right:10px;">
            <img src="/img/new/2.jpg" class="img-thumbnail"style="width:20%;margin-right:20px;"align="left">
            <ul class="list-unstyled mt-3 mb-4">
              <li style="background-color:#DCDCDC;font-family: cursive;font-size:20px">2019 | OVA | Серий: 1</li>
              <li style="background-color:#00FFFF;font-family: cursive; color: #8B0000;font-size:20px">Жанры: Сэйнэн, Драма, Триллер, Фэнтези, Магия, Психология, Исэкай</li>
                 <li style="background-color:#DCDCDC;font-family: cursive;font-size:20px">Возрастной рейтинг: PG-13 (от 13 лет)</li>
                 <li style="background-color:#00FFFF;font-size: 20px; font-family: cursive;font-size:20px">Сезон:Осень</li>
                 <li style="background-color:#DCDCDC;font-family: cursive;font-size:20px">События ОВЫ рассказывают о встрече Эмилии с Паком и о их судьбе до начала основного сюжета.</li>
            </ul>
          </div>
          <div class="card-header">
            <h2 class="my-0 font-weight-normal" style="color: black;font-size:40px;font-family:cursive ">Аватар короля 2</h2>
            </div>
            <div class="card-body"style="margin-right:10px;">
              <img src="/img/new/3.jpg" class="img-thumbnail"style="width:20%;margin-right:20px;"align="left">
              <ul class="list-unstyled mt-3 mb-4">
                <li style="background-color:#DCDCDC;font-family: cursive;font-size:20px">2020 | ONA | Серий: 12 </li>
                <li style="background-color:#00FFFF;font-family: cursive; color: #8B0000;font-size:20px">Жанры: Виртуальная реальность, Экшен, Не японское, Игры</li>
                   <li style="background-color:#DCDCDC;font-family: cursive;font-size:20px">Возрастной рейтинг: PG-13 (от 13 лет)</li>
                   <li style="background-color:#00FFFF;font-size: 20px; font-family: cursive;font-size:20px">Сезон:Зима</li>
                  </ul>
            </div>
            <div class="card-header"style="margin-right:10px;">
              <h2 class="my-0 font-weight-normal" style="color: black;font-size:40px;font-family:cursive ">О моём перерождении в слизь 2</h2>
              </div>
              <div class="card-body">
                <img src="/img/new/4.jpg" class="img-thumbnail"style="width:20%;margin-right:20px;"align="left">
                <ul class="list-unstyled mt-3 mb-4">
                  <li style="background-color:#DCDCDC;font-family: cursive;font-size:20px">2020 | Сериал</li>
                  <li style="background-color:#00FFFF;font-family: cursive; color:#8B0000;font-size:20px">Жанры: Сёнэн, Комедия, Приключения, Фэнтези, Демоны, Драконы, Магия </li>
                     <li style="background-color:#DCDCDC;font-family: cursive;font-size:20px">Возрастной рейтинг: PG-13 (от 13 лет)</li>
                     <li style="background-color:#00FFFF;font-size: 20px; font-family: cursive;font-size:20px">Сезон:Зима</li>
                     <li style="background-color:#DCDCDC;font-family: cursive;font-size:20px">Продолжение</li>
                    </ul>
              </div>
              <div class="card-header">
                <h2 class="my-0 font-weight-normal" style="color: black;font-size:40px;font-family:cursive ">Код Гиасс: Воскресший Лелуш</h2>
                </div>
                <div class="card-body"style="margin-right:10px;">
                  <img src="/img/new/5.jpg" class="img-thumbnail"style="width:20%;margin-right:20px;"align="left">
                  <ul class="list-unstyled mt-3 mb-4">
                    <li style="background-color:#DCDCDC;font-family: cursive;font-size:20px">2019 | Полнометражный фильм </li>
                    <li style="background-color:#00FFFF;font-family: cursive; color:#8B0000;font-size:20px">Жанры: Драма, Меха, Фантастика, Экшен, Суперспособности, Военная тематика</li>
                       <li style="background-color:#DCDCDC;font-family: cursive;font-size:20px">Возрастной рейтинг: R-17+ (насилие и/или нецензурная лексика)</li>
                       <li style="background-color:#00FFFF;font-size: 20px; font-family: cursive;font-size:20px">Сезон:Зима</li>
                       <li style="background-color:#DCDCDC;font-family: cursive;font-size:20px">История разворачивается через два года после исполнения плана "Реквием Зеро" Лелуша.</li>
                      </ul>
                </div>
            <div class="card-header">
                <h2 class="my-0 font-weight-normal" style="color: black;font-size:40px;font-family:cursive ">Судьба/Ночь схватки: Прикосновение небес 3. Весенняя песня</h2>
                </div>
                <div class="card-body"style="margin-right:10px;">
                <img src="/img/new/6.jpg" class="img-thumbnail"style="width:20%;margin-right:20px;"align="left">
                <ul class="list-unstyled mt-3 mb-4">
                    <li style="background-color:#DCDCDC;font-family: cursive;font-size:20px">2020 | Сериал</li>
                    <li style="background-color:#00FFFF;font-family: cursive; color:#8B0000;font-size:20px">Жанры: Фэнтези. Магия, Экшен, Сверхъестественное </li>
                    <li style="background-color:#DCDCDC;font-family: cursive;font-size:20px">Возрастной рейтинг: R-17+ (насилие и/или нецензурная лексика)</li>
                    <li style="background-color:#00FFFF;font-size: 20px; font-family: cursive;font-size:20px">Сезон:Весна</li>
                    <li style="background-color:#DCDCDC;font-family: cursive;font-size:20px">Завершающий третий фильм аниме-адаптации «Fate/Stay night: Heaven's Feel».</li>
                </ul>
            </div>
            <div class="card-header">
                <h2 class="my-0 font-weight-normal" style="color: black;font-size:40px;font-family:cursive ">Флот старшей школы (Фильм)</h2>
                </div>
                <div class="card-body"style="margin-right:10px;">
                <img src="/img/new/7.jpg" class="img-thumbnail"style="width:20%;margin-right:20px;"align="left">
                <ul class="list-unstyled mt-3 mb-4">
                    <li style="background-color:#DCDCDC;font-family: cursive;font-size:20px">2020 | Полнометражный фильм </li>
                    <li style="background-color:#00FFFF;font-family: cursive; color:#8B0000;font-size:20px">Жанры:Приключения, Экшен, Военная тематика, Школьная жизнь</li>
                    <li style="background-color:#00FFFF;font-size: 20px; font-family: cursive;font-size:20px">Сезон:Зима</li>
                    <li style="background-color:#DCDCDC;font-family: cursive;font-size:20px">Возможное продолжение истории <br>18 ЯНВАРЯ 2020 ГОДА - премьера в Японии.</li>
                </ul>
            </div>
            <div class="card-header">
                <h2 class="my-0 font-weight-normal" style="color: black;font-size:40px;font-family:cursive">Созданный в Бездне: Рассвет глубокой души</h2>
                </div>
                <div class="card-body"style="margin-right:10px;">
                <img src="/img/new/8.jpg" class="img-thumbnail"style="width:20%;margin-right:20px;"align="left">
                <ul class="list-unstyled mt-3 mb-4">
                    <li style="background-color:#DCDCDC;font-family: cursive;font-size:20px">2020 | Полнометражный фильм </li>
                    <li style="background-color:#00FFFF;font-family: cursive; color:#8B0000;font-size:20px">Жанры:Драма, Мистика, Приключения, Фантастика, Фэнтези</li>
                    <li style="background-color:#DCDCDC;font-family: cursive;font-size:20px">Возрастной рейтинг: R-17+ (насилие и/или нецензурная лексика)</li>
                    <li style="background-color:#00FFFF;font-size: 20px; font-family: cursive;font-size:20px">Сезон:Зима</li>
                    <li style="background-color:#DCDCDC;font-family: cursive;font-size:20px">Продолжение истории</li>
                </ul>
            </div>
      </div>
  </div>
</div>
<? require "footer.php"?>
<?php endif;?>
