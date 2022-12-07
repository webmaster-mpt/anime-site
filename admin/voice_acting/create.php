<?php
require "../../db.php";
$data = $_POST;
$table = basename(dirname(__FILE__));
if (isset($data['do_create']))
{
    $errors = array();
    if (trim($data['name']) == '')
    {
        $errors[] = 'Введите название';
    }
    if (R::count($table,"name = ?",array($data['name']))>0)
    {
        $errors[] = 'Такое название уже есть!';
    }
    if (empty($errors))
    {
        $create = R::dispense($table);
        $create->name = $data['name'];
        R::store($create);
        echo 'Добавили!';
        header("Location: /admin/". $table . " /index.php");

    }else
    {
        echo '<div style="color: red;">'.array_shift($errors).'</div><hr>';
    }
}
?>
<link rel="stylesheet" href="../../css/form.css">
<body>
    <h1>Озвучка</h1>
    <div class="container">
            <form method="post">
                <input type="text" name="name" value="<?= @$data['name']?>" placeholder="Название"><br><br>
                <input name="do_create" type="submit" value="Добавить"/>
                <a href="/admin/<?= $table ?>/index.php">Назад</a>
            </form>
    </div>
</body>
