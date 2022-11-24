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
  <h4 class="my-0 font-weight-normal"style="color: black; ">Токийский Гуль</h4>
  </div>
  <div class="card-body"style="margin-right:10px;">
    <img src="/img/Tg1.jpg" class="img-thumbnail"style="width:20%;margin-right:20px;"align="left">
    <ul class="list-unstyled mt-3 mb-4">
      <li style="background-color:#00FFFF;font-family: Palatino linotype; color:#8B0000">Статус:вышел</li>
      <li style="font-family: cursive;">Год:2014</li>
      <li style="font-family: cursive;">Возрастной рейтинг: R-17+ (насилие и/или нецензурная лексика)</li>
      <li style="background-color:#00FFFF;font-family: Palatino linotype; color:#8B0000">Жанр:Сэйнэн, Драма, Мистика, Приключения, Ужасы, Экшен, Психология, Сверхъестественное</li>
      <li style="font-family: cursive;">Режиссер:Морита Сюхэй</li>
      <li style="font-family: cursive;">Тип:Сериал</li>
      <li style="font-family: cursive;">Серии: 12</li>
      <li style="font-family: cursive;">Сезон: 1</li>
      <li style="font-family: cursive;">Студия: Studio Pierrot</li>
      <li style="font-family: cursive;">Перевод: Многоголосый</li>
      <li style="font-family: cursive;">Озвучка: Anidub, Anilibria</li>
      <li style="background-color:#F08080;font-family: Palatino linotype;">Студент университета Канеки Кен в результате несчастного случая попадает в больницу,
         где ему по ошибке пересаживают органы одного из гулей - чудовищ, питающихся человеческой плотью.
         Теперь он сам становится одним из них, а для людей превращается в изгоя, подлежащего уничтожению.
         Но сможет он ли стать своим для других гулей? Или теперь в мире для него больше нет места?
         Аниме расскажет о судьбе Канеки и том, какое влияние он окажет на будущее Токио,
         где идет непрерывная война между двумя видами.</li>
       </ul>
       <div class="player" style="display: block; margin-left:120px">
        <iframe src="https://api1571472572.delivembed.cc/embed/movie/2274?season=1&amp;nocontrols=1&amp;episode=1"
         scrolling="no" allowfullscreen="" frameborder="0" width="84%" height="360">
        </iframe>
      </div>
    </div>
    <div class="card-header"style="width:100%;opacity:0.8;color:#000000;background-color:#CD5C5C">
      <h4 class="my-0 font-weight-normal"style="color: black; ">Токийский Гуль</h4>
    </div>
    <div class="card-body"style="margin-right:10px;">
      <img src="/img/Tg2.jpg" class="img-thumbnail"style="width:20%;margin-right:20px;"align="left">
      <ul class="list-unstyled mt-3 mb-4">
        <li style="background-color:#00FFFF;font-family: Palatino linotype; color:#8B0000">Статус:вышел</li>
        <li style="font-family: cursive;">Год:2015</li>
        <li style="font-family: cursive;">Возрастной рейтинг: R-17+ (насилие и/или нецензурная лексика)</li>
        <li style="background-color:#00FFFF;font-family: Palatino linotype; color:#8B0000">Жанр:Сэйнэн, Драма, Мистика, Приключения, Ужасы, Экшен, Психология, Сверхъестественное</li>
        <li style="font-family: cursive;">Режиссер:Морита Сюхэй</li>
        <li style="font-family: cursive;">Тип:Сериал</li>
        <li style="font-family: cursive;">Серии: 12</li>
        <li style="font-family: cursive;">Сезон: 2</li>
        <li style="font-family: cursive;">Студия: Studio Pierrot</li>
        <li style="font-family: cursive;">Перевод: Двухголосый</li>
        <li style="font-family: cursive;">Озвучка: Anidub, Anilibria, Get Smart Group</li>
        <li style="background-color:#F08080;font-family: Palatino linotype;">Продолжение истории про мальчика по имени Канеки-кун, который из-за ряда случайных событий,
          оказался на грани жизни и смерти и был спасен пересадкой органов от одного чудовища, которого
           в аниме именуют Гулем. Таких гулей по всей Японии раскинулось целое множество. Простые люди
           считают их зверскими чудовищами, ведь гули питаются только человеченкой, запивая кофейком.
          Для борьбы с ними была создана целая организация под названием CCG. Она состояла из множества
          обученных следователей, которые разработали систему боя и могли сражаться с гулями.
          Но Канеки будучи получеловеком, полугулем увидел обратную сторону медали. Существовали и "добрые" гули,
          которые не убивали людей и находили себе пропитания мягким способом, например поедая уже умерших людей.
          Даже были такие, которые искрении любили их и не хотели не нужных смертей. В новом сезоне мы глубже
          погрузимся в эту историю. Узнаем больше об организации "Древа Аогири", о том случайно ли стал Канеки
          таким, а так же про легендарного гуля по кличке "Сова".
