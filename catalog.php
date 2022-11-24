<?php
require "db.php";
?>
<?php if (isset($_SESSION['logged_user'])):?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<? require "header.php"?>
<? require "catalogcon.php"?>
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
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<div class="container">
  <div class="text">
    <br><br>
  <div class="d-flex flex-wrap">
    <div class="card mb-4 shadow-sm"style="width:100%;opacity:0.7;color:#000000;background-color:#B22222">
      <div class="card-header">
        <h2 class="my-0 font-weight-normal"style="font-family:cursive">Каталог аниме</h2>
        <h4 class="my-0 font-weight-normal" style="font-family:cursive">Здесь хранилище всех присутствующих аниме на сайте для просмотра перейдите на главную.</h4><br>
      </div>
    </div>
  </div>
  <div class="d-flex flex-wrap">
    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal" style="color: black;font-family: cursive ">Первый фильм Наруто:</h4>
        <h4 class="my-0 font-weight-normal" style="color: black;font-family: cursive ">Большой боевик! Книга Искусств Ниндзя Снежной Принцессы!</h4>
      </div>
      <div class="card-body">
        <img src="/img/1.jpg" class="img-thumbnail">
        <ul class="list-unstyled mt-3 mb-4">
          <li style="background-color:#00FFFF;font-family: cursive; color:#8B0000">Статус:вышел</li>
          <li style="font-family: cursive;">Год: 2004</li>
          <li style="font-family: cursive;">Возрастной рейтинг: PG-13 (от 13 лет)</li>
          <li style="background-color:#00FFFF;font-family: cursive; color:#8B0000">Жанр:Сёнэн, Комедия, Приключения, Альтернативная реальность, Экшен, Боевые искусства, Ниндзя Суперспособности</li>
          <li style="font-family: cursive;">Режиссер: Кисимото Масаси</li>
          <li style="font-family: cursive;">Первоисточник: Манга </li>
          <li style="font-family: cursive;">Студия:Studio Pierrot </li>
          <li style="font-family: cursive;">Перевод: Одноголосый</li>
          <li style="font-family: cursive;">Озвучка: Zendos & Shouske & Jerwis & By Mr_zJIou & RainDark & Phantom & Rem & Kin & Fast </li>
          <li style="font-family: cursive;">Фильм начинается с похода в кинотеатр Наруто, Саске и Сакуры, где они смотрели новый фильм про отважную принцессу Фуун. Наруто был настолько впечатлен фильмом, что захотел встретиться с этой прекрасной девушкой при первой же возможности.И его желание вскоре исполнилось... На съемках следующего фильма девушка проносится мимо него на лошади, спасаясь от разбойников.
             Наруто, не веря своему счастью, спасает ее, не понимая, что это была лишь актерская постановка.
             Но по законам жанра, в реальной жизни актеры обычно оказываются совершенно другими людьми... И тут Наруто ждет большое разочарование, особенно когда он узнает, что их команде прийдется сопровождать актрису в страну Снега. Однако, не все так просто в этом фильме, "лжепринцесса без чувств" все таки окажется настоящей принцессой, за которую Наруто будет готов отдать свою жизнь.</li>
        </ul>
        </div>
      </div>
        <div class="card mb-4 shadow-sm">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal" style="color: black;font-family: cursive ">Второй фильм Наруто:</h4>
            <h4 class="my-0 font-weight-normal" style="color: black;font-family: cursive ">Большое столкновение! Призрачные руины в недрах земли!</h4>
          </div>
          <div class="card-body">
            <img src="/img/2.jpg" class="img-thumbnail">
            <ul class="list-unstyled mt-3 mb-4">
              <li style="background-color:#00FFFF;font-family: cursive;; color:#8B0000">Статус:вышел</li>
              <li style="font-family: cursive;">Год:2005</li>
              <li style="font-family: cursive;">Возрастной рейтинг:PG-13 (от 13 лет)</li>
              <li style="background-color:#00FFFF;font-family: cursive; color:#8B0000">Жанр:Сёнэн, Приключения, Экшен, Ниндзя, Суперспособности </li>
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
            </div>
          </div>
          <div class="card mb-4 shadow-sm">
            <div class="card-header">
              <h4 class="my-0 font-weight-normal" style="color: black;font-family: cursive ">Третий фильм Наруто: </h4>
              <h4 class="my-0 font-weight-normal" style="color: black;font-family: cursive ">Большой переполох! Бунт животных на острове Полумесяца!</h4>
            </div>
            <div class="card-body">
              <img src="/img/3.jpg" class="img-thumbnail">
              <ul class="list-unstyled mt-3 mb-4">
                <li style="background-color:#00FFFF;font-family: cursive; color:#8B0000">Статус:вышел</li>
                <li style="font-family: cursive;">Год:2006</li>
                <li style="font-family: cursive;">Возрастной рейтинг:PG-13 (от 13 лет)</li>
                <li style="background-color:#00FFFF;font-family: cursive; color:#8B0000">Жанр:Сёнэн, Преступность, Приключения, Экшен, Ниндзя, Суперспособности</li>
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
            </div>
          </div>
          <div class="card mb-4 shadow-sm">
            <div class="card-header">
              <h4 class="my-0 font-weight-normal" style="color: black;font-family: cursive ">Четвертый фильм Наруто: </h4>
              <h4 class="my-0 font-weight-normal" style="color: black;font-family: cursive ">Ураганные Хроники</h4>
            </div>
            <div class="card-body">
              <img src="/img/4.jpg" class="img-thumbnail">
              <ul class="list-unstyled mt-3 mb-4">
                <li style="background-color:#00FFFF;font-family: cursive; color:#8B0000">Статус:вышел</li>
                <li style="font-family: cursive;">Год:2007</li>
                <li style="font-family: cursive;">Возрастной рейтинг:PG-13 (от 13 лет)</li>
                <li style="background-color:#00FFFF;font-family: cursive; color:#8B0000">Жанр:Сёнэн, Экшен, Ниндзя, Суперспособности</li>
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
            </div>
          </div>
          <div class="card mb-4 shadow-sm">
            <div class="card-header">
              <h4 class="my-0 font-weight-normal" style="color: black;font-family: cursive ">Пятый фильм Наруто: Узы</h4>
            </div>
            <div class="card-body">
              <img src="/img/5.jpg" class="img-thumbnail">
              <ul class="list-unstyled mt-3 mb-4">
                <li style="background-color:#00FFFF;font-family: cursive; color:#8B0000">Статус:вышел</li>
                <li style="font-family: cursive;">Год:2008</li>
                <li style="font-family: cursive;">Возрастной рейтинг:PG-13 (от 13 лет)</li>
                <li style="background-color:#00FFFF;font-family: cursive; color:#8B0000">Жанр:Сёнэн, Экшен, Ниндзя, Суперспособности</li>
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
            </div>
          </div>
          <div class="card mb-4 shadow-sm">
            <div class="card-header">
              <h4 class="my-0 font-weight-normal" style="color: black;font-family: cursive ">Шестой фильм Наруто:</h4>
              <h4 class="my-0 font-weight-normal" style="color: black;font-family: cursive ">Наследники Воли Огня</h4>
            </div>
            <div class="card-body">
              <img src="/img/6.jpg" class="img-thumbnail">
              <ul class="list-unstyled mt-3 mb-4">
                <li style="background-color:#00FFFF;font-family: cursive; color:#8B0000">Статус:вышел</li>
                <li style="font-family: cursive;">Год:2009</li>
                <li style="font-family: cursive;">Возрастной рейтинг:PG-13 (от 13 лет)</li>
                <li style="background-color:#00FFFF;font-family: cursive; color:#8B0000">Жанр:Сёнэн, Экшен, Ниндзя, Суперспособности</li>
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
            </div>
          </div>
          <div class="card mb-4 shadow-sm">
            <div class="card-header">
              <h4 class="my-0 font-weight-normal" style="color: black;font-family: cursive ">Седьмой фильм Наруто:</h4>
              <h4 class="my-0 font-weight-normal" style="color: black;font-family: cursive ">Потерянная Башня</h4>
            </div>
            <div class="card-body">
              <img src="/img/7.jpg" class="img-thumbnail">
              <ul class="list-unstyled mt-3 mb-4">
                <li style="background-color:#00FFFF;font-family: cursive; color:#8B0000">Статус:вышел</li>
                <li style="font-family: cursive;">Год:2010</li>
                <li style="font-family: cursive;">Возрастной рейтинг:PG-13 (от 13 лет)</li>
                <li style="background-color:#00FFFF;font-family: cursive; color:#8B0000">Жанр:Сёнэн, Комедия, Путешествия во времени, Экшен, Ниндзя, Суперспособности</li>
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
            </div>
          </div>
          <div class="card mb-4 shadow-sm">
            <div class="card-header">
              <h4 class="my-0 font-weight-normal" style="color: black;font-family: cursive ">Восьмой фильм Наруто: </h4>
              <h4 class="my-0 font-weight-normal"style="color: black;font-family: cursive ">Кровавая Тюрьма</h4>
            </div>
            <div class="card-body">
              <img src="/img/8.jpg" class="img-thumbnail">
              <ul class="list-unstyled mt-3 mb-4">
                <li style="background-color:#00FFFF;font-family: cursive; color:#8B0000">Статус:вышел</li>
                <li style="font-family: cursive;">Год:2011</li>
                <li style="font-family: cursive;">Возрастной рейтинг:PG-13 (от 13 лет)</li>
                <li style="background-color:#00FFFF;font-family: cursive; color:#8B0000">Жанр:Сёнэн, Ниндзя, Суперспособности</li>
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
            </div>
          </div>
          <div class="card mb-4 shadow-sm">
            <div class="card-header">
              <h4 class="my-0 font-weight-normal" style="color: black;font-family: cursive ">Девятый фильм Наруто:</h4>
              <h4 class="my-0 font-weight-normal"style="color: black;font-family: cursive ">Путь Ниндзя</h4>
            </div>
            <div class="card-body">
              <img src="/img/9.jpg" class="img-thumbnail">
              <ul class="list-unstyled mt-3 mb-4">
                <li style="background-color:#00FFFF;font-family: cursive; color:#8B0000">Статус:вышел</li>
                <li style="font-family: cursive;">Год:2012</li>
                <li style="font-family: cursive;">Возрастной рейтинг:PG-13 (от 13 лет)</li>
                <li style="background-color:#00FFFF;font-family: cursive; color:#8B0000">Жанр:Сёнэн, Параллельные миры, Экшен, Ниндзя</li>
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
            </div>
          </div>
          <div class="card mb-4 shadow-sm">
            <div class="card-header">
              <h4 class="my-0 font-weight-normal" style="color: black;font-family: cursive ">Наруто: Последний фильм</h4>
            </div>
            <div class="card-body">
              <img src="/img/10.jpg" class="img-thumbnail">
              <ul class="list-unstyled mt-3 mb-4">
                <li style="background-color:#00FFFF;font-family: cursive; color:#8B0000">Статус:вышел</li>
                <li style="font-family: cursive;">Год:2014</li>
                <li style="font-family: cursive;">Возрастной рейтинг:PG-13 (от 13 лет)</li>
                <li style="background-color:#00FFFF;font-family: cursive; color:#8B0000">Жанр:Сёнэн, Приключения, Романтика, Фэнтэзи, Суперспособности</li>
                <li style="font-family: cursive;">Режиссер:Кобаяси Цунэо</li>
                <li style="font-family: cursive;">Тип:Полнометражный фильм </li>
                <li style="font-family: cursive;">Студия:Studio Pierrot </li>
                <li style="font-family: cursive;">Первоисточник: Манга </li>
                <li style="font-family: cursive;">Перевод: Полное дублирование</li>
                <li style="font-family: cursive;">Маленькая Ханаби похищена инопланетным злодеем, который вдобавок хочет уничтожить Землю.
                   Наруто просто обязан спасти младшую сестру Хинаты — девушки, в которую он влюблён.
                  Но сможет ли легендарный ниндзя победить самого мощного врага, если перед битвой он потеряет свои суперспособности? </li>
              </ul>
            </div>
          </div>
          <div class="card mb-4 shadow-sm">
            <div class="card-header">
              <h4 class="my-0 font-weight-normal" style="color: black;font-family: cursive ">Наруто: Весна юности Рока Ли </h4>
            </div>
            <div class="card-body">
              <img src="/img/11.jpg" class="img-thumbnail">
              <ul class="list-unstyled mt-3 mb-4">
                <li style="background-color:#00FFFF;font-family: cursive; color:#8B0000">Статус:вышел</li>
                <li style="font-family: cursive;">Год:2012</li>
                <li style="font-family: cursive;">Возрастной рейтинг:PG-13 (от 13 лет)</li>
                <li style="background-color:#00FFFF;font-family: cursive; color:#8B0000">Жанр:Комедия, Пародия, Экшен</li>
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
            </div>
          </div>
          <div class="card mb-4 shadow-sm">
            <div class="card-header">
              <h4 class="my-0 font-weight-normal" style="color: black;font-family: cursive ">Наруто[TV-1] </h4>
            </div>
            <div class="card-body">
              <img src="/img/12.jpg" class="img-thumbnail">
              <ul class="list-unstyled mt-3 mb-4">
                <li style="background-color:#00FFFF;font-family: cursive; color:#8B0000">Статус:вышел</li>
                <li style="font-family: cursive;">Год:2002</li>
                <li style="font-family: cursive;">Возрастной рейтинг:PG-13 (от 13 лет)</li>
                <li style="background-color:#00FFFF;font-family: cursive; color:#8B0000">Жанр:Сёнэн, Комедия, Убийцы, Приключения, Экшен, Боевые искусства, Ниндзя Суперспособности, Гендерная интрига</li>
                <li style="font-family: cursive;">Режиссер:Датэ Хаято</li>
                <li style="font-family: cursive;">Тип:Сериал</li>
                <li style="font-family: cursive;">Серии:220</li>
                <li style="font-family: cursive;">Студия:Studio Pierrot </li>
                <li style="font-family: cursive;">Первоисточник: Манга </li>
                <li style="font-family: cursive;">Перевод: Одноголосый</li>
                <li style="font-family: cursive;">Озвучка: NIKITOS</li>
              </ul>
            </div>
          </div>
