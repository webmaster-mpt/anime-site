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
<div class="d-flex flex-wrap"style="opacity:0.9">
<div class="card mb-4 shadow-sm"style="width: 100%;">
  <div class="card-header"style="width:100%;opacity:0.8;color:#000000;background-color:#CD5C5C">
    <h4 class="my-0 font-weight-normal"style="color: black; ">Мы из общаги кавай</h4>
  </div>
  <div class="card-body"style="margin-right:10px;">
    <img src="/img/Kavai.jpg" class="img-thumbnail"style="width:20%;margin-right:20px;"align="left">
    <ul class="list-unstyled mt-3 mb-4">
      <li style="background-color:#00FFFF;font-family: Palatino linotype; color:#8B0000">Статус:вышел</li>
      <li style="font-family: cursive;">Год:2014</li>
      <li style="font-family: cursive;">Возрастной рейтинг: R-17+ (насилие и/или нецензурная лексика)</li>
      <li style="background-color:#00FFFF;font-family: Palatino linotype; color:#8B0000">Жанр:Сэйнэн, Комедия, Романтика, Повседневность, Школьная жизнь</li>
      <li style="font-family: cursive;">Режиссер:Мия Сигэюки</li>
      <li style="font-family: cursive;">Тип:Сериал</li>
      <li style="font-family: cursive;">Серии: 12</li>
      <li style="font-family: cursive;">Сезон: 1</li>
      <li style="font-family: cursive;">Студия: Brain's Base</li>
      <li style="font-family: cursive;">Перевод: Многоголосый</li>
      <li style="font-family: cursive;">Озвучка: Anidub, Anilibria</li>
      <li style="background-color:#F08080;font-family: Palatino linotype;">Закончив младшую школу, Кадзунари Уса надеялся на
        спокойную размеренную жизнь старшеклассника. К тому же родители переехали в другое место, сняв сыну отдельное жилье в
        общежитии. Свое жилье, без родителей, о чем еще можно мечтать старшекласснику? Разве что, о тихой, спокойной и красивой
        девушке, это для нашего героя было пределом всех мечтаний.Как-то зайдя в библиотеку, Уса увидел очень милую девушку, читающую
        книгу. Парень сразу почувствовал, она - именно та, с кем он он проживет свою молодость. В тот же день он пошел осматривать свое
        новое жилье. После осмотра стало ясно, что а) дом развалина, б) комнату придется делить с извращенцем по имени Сиросаки. Уса уже
        собирался бежать оттуда, но столкнулся на входе с той самой девушкой, которую видел в библиотеке. Она оказывается тоже здесь живет,
        да к тому же - двоюродная внучка хозяйки. И парень решил остаться, узнать о жильцах получше. Среди них также оказалась Маюми - неудачливая
        в любви офисная леди, поэтому сильно пьющая и студентка Саяка - тоже со своими странными наклонностями. В общем, не жизнь, а сплошной кавай !
</li>
       </ul><br><br><br><br><br><br>
       <div class="player" style="display: block;">
         <a href="/Serii/Kavai1.php"style="text-decoration:none;color:#000000;background-color:#00FA9A;font-family: cursive;white-space: nowrap;">1-серия</a>
         <a href="/Serii/Kavai2.php"style="text-decoration:none;color:#000000;background-color:#00FA9A;font-family: cursive;white-space: nowrap;">2-серия</a>
         <a href="/Serii/Kavai3.php"style="text-decoration:none;color:#000000;background-color:#00FA9A;font-family: cursive;white-space: nowrap;">3-серия</a>
         <a href="/Serii/Kavai4.php"style="text-decoration:none;color:#000000;background-color:#00FA9A;font-family: cursive;white-space: nowrap;">4-серия</a>
         <a href="/Serii/Kavai5.php"style="text-decoration:none;color:#000000;background-color:#00FA9A;font-family: cursive;white-space: nowrap;">5-серия</a>
         <a href="/Serii/Kavai6.php"style="text-decoration:none;color:#000000;background-color:#00FA9A;font-family: cursive;white-space: nowrap;">6-серия</a>
         <a href="/Serii/Kavai7.php"style="text-decoration:none;color:#000000;background-color:#00FA9A;font-family: cursive;white-space: nowrap;">7-серия</a>
         <a href="/Serii/Kavai8.php"style="text-decoration:none;color:#000000;background-color:#00FA9A;font-family: cursive;white-space: nowrap;">8-серия</a>
         <a href="/Serii/Kavai9.php"style="text-decoration:none;color:#000000;background-color:#00FA9A;font-family: cursive;white-space: nowrap;">9-серия</a>
         <a href="/Serii/Kavai10.php"style="text-decoration:none;color:#000000;background-color:#00FA9A;font-family: cursive;white-space: nowrap;">10-серия</a>
         <a href="/Serii/Kavai11.php"style="text-decoration:none;color:#000000;background-color:#CD5C5C;font-family: cursive;white-space: nowrap;">11-серия</a>
         <a href="/Serii/Kavai12.php"style="text-decoration:none;color:#000000;background-color:#00FA9A;font-family: cursive;white-space: nowrap;">12-серия</a>
         <iframe class="main-player" scrolling="no" allowfullscreen=""
         src="https://video.sibnet.ru/shell.php?videoid=1648874" frameborder="0" width="100%" height="360"></iframe>
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
cackle_widget.push({widget: 'Comment', id: 70566});
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
<div class="d-flex flex-wrap"style="opacity:0.9">
<div class="card mb-4 shadow-sm"style="width: 100%;">
<div class="card-header"style="width:100%;opacity:0.8;color:#000000;background-color:#CD5C5C">
  <h4 class="my-0 font-weight-normal"style="color: black; ">Мы из общаги кавай</h4>