</li>
         </ul>
      <div class="player" style="display: block;margin-left:120px">
          <iframe src="https://api1571472572.delivembed.cc/embed/movie/2274?season=1&amp;nocontrols=1&amp;episode=1"
           scrolling="no" allowfullscreen="" frameborder="0" width="84%" height="360">
          </iframe>
         </div>
    </div>
      <div class="card-header"style="width:100%;opacity:0.8;color:#000000;background-color:#CD5C5C">
        <h4 class="my-0 font-weight-normal"style="color: black; ">Токийский Гуль: Перерождение</h4>
      </div>
      <div class="card-body"style="margin-right:10px;">
        <img src="/img/Tg4.jpg" class="img-thumbnail"style="width:20%;margin-right:20px;"align="left">
        <ul class="list-unstyled mt-3 mb-4">
          <li style="background-color:#00FFFF;font-family: Palatino linotype; color:#8B0000">Статус:вышел</li>
          <li style="font-family: cursive;">Год:2018</li>
          <li style="font-family: cursive;">Возрастной рейтинг: R-17+ (насилие и/или нецензурная лексика)</li>
          <li style="background-color:#00FFFF;font-family: Palatino linotype; color:#8B0000">Жанр:Сэйнэн, Драма, Мистика, Приключения, Ужасы, Экшен, Психология, Сверхъестественное</li>
          <li style="font-family: cursive;">Режиссер:Ватанабэ Одахиро</li>
          <li style="font-family: cursive;">Тип:Сериал</li>
          <li style="font-family: cursive;">Серии: 12</li>
          <li style="font-family: cursive;">Студия: Studio Pierrot, Pierrot Plus </li>
          <li style="font-family: cursive;">Перевод: Многоголосый</li>
          <li style="font-family: cursive;">Озвучка: 2x2, Anilibria, JAM club</li>
          <li style="background-color:#F08080;font-family: Palatino linotype;">Спустя два года после устроенной карательной операции на кафе «Антейку» исчезает Кен Кенеки,
            но возвращается в качестве Хайсе Сасаки – следователя по гулям первого класса. Он также является
            наставником отряда Куинксов – проблемные подростки, в которых были вживлены клетки гулей: умный
            парень Мицуки Тору, тихий и смертоносный Урике Куки, вспыльчивый, но добродушный Ширазу Гиньши.
            Новичков берут в ряды армии CCG и отправляют на новое задание: полностью уничтожить естественных врагов всего
            человечества, которыми являются параллельно сосуществующие с людьми устрашающие существа, известные всем как «гули».
            Ситуация усложняется ещё и тем, что эти чудовища скрываются в облике обычных людей, продолжая убивать жителей Токио.
            В очередном сражении с гулем по кличке «Змея» у Хайсе Сасаки возникают непонятные картинки в голове, на которых ему
            всё время мерещится беловолосый парень с устрашающим красным глазом. Поймёт ли в итоге Хайсе, что означают эти видения,
            и сможет ли отряд Куинксов окончательно одолеть ненавистных гулей?
