<?php
require "../../db.php";
$tables = R::getAll( "SELECT * FROM `age_raiting`" );
?>
<link rel="stylesheet" href="../../css/table.css">
<?php
    if (!empty($tables)){ ?>
        <table border="1">
            <tr>
                <th>Название</th>
            </tr>
            <?php
            foreach ($tables as $table){ ?>
            <tr>
                <td><?= $table['name'] ?></td>
            </tr>
            <?php } ?>
        </table>
    <?php } else {
        echo "Данных в таблице не существует!<br>";
    } ?>
<a href="create.php">Create</a>
<a href="../">Назад</a>