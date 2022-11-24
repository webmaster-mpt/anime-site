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
    <h4 class="my-0 font-weight-normal">Первый фильм Наруто:</h4>
    <h4 class="my-0 font-weight-normal">Большой боевик! Книга Искусств Ниндзя Снежной Принцессы!</h4>
  </div>
  <div class="card-body">
    <img src="/img/1.jpg" class="img-thumbnail">
    <ul class="list-unstyled mt-3 mb-4">
      <li style="font-family: cursive;">Статус:вышел</li>
      <li style="font-family: cursive;">Год: 2004</li>
      <li style="font-family: cursive;">Возрастной рейтинг: PG-13 (от 13 лет)</li>
      <li style="font-family: cursive;">Жанр:Сёнэн, Комедия, Приключения, Альтернативная реальность, Экшен, Боевые искусства, Ниндзя Суперспособности</li>
      <li style="font-family: cursive;">Режиссер: Кисимото Масаси</li>
      <li style="font-family: cursive;">Первоисточник: Манга </li>
      <li style="font-family: cursive;">Студия:Studio Pierrot </li>
      <li style="font-family: cursive;">Перевод: Одноголосый</li>
      <li style="font-family: cursive;">Озвучка: Zendos & Shouske & Jerwis & By Mr_zJIou & RainDark & Phantom & Rem & Kin & Fast </li>
      <li style="font-family: cursive;">Фильм начинается с похода в кинотеатр Наруто, Саске и Сакуры, где они смотрели новый фильм про отважную принцессу Фуун. Наруто был настолько впечатлен фильмом, что захотел встретиться с этой прекрасной девушкой при первой же возможности.И его желание вскоре исполнилось... На съемках следующего фильма девушка проносится мимо него на лошади, спасаясь от разбойников.
         Наруто, не веря своему счастью, спасает ее, не понимая, что это была лишь актерская постановка.
         Но по законам жанра, в реальной жизни актеры обычно оказываются совершенно другими людьми... И тут Наруто ждет большое разочарование, особенно когда он узнает, что их команде прийдется сопровождать актрису в страну Снега. Однако, не все так просто в этом фильме, "лжепринцесса без чувств" все таки окажется настоящей принцессой, за которую Наруто будет готов отдать свою жизнь.</li>
    </ul>
    <div class="player" style="display: block;">
        <iframe src="https://api1571475959.delivembed.cc/embed/movie/11213" width="100%" height="360"
         frameborder="0" scrolling="no" allowfullscreen=""></iframe>
       </div>
    </div>
  </div>
    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">Второй фильм Наруто:</h4>
        <h4 class="my-0 font-weight-normal">Большое столкновение! Призрачные руины в недрах земли!</h4>
      </div>
      <div class="card-body">
        <img src="/img/2.jpg" class="img-thumbnail">
        <ul class="list-unstyled mt-3 mb-4">
          <li style="font-family: cursive;">Статус:вышел</li>
          <li style="font-family: cursive;">Год:2005</li>
          <li style="font-family: cursive;">Возрастной рейтинг:PG-13 (от 13 лет)</li>
          <li style="font-family: cursive;">Жанр:Сёнэн, Приключения, Экшен, Ниндзя, Суперспособности </li>
          <li style="font-family: cursive;">Режиссер:Кавасаки Хироцугу</li>
          <li style="font-family: cursive;">Тип:Полнометражный фильм </li>
          <li style="font-family: cursive;">Первоисточник: Манга </li>
          <li style="font-family: cursive;">Студия:Studio Pierrot </li>
          <li style="font-family: cursive;">Перевод: Одноголосый </li>
          <li style="font-family: cursive;">Озвучка: NIKITOS </li>
          <li style="font-family: cursive;">Когда Наруто с командой выполнял миссию по поимке хорька, на них вдруг неожиданно напали неизвестные ниндзя.
            Вскоре он узнаёт о великой силе, которой завладел один человек, после чего Наруто снова слышит о нём,
             потому что тот человек пытается завоевать весь мир. Естественно главный герой попытается остановить его.</li>
        </ul>
        <div class="player" style="display: block;">
            <iframe src="https://api1571475959.delivembed.cc/embed/movie/11214" width="100%"
            height="480" frameborder="0" scrolling="no" allowfullscreen=""></iframe>
          </div>
        </div>
      </div>
      <div class="card mb-4 shadow-sm">
        <div class="card-header">
          <h4 class="my-0 font-weight-normal">Третий фильм Наруто: </h4>
          <h4 class="my-0 font-weight-normal">Большой переполох! Бунт животных на острове Полумесяца!</h4>
        </div>
        <div class="card-body">
          <img src="/img/3.jpg" class="img-thumbnail">
          <ul class="list-unstyled mt-3 mb-4">
            <li style="font-family: cursive;">Статус:вышел</li>
            <li style="font-family: cursive;">Год:2006</li>
            <li style="font-family: cursive;">Возрастной рейтинг:PG-13 (от 13 лет)</li>
            <li style="font-family: cursive;">Жанр:Сёнэн, Преступность, Приключения, Экшен, Ниндзя, Суперспособности</li>
            <li style="font-family: cursive;">Режиссер:Цуру Тосиюки</li>
            <li style="font-family: cursive;">Тип:Полнометражный фильм </li>
            <li style="font-family: cursive;">Первоисточник: Манга </li>
            <li style="font-family: cursive;">Студия:Studio Pierrot </li>
            <li style="font-family: cursive;">Перевод: Одноголосый </li>
            <li style="font-family: cursive;">Озвучка: NIKITOS </li>
            <li style="font-family: cursive;">Команда под руководством Какаши сенсея, в которую входят Наруто, Сакура и Рок Ли получают миссию ранга B.
               Они должны сопровождать принца лунной страны, а также его сына Хикару .
               Но оказывается дома их ждали враги, которые подняли бунт в стране и убили отца принца.
                Наруто клянётся защищать его и противостоять очень сильной команде шиноби.</li>
                <br><br><br>
          </ul>
          <iframe src="https://api1571475959.delivembed.cc/embed/movie/11215" scrolling="no"
           allowfullscreen="" frameborder="0" width="100%" height="480"></iframe>
        </div>
      </div>
      <div class="card mb-4 shadow-sm">
        <div class="card-header">
          <h4 class="my-0 font-weight-normal">Четвертый фильм Наруто: </h4>
          <h4 class="my-0 font-weight-normal">Ураганные Хроники</h4>
        </div>
        <div class="card-body">
          <img src="/img/4.jpg" class="img-thumbnail">
          <ul class="list-unstyled mt-3 mb-4">
            <li style="font-family: cursive;">Статус:вышел</li>
            <li style="font-family: cursive;">Год:2007</li>
            <li style="font-family: cursive;">Возрастной рейтинг:PG-13 (от 13 лет)</li>
            <li style="font-family: cursive;">Жанр:Сёнэн, Экшен, Ниндзя, Суперспособности</li>
            <li style="font-family: cursive;">Режиссер:Камэгаки Хадзимэ</li>
            <li style="font-family: cursive;">Тип:Полнометражный фильм </li>
            <li style="font-family: cursive;">Студия:Studio Pierrot </li>
            <li style="font-family: cursive;">Первоисточник: Манга </li>
            <li style="font-family: cursive;">Перевод: Одноголосый</li>
            <li style="font-family: cursive;">Озвучка: NIKITOS</li>
            <li style="font-family: cursive;">Был освобождён древний демон, и если его не запечатать обратно, он разрушит мир.
               Демон посылает своих приспешников, чтобы убить единственного человека, который способен его запечатать.
               Но до этого в Конохе узнают о демоне и высылают Наруто, Сакуру, Ли и Неджи, чтобы защитить
               Шион – монашку, которая может запечатать демона. Еще она может видеть будущие смерти людей,
               который находятся рядом с ней. Когда Наруто спасает её от демонских приспешников, она видет,
               что Наруто должен скоро умереть. Как же он воспримет этот факт?.</li>
          </ul>
          <iframe src="https://api1571476262.delivembed.cc/embed/movie/11216"
          scrolling="no" allowfullscreen="" frameborder="0" width="100%" height="360">
        </iframe>
        </div>
      </div>
      <div class="card mb-4 shadow-sm">
        <div class="card-header">
          <h4 class="my-0 font-weight-normal">Пятый фильм Наруто: Узы</h4>
        </div>
        <div class="card-body">
          <img src="/img/5.jpg" class="img-thumbnail">
          <ul class="list-unstyled mt-3 mb-4">
            <li style="font-family: cursive;">Статус:вышел</li>
            <li style="font-family: cursive;">Год:2008</li>
            <li style="font-family: cursive;">Возрастной рейтинг:PG-13 (от 13 лет)</li>
            <li style="font-family: cursive;">Жанр:Сёнэн, Экшен, Ниндзя, Суперспособности</li>
            <li style="font-family: cursive;">Режиссер:Камэгаки Хадзимэ</li>
            <li style="font-family: cursive;">Тип:Полнометражный фильм </li>
            <li style="font-family: cursive;">Студия:Studio Pierrot </li>
            <li style="font-family: cursive;">Первоисточник: Манга </li>
            <li style="font-family: cursive;">Перевод: Одноголосый</li>
            <li style="font-family: cursive;">Озвучка: NIKITOS</li>
            <li style="font-family: cursive;">Группа избранных которая начала нападения на Коноху, вызывая массовый хаос.
               Также называющие себя Летающие ниндзя пришли с крылато-механическими устройствами для бомбардировки.
               Остальные подробности и посмотреть онлайн фильм Наруто 5 можете в полной новости...
               Некий до селе неизвестный мальчик приходит информировать Коноху, что его деревня в наглую подверглась нападению,
               и он разыскивает своего Учителя, который в этот момент должен находится в Конохе и ищет кого-нибудь в помощь по спасению его деревни.
               Всеми известная команда из 3ех человек, состоящая как правило из звездного мальчика Наруто, девушки Сакуры и Хинаты, отправляется, чтобы помочь всей деревни.
               Они также сопровождают Амару - мальчика и Шинноо - его Учителя, обратно в деревню, но на пути им встаю летающие ниндзя.</li>
          </ul>
          <iframe src="https://api1571475652.delivembed.cc/embed/movie/11217" scrolling="no" allowfullscreen="" frameborder="0"
           width="100%" height="360">
          </iframe>
        </div>
      </div>
      <div class="card mb-4 shadow-sm">
        <div class="card-header">
          <h4 class="my-0 font-weight-normal">Шестой фильм Наруто:</h4>
          <h4 class="my-0 font-weight-normal">Наследники Воли Огня</h4>
        </div>
        <div class="card-body">
          <img src="/img/6.jpg" class="img-thumbnail">
          <ul class="list-unstyled mt-3 mb-4">
            <li style="font-family: cursive;">Статус:вышел</li>
            <li style="font-family: cursive;">Год:2009</li>
            <li style="font-family: cursive;">Возрастной рейтинг:PG-13 (от 13 лет)</li>
            <li style="font-family: cursive;">Жанр:Сёнэн, Экшен, Ниндзя, Суперспособности</li>
            <li style="font-family: cursive;">Режиссер:Мурата Масахико</li>
            <li style="font-family: cursive;">Тип:Полнометражный фильм </li>
            <li style="font-family: cursive;">Студия:Studio Pierrot </li>
            <li style="font-family: cursive;">Первоисточник: Манга </li>
            <li style="font-family: cursive;">Перевод: Одноголосый</li>
            <li style="font-family: cursive;">Озвучка: Shachiburi</li>
            <li style="font-family: cursive;">Седьмой полнометражный фильм о Наруто или четвертый фильм Naruto Shippuuden.
               На нашего всеми любимого Наруто возложена миссия захватить Мукаде (кто не помнит кто такой Мукаде напомню.
               Мукаде был одним из шпионов Сасори) пропавшего без вести.
               Наруто Удзумаки отправляется к руинам долины Оурен и находит там Мукаде.
               Цель Мукаде - найти источник некой силы, что дремлет в этих руинах.
               Мукаде пытается воспользоваться этой силой и по не осторожности мощный луч света охватывает
               Наруто и отправляет его в прошлое, на 20 лет назад. Когда Наруто просыпается, он встречает
               четвертого Хокаге Минато Намиказе!</li>
          </ul>
          <iframe src="https://api1571475652.delivembed.cc/embed/movie/11218" scrolling="no" allowfullscreen=""
          frameborder="0" width="100%" height="360">
        </iframe>
        </div>
      </div>
      <div class="card mb-4 shadow-sm">
        <div class="card-header">
          <h4 class="my-0 font-weight-normal">Седьмой фильм Наруто:</h4>
          <h4 class="my-0 font-weight-normal">Потерянная Башня</h4>
        </div>
        <div class="card-body">
          <img src="/img/7.jpg" class="img-thumbnail">
          <ul class="list-unstyled mt-3 mb-4">
            <li style="font-family: cursive;">Статус:вышел</li>
            <li style="font-family: cursive;">Год:2010</li>
            <li style="font-family: cursive;">Возрастной рейтинг:PG-13 (от 13 лет)</li>
            <li style="font-family: cursive;">Жанр:Сёнэн, Комедия, Путешествия во времени, Экшен, Ниндзя, Суперспособности</li>
            <li style="font-family: cursive;">Режиссер:Мурата Масахико</li>
            <li style="font-family: cursive;">Тип:Полнометражный фильм </li>
            <li style="font-family: cursive;">Студия:Studio Pierrot </li>
            <li style="font-family: cursive;">Первоисточник: Манга </li>
            <li style="font-family: cursive;">Перевод: Одноголосый</li>
            <li style="font-family: cursive;">Озвучка: Rain.Death</li>
            <li style="font-family: cursive;">Седьмой полнометражный фильм о Наруто или четвертый фильм Naruto Shippuuden.
              На нашего всеми любимого Наруто возложена миссия захватить Мукаде (кто не помнит кто такой Мукаде напомню.
              Мукаде был одним из шпионов Сасори) пропавшего без вести. Наруто Удзумаки отправляется к руинам долины Оурен и находит там Мукаде.
              Цель Мукаде - найти источник некой силы, что дремлет в этих руинах. Мукаде пытается воспользоваться этой силой и по не осторожности
              мощный луч света охватывает Наруто и отправляет его в прошлое, на 20 лет назад. Когда Наруто просыпается, он встречает четвертого
              Хокаге Минато Намиказе!</li>
          </ul>
          <iframe src="https://api1571475652.delivembed.cc/embed/movie/11219"
           scrolling="no" allowfullscreen="" frameborder="0" width="100%" height="360"></iframe>
        </div>
      </div>
      <div class="card mb-4 shadow-sm">
        <div class="card-header">
          <h4 class="my-0 font-weight-normal">Восьмой фильм Наруто: </h4>
          <h4 class="my-0 font-weight-normal">Кровавая Тюрьма</h4>
        </div>
        <div class="card-body">
          <img src="/img/8.jpg" class="img-thumbnail">
          <ul class="list-unstyled mt-3 mb-4">
            <li style="font-family: cursive;">Статус:вышел</li>
            <li style="font-family: cursive;">Год:2011</li>
            <li style="font-family: cursive;">Возрастной рейтинг:PG-13 (от 13 лет)</li>
            <li style="font-family: cursive;">Жанр:Сёнэн, Ниндзя, Суперспособности</li>
            <li style="font-family: cursive;">Режиссер:Мурата Масахико</li>
            <li style="font-family: cursive;">Тип:Полнометражный фильм </li>
            <li style="font-family: cursive;">Студия:Studio Pierrot </li>
            <li style="font-family: cursive;">Первоисточник: Манга </li>
            <li style="font-family: cursive;">Перевод: Двухголосый</li>
            <li style="font-family: cursive;">Озвучка: Inspector_Gadjet & Tinko</li>
            <li style="font-family: cursive;">Удзумаки Наруто обвиняется в покушении на Райкаге и убийстве нескольких Джонинов из Кири- и Ивагакуре.
               Он попадает в тюрьму Хозукиджо, так же известную как "Кровавая тюрьма".
               Вскоре он понимает, что хозяин тюрьмы, Муи, крадет Чакру заключенных с помощью специальной техники и что его
               посадили в тюрьму для того чтобы из него высасывали чакру и пытается сбежать. Позже выясняется.
               Что Муи подставил Наруто, чтобы использовать его чакру для открытия ящика, исполняющего
               любые желания, и с его помощью воскресить своего погибшего сына Муку.</li>
          </ul>
        <iframe src="https://video.sibnet.ru/shell.php?videoid=3191339"
        scrolling="no" allowfullscreen="" frameborder="0" width="100%" height="360"></iframe>
        </div>
      </div>
      <div class="card mb-4 shadow-sm">
        <div class="card-header">
          <h4 class="my-0 font-weight-normal">Девятый фильм Наруто:</h4>
          <h4 class="my-0 font-weight-normal">Путь Ниндзя</h4>
        </div>
        <div class="card-body">
          <img src="/img/9.jpg" class="img-thumbnail">
          <ul class="list-unstyled mt-3 mb-4">
            <li style="font-family: cursive;">Статус:вышел</li>
            <li style="font-family: cursive;">Год:2012</li>
            <li style="font-family: cursive;">Возрастной рейтинг:PG-13 (от 13 лет)</li>
            <li style="font-family: cursive;">Жанр:Сёнэн, Параллельные миры, Экшен, Ниндзя</li>
            <li style="font-family: cursive;">Режиссер:Датэ Хаято</li>
            <li style="font-family: cursive;">Тип:Полнометражный фильм </li>
            <li style="font-family: cursive;">Студия:Studio Pierrot </li>
            <li style="font-family: cursive;">Первоисточник: Манга </li>
            <li style="font-family: cursive;">Перевод: Многоголосый</li>
            <li style="font-family: cursive;">Человек в маске, представленный зрителю как Мадара, решает завладеть силой девятихвостого, для чего
              нападает на Наруто и Сакуру, и с помощью силы глаз использует технику «Цукиёми», которая погружает наших
              героев в параллельную реальность. Здесь всё наоборот, родители Наруто живы, Сакура героиня деревни, Саске никуда не уходил,
               Акацки защищают Коноху, и всё кажется идеально. Вот только тот ли это мир, который хочет защитить Наруто, его ли это жизнь?
                С помощью Сакуры, наш герой должен найти ответ на эти вопросы и разобраться с человеком в маске.</li><br><br><br>
          </ul>
          <iframe src="https://api1571475652.delivembed.cc/embed/movie/11221"
          scrolling="no" allowfullscreen="" frameborder="0" width="100%" height="360">
        </iframe>
        </div>
      </div>
      <div class="card mb-4 shadow-sm">
        <div class="card-header">
          <h4 class="my-0 font-weight-normal">Наруто: Последний фильм</h4>
        </div>
        <div class="card-body">
          <img src="/img/10.jpg" class="img-thumbnail">
          <ul class="list-unstyled mt-3 mb-4">
            <li style="font-family: cursive;">Статус:вышел</li>
            <li style="font-family: cursive;">Год:2014</li>
            <li style="font-family: cursive;">Возрастной рейтинг:PG-13 (от 13 лет)</li>
            <li style="font-family: cursive;">Жанр:Сёнэн, Приключения, Романтика, Фэнтэзи, Суперспособности</li>
            <li style="font-family: cursive;">Режиссер:Кобаяси Цунэо</li>
            <li style="font-family: cursive;">Тип:Полнометражный фильм </li>
            <li style="font-family: cursive;">Студия:Studio Pierrot </li>
            <li style="font-family: cursive;">Первоисточник: Манга </li>
            <li style="font-family: cursive;">Перевод: Полное дублирование</li>
            <li style="font-family: cursive;">Маленькая Ханаби похищена инопланетным злодеем, который вдобавок хочет уничтожить Землю.
               Наруто просто обязан спасти младшую сестру Хинаты — девушки, в которую он влюблён.
              Но сможет ли легендарный ниндзя победить самого мощного врага, если перед битвой он потеряет свои суперспособности? </li>
          </ul>
          <iframe src="https://api1571474930.delivembed.cc/embed/movie/11222" scrolling="no"
          allowfullscreen="" frameborder="0" width="100%" height="360">
        </iframe>
        </div>
      </div>
      <div class="card mb-4 shadow-sm">
        <div class="card-header">
          <h4 class="my-0 font-weight-normal">Наруто: Весна юности Рока Ли </h4>
        </div>
        <div class="card-body">
          <img src="/img/11.jpg" class="img-thumbnail">
          <ul class="list-unstyled mt-3 mb-4">
            <li style="font-family: cursive;">Статус:вышел</li>
            <li style="font-family: cursive;">Год:2012</li>
            <li style="font-family: cursive;">Возрастной рейтинг:PG-13 (от 13 лет)</li>
            <li style="font-family: cursive;">Жанр:Комедия, Пародия, Экшен</li>
            <li style="font-family: cursive;">Режиссер:Масахико Мурата</li>
            <li style="font-family: cursive;">Тип:Сериал</li>
            <li style="font-family: cursive;">Серии:51</li>
            <li style="font-family: cursive;">Студия:Studio Pierrot </li>
            <li style="font-family: cursive;">Первоисточник: Манга </li>
            <li style="font-family: cursive;">Перевод: Одноголосый</li>
            <li style="font-family: cursive;">Озвучка: Shiza Project</li>
            <li style="font-family: cursive;">Добро пожаловать в Деревню Скрытого Листа! Деревня, где живет звезда сериала «Наруто», Наруто Узумаки.
                Каждый день сильные и бесстрашные ниндзя выполняют миссии и учатся, чтобы отточить свои навыки.
                Наш главный герой — один из этих ниндзя... но это не Наруто! Это синоби, который не может использовать ниндзюцу — Рок Ли!
                Несмотря на это, у Ли есть мечта: он упорно тренируется каждый день, чтобы усовершенствовать свои боевые навыки и стать великолепным ниндзя!
                Под вспыльчивой опекой своего учителя, Майто Гая, он работает рядом со своими товарищами по команде — Тэн-Тэн и Нэджи Хюгой.
                Наблюдать за тренировками и участвовать в миссиях вместе с Рок Ли — это и есть приключения!</li>
          </ul>
          <iframe src="https://video.sibnet.ru/shell.php?videoid=559204"
          scrolling="no" allowfullscreen="" frameborder="0" width="100%" height="360"></iframe>
        </div>
      </div>
      <div class="card mb-4 shadow-sm">
        <div class="card-header">
          <h4 class="my-0 font-weight-normal">Наруто[TV-1] </h4>
        </div>
        <div class="card-body">
          <img src="/img/12.jpg" class="img-thumbnail">
          <ul class="list-unstyled mt-3 mb-4">
            <li style="font-family: cursive;">Статус:вышел</li>
            <li style="font-family: cursive;">Год:2002</li>
            <li style="font-family: cursive;">Возрастной рейтинг:PG-13 (от 13 лет)</li>
            <li style="font-family: cursive;">Жанр:Сёнэн, Комедия, Убийцы, Приключения, Экшен, Боевые искусства, Ниндзя Суперспособности, Гендерная интрига</li>
            <li style="font-family: cursive;">Режиссер:Датэ Хаято</li>
            <li style="font-family: cursive;">Тип:Сериал</li>
            <li style="font-family: cursive;">Серии:220</li>
            <li style="font-family: cursive;">Студия:Studio Pierrot </li>
            <li style="font-family: cursive;">Первоисточник: Манга </li>
            <li style="font-family: cursive;">Перевод: Одноголосый</li>
            <li style="font-family: cursive;">Озвучка: NIKITOS</li>
          </ul>
          <iframe src="https://api1571473725.delivembed.cc/embed/movie/11229?season=1&amp;nocontrols=1&amp;episode=1"
          scrolling="no" allowfullscreen="" frameborder="0" width="100%" height="360">
        </iframe>
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
  <h4 class="my-0 font-weight-normal">Первый фильм Наруто:</h4>
  <h4 class="my-0 font-weight-normal">Большой боевик! Книга Искусств Ниндзя Снежной Принцессы!</h4>