</li>
           </ul>
        <div class="player" style="display: block;margin-left:120px">
            <iframe src="https://api1571472572.delivembed.cc/embed/movie/2274?season=1&amp;nocontrols=1&amp;episode=1"
             scrolling="no" allowfullscreen="" frameborder="0" width="84%" height="360">
            </iframe>
           </div>
      </div>
          <div class="card-header"style="width:100%;opacity:0.8;color:#000000;background-color:#CD5C5C">
            <h4 class="my-0 font-weight-normal"style="color: black; ">Токийский Гуль: Перерождение 2 </h4>
          </div>
          <div class="card-body"style="margin-right:10px;">
            <img src="/img/Tg5.jpg" class="img-thumbnail"style="width:20%;margin-right:20px;"align="left">
            <ul class="list-unstyled mt-3 mb-4">
              <li style="background-color:#00FFFF;font-family: Palatino linotype; color:#8B0000">Статус:вышел</li>
              <li style="font-family: cursive;">Год:2018</li>
              <li style="font-family: cursive;">Возрастной рейтинг: R-17+ (насилие и/или нецензурная лексика)</li>
              <li style="background-color:#00FFFF;font-family: Palatino linotype; color:#8B0000">Жанр:Сэйнэн, Драма, Мистика, Приключения, Ужасы, Экшен, Психология, Сверхъестественное</li>
              <li style="font-family: cursive;">Режиссер:Морита Сюхэй</li>
              <li style="font-family: cursive;">Тип:Сериал</li>
              <li style="font-family: cursive;">Серии: 12</li>
              <li style="font-family: cursive;">Студия: Studio Pierrot, Pierrot Plus </li>
              <li style="font-family: cursive;">Перевод: Многоголосый</li>
              <li style="font-family: cursive;">Озвучка: Anilibria, JAM club, SovetRomantica & Akari GROUP, 2x2</li>
              <li style="background-color:#F08080;font-family: Palatino linotype;">Во втором сезоне мы увидим продолжение истории Хайсе Сасаки, который уже повышен до статуса кандидата
                в особый класс и более известен как Чёрный бог смерти CCG. Незадолго до этого он полностью лишился памяти.
                Хайсе даже не догадывается кто он на самом деле и чем занимался в прошлом, но как всем известно, он один из
                самых опаснейших гулей - Кен Канеки. Семья Цукияма уничтожена, а в разуме протагониста прояснилось его прошлое
                и сознанием теперь снова овладел старый добрый Канеки.</li>
               </ul>
            <div class="player" style="display: block;margin-left:120px">
                <iframe src="https://api1571472572.delivembed.cc/embed/movie/2274?season=1&amp;nocontrols=1&amp;episode=1"
                 scrolling="no" allowfullscreen="" frameborder="0" width="84%" height="360">
                </iframe>
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
<div class="d-flex flex-wrap"style="opacity:0.9">
<div class="card mb-4 shadow-sm"style="width: 100%;">
<div class="card-header"style="width:100%;opacity:0.8;color:#000000;background-color:#CD5C5C">
<h4 class="my-0 font-weight-normal"style="color: black; ">Токийский Гуль</h4>
</div>
<div class="card-body"style="margin-right:10px;">
  <img src="/img/Tg1.jpg" class="img-thumbnail"style="width:20%;margin-right:20px;"align="left">
  <ul class="list-unstyled mt-3 mb-4">
    <li style="background-color:#00FFFF;font-family: Palatino linotype; color:#8B0000">Статус:вышел</li>
    <li style="font-family: cursive;">Год:2014</li>
    <li style="font-family: cursive;">Возрастной рейтинг: R-17+ (насилие и/или нецензурная лексика)</li>
    <li style="background-color:#00FFFF;font-family: Palatino linotype; color:#8B0000">Жанр:Сэйнэн, Драма, Мистика, Приключения, Ужасы, Экшен, Психология, Сверхъестественное</li>
    <li style="font-family: cursive;">Режиссер:Морита Сюхэй</li>
    <li style="font-family: cursive;">Тип:Сериал</li>
    <li style="font-family: cursive;">Серии: 12</li>
    <li style="font-family: cursive;">Сезон: 1</li>
    <li style="font-family: cursive;">Студия: Studio Pierrot</li>
    <li style="font-family: cursive;">Перевод: Многоголосый</li>
    <li style="font-family: cursive;">Озвучка: Anidub, Anilibria</li>
    <li style="background-color:#F08080;font-family: Palatino linotype;">Студент университета Канеки Кен в результате несчастного случая попадает в больницу,
       где ему по ошибке пересаживают органы одного из гулей - чудовищ, питающихся человеческой плотью.
       Теперь он сам становится одним из них, а для людей превращается в изгоя, подлежащего уничтожению.
       Но сможет он ли стать своим для других гулей? Или теперь в мире для него больше нет места?
       Аниме расскажет о судьбе Канеки и том, какое влияние он окажет на будущее Токио,
       где идет непрерывная война между двумя видами.</li>
     </ul>
     <div class="player" style="display: block; margin-left:120px">
      <iframe src="https://api1571472572.delivembed.cc/embed/movie/2274?season=1&amp;nocontrols=1&amp;episode=1"
       scrolling="no" allowfullscreen="" frameborder="0" width="84%" height="360">
      </iframe>
    </div>
  </div>
  <div class="card-header"style="width:100%;opacity:0.8;color:#000000;background-color:#CD5C5C">
    <h4 class="my-0 font-weight-normal"style="color: black; ">Токийский Гуль</h4>
  </div>
  <div class="card-body"style="margin-right:10px;">
    <img src="/img/Tg2.jpg" class="img-thumbnail"style="width:20%;margin-right:20px;"align="left">
    <ul class="list-unstyled mt-3 mb-4">
      <li style="background-color:#00FFFF;font-family: Palatino linotype; color:#8B0000">Статус:вышел</li>
      <li style="font-family: cursive;">Год:2015</li>
      <li style="font-family: cursive;">Возрастной рейтинг: R-17+ (насилие и/или нецензурная лексика)</li>
      <li style="background-color:#00FFFF;font-family: Palatino linotype; color:#8B0000">Жанр:Сэйнэн, Драма, Мистика, Приключения, Ужасы, Экшен, Психология, Сверхъестественное</li>
      <li style="font-family: cursive;">Режиссер:Морита Сюхэй</li>
      <li style="font-family: cursive;">Тип:Сериал</li>
      <li style="font-family: cursive;">Серии: 12</li>
      <li style="font-family: cursive;">Сезон: 2</li>
      <li style="font-family: cursive;">Студия: Studio Pierrot</li>
      <li style="font-family: cursive;">Перевод: Двухголосый</li>
      <li style="font-family: cursive;">Озвучка: Anidub, Anilibria, Get Smart Group</li>
      <li style="background-color:#F08080;font-family: Palatino linotype;">Продолжение истории про мальчика по имени Канеки-кун, который из-за ряда случайных событий,
        оказался на грани жизни и смерти и был спасен пересадкой органов от одного чудовища, которого
         в аниме именуют Гулем. Таких гулей по всей Японии раскинулось целое множество. Простые люди
         считают их зверскими чудовищами, ведь гули питаются только человеченкой, запивая кофейком.
        Для борьбы с ними была создана целая организация под названием CCG. Она состояла из множества
        обученных следователей, которые разработали систему боя и могли сражаться с гулями.
        Но Канеки будучи получеловеком, полугулем увидел обратную сторону медали. Существовали и "добрые" гули,
        которые не убивали людей и находили себе пропитания мягким способом, например поедая уже умерших людей.
        Даже были такие, которые искрении любили их и не хотели не нужных смертей. В новом сезоне мы глубже
        погрузимся в эту историю. Узнаем больше об организации "Древа Аогири", о том случайно ли стал Канеки
        таким, а так же про легендарного гуля по кличке "Сова".
