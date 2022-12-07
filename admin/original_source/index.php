<?php
require "../../db.php";
$table = basename(dirname(__FILE__));
$rows = R::getAll( "SELECT * FROM `original_source`" );
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
                <th>name</th>
            </tr>
            <?php
            foreach ($rows as $row){ ?>
            <tr>
                <td><?= $row['name'] ?></td>
                <td>
                    <a href="/admin/<?= $table ?>/update.php?id=<?= $row['id'] ?>" class="btn btn-light">Редактировать</a><br>
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