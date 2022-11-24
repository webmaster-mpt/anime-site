<?php
require "../db.php";
?>
<?php if (isset($_SESSION['logged_user'])):?>
<?php require "../header.php"?>
  <div class="text">
    <br><br>
    <div class="d-flex flex-wrap">
      <div class="card mb-4 shadow-sm"style="width:225px;opacity:0.7;color:#000000;background-color:#B22222;font-family: cursive">
        <div class="card-header">
          <button id="btnLike" onclick="randomTheme()"style="color:#000000;background-color:#00FA9A;font-family: cursive;width:202px;height:50px;font-size:20px;margin-left:-10px">Смена темы</button>
          <script type="text/javascript">
          var clicks = 0;
          function onClickCounter() {
          clicks+=1;
          document.getElementById("clicks").innerHTML = clicks;
          };
          function randomTheme() {
          var theme = Math.round(Math.random()*2) + 1;
          if(theme==1)
                document.body.style.backgroundImage = 'url(https://static.pexels.com/photos/8395/lights-night-unsharp-blured.jpg)';
          else if(theme==2)
                document.body.style.backgroundImage = 'url(https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2F4.bp.blogspot.com%2F--U5WM3qlEpQ%2FUyC0mBK7D0I%2FAAAAAAAB63M%2FELbiM-ziI4M%2Fs1600%2F%2525E3%252582%2525B8%2525E3%252583%2525A3%2525E3%252583%2525BC%2525E3%252583%25259E%2525E3%252583%2525B3%2525E2%252598%252586%2525E3%252583%252589%2525E3%252583%252583%2525E3%252582%2525B0-843445-www.kaifineart.com-3.jpg&f=1&nofb=1)';
          else if(theme==3)
                document.body.style.backgroundImage = 'url(https://external-content.duckduckgo.com/iu/?u=http%3A%2F%2Fcdn.akamai.steamstatic.com%2Fsteamcommunity%2Fpublic%2Fimages%2Fitems%2F251910%2F82cc7e428e9b0f855041d3e9047480782dde3fb8.jpg&f=1&nofb=1)';
          };
          </script>
          </div>
        </div>
    </div>