</div>
<div class="card-body">
  <img src="/img/1.jpg" class="img-thumbnail">
  <ul class="list-unstyled mt-3 mb-4">
    <li style="font-family: cursive;">Статус:вышел</li>
    <li style="font-family: cursive;">Год: 2004</li>
    <li style="font-family: cursive;">Возрастной рейтинг: PG-13 (от 13 лет)</li>
    <li style="font-family: cursive;">Жанр:Сёнэн, Комедия, Приключения, Альтернативная реальность, Экшен, Боевые искусства, Ниндзя Суперспособности</li>
    <li style="font-family: cursive;">Режиссер: Кисимото Масаси</li>
    <li style="font-family: cursive;">Первоисточник: Манга </li>
    <li style="font-family: cursive;">Студия:Studio Pierrot </li>
    <li style="font-family: cursive;">Перевод: Одноголосый</li>
    <li style="font-family: cursive;">Озвучка: Zendos & Shouske & Jerwis & By Mr_zJIou & RainDark & Phantom & Rem & Kin & Fast </li>
    <li style="font-family: cursive;">Фильм начинается с похода в кинотеатр Наруто, Саске и Сакуры, где они смотрели новый фильм про отважную принцессу Фуун. Наруто был настолько впечатлен фильмом, что захотел встретиться с этой прекрасной девушкой при первой же возможности.И его желание вскоре исполнилось... На съемках следующего фильма девушка проносится мимо него на лошади, спасаясь от разбойников.
       Наруто, не веря своему счастью, спасает ее, не понимая, что это была лишь актерская постановка.
       Но по законам жанра, в реальной жизни актеры обычно оказываются совершенно другими людьми... И тут Наруто ждет большое разочарование, особенно когда он узнает, что их команде прийдется сопровождать актрису в страну Снега. Однако, не все так просто в этом фильме, "лжепринцесса без чувств" все таки окажется настоящей принцессой, за которую Наруто будет готов отдать свою жизнь.</li>
  </ul>
  <div class="player" style="display: block;">
      <iframe src="https://api1571475959.delivembed.cc/embed/movie/11213" width="100%" height="360"
       frameborder="0" scrolling="no" allowfullscreen=""></iframe>
     </div>
  </div>
