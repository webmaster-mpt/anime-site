<?php
require "../../db.php";
$table = 'anime';
$rows = R::getAll( "SELECT * FROM `anime`" );
if($_GET['type'] == 'delete') {
    $bean = R::findOne($table, 'id=' . $_GET['id'] . '');
    $delete = R::trash($bean);
    header("Location: /admin/". $table . " /index.php");
}
?>
<link rel="stylesheet" href="../../css/table.css">
<?php
    if (!empty($rows)){ ?>
        <table border="1">
            <tr>
<!--                <th>Постер</th>-->
                <th>Группа</th>
                <th>Название</th>
<!--                <th>Статус</th>-->
<!--                <th>Год выпуска</th>-->
<!--                <th>Возрастной рейтинг</th>-->
                <th>Жанр</th>
<!--                <th>Режиссёр</th>-->
<!--                <th>Тип</th>-->
<!--                <th>Серии</th>-->
<!--                <th>Студия</th>-->
<!--                <th>Первоисточник</th>-->
<!--                <th>Перевод</th>-->
                <th>Озвучка</th>
<!--                <th>Описание</th>-->
<!--                <th>Ссылка</th>-->
                <th></th>
            </tr>
            <?php
            foreach ($rows as $row){
                $status = R::getRow('SELECT name FROM `status` WHERE `id` = '.$row['status_id']);
                $age_raiting = R::getRow('SELECT name FROM `age_raiting` WHERE `id` = '.$row['age_raiting_id']);
                $producer = R::getRow('SELECT name FROM `producer` WHERE `id` = '.$row['producer_id']);
                $type = R::getRow('SELECT name FROM `type` WHERE `id` = '.$row['type_id']);
                $studio = R::getRow('SELECT name FROM `studio` WHERE `id` = '.$row['studio_id']);
                $original_source = R::getRow('SELECT name FROM `original_source` WHERE `id` = '.$row['original_source_id']);
                $translation = R::getRow('SELECT name FROM `translation` WHERE `id` = '.$row['translation_id']);
                $voice_acting = R::getRow('SELECT name FROM `voice_acting` WHERE `id` = '.$row['voice_acting_id']);?>
            <tr>
<!--                <td><img src="/img/--><?php //echo $table['poster'] ?><!--" alt=""></td>-->
                <td><?php echo $row['tag_name'] ?></td>
                <td><?php echo $row['name'] ?></td>
<!--                <td>--><?php //echo $status['name'] ?><!--</td>-->
<!--                <td>--><?php //echo $table['year'] ?><!--</td>-->
<!--                <td>--><?php //echo $age_raiting['name'] ?><!--</td>-->
                <td><?php echo $row['ganre'] ?></td>
<!--                <td>--><?php //echo $producer['name'] ?><!--</td>-->
<!--                <td>--><?php //echo $type['name'] ?><!--</td>-->
<!--                <td>--><?php //echo $table['series'] ?><!--</td>-->
<!--                <td>--><?php //echo $studio['name'] ?><!--</td>-->
<!--                <td>--><?php //echo $original_source['name'] ?><!--</td>-->
<!--                <td>--><?php //echo $translation['name'] ?><!--</td>-->
                <td><?php echo $voice_acting['name'] ?></td>
<!--                <td>--><?php //echo $table['description'] ?><!--</td>-->
<!--                <td>--><?php //echo $table['iframe'] ?><!--</td>-->
                <td>
<!--                    <a href="update.php?id=--><?//= $row['id'] ?><!--" class="btn btn-light">Редактировать</a>-->
                    <a href="?type=delete&id=<?= $row['id']?>" class="btn btn-light">Удалить</a>
                </td>
            </tr>
            <?php } ?>
        </table>
    <?php } else {
        echo "Данных в таблице не существует!<br>";
    } ?>
<a href="create.php">Create</a>
<a href="../">Назад</a>