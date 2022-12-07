<?php
require "../../db.php";
$data = $_POST;
$table = basename(dirname(__FILE__));
if (isset($data['do_create']))
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
    <h1>Режиссёр</h1>
    <div class="container">
            <form method="post">
                <input type="name" name="name" value="<?php echo @$data['name'];?>" id="name" placeholder="Название"><br><br>
                <input name="do_create" type="submit" value="Добавить"/>
                <a href="/admin/<?= $table ?>/index.php">Назад</a>
            </form>
    </div>
</body>
