<?php
require "../db.php";
$items = R::getAll( 'SELECT * FROM `anime` where `NAME` LIKE "%Наруто%"');
?>
<div class="d-flex flex-wrap">
<?php foreach ($items as $item){
    $status = R::getRow('SELECT name FROM `status` WHERE `id` = '.$item['status_id']);
    $age_raiting = R::getRow('SELECT name FROM `age_raiting` WHERE `id` = '.$item['age_raiting_id']);
    $producer = R::getRow('SELECT name FROM `producer` WHERE `id` = '.$item['producer_id']);
    $type = R::getRow('SELECT name FROM `type` WHERE `id` = '.$item['type_id']);
    $studio = R::getRow('SELECT name FROM `studio` WHERE `id` = '.$item['studio_id']);
    $original_source = R::getRow('SELECT name FROM `original_source` WHERE `id` = '.$item['original_source_id']);
    $translation = R::getRow('SELECT name FROM `translation` WHERE `id` = '.$item['translation_id']);
    $voice_acting = R::getRow('SELECT name FROM `voice_acting` WHERE `id` = '.$item['voice_acting_id']);?>
    <div class="card mb-4 shadow-sm">
        <div class="card-header">
            <h4 class="my-0 font-weight-normal"><?= $item['name'] ?></h4>
        </div>
        <div class="card-body">
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
            <div class="player" style="display: block;">
                <?= $item['iframe'] ?>
            </div>
        </div>
    </div>
<?php } ?>
</div>
