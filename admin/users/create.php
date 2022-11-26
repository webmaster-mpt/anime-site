<?php
require "../../db.php";
$data = $_POST;
$table = 'users';
if (isset($data['do_signup']))
{
    //здесь регистрирует
    $errors = array();
    if (trim($data['login'])=='')
    {
        $errors[] = 'Введите ник';
    }
    if (trim($data['email'])=='')
    {
        $errors[] = 'Введите email';
    }
    if (($data['password'])=='')
    {
        $errors[] = 'Введите пароль';
    }
    if ($data['password2']!=$data['password'])
    {
        $errors[] = 'Повторный пароль введён не верно!';
    }
    if (R::count('users',"login = ?",array($data['login']))>0)
    {
        $errors[] = 'Пользователь с таким ником уже существует!';
    }
    if (R::count('users',"email = ?",array($data['email']))>0)
    {
        $errors[] = 'Пользователь с таким email уже существует!';
    }
    if (empty($errors))
    {
        $user = R::dispense('users');
        $user->login = $data['login'];
        $user->email = $data['email'];
        $user->password = password_hash($data['password'],PASSWORD_DEFAULT);//шифрование
        R::store($user);
        echo 'Вы успешно зарегистрированы!';
        header("Location: /admin/". $table . " /index.php");

    }else
    {
        echo '<div style="color: red;">'.array_shift($errors).'</div><hr>';
    }
}
?>
<link rel="stylesheet" href="../../css/form.css">
<body>
    <h1>Пользователи</h1>
    <div class="container">
        <form method="post">
            <input type="login" name="login" value="<?php echo @$data['login'];?>" id="login" placeholder="Ник"><br><br>
            <input type="email" name="email" value="<?php echo @$data['email'];?>" id="email" placeholder="Email"><br><br>
            <input type="password" name="password" value="<?php echo @$data['password'];?>" id="password" placeholder="Пароль" /><br><br>
            <input type="password" name="password2" value="<?php echo @$data['password2'];?>" placeholder="Подтвердите пароль"><br><br>
            <input name="do_signup" type="submit" value="Регистрация" />
            <a href="/admin/<?= $table ?>/index.php">Назад</a>
        </form>
    </div>
</body>