</li>
       </ul>
    <div class="player" style="display: block;margin-left:120px">
        <iframe src="https://api1571472572.delivembed.cc/embed/movie/2274?season=1&amp;nocontrols=1&amp;episode=1"
         scrolling="no" allowfullscreen="" frameborder="0" width="84%" height="360">
        </iframe>
       </div>
  </div>
    <div class="card-header"style="width:100%;opacity:0.8;color:#000000;background-color:#CD5C5C">
      <h4 class="my-0 font-weight-normal"style="color: black; ">Токийский Гуль: Перерождение</h4>
    </div>
    <div class="card-body"style="margin-right:10px;">
      <img src="/img/Tg4.jpg" class="img-thumbnail"style="width:20%;margin-right:20px;"align="left">
      <ul class="list-unstyled mt-3 mb-4">
        <li style="background-color:#00FFFF;font-family: Palatino linotype; color:#8B0000">Статус:вышел</li>
        <li style="font-family: cursive;">Год:2018</li>
        <li style="font-family: cursive;">Возрастной рейтинг: R-17+ (насилие и/или нецензурная лексика)</li>
        <li style="background-color:#00FFFF;font-family: Palatino linotype; color:#8B0000">Жанр:Сэйнэн, Драма, Мистика, Приключения, Ужасы, Экшен, Психология, Сверхъестественное</li>
        <li style="font-family: cursive;">Режиссер:Ватанабэ Одахиро</li>
        <li style="font-family: cursive;">Тип:Сериал</li>
        <li style="font-family: cursive;">Серии: 12</li>
        <li style="font-family: cursive;">Студия: Studio Pierrot, Pierrot Plus </li>
        <li style="font-family: cursive;">Перевод: Многоголосый</li>
        <li style="font-family: cursive;">Озвучка: 2x2, Anilibria, JAM club</li>
        <li style="background-color:#F08080;font-family: Palatino linotype;">Спустя два года после устроенной карательной операции на кафе «Антейку» исчезает Кен Кенеки,
          но возвращается в качестве Хайсе Сасаки – следователя по гулям первого класса. Он также является
          наставником отряда Куинксов – проблемные подростки, в которых были вживлены клетки гулей: умный
          парень Мицуки Тору, тихий и смертоносный Урике Куки, вспыльчивый, но добродушный Ширазу Гиньши.
          Новичков берут в ряды армии CCG и отправляют на новое задание: полностью уничтожить естественных врагов всего
          человечества, которыми являются параллельно сосуществующие с людьми устрашающие существа, известные всем как «гули».
          Ситуация усложняется ещё и тем, что эти чудовища скрываются в облике обычных людей, продолжая убивать жителей Токио.
          В очередном сражении с гулем по кличке «Змея» у Хайсе Сасаки возникают непонятные картинки в голове, на которых ему
          всё время мерещится беловолосый парень с устрашающим красным глазом. Поймёт ли в итоге Хайсе, что означают эти видения,
          и сможет ли отряд Куинксов окончательно одолеть ненавистных гулей?
