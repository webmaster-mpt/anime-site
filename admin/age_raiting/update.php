<?php
require "../../db.php";
$data = $_POST;
$table = basename(dirname(__FILE__));
$get_rows = R::find($table, 'id='. $_GET['id']);
if (isset($data['do_update']))
{
    //здесь регистрирует
    $errors = array();
    if (trim($data['name'])=='')
    {
        $errors[] = 'Введите название';
    }
    if (R::count($table,"name = ?",array($data['name']))>0)
    {
        $errors[] = 'Пользователь с таким ником уже существует!';
    }
    if (empty($errors))
    {
        $update = R::load($table,$_GET['id']);
        $update->name = $data['name'];
        R::store($update);
        echo 'Изменили!';
        header("Location: /admin/". $table . " /index.php");

    }else
    {
        echo '<div style="color: red;">'.array_shift($errors).'</div><hr>';
    }
}
?>
<link rel="stylesheet" href="../../css/form.css">
<body>
<h1>Первоисточник</h1>
<div class="container">
    <form method="post">
        <?php foreach ($get_rows as $get_row) { ?>
        <input type="name" name="name" value="<?= $get_row->name,@$data['name'];?>" id="name" placeholder="Название"><br><br>
        <?php } ?>
        <input name="do_update" type="submit" value="Изменить"/>
        <a href="/admin/<?= $table ?>/index.php">Назад</a>
    </form>
</div>
</body>