<div class="d-flex flex-wrap">
<div class="card mb-4 shadow-sm">
  <div class="card-header">
    <h4 class="my-0 font-weight-normal">Блич</h4>
  </div>
  <div class="card-body">
    <img src="/img/Bleach.jpg" class="img-thumbnail">
    <ul class="list-unstyled mt-3 mb-4">
      <li style="font-family: cursive;">Статус:вышел</li>
      <li style="font-family: cursive;">Год:2004</li>
      <li style="font-family: cursive;">Возрастной рейтинг:PG-13 (от 13 лет)</li>
      <li style="font-family: cursive;">Жанр:Сёнэн, Комедия, Приключения, Фэнтези, Параллельные миры, Экшен, Боевые искусства, Сражения на мечах, Суперспособности, Сверхъестественное</li>
      <li style="font-family: cursive;">Режиссер:Абэ Нориюки</li>
      <li style="font-family: cursive;">Тип:Сериал</li>
    </ul>
  <iframe src="https://my.mail.ru/video/embed/5309772998943704453"
  width="100%" height="360"
   frameborder="0" scrolling="no" allowfullscreen=""></iframe>
  </div>
  </div>
  <div class="card mb-4 shadow-sm">
    <div class="card-header">
      <h4 class="my-0 font-weight-normal">Блич (фильм первый): Воспоминания ни о ком</h4>
    </div>
    <div class="card-body">
      <img src="/img/Bleachч.jpg" class="img-thumbnail">
      <ul class="list-unstyled mt-3 mb-4">
        <li style="font-family: cursive;">Статус:вышел</li>
        <li style="font-family: cursive;">Год:2006</li>
        <li style="font-family: cursive;">Возрастной рейтинг:PG-13 (от 13 лет)</li>
        <li style="font-family: cursive;">Жанр:Комедия / Фэнтези / Мистика / Драма / Самураи / Боевые искусства / Триллер / Сёнэн / Полнометражное</li>
        <li style="font-family: cursive;">Режиссер:Абэ Нориюки</li>
        <li style="font-family: cursive;">Тип:Полнометражный</li>
        <li style="font-family: cursive;">Озвучка:loster01, Emeri</li>
      </ul>
      <iframe src='https://my.mail.ru/video/embed/5309772998943705118'
      width="100%" height='360' frameborder='0' scrolling='no' webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
    </div>
    </div>
    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">Блич Фильм 2: Восстание Алмазной Пыли</h4>
      </div>
      <div class="card-body">
        <img src="/img/Bleach3.jpg" class="img-thumbnail">
        <ul class="list-unstyled mt-3 mb-4">
          <li style="font-family: cursive;">Статус:вышел</li>
          <li style="font-family: cursive;">Год:2007</li>
          <li style="font-family: cursive;">Возрастной рейтинг:PG-13 (от 13 лет)</li>
          <li style="font-family: cursive;">Жанр:Комедия / Фэнтези / Мистика / Драма / Самураи / Боевые искусства / Триллер / Сёнэн / Полнометражное</li>
          <li style="font-family: cursive;">Режиссер:Абэ Нориюки</li>
          <li style="font-family: cursive;">Тип:Полнометражный</li>
          <li style="font-family: cursive;">Озвучка:Лисёк</li>
        </ul>
        <iframe src='https://my.mail.ru/video/embed/5309772998943705120'
        width="100%" height='360' frameborder='0' scrolling='no' webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
      </div>
    </div>
    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">Блич Фильм 3: Исчезая в темноту, я звала тебя</h4>
      </div>
      <div class="card-body">
        <img src="/img/Bleach4.jpg" class="img-thumbnail">
        <ul class="list-unstyled mt-3 mb-4">
          <li style="font-family: cursive;">Статус:вышел</li>
          <li style="font-family: cursive;">Год:2008</li>
          <li style="font-family: cursive;">Возрастной рейтинг:PG-13 (от 13 лет)</li>
          <li style="font-family: cursive;">Жанр:Комедия / Фэнтези / Мистика / Драма / Самураи / Боевые искусства / Триллер / Сёнэн / Полнометражное</li>
          <li style="font-family: cursive;">Режиссер:Абэ Нориюки</li>
          <li style="font-family: cursive;">Тип:Полнометражный</li>
          <li style="font-family: cursive;">Озвучка:Near, Laura, Мулентий, Муневра, Eladiel, Joy, Kagura_ent, Ranmaru</li>
        </ul>
        <iframe src='https://my.mail.ru/video/embed/5309772998943705128'
        width="100%" height='360' frameborder='0' scrolling='no' webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
      </div>
    </div>
    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">Блич Фильм 4: Врата Ада</h4>
      </div>
      <div class="card-body">
        <img src="/img/Bleach5.jpg" class="img-thumbnail">
        <ul class="list-unstyled mt-3 mb-4">
          <li style="font-family: cursive;">Статус:вышел</li>
          <li style="font-family: cursive;">Год:2010</li>
          <li style="font-family: cursive;">Возрастной рейтинг:PG-13 (от 13 лет)</li>
          <li style="font-family: cursive;">Жанр:Комедия / Фэнтези / Мистика / Драма / Самураи / Боевые искусства / Триллер / Сёнэн / Полнометражное</li>
          <li style="font-family: cursive;">Режиссер:Абэ Нориюки</li>
          <li style="font-family: cursive;">Тип:Полнометражный</li>
          <li style="font-family: cursive;">Озвучка:JAM, Eladiel</li>
        </ul>
        <iframe src='https://my.mail.ru/video/embed/5309772998943705132'
        width="100%" height='360' frameborder='0' scrolling='no' webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
      </div>
    </div>
  </div>
  </div>
  <style>
  #mc-container{
    width: 70%;
    margin-left: 15%;
    background-color: #000000;
    opacity: 0.7;
  }
  </style>
  <div id="mc-container"></div>
  <script type="text/javascript">
  cackle_widget = window.cackle_widget || [];
  cackle_widget.push({widget: 'Comment', id: 70658});
  (function() {
      var mc = document.createElement('script');
      mc.type = 'text/javascript';
      mc.async = true;
      mc.src = ('https:' == document.location.protocol ? 'https' : 'http') + '://cackle.me/widget.js';
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(mc, s.nextSibling);
  })();
  </script>
  <a id="mc-link" href="http://cackle.me">Комментарии для сайта <b style="color:#4FA3DA">Cackl</b><b style="color:#F65077">e</b></a>
<? require "../footer.php"?>
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
<div class="text">
  <br><br>
<div class="d-flex flex-wrap">
<div class="card mb-4 shadow-sm">
<div class="card-header">
  <h4 class="my-0 font-weight-normal">Блич</h4>
</div>
<div class="card-body">
  <img src="/img/Bleach.jpg" class="img-thumbnail">
  <ul class="list-unstyled mt-3 mb-4">
    <li style="font-family: cursive;">Статус:вышел</li>
    <li style="font-family: cursive;">Год:2004</li>
    <li style="font-family: cursive;">Возрастной рейтинг:PG-13 (от 13 лет)</li>
    <li style="font-family: cursive;">Жанр:Сёнэн, Комедия, Приключения, Фэнтези, Параллельные миры, Экшен, Боевые искусства, Сражения на мечах, Суперспособности, Сверхъестественное</li>
    <li style="font-family: cursive;">Режиссер:Абэ Нориюки</li>
    <li style="font-family: cursive;">Тип:Сериал</li>
  </ul>
<iframe src="https://my.mail.ru/video/embed/5309772998943704453"
width="100%" height="360"
 frameborder="0" scrolling="no" allowfullscreen=""></iframe>
