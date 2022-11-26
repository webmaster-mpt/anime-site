<?php
require "../../db.php";
$tables = R::getAll( "SELECT * FROM `anime`" );
?>
<link rel="stylesheet" href="../../css/table.css">
<?php
    if (!empty($tables)){ ?>
        <table border="1">
            <tr>
                <th>Постер</th>
                <th>Название</th>
                <th>Статус</th>
                <th>Год выпуска</th>
                <th>Возрастной рейтинг</th>
                <th>Жанр</th>
                <th>Режиссёр</th>
                <th>Тип</th>
                <th>Серии</th>
                <th>Студия</th>
                <th>Первоисточник</th>
                <th>Перевод</th>
                <th>Озвучка</th>
                <th>Описание</th>
                <th>Ссылка</th>
            </tr>
            <?php
            foreach ($tables as $table){
                $status = R::getRow('SELECT name FROM `status` WHERE `id` = '.$table['status_id']);
                $age_raiting = R::getRow('SELECT name FROM `age_raiting` WHERE `id` = '.$table['age_raiting_id']);
                $producer = R::getRow('SELECT name FROM `producer` WHERE `id` = '.$table['producer_id']);
                $type = R::getRow('SELECT name FROM `type` WHERE `id` = '.$table['type_id']);
                $studio = R::getRow('SELECT name FROM `studio` WHERE `id` = '.$table['studio_id']);
                $original_source = R::getRow('SELECT name FROM `original_source` WHERE `id` = '.$table['original_source_id']);
                $translation = R::getRow('SELECT name FROM `translation` WHERE `id` = '.$table['translation_id']);
                $voice_acting = R::getRow('SELECT name FROM `voice_acting` WHERE `id` = '.$table['voice_acting_id']);?>
            <tr>
                <td><?= $table['poster'] ?></td>
                <td><?= $table['name'] ?></td>
                <td><?= $status['name'] ?></td>
                <td><?= $table['year'] ?></td>
                <td><?= $age_raiting['name'] ?></td>
                <td><?= $table['ganre'] ?></td>
                <td><?= $producer['name'] ?></td>
                <td><?= $type['name'] ?></td>
                <td><?= $table['series'] ?></td>
                <td><?= $studio['name'] ?></td>
                <td><?= $original_source['name'] ?></td>
                <td><?= $translation['name'] ?></td>
                <td><?= $voice_acting['name'] ?></td>
                <td><?= $table['desсription'] ?></td>
                <td><?= $table['iframe'] ?></td>
            </tr>
            <?php } ?>
        </table>
    <?php } else {
        echo "Данных в таблице не существует!<br>";
    } ?>
<a href="create.php">Create</a>
<a href="../">Назад</a>