<div class="card mb-4 shadow-sm">
  <div class="card-header">
    <h4 class="my-0 font-weight-normal" style="color: black;font-family: cursive ">Блич</h4>
  </div>
  <div class="card-body">
    <img src="/img/Bleach.jpg" class="img-thumbnail">
    <ul class="list-unstyled mt-3 mb-4">
      <li style="background-color:#00FFFF;font-family: cursive; color:#8B0000">Статус:вышел</li>
      <li style="font-family: cursive;">Год:2004</li>
      <li style="font-family: cursive;">Возрастной рейтинг:PG-13 (от 13 лет)</li>
      <li style="background-color:#00FFFF;font-family: cursive; color:#8B0000">Жанр:Сёнэн, Комедия, Приключения, Фэнтези, Параллельные миры, Экшен, Боевые искусства, Сражения на мечах, Суперспособности, Сверхъестественное</li>
      <li style="font-family: cursive;">Режиссер:Абэ Нориюки</li>
      <li style="font-family: cursive;">Тип:Сериал</li>
    </ul>
  </div>
  </div>
  <div class="card mb-4 shadow-sm">
    <div class="card-header">
      <h4 class="my-0 font-weight-normal" style="color: black;font-family: cursive ">Блич (фильм первый): Воспоминания ни о ком</h4>
    </div>
    <div class="card-body">
      <img src="/img/Bleachч.jpg" class="img-thumbnail">
      <ul class="list-unstyled mt-3 mb-4">
        <li style="background-color:#00FFFF;font-family: cursive; color:#8B0000">Статус:вышел</li>
        <li style="font-family: cursive;">Год:2006</li>
        <li style="font-family: cursive;">Возрастной рейтинг:PG-13 (от 13 лет)</li>
        <li style="background-color:#00FFFF;font-family: cursive; color:#8B0000">Жанр:Комедия / Фэнтези / Мистика / Драма / Самураи / Боевые искусства / Триллер / Сёнэн / Полнометражное</li>
        <li style="font-family: cursive;">Режиссер:Абэ Нориюки</li>
        <li style="font-family: cursive;">Тип:Полнометражный</li>
        <li style="font-family: cursive;">Озвучка:loster01, Emeri</li>
      </ul>
    </div>
    </div>
    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal"style="color: black;font-family: cursive ">Блич Фильм 2: Восстание Алмазной Пыли</h4>
      </div>
      <div class="card-body">
        <img src="/img/Bleach3.jpg" class="img-thumbnail">
        <ul class="list-unstyled mt-3 mb-4">
          <li style="background-color:#00FFFF;font-family: cursive; color:#8B0000">Статус:вышел</li>
          <li style="font-family: cursive;">Год:2007</li>
          <li style="font-family: cursive;">Возрастной рейтинг:PG-13 (от 13 лет)</li>
          <li style="background-color:#00FFFF;font-family: cursive; color:#8B0000">Жанр:Комедия / Фэнтези / Мистика / Драма / Самураи / Боевые искусства / Триллер / Сёнэн / Полнометражное</li>
          <li style="font-family: cursive;">Режиссер:Абэ Нориюки</li>
          <li style="font-family: cursive;">Тип:Полнометражный</li>
          <li style="font-family: cursive;">Озвучка:Лисёк</li>
        </ul>
      </div>
    </div>
    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal" style="color: black;font-family: cursive ">Блич Фильм 3: Исчезая в темноту, я звала тебя</h4>
      </div>
      <div class="card-body">
        <img src="/img/Bleach4.jpg" class="img-thumbnail">
        <ul class="list-unstyled mt-3 mb-4">
          <li style="background-color:#00FFFF;font-family: cursive; color:#8B0000">Статус:вышел</li>
          <li style="font-family: cursive;">Год:2008</li>
          <li style="font-family: cursive;">Возрастной рейтинг:PG-13 (от 13 лет)</li>
          <li style="background-color:#00FFFF;font-family: cursive; color:#8B0000">Жанр:Комедия / Фэнтези / Мистика / Драма / Самураи / Боевые искусства / Триллер / Сёнэн / Полнометражное</li>
          <li style="font-family: cursive;">Режиссер:Абэ Нориюки</li>
          <li style="font-family: cursive;">Тип:Полнометражный</li>
          <li style="font-family: cursive;">Озвучка:Near, Laura, Мулентий, Муневра, Eladiel, Joy, Kagura_ent, Ranmaru</li>
        </ul>
      </div>
    </div>
    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">Блич Фильм 4: Врата Ада</h4>
      </div>
      <div class="card-body">
        <img src="/img/Bleach5.jpg" class="img-thumbnail">
        <ul class="list-unstyled mt-3 mb-4">
          <li style="background-color:#00FFFF;font-family: cursive; color:#8B0000">Статус:вышел</li>
          <li style="font-family: cursive;">Год:2010</li>
          <li style="font-family: cursive;">Возрастной рейтинг:PG-13 (от 13 лет)</li>
          <li style="background-color:#00FFFF;font-family: cursive; color:#8B0000">Жанр:Комедия / Фэнтези / Мистика / Драма / Самураи / Боевые искусства / Триллер / Сёнэн / Полнометражное</li>
          <li style="font-family: cursive;">Режиссер:Абэ Нориюки</li>
          <li style="font-family: cursive;">Тип:Полнометражный</li>
          <li style="font-family: cursive;">Озвучка:JAM, Eladiel</li>
        </ul>
    </div>
  </div>
  <div class="card mb-4 shadow-sm">
    <div class="card-header">
      <h4 class="my-0 font-weight-normal" style="color: black;font-family: cursive ">Токийский Гуль</h4>
    </div>
    <div class="card-body"style="margin-right:10px;">
      <img src="/img/Tg1.jpg" class="img-thumbnail">
      <ul class="list-unstyled mt-3 mb-4">
        <li style="background-color:#00FFFF;font-family: cursive; color:#8B0000">Статус:вышел</li>
        <li style="font-family: cursive;">Год:2014</li>
        <li style="font-family: cursive;">Возрастной рейтинг: R-17+ (насилие и/или нецензурная лексика)</li>
        <li style="background-color:#00FFFF;font-family: cursive; color:#8B0000">Жанр:Сэйнэн, Драма, Мистика, Приключения, Ужасы, Экшен, Психология, Сверхъестественное</li>
        <li style="font-family: cursive;">Режиссер:Морита Сюхэй</li>
        <li style="font-family: cursive;">Тип:Сериал</li>
        <li style="font-family: cursive;">Серии: 12</li>
        <li style="font-family: cursive;">Сезон: 1</li>
        <li style="font-family: cursive;">Студия: Studio Pierrot</li>
        <li style="font-family: cursive;">Перевод: Многоголосый</li>
        <li style="font-family: cursive;">Озвучка: Anidub, Anilibria</li>
        <li style="font-family: cursive;">Студент университета Канеки Кен в результате несчастного случая попадает в больницу,
           где ему по ошибке пересаживают органы одного из гулей - чудовищ, питающихся человеческой плотью.
           Теперь он сам становится одним из них, а для людей превращается в изгоя, подлежащего уничтожению.
           Но сможет он ли стать своим для других гулей? Или теперь в мире для него больше нет места?
           Аниме расскажет о судьбе Канеки и том, какое влияние он окажет на будущее Токио,
           где идет непрерывная война между двумя видами.</li>
         </ul>
      </div>
      </div>
        <div class="card mb-4 shadow-sm">
          <div class="card-header">
        <h4 class="my-0 font-weight-normal"style="color: black;font-family: cursive ">Токийский Гуль</h4>
      </div>
      <div class="card-body"style="margin-right:10px;">
        <img src="/img/Tg2.jpg" class="img-thumbnail">
        <ul class="list-unstyled mt-3 mb-4">
          <li style="background-color:#00FFFF;font-family: cursive; color:#8B0000">Статус:вышел</li>
          <li style="font-family: cursive;">Год:2015</li>
          <li style="font-family: cursive;">Возрастной рейтинг: R-17+ (насилие и/или нецензурная лексика)</li>
          <li style="background-color:#00FFFF;font-family: cursive; color:#8B0000">Жанр:Сэйнэн, Драма, Мистика, Приключения, Ужасы, Экшен, Психология, Сверхъестественное</li>
          <li style="font-family: cursive;">Режиссер:Морита Сюхэй</li>
          <li style="font-family: cursive;">Тип:Сериал</li>
          <li style="font-family: cursive;">Серии: 12</li>
          <li style="font-family: cursive;">Сезон: 2</li>
          <li style="font-family: cursive;">Студия: Studio Pierrot</li>
          <li style="font-family: cursive;">Перевод: Двухголосый</li>
          <li style="font-family: cursive;">Озвучка: Anidub, Anilibria, Get Smart Group</li>
          <li style="font-family: cursive;">Продолжение истории про мальчика по имени Канеки-кун, который из-за ряда случайных событий,
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
      </div>
      </div>
        <div class="card mb-4 shadow-sm">
        <div class="card-header">
          <h4 class="my-0 font-weight-normal"style="color: black;font-family: cursive ">Токийский Гуль: Перерождение</h4>
        </div>
        <div class="card-body"style="margin-right:10px;">
          <img src="/img/Tg4.jpg" class="img-thumbnail">
          <ul class="list-unstyled mt-3 mb-4">
            <li style="background-color:#00FFFF;font-family: cursive; color:#8B0000">Статус:вышел</li>
            <li style="font-family: cursive;">Год:2018</li>
            <li style="font-family: cursive;">Возрастной рейтинг: R-17+ (насилие и/или нецензурная лексика)</li>
            <li style="background-color:#00FFFF;font-family: cursive; color:#8B0000">Жанр:Сэйнэн, Драма, Мистика, Приключения, Ужасы, Экшен, Психология, Сверхъестественное</li>
            <li style="font-family: cursive;">Режиссер:Ватанабэ Одахиро</li>
            <li style="font-family: cursive;">Тип:Сериал</li>
            <li style="font-family: cursive;">Серии: 12</li>
            <li style="font-family: cursive;">Студия: Studio Pierrot, Pierrot Plus </li>
            <li style="font-family: cursive;">Перевод: Многоголосый</li>
            <li style="font-family: cursive;">Озвучка: 2x2, Anilibria, JAM club</li>
            <li style="font-family: cursive;">Спустя два года после устроенной карательной операции на кафе «Антейку» исчезает Кен Кенеки,
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
        </div>
        </div>
        <div class="card mb-4 shadow-sm">
              <div class="card-header">
              <h4 class="my-0 font-weight-normal"style="color: black;font-family: cursive ">Токийский Гуль: Перерождение 2 </h4>
            </div>
            <div class="card-body"style="margin-right:10px;">
              <img src="/img/Tg5.jpg" class="img-thumbnail">
              <ul class="list-unstyled mt-3 mb-4">
                <li style="background-color:#00FFFF;font-family: cursive; color:#8B0000">Статус:вышел</li>
                <li style="font-family: cursive;">Год:2018</li>
                <li style="font-family: cursive;">Возрастной рейтинг: R-17+ (насилие и/или нецензурная лексика)</li>
                <li style="background-color:#00FFFF;font-family: cursive; color:#8B0000">Жанр:Сэйнэн, Драма, Мистика, Приключения, Ужасы, Экшен, Психология, Сверхъестественное</li>
                <li style="font-family: cursive;">Режиссер:Морита Сюхэй</li>
                <li style="font-family: cursive;">Тип:Сериал</li>
                <li style="font-family: cursive;">Серии: 12</li>
                <li style="font-family: cursive;">Студия: Studio Pierrot, Pierrot Plus </li>
                <li style="font-family: cursive;">Перевод: Многоголосый</li>
                <li style="font-family: cursive;">Озвучка: Anilibria, JAM club, SovetRomantica & Akari GROUP, 2x2</li>
                <li style="font-family: cursive;">Во втором сезоне мы увидим продолжение истории Хайсе Сасаки, который уже повышен до статуса кандидата
                  в особый класс и более известен как Чёрный бог смерти CCG. Незадолго до этого он полностью лишился памяти.
                  Хайсе даже не догадывается кто он на самом деле и чем занимался в прошлом, но как всем известно, он один из
                  самых опаснейших гулей - Кен Канеки. Семья Цукияма уничтожена, а в разуме протагониста прояснилось его прошлое
                  и сознанием теперь снова овладел старый добрый Канеки.</li>
                 </ul>
              </div>
            </div>
            <div class="card mb-4 shadow-sm">
              <div class="card-header">
                <h4 class="my-0 font-weight-normal"style="color: black;font-family: cursive">Мы из общаги кавай</h4>
              </div>
              <div class="card-body"style="margin-right:10px;">
                <img src="/img/Kavai.jpg" class="img-thumbnail" style="width:100%;height:490px">
                <ul class="list-unstyled mt-3 mb-4">
                  <li style="background-color:#00FFFF;font-family: cursive; color:#8B0000">Статус:вышел</li>
                  <li style="font-family: cursive;">Год:2014</li>
                  <li style="font-family: cursive;">Возрастной рейтинг: R-17+ (насилие и/или нецензурная лексика)</li>
                    <li style="background-color:#00FFFF;font-family: cursive; color:#8B0000">Жанр:Сэйнэн, Комедия, Романтика, Повседневность, Школьная жизнь</li>
                  <li style="font-family: cursive;">Режиссер:Мия Сигэюки</li>
                  <li style="font-family: cursive;">Тип:Сериал</li>
                  <li style="font-family: cursive;">Серии: 12</li>
                  <li style="font-family: cursive;">Сезон: 1</li>
                  <li style="font-family: cursive;">Студия: Brain's Base</li>
                  <li style="font-family: cursive;">Перевод: Многоголосый</li>
                  <li style="font-family: cursive;">Озвучка: Anidub, Anilibria</li>
                  <li style="font-family: cursive;">Закончив младшую школу, Кадзунари Уса надеялся на
                    спокойную размеренную жизнь старшеклассника. К тому же родители переехали в другое место, сняв сыну отдельное жилье в
                    общежитии. Свое жилье, без родителей, о чем еще можно мечтать старшекласснику? Разве что, о тихой, спокойной и красивой
                    девушке, это для нашего героя было пределом всех мечтаний.Как-то зайдя в библиотеку, Уса увидел очень милую девушку, читающую
                    книгу. Парень сразу почувствовал, она - именно та, с кем он он проживет свою молодость. В тот же день он пошел осматривать свое
                    новое жилье. После осмотра стало ясно, что а) дом развалина, б) комнату придется делить с извращенцем по имени Сиросаки. Уса уже
                    собирался бежать оттуда, но столкнулся на входе с той самой девушкой, которую видел в библиотеке. Она оказывается тоже здесь живет,
                    да к тому же - двоюродная внучка хозяйки. И парень решил остаться, узнать о жильцах получше. Среди них также оказалась Маюми - неудачливая
                    в любви офисная леди, поэтому сильно пьющая и студентка Саяка - тоже со своими странными наклонностями. В общем, не жизнь, а сплошной кавай !
            </li>
          </div>
        </div>
  </div>
</div>
</div>
<? require "footer.php"?>
<?php endif;?>
