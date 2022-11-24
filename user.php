<?php
require "db.php";
?>
<?php if (isset($_SESSION['logged_user'])):?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<? require "header.php"?>
<div class="container">
  <div class="text">
    <br><br>
  <div class="d-flex flex-wrap">
    <div class="card mb-4 shadow-sm"style="width:100%;opacity:0.7;color:#000000;background-color:#B22222;font-family: cursive">
      <div class="card-header">
        <h2 class="my-0 font-weight-normal">Пользователи-сайта</h2>
        <a href="poisk.php" style="text-decoration:none;color:#000000;background-color:#00FA9A;font-family: cursive;white-space: nowrap; opacity:0.8">Поиск по сайту</a>
        <button id="btnLike" onclick="randomTheme()"style="color:#000000;background-color:#00FA9A;font-family: cursive;font-size:20px;width:202px;height:50px; margin-top:5px">Смена темы</button>
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
    <style>
        img {
         width: 200px;
         height: 200px;
         border:1px solid #ddd;
         border-radius: 50%;
         box-shadow: 0 2px 5px #aaa;
         margin: 5% auto;
         top: 0; left: 0; bottom: 0; right: 0;
         transition: all 0.3s ease-in-out;
         -moz-transition: all 0.3s ease-in-out;
         -webkit-transition: all 0.3s ease-in-out;
         -o-transition: all 0.3s ease-in-out;
      }
     img:hover {
     border-radius: 3px;
      }
  </style>
        <div class="card mb-4 shadow-sm"style="width:30%">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal" style="font-family: cursive;font-size:40px"><?php echo $_SESSION['logged_user']->login;?></h4>
          </div>
          <div class="card-body">
            <img src="/img/user.jpg">
            <ul>
              <li style="font-family: cursive;font-size:30px">Пользователь сайта fasa_anime</li>
            </ul>
            </div>
        </div>
    </div>
  </div>
<? require "footer.php"?>
<?php else :?>
  <link rel = "stylesheet" href = "/css/styles.css">
<nav>
  <ul class="main">
    <li><a href="/">Главная</a></li>
    <li><a href="/news.html">Новости</a></li>
    <li><a href="">Каталог</a>
      <ul class="drop menu3">
        <li><a href="/catalog.php">Каталог аниме</a></li>
        <li><a href="/anons.php">Анонсы</a></li>
      </ul>
    </li>
    <li><a href="">Сообщество</a>
      <ul class="drop menu4">
        <li><a href="/user.html">Пользователи</a></li>
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
        <h2 class="my-0 font-weight-normal">Пользователи-сайта</h2>
        <h2 class="my-0 font-weight-normal">Авторизуйтесь чтоб увидеть зарегистрированных пользователей</h2>
      </div>
    </div>
    </div>
  </div>
</div>
<? require "footer.php"?>
<?php endif;?>