</li>
         </ul>
      <div class="player" style="display: block;margin-left:120px">
          <iframe src="https://api1571472572.delivembed.cc/embed/movie/2274?season=1&amp;nocontrols=1&amp;episode=1"
           scrolling="no" allowfullscreen="" frameborder="0" width="84%" height="360">
          </iframe>
         </div>
    </div>
        <div class="card-header"style="width:100%;opacity:0.8;color:#000000;background-color:#CD5C5C">
          <h4 class="my-0 font-weight-normal"style="color: black; ">Токийский Гуль: Перерождение 2 </h4>
        </div>
        <div class="card-body"style="margin-right:10px;">
          <img src="/img/Tg5.jpg" class="img-thumbnail"style="width:20%;margin-right:20px;"align="left">
          <ul class="list-unstyled mt-3 mb-4">
            <li style="background-color:#00FFFF;font-family: Palatino linotype; color:#8B0000">Статус:вышел</li>
            <li style="font-family: cursive;">Год:2018</li>
            <li style="font-family: cursive;">Возрастной рейтинг: R-17+ (насилие и/или нецензурная лексика)</li>
            <li style="background-color:#00FFFF;font-family: Palatino linotype; color:#8B0000">Жанр:Сэйнэн, Драма, Мистика, Приключения, Ужасы, Экшен, Психология, Сверхъестественное</li>
            <li style="font-family: cursive;">Режиссер:Морита Сюхэй</li>
            <li style="font-family: cursive;">Тип:Сериал</li>
            <li style="font-family: cursive;">Серии: 12</li>
            <li style="font-family: cursive;">Студия: Studio Pierrot, Pierrot Plus </li>
            <li style="font-family: cursive;">Перевод: Многоголосый</li>
            <li style="font-family: cursive;">Озвучка: Anilibria, JAM club, SovetRomantica & Akari GROUP, 2x2</li>
            <li style="background-color:#F08080;font-family: Palatino linotype;">Во втором сезоне мы увидим продолжение истории Хайсе Сасаки, который уже повышен до статуса кандидата
              в особый класс и более известен как Чёрный бог смерти CCG. Незадолго до этого он полностью лишился памяти.
              Хайсе даже не догадывается кто он на самом деле и чем занимался в прошлом, но как всем известно, он один из
              самых опаснейших гулей - Кен Канеки. Семья Цукияма уничтожена, а в разуме протагониста прояснилось его прошлое
              и сознанием теперь снова овладел старый добрый Канеки.</li>
             </ul>
          <div class="player" style="display: block;margin-left:120px">
              <iframe src="https://api1571472572.delivembed.cc/embed/movie/2274?season=1&amp;nocontrols=1&amp;episode=1"
               scrolling="no" allowfullscreen="" frameborder="0" width="84%" height="360">
              </iframe>
             </div>
          </div>
        </div>
</div>
<? require "../footer.php"?>
<?php endif;?>