</div>
  <div class="card mb-4 shadow-sm">
    <div class="card-header">
      <h4 class="my-0 font-weight-normal">Второй фильм Наруто:</h4>
      <h4 class="my-0 font-weight-normal">Большое столкновение! Призрачные руины в недрах земли!</h4>
    </div>
    <div class="card-body">
      <img src="/img/2.jpg" class="img-thumbnail">
      <ul class="list-unstyled mt-3 mb-4">
        <li style="font-family: cursive;">Статус:вышел</li>
        <li style="font-family: cursive;">Год:2005</li>
        <li style="font-family: cursive;">Возрастной рейтинг:PG-13 (от 13 лет)</li>
        <li style="font-family: cursive;">Жанр:Сёнэн, Приключения, Экшен, Ниндзя, Суперспособности </li>
        <li style="font-family: cursive;">Режиссер:Кавасаки Хироцугу</li>
        <li style="font-family: cursive;">Тип:Полнометражный фильм </li>
        <li style="font-family: cursive;">Первоисточник: Манга </li>
        <li style="font-family: cursive;">Студия:Studio Pierrot </li>
        <li style="font-family: cursive;">Перевод: Одноголосый </li>
        <li style="font-family: cursive;">Озвучка: NIKITOS </li>
        <li style="font-family: cursive;">Когда Наруто с командой выполнял миссию по поимке хорька, на них вдруг неожиданно напали неизвестные ниндзя.
          Вскоре он узнаёт о великой силе, которой завладел один человек, после чего Наруто снова слышит о нём,
           потому что тот человек пытается завоевать весь мир. Естественно главный герой попытается остановить его.</li>
      </ul>
      <div class="player" style="display: block;">
          <iframe src="https://api1571475959.delivembed.cc/embed/movie/11214" width="100%"
          height="480" frameborder="0" scrolling="no" allowfullscreen=""></iframe>
        </div>
      </div>
    </div>
    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">Третий фильм Наруто: </h4>
        <h4 class="my-0 font-weight-normal">Большой переполох! Бунт животных на острове Полумесяца!</h4>
      </div>
      <div class="card-body">
        <img src="/img/3.jpg" class="img-thumbnail">
        <ul class="list-unstyled mt-3 mb-4">
          <li style="font-family: cursive;">Статус:вышел</li>
          <li style="font-family: cursive;">Год:2006</li>
          <li style="font-family: cursive;">Возрастной рейтинг:PG-13 (от 13 лет)</li>
          <li style="font-family: cursive;">Жанр:Сёнэн, Преступность, Приключения, Экшен, Ниндзя, Суперспособности</li>
          <li style="font-family: cursive;">Режиссер:Цуру Тосиюки</li>
          <li style="font-family: cursive;">Тип:Полнометражный фильм </li>
          <li style="font-family: cursive;">Первоисточник: Манга </li>
          <li style="font-family: cursive;">Студия:Studio Pierrot </li>
          <li style="font-family: cursive;">Перевод: Одноголосый </li>
          <li style="font-family: cursive;">Озвучка: NIKITOS </li>
          <li style="font-family: cursive;">Команда под руководством Какаши сенсея, в которую входят Наруто, Сакура и Рок Ли получают миссию ранга B.
             Они должны сопровождать принца лунной страны, а также его сына Хикару .
             Но оказывается дома их ждали враги, которые подняли бунт в стране и убили отца принца.
              Наруто клянётся защищать его и противостоять очень сильной команде шиноби.</li>
              <br><br><br>
        </ul>
        <iframe src="https://api1571475959.delivembed.cc/embed/movie/11215" scrolling="no"
         allowfullscreen="" frameborder="0" width="100%" height="480"></iframe>
      </div>
    </div>
    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">Четвертый фильм Наруто: </h4>
        <h4 class="my-0 font-weight-normal">Ураганные Хроники</h4>
      </div>
      <div class="card-body">
        <img src="/img/4.jpg" class="img-thumbnail">
        <ul class="list-unstyled mt-3 mb-4">
          <li style="font-family: cursive;">Статус:вышел</li>
          <li style="font-family: cursive;">Год:2007</li>
          <li style="font-family: cursive;">Возрастной рейтинг:PG-13 (от 13 лет)</li>
          <li style="font-family: cursive;">Жанр:Сёнэн, Экшен, Ниндзя, Суперспособности</li>
          <li style="font-family: cursive;">Режиссер:Камэгаки Хадзимэ</li>
          <li style="font-family: cursive;">Тип:Полнометражный фильм </li>
          <li style="font-family: cursive;">Студия:Studio Pierrot </li>
          <li style="font-family: cursive;">Первоисточник: Манга </li>
          <li style="font-family: cursive;">Перевод: Одноголосый</li>
          <li style="font-family: cursive;">Озвучка: NIKITOS</li>
          <li style="font-family: cursive;">Был освобождён древний демон, и если его не запечатать обратно, он разрушит мир.
             Демон посылает своих приспешников, чтобы убить единственного человека, который способен его запечатать.
             Но до этого в Конохе узнают о демоне и высылают Наруто, Сакуру, Ли и Неджи, чтобы защитить
             Шион – монашку, которая может запечатать демона. Еще она может видеть будущие смерти людей,
             который находятся рядом с ней. Когда Наруто спасает её от демонских приспешников, она видет,
             что Наруто должен скоро умереть. Как же он воспримет этот факт?.</li>
        </ul>
        <iframe src="https://api1571476262.delivembed.cc/embed/movie/11216"
        scrolling="no" allowfullscreen="" frameborder="0" width="100%" height="360">
      </iframe>
      </div>
    </div>
    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">Пятый фильм Наруто: Узы</h4>
      </div>
      <div class="card-body">
        <img src="/img/5.jpg" class="img-thumbnail">
        <ul class="list-unstyled mt-3 mb-4">
          <li style="font-family: cursive;">Статус:вышел</li>
          <li style="font-family: cursive;">Год:2008</li>
          <li style="font-family: cursive;">Возрастной рейтинг:PG-13 (от 13 лет)</li>
          <li style="font-family: cursive;">Жанр:Сёнэн, Экшен, Ниндзя, Суперспособности</li>
          <li style="font-family: cursive;">Режиссер:Камэгаки Хадзимэ</li>
          <li style="font-family: cursive;">Тип:Полнометражный фильм </li>
          <li style="font-family: cursive;">Студия:Studio Pierrot </li>
          <li style="font-family: cursive;">Первоисточник: Манга </li>
          <li style="font-family: cursive;">Перевод: Одноголосый</li>
          <li style="font-family: cursive;">Озвучка: NIKITOS</li>
          <li style="font-family: cursive;">Группа избранных которая начала нападения на Коноху, вызывая массовый хаос.
             Также называющие себя Летающие ниндзя пришли с крылато-механическими устройствами для бомбардировки.
             Остальные подробности и посмотреть онлайн фильм Наруто 5 можете в полной новости...
             Некий до селе неизвестный мальчик приходит информировать Коноху, что его деревня в наглую подверглась нападению,
             и он разыскивает своего Учителя, который в этот момент должен находится в Конохе и ищет кого-нибудь в помощь по спасению его деревни.
             Всеми известная команда из 3ех человек, состоящая как правило из звездного мальчика Наруто, девушки Сакуры и Хинаты, отправляется, чтобы помочь всей деревни.
             Они также сопровождают Амару - мальчика и Шинноо - его Учителя, обратно в деревню, но на пути им встаю летающие ниндзя.</li>
        </ul>
        <iframe src="https://api1571475652.delivembed.cc/embed/movie/11217" scrolling="no" allowfullscreen="" frameborder="0"
         width="100%" height="360">
        </iframe>
      </div>
    </div>
    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">Шестой фильм Наруто:</h4>
        <h4 class="my-0 font-weight-normal">Наследники Воли Огня</h4>
      </div>
      <div class="card-body">
        <img src="/img/6.jpg" class="img-thumbnail">
        <ul class="list-unstyled mt-3 mb-4">
          <li style="font-family: cursive;">Статус:вышел</li>
          <li style="font-family: cursive;">Год:2009</li>
          <li style="font-family: cursive;">Возрастной рейтинг:PG-13 (от 13 лет)</li>
          <li style="font-family: cursive;">Жанр:Сёнэн, Экшен, Ниндзя, Суперспособности</li>
          <li style="font-family: cursive;">Режиссер:Мурата Масахико</li>
          <li style="font-family: cursive;">Тип:Полнометражный фильм </li>
          <li style="font-family: cursive;">Студия:Studio Pierrot </li>
          <li style="font-family: cursive;">Первоисточник: Манга </li>
          <li style="font-family: cursive;">Перевод: Одноголосый</li>
          <li style="font-family: cursive;">Озвучка: Shachiburi</li>
          <li style="font-family: cursive;">Седьмой полнометражный фильм о Наруто или четвертый фильм Naruto Shippuuden.
             На нашего всеми любимого Наруто возложена миссия захватить Мукаде (кто не помнит кто такой Мукаде напомню.
             Мукаде был одним из шпионов Сасори) пропавшего без вести.
             Наруто Удзумаки отправляется к руинам долины Оурен и находит там Мукаде.
             Цель Мукаде - найти источник некой силы, что дремлет в этих руинах.
             Мукаде пытается воспользоваться этой силой и по не осторожности мощный луч света охватывает
             Наруто и отправляет его в прошлое, на 20 лет назад. Когда Наруто просыпается, он встречает
             четвертого Хокаге Минато Намиказе!</li>
        </ul>
        <iframe src="https://api1571475652.delivembed.cc/embed/movie/11218" scrolling="no" allowfullscreen=""
        frameborder="0" width="100%" height="360">
      </iframe>
      </div>
    </div>
    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">Седьмой фильм Наруто:</h4>
        <h4 class="my-0 font-weight-normal">Потерянная Башня</h4>
      </div>
      <div class="card-body">
        <img src="/img/7.jpg" class="img-thumbnail">
        <ul class="list-unstyled mt-3 mb-4">
          <li style="font-family: cursive;">Статус:вышел</li>
          <li style="font-family: cursive;">Год:2010</li>
          <li style="font-family: cursive;">Возрастной рейтинг:PG-13 (от 13 лет)</li>
          <li style="font-family: cursive;">Жанр:Сёнэн, Комедия, Путешествия во времени, Экшен, Ниндзя, Суперспособности</li>
          <li style="font-family: cursive;">Режиссер:Мурата Масахико</li>
          <li style="font-family: cursive;">Тип:Полнометражный фильм </li>
          <li style="font-family: cursive;">Студия:Studio Pierrot </li>
          <li style="font-family: cursive;">Первоисточник: Манга </li>
          <li style="font-family: cursive;">Перевод: Одноголосый</li>
          <li style="font-family: cursive;">Озвучка: Rain.Death</li>
          <li style="font-family: cursive;">Седьмой полнометражный фильм о Наруто или четвертый фильм Naruto Shippuuden.
            На нашего всеми любимого Наруто возложена миссия захватить Мукаде (кто не помнит кто такой Мукаде напомню.
            Мукаде был одним из шпионов Сасори) пропавшего без вести. Наруто Удзумаки отправляется к руинам долины Оурен и находит там Мукаде.
            Цель Мукаде - найти источник некой силы, что дремлет в этих руинах. Мукаде пытается воспользоваться этой силой и по не осторожности
            мощный луч света охватывает Наруто и отправляет его в прошлое, на 20 лет назад. Когда Наруто просыпается, он встречает четвертого
            Хокаге Минато Намиказе!</li>
        </ul>
        <iframe src="https://api1571475652.delivembed.cc/embed/movie/11219"
         scrolling="no" allowfullscreen="" frameborder="0" width="100%" height="360"></iframe>
      </div>
    </div>
    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">Восьмой фильм Наруто: </h4>
        <h4 class="my-0 font-weight-normal">Кровавая Тюрьма</h4>
      </div>
      <div class="card-body">
        <img src="/img/8.jpg" class="img-thumbnail">
        <ul class="list-unstyled mt-3 mb-4">
          <li style="font-family: cursive;">Статус:вышел</li>
          <li style="font-family: cursive;">Год:2011</li>
          <li style="font-family: cursive;">Возрастной рейтинг:PG-13 (от 13 лет)</li>
          <li style="font-family: cursive;">Жанр:Сёнэн, Ниндзя, Суперспособности</li>
          <li style="font-family: cursive;">Режиссер:Мурата Масахико</li>
          <li style="font-family: cursive;">Тип:Полнометражный фильм </li>
          <li style="font-family: cursive;">Студия:Studio Pierrot </li>
          <li style="font-family: cursive;">Первоисточник: Манга </li>
          <li style="font-family: cursive;">Перевод: Двухголосый</li>
          <li style="font-family: cursive;">Озвучка: Inspector_Gadjet & Tinko</li>
          <li style="font-family: cursive;">Удзумаки Наруто обвиняется в покушении на Райкаге и убийстве нескольких Джонинов из Кири- и Ивагакуре.
             Он попадает в тюрьму Хозукиджо, так же известную как "Кровавая тюрьма".
             Вскоре он понимает, что хозяин тюрьмы, Муи, крадет Чакру заключенных с помощью специальной техники и что его
             посадили в тюрьму для того чтобы из него высасывали чакру и пытается сбежать. Позже выясняется.
             Что Муи подставил Наруто, чтобы использовать его чакру для открытия ящика, исполняющего
             любые желания, и с его помощью воскресить своего погибшего сына Муку.</li>
        </ul>
      <iframe src="https://video.sibnet.ru/shell.php?videoid=3191339"
      scrolling="no" allowfullscreen="" frameborder="0" width="100%" height="360"></iframe>
      </div>
    </div>
    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">Девятый фильм Наруто:</h4>
        <h4 class="my-0 font-weight-normal">Путь Ниндзя</h4>
      </div>
      <div class="card-body">
        <img src="/img/9.jpg" class="img-thumbnail">
        <ul class="list-unstyled mt-3 mb-4">
          <li style="font-family: cursive;">Статус:вышел</li>
          <li style="font-family: cursive;">Год:2012</li>
          <li style="font-family: cursive;">Возрастной рейтинг:PG-13 (от 13 лет)</li>
          <li style="font-family: cursive;">Жанр:Сёнэн, Параллельные миры, Экшен, Ниндзя</li>
          <li style="font-family: cursive;">Режиссер:Датэ Хаято</li>
          <li style="font-family: cursive;">Тип:Полнометражный фильм </li>
          <li style="font-family: cursive;">Студия:Studio Pierrot </li>
          <li style="font-family: cursive;">Первоисточник: Манга </li>
          <li style="font-family: cursive;">Перевод: Многоголосый</li>
          <li style="font-family: cursive;">Человек в маске, представленный зрителю как Мадара, решает завладеть силой девятихвостого, для чего
            нападает на Наруто и Сакуру, и с помощью силы глаз использует технику «Цукиёми», которая погружает наших
            героев в параллельную реальность. Здесь всё наоборот, родители Наруто живы, Сакура героиня деревни, Саске никуда не уходил,
             Акацки защищают Коноху, и всё кажется идеально. Вот только тот ли это мир, который хочет защитить Наруто, его ли это жизнь?
              С помощью Сакуры, наш герой должен найти ответ на эти вопросы и разобраться с человеком в маске.</li><br><br><br>
        </ul>
        <iframe src="https://api1571475652.delivembed.cc/embed/movie/11221"
        scrolling="no" allowfullscreen="" frameborder="0" width="100%" height="360">
      </iframe>
      </div>
    </div>
    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">Наруто: Последний фильм</h4>
      </div>
      <div class="card-body">
        <img src="/img/10.jpg" class="img-thumbnail">
        <ul class="list-unstyled mt-3 mb-4">
          <li style="font-family: cursive;">Статус:вышел</li>
          <li style="font-family: cursive;">Год:2014</li>
          <li style="font-family: cursive;">Возрастной рейтинг:PG-13 (от 13 лет)</li>
          <li style="font-family: cursive;">Жанр:Сёнэн, Приключения, Романтика, Фэнтэзи, Суперспособности</li>
          <li style="font-family: cursive;">Режиссер:Кобаяси Цунэо</li>
          <li style="font-family: cursive;">Тип:Полнометражный фильм </li>
          <li style="font-family: cursive;">Студия:Studio Pierrot </li>
          <li style="font-family: cursive;">Первоисточник: Манга </li>
          <li style="font-family: cursive;">Перевод: Полное дублирование</li>
          <li style="font-family: cursive;">Маленькая Ханаби похищена инопланетным злодеем, который вдобавок хочет уничтожить Землю.
             Наруто просто обязан спасти младшую сестру Хинаты — девушки, в которую он влюблён.
            Но сможет ли легендарный ниндзя победить самого мощного врага, если перед битвой он потеряет свои суперспособности? </li>
        </ul>
        <iframe src="https://api1571474930.delivembed.cc/embed/movie/11222" scrolling="no"
        allowfullscreen="" frameborder="0" width="100%" height="360">
      </iframe>
      </div>
    </div>
    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">Наруто: Весна юности Рока Ли </h4>
      </div>
      <div class="card-body">
        <img src="/img/11.jpg" class="img-thumbnail">
        <ul class="list-unstyled mt-3 mb-4">
          <li style="font-family: cursive;">Статус:вышел</li>
          <li style="font-family: cursive;">Год:2012</li>
          <li style="font-family: cursive;">Возрастной рейтинг:PG-13 (от 13 лет)</li>
          <li style="font-family: cursive;">Жанр:Комедия, Пародия, Экшен</li>
          <li style="font-family: cursive;">Режиссер:Масахико Мурата</li>
          <li style="font-family: cursive;">Тип:Сериал</li>
          <li style="font-family: cursive;">Серии:51</li>
          <li style="font-family: cursive;">Студия:Studio Pierrot </li>
          <li style="font-family: cursive;">Первоисточник: Манга </li>
          <li style="font-family: cursive;">Перевод: Одноголосый</li>
          <li style="font-family: cursive;">Озвучка: Shiza Project</li>
          <li style="font-family: cursive;">Добро пожаловать в Деревню Скрытого Листа! Деревня, где живет звезда сериала «Наруто», Наруто Узумаки.
              Каждый день сильные и бесстрашные ниндзя выполняют миссии и учатся, чтобы отточить свои навыки.
              Наш главный герой — один из этих ниндзя... но это не Наруто! Это синоби, который не может использовать ниндзюцу — Рок Ли!
              Несмотря на это, у Ли есть мечта: он упорно тренируется каждый день, чтобы усовершенствовать свои боевые навыки и стать великолепным ниндзя!
              Под вспыльчивой опекой своего учителя, Майто Гая, он работает рядом со своими товарищами по команде — Тэн-Тэн и Нэджи Хюгой.
              Наблюдать за тренировками и участвовать в миссиях вместе с Рок Ли — это и есть приключения!</li>
        </ul>
        <iframe src="https://video.sibnet.ru/shell.php?videoid=559204"
        scrolling="no" allowfullscreen="" frameborder="0" width="100%" height="360"></iframe>
      </div>
    </div>
    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">Наруто[TV-1] </h4>
      </div>
      <div class="card-body">
        <img src="/img/12.jpg" class="img-thumbnail">
        <ul class="list-unstyled mt-3 mb-4">
          <li style="font-family: cursive;">Статус:вышел</li>
          <li style="font-family: cursive;">Год:2002</li>
          <li style="font-family: cursive;">Возрастной рейтинг:PG-13 (от 13 лет)</li>
          <li style="font-family: cursive;">Жанр:Сёнэн, Комедия, Убийцы, Приключения, Экшен, Боевые искусства, Ниндзя Суперспособности, Гендерная интрига</li>
          <li style="font-family: cursive;">Режиссер:Датэ Хаято</li>
          <li style="font-family: cursive;">Тип:Сериал</li>
          <li style="font-family: cursive;">Серии:220</li>
          <li style="font-family: cursive;">Студия:Studio Pierrot </li>
          <li style="font-family: cursive;">Первоисточник: Манга </li>
          <li style="font-family: cursive;">Перевод: Одноголосый</li>
          <li style="font-family: cursive;">Озвучка: NIKITOS</li>
        </ul>
        <iframe src="https://api1571473725.delivembed.cc/embed/movie/11229?season=1&amp;nocontrols=1&amp;episode=1"
        scrolling="no" allowfullscreen="" frameborder="0" width="100%" height="360">
      </iframe>
      </div>
    </div>
</div>
<? require "../footer.php"?>
<?php endif;?>
