<?php
require "../../db.php";
$users = R::getAll( "SELECT * FROM `users`" );
?>
<link rel="stylesheet" href="../../css/table.css">
<table border="1">
    <tr>
        <th>username</th>
        <th>email</th>
    </tr>
    <?php
    foreach ($users as $user){ ?>
    <tr>
        <td><?= $user['login'] ?></td>
        <td><?= $user['email'] ?></td>
    </tr>
    <?php } ?>
</table>
<a href="create.php">Create</a>
<a href="../">Назад</a>