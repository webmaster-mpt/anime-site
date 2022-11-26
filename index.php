<?php
require "db.php";
$items = R::getAll( "SELECT * FROM `anime`" );
if (isset($_SESSION['logged_user'])){?>
    <link rel="stylesheet" href="/css/styles.css">
    <?php
        require "header.php";
        require "content.php";
        require "footer.php";
} else {?>
    <link rel = "stylesheet" href = "/css/styles.css">
    <nav>
        <ul class="main">
            <li><a href="index.php">Главная</a></li>
            <li><a href="news.php">Новости</a></li>
            <li><a href="">Каталог</a>
                <ul class="drop menu3">
                    <li><a href="/catalog.php">Каталог аниме</a></li>
                    <li><a href="/anons.php">Анонсы</a></li>
                </ul>
            </li>
            <li><a href="">Сообщество</a>
                <ul class="drop menu4">
                    <li><a href="user.php">Пользователи</a></li>
                </ul>
            </li>
            <li><a href="">Помощь</a>
                <ul class="drop menu5">
                    <li><a href="pravila.php">Правила сайта</a></li>
                    <li><a href="sait.php">О сайте fasa_anime</a></li>
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
    <a href="admin/index.php">Админка</a>
    <div class="container">
        <div class="text">
            <br><br>
            <div class="d-flex flex-wrap">
                <div class="card mb-4 shadow-sm"style="width:100%;opacity:0.7;color:#000000;background-color:#B22222">
                    <div class="card-header">
                        <h2 class="my-0 font-weight-normal">Новости-сайта</h2>
                        <h4 class="my-0 font-weight-normal">Добро пожаловать на сайт fasa_anime</h4><br>
                    </div>
                </div>
            </div>
            <div class="d-flex flex-wrap">
                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-normal">Наруто все фильмы</h4>
                        <h4 class="my-0 font-weight-normal">Наруто[TV-1]</h4>
                        <h4 class="my-0 font-weight-normal">Наруто: Весна юности Рока Ли</h4>
                    </div>
                    <div class="card-body">
                        <?php foreach ($items as $item){
                            $status = R::getRow('SELECT name FROM `status` WHERE `id` = '.$item['status_id']);
                            $age_raiting = R::getRow('SELECT name FROM `age_raiting` WHERE `id` = '.$item['age_raiting_id']);
                            $producer = R::getRow('SELECT name FROM `producer` WHERE `id` = '.$item['producer_id']);
                            $type = R::getRow('SELECT name FROM `type` WHERE `id` = '.$item['type_id']);
                            $studio = R::getRow('SELECT name FROM `studio` WHERE `id` = '.$item['studio_id']);
                            $original_source = R::getRow('SELECT name FROM `original_source` WHERE `id` = '.$item['original_source_id']);
                            $translation = R::getRow('SELECT name FROM `translation` WHERE `id` = '.$item['translation_id']);
                            $voice_acting = R::getRow('SELECT name FROM `voice_acting` WHERE `id` = '.$item['voice_acting_id']);?>
                        <img src="/img/<?= $item['poster'] ?>" class="img-thumbnail">
                        <ul class="list-unstyled mt-3 mb-4"><?= $item['name'] ?>
                            <li style="font-family: cursive;">Статус: <?= $status['name'] ?></li>
                            <li style="font-family: cursive;">Год: <?= $item['year'] ?></li>
                            <li style="font-family: cursive;">Возрастной рейтинг: <?= $age_raiting['name'] ?></li>
                            <li style="font-family: cursive;">Жанр: <?= $item['ganre'] ?></li>
                            <li style="font-family: cursive;">Режиссер: <?= $producer['name'] ?></li>
                            <li style="font-family: cursive;">Тип: <?= $type['name'] ?></li>
                            <li style="font-family: cursive;">Серии: <?= $item['series'] ?></li>
                            <li style="font-family: cursive;">Студия: <?= $studio['name'] ?></li>
                            <li style="font-family: cursive;">Первоисточник: <?= $original_source['name'] ?></li>
                            <li style="font-family: cursive;">Перевод: <?= $translation['name'] ?></li>
                            <li style="font-family: cursive;">Озвучка: <?= $voice_acting['name'] ?></li>
                            <li style="font-family: cursive;">Описание: <?= $item['desсription'] ?></li>
                        </ul>
                        <?php } ?>
                        <a href="/video/Naruto.php" class="btn btn-lg btn-block btn-outline-primary">Смотреть</a>
                    </div>
                </div>
                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-normal">Блич</h4>
                        <h4 class="my-0 font-weight-normal">Блич: все фильмы</h4>
                    </div>
                    <div class="card-body">
                        <img src="/img/Bleach1.jpg" class="img-thumbnail">
                        <ul class="list-unstyled mt-3 mb-4">
                            <li style="font-family: cursive;">Статус:вышел</li>
                            <li style="font-family: cursive;">Год:2004</li>
                            <li style="font-family: cursive;">Возрастной рейтинг:PG-13 (от 13 лет)</li>
                            <li style="font-family: cursive;">Жанр:Сёнэн, Комедия, Приключения, Фэнтези, Параллельные миры, Экшен, Боевые искусства, Сражения на мечах, Суперспособности, Сверхъестественное</li>
                            <li style="font-family: cursive;">Режиссер:Абэ Нориюки</li>
                            <li style="font-family: cursive;">Тип:Сериал</li>
                            <li style="font-family: cursive;">Куросаки Итиго — не простой пятнадцатилетний парень, потому как, сколько он себя помнил, всегда мог запросто общаться с духами и призраками, невидимыми для обычных людей.
                                В один судьбоносный день ему является сама синигами (богиня смерти) Кутики Рукиа,
                                охотящаяся за Пустым (злым духом, пожирающим души людей). Во время битвы с этим чудовищем Итиго и Рукиа
                                получили серьёзные ранения, и богине пришлось передать парню свои силы, чтобы помочь ему одержать победу над монстром,
                                в результате чего Итиго сам стал синигами! Но сделав это, Рукиа теряет всю свою мощь, и теперь ожидает,
                                что новоявленный синигами продолжит её миссию по отлову и уничтожению Пустых.
                                Так начинаются увлекательные приключения Итиго и Рукии.</li><br>
                        </ul>
                        <a href="/video/Bleach.php"><button type="button" class="btn btn-lg btn-block btn-outline-primary">Смотреть</button></a>
                    </div>
                </div>
                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-normal">Токийский гуль</h4>
                        <h4 class="my-0 font-weight-normal">Всё!</h4>
                    </div>
                    <div class="card-body">
                        <img src="/img/Tg1.jpg" class="img-thumbnail">
                        <ul class="list-unstyled mt-3 mb-4">
                            <li style="font-family: cursive;">Статус:вышел</li>
                            <li style="font-family: cursive;">Год:2014</li>
                            <li style="font-family: cursive;">Возрастной рейтинг: R-17+ (насилие и/или нецензурная лексика)</li>
                            <li style="font-family: cursive;">Жанр:Сэйнэн, Драма, Мистика, Приключения, Ужасы, Экшен, Психология, Сверхъестественное</li>
                            <li style="font-family: cursive;">Режиссер:Морита Сюхэй</li>
                            <li style="font-family: cursive;">Тип:Сериал</li>
                            <li style="font-family: cursive;">Студент университета Канеки Кен в результате несчастного случая попадает в больницу,
                                где ему по ошибке пересаживают органы одного из гулей - чудовищ, питающихся человеческой плотью.
                                Теперь он сам становится одним из них, а для людей превращается в изгоя, подлежащего уничтожению.
                                Но сможет он ли стать своим для других гулей? Или теперь в мире для него больше нет места?
                                Аниме расскажет о судьбе Канеки и том, какое влияние он окажет на будущее Токио,
                                где идет непрерывная война между двумя видами.</li>
                        </ul>
                        <a href="/video/Tg.php"><button type="button" class="btn btn-lg btn-block btn-outline-primary">Смотреть</button></a>
                    </div>
                </div>
                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-normal">Мы из общаги кавай</h4>
                    </div>
                    <div class="card-body">
                        <img src="/img/Kavai.jpg" class="img-thumbnail" style="width:100%;height:490px">
                        <ul class="list-unstyled mt-3 mb-4">
                            <li style="font-family: cursive;">Статус:вышел</li>
                            <li style="font-family: cursive;">Год:2014</li>
                            <li style="font-family: cursive;">Возрастной рейтинг: R-17+ (насилие и/или нецензурная лексика)</li>
                            <li style="font-family: cursive;">Жанр:Сэйнэн, Комедия, Романтика, Повседневность, Школьная жизнь</li>
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
                            <a href="/video/Kavai.php"><button type="button" class="btn btn-lg btn-block btn-outline-primary">Смотреть</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php require "footer.php"; } ?>