</div>
</div>
<div class="card mb-4 shadow-sm">
  <div class="card-header">
    <h4 class="my-0 font-weight-normal">Блич (фильм первый): Воспоминания ни о ком</h4>
  </div>
  <div class="card-body">
    <img src="/img/Bleachч.jpg" class="img-thumbnail">
    <ul class="list-unstyled mt-3 mb-4">
      <li style="font-family: cursive;">Статус:вышел</li>
      <li style="font-family: cursive;">Год:2006</li>
      <li style="font-family: cursive;">Возрастной рейтинг:PG-13 (от 13 лет)</li>
      <li style="font-family: cursive;">Жанр:Комедия / Фэнтези / Мистика / Драма / Самураи / Боевые искусства / Триллер / Сёнэн / Полнометражное</li>
      <li style="font-family: cursive;">Режиссер:Абэ Нориюки</li>
      <li style="font-family: cursive;">Тип:Полнометражный</li>
      <li style="font-family: cursive;">Озвучка:loster01, Emeri</li>
    </ul>
    <iframe src='https://my.mail.ru/video/embed/5309772998943705118'
    width="100%" height='360' frameborder='0' scrolling='no' webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
  </div>
  </div>
  <div class="card mb-4 shadow-sm">
    <div class="card-header">
      <h4 class="my-0 font-weight-normal">Блич Фильм 2: Восстание Алмазной Пыли</h4>
    </div>
    <div class="card-body">
      <img src="/img/Bleach3.jpg" class="img-thumbnail">
      <ul class="list-unstyled mt-3 mb-4">
        <li style="font-family: cursive;">Статус:вышел</li>
        <li style="font-family: cursive;">Год:2007</li>
        <li style="font-family: cursive;">Возрастной рейтинг:PG-13 (от 13 лет)</li>
        <li style="font-family: cursive;">Жанр:Комедия / Фэнтези / Мистика / Драма / Самураи / Боевые искусства / Триллер / Сёнэн / Полнометражное</li>
        <li style="font-family: cursive;">Режиссер:Абэ Нориюки</li>
        <li style="font-family: cursive;">Тип:Полнометражный</li>
        <li style="font-family: cursive;">Озвучка:Лисёк</li>
      </ul>
      <iframe src='https://my.mail.ru/video/embed/5309772998943705120'
      width="100%" height='360' frameborder='0' scrolling='no' webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
    </div>
  </div>
  <div class="card mb-4 shadow-sm">
    <div class="card-header">
      <h4 class="my-0 font-weight-normal">Блич Фильм 3: Исчезая в темноту, я звала тебя</h4>
    </div>
    <div class="card-body">
      <img src="/img/Bleach4.jpg" class="img-thumbnail">
      <ul class="list-unstyled mt-3 mb-4">
        <li style="font-family: cursive;">Статус:вышел</li>
        <li style="font-family: cursive;">Год:2008</li>
        <li style="font-family: cursive;">Возрастной рейтинг:PG-13 (от 13 лет)</li>
        <li style="font-family: cursive;">Жанр:Комедия / Фэнтези / Мистика / Драма / Самураи / Боевые искусства / Триллер / Сёнэн / Полнометражное</li>
        <li style="font-family: cursive;">Режиссер:Абэ Нориюки</li>
        <li style="font-family: cursive;">Тип:Полнометражный</li>
        <li style="font-family: cursive;">Озвучка:Near, Laura, Мулентий, Муневра, Eladiel, Joy, Kagura_ent, Ranmaru</li>
      </ul>
      <iframe src='https://my.mail.ru/video/embed/5309772998943705128'
      width="100%" height='360' frameborder='0' scrolling='no' webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
    </div>
  </div>
  <div class="card mb-4 shadow-sm">
    <div class="card-header">
      <h4 class="my-0 font-weight-normal">Блич Фильм 4: Врата Ада</h4>
    </div>
    <div class="card-body">
      <img src="/img/Bleach5.jpg" class="img-thumbnail">
      <ul class="list-unstyled mt-3 mb-4">
        <li style="font-family: cursive;">Статус:вышел</li>
        <li style="font-family: cursive;">Год:2010</li>
        <li style="font-family: cursive;">Возрастной рейтинг:PG-13 (от 13 лет)</li>
        <li style="font-family: cursive;">Жанр:Комедия / Фэнтези / Мистика / Драма / Самураи / Боевые искусства / Триллер / Сёнэн / Полнометражное</li>
        <li style="font-family: cursive;">Режиссер:Абэ Нориюки</li>
        <li style="font-family: cursive;">Тип:Полнометражный</li>
        <li style="font-family: cursive;">Озвучка:JAM, Eladiel</li>
      </ul>
      <iframe src='https://my.mail.ru/video/embed/5309772998943705132'
      width="100%" height='360' frameborder='0' scrolling='no' webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
    </div>
  </div>
</div>
</div>
<? require "../footer.php" ?>
<?php endif;?>