</div>
<div class="card-body"style="margin-right:10px;">
  <img src="/img/Kavai.jpg" class="img-thumbnail"style="width:20%;margin-right:20px;"align="left">
  <ul class="list-unstyled mt-3 mb-4">
    <li style="background-color:#00FFFF;font-family: Palatino linotype; color:#8B0000">Статус:вышел</li>
    <li style="font-family: cursive;">Год:2014</li>
    <li style="font-family: cursive;">Возрастной рейтинг: R-17+ (насилие и/или нецензурная лексика)</li>
    <li style="background-color:#00FFFF;font-family: Palatino linotype; color:#8B0000">Жанр:Сэйнэн, Комедия, Романтика, Повседневность, Школьная жизнь</li>
    <li style="font-family: cursive;">Режиссер:Мия Сигэюки</li>
    <li style="font-family: cursive;">Тип:Сериал</li>
    <li style="font-family: cursive;">Серии: 12</li>
    <li style="font-family: cursive;">Сезон: 1</li>
    <li style="font-family: cursive;">Студия: Brain's Base</li>
    <li style="font-family: cursive;">Перевод: Многоголосый</li>
    <li style="font-family: cursive;">Озвучка: Anidub, Anilibria</li>
    <li style="background-color:#F08080;font-family: Palatino linotype;">Закончив младшую школу, Кадзунари Уса надеялся на
      спокойную размеренную жизнь старшеклассника. К тому же родители переехали в другое место, сняв сыну отдельное жилье в
      общежитии. Свое жилье, без родителей, о чем еще можно мечтать старшекласснику? Разве что, о тихой, спокойной и красивой
      девушке, это для нашего героя было пределом всех мечтаний.Как-то зайдя в библиотеку, Уса увидел очень милую девушку, читающую
      книгу. Парень сразу почувствовал, она - именно та, с кем он он проживет свою молодость. В тот же день он пошел осматривать свое
      новое жилье. После осмотра стало ясно, что а) дом развалина, б) комнату придется делить с извращенцем по имени Сиросаки. Уса уже
      собирался бежать оттуда, но столкнулся на входе с той самой девушкой, которую видел в библиотеке. Она оказывается тоже здесь живет,
      да к тому же - двоюродная внучка хозяйки. И парень решил остаться, узнать о жильцах получше. Среди них также оказалась Маюми - неудачливая
      в любви офисная леди, поэтому сильно пьющая и студентка Саяка - тоже со своими странными наклонностями. В общем, не жизнь, а сплошной кавай !
</li>
     </ul><br><br><br><br><br><br>
     <div class="player" style="display: block;">
       <a href="/Serii/Kavai1.php"style="text-decoration:none;color:#000000;background-color:#00FA9A;font-family: cursive;white-space: nowrap;">1-серия</a>
       <a href="/Serii/Kavai2.php"style="text-decoration:none;color:#000000;background-color:#00FA9A;font-family: cursive;white-space: nowrap;">2-серия</a>
       <a href="/Serii/Kavai3.php"style="text-decoration:none;color:#000000;background-color:#00FA9A;font-family: cursive;white-space: nowrap;">3-серия</a>
       <a href="/Serii/Kavai4.php"style="text-decoration:none;color:#000000;background-color:#00FA9A;font-family: cursive;white-space: nowrap;">4-серия</a>
       <a href="/Serii/Kavai5.php"style="text-decoration:none;color:#000000;background-color:#00FA9A;font-family: cursive;white-space: nowrap;">5-серия</a>
       <a href="/Serii/Kavai6.php"style="text-decoration:none;color:#000000;background-color:#00FA9A;font-family: cursive;white-space: nowrap;">6-серия</a>
       <a href="/Serii/Kavai7.php"style="text-decoration:none;color:#000000;background-color:#00FA9A;font-family: cursive;white-space: nowrap;">7-серия</a>
       <a href="/Serii/Kavai8.php"style="text-decoration:none;color:#000000;background-color:#00FA9A;font-family: cursive;white-space: nowrap;">8-серия</a>
       <a href="/Serii/Kavai9.php"style="text-decoration:none;color:#000000;background-color:#00FA9A;font-family: cursive;white-space: nowrap;">9-серия</a>
       <a href="/Serii/Kavai10.php"style="text-decoration:none;color:#000000;background-color:#00FA9A;font-family: cursive;white-space: nowrap;">10-серия</a>
       <a href="/Serii/Kavai11.php"style="text-decoration:none;color:#000000;background-color:#00FA9A;font-family: cursive;white-space: nowrap;">11-серия</a>
       <a href="/Serii/Kavai12.php"style="text-decoration:none;color:#000000;background-color:#00FA9A;font-family: cursive;white-space: nowrap;">12-серия</a>
       <iframe class="main-player" scrolling="no" allowfullscreen=""
       src="https://video.sibnet.ru/shell.php?videoid=1648874" frameborder="0" width="100%" height="360"></iframe>
    </div>
  </div>
</div>
<? require "../footer.php"?>
<?php endif;?>
