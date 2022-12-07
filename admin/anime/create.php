<?php
require "../../db.php";
$data = $_POST;
$table = basename(dirname(__FILE__));

$status = R::getAll( "SELECT * FROM `status`" );
$studio = R::getAll( "SELECT * FROM `studio`" );
$producer = R::getAll( "SELECT * FROM `producer`" );
$translation = R::getAll( "SELECT * FROM `translation`" );
$voice_acting = R::getAll( "SELECT * FROM `voice_acting`" );
$original_source = R::getAll( "SELECT * FROM `original_source`" );
$type = R::getAll( "SELECT * FROM `type`" );
$age_raiting = R::getAll( "SELECT * FROM `age_raiting`" );

if (isset($data['do_create']))
{
//    var_dump($_FILES['poster']['name']);die();
    //здесь регистрирует
    $errors = array();
    if (trim($data['tag_name']) == '')
    {
        $errors[] = 'Добавьте название группы';
    }
    if (trim($_FILES['poster']['name']) == '')
    {
        $errors[] = 'Добавьте постер';
    }
    if (trim($data['name'])=='')
    {
        $errors[] = 'Введите название';
    }
    if (trim($data['status_id'])=='')
    {
        $errors[] = 'Выберите статус';
    }
    if (trim($data['year'])=='')
    {
        $errors[] = 'Введите год выпуска';
    }
    if (trim($data['age_raiting_id'])=='')
    {
        $errors[] = 'Выберите возрастной рейтинг';
    }
    if (trim($data['ganre'])=='')
    {
        $errors[] = 'Введите жанр';
    }
    if (trim($data['producer_id'])=='')
    {
        $errors[] = 'Выберите режиссёра';
    }
    if((trim($data['type_id']) == 2) || (trim($data['type_id']) == '')){
        if (trim($data['series']) == '')
        {
            $errors[] = 'Введите серии';
        }
    }
    if (trim($data['studio_id'])=='')
    {
        $errors[] = 'Выберите студию';
    }
    if (trim($data['original_source_id'])=='')
    {
        $errors[] = 'Выберите первоисточник';
    }
    if (trim($data['voice_acting_id'])=='')
    {
        $errors[] = 'Выберите озвучку';
    }
    if (trim($data['translation_id'])=='')
    {
        $errors[] = 'Выберите озвучку';
    }
    if (trim($data['description'])=='')
    {
        $errors[] = 'Введите описание';
    }
    if (trim($data['iframe']) == '')
    {
        $errors[] = 'Добавьте ссылку';
    }
    if (R::count($table,"name = ?",array($data['name'])) > 0)
    {
        $errors[] = 'Аниме с таким названием уже добавлено!';
    }
    if (empty($errors))
    {
        $create = R::dispense($table);
        $create->tag_name = $data['tag_name'];
        $create->poster = $_FILES['poster']['name'];
        $create->name = $data['name'];
        $create->status_id = $data['status_id'];
        $create->year = $data['year'];
        $create->age_raiting_id = $data['age_raiting_id'];
        $create->ganre = $data['ganre'];
        $create->producer_id = $data['producer_id'];
        if($data['type_id'] == 2){
            $create->type_id = $data['type_id'];
            $create->series = $data['series'];
        } else {
            $create->type_id = $data['type_id'];
            $create->series = null;
        }
        $create->studio_id = $data['studio_id'];
        $create->original_source_id = $data['original_source_id'];
        $create->voice_acting_id = $data['voice_acting_id'];
        $create->translation_id = $data['translation_id'];
        $create->description = $data['description'];
        $create->iframe = $data['iframe'];
//        var_dump($create);die();
        R::store($create);
        echo 'Добавили!';
        header("Location: /admin/". $table . " /index.php");

    } else {
        echo '<div style="color: red;">'.array_shift($errors).'</div><hr>';
    }
    R::getLogger();
}
?>
<link rel="stylesheet" href="../../css/form.css">
<body>
    <h1>Аниме</h1>
    <div class="container">
        <form  enctype="multipart/form-data" method="post">
            <label>Постер</label><br>
            <input type="file" name="poster" value="<?= @$data['poster'] ?>"><br><br>
            <label>Группа</label><br>
            <input type="text" name="tag_name" value="<?php echo @$data['tag_name'];?>" placeholder="Группа"><br><br>
            <label>Название</label><br>
            <input type="text" name="name" value="<?php echo @$data['name'];?>" placeholder="Название"><br><br>
            <label>Статус</label><br>
            <select name="status_id">
                    <option value="0">-</option>
                <?php foreach ($status as $item){ ?>
                    <option value="<?= $item['id']?>"><?= $item['name']?></option>
                <?php } ?>
            </select><br><br>
            <label>Год выпуска</label><br>
            <input type="text" name="year" value="<?php echo @$data['year'];?>" placeholder="Год выпуска"><br><br>
            <label>Возрастной рейтинг</label><br>
            <select name="age_raiting_id">
                    <option value="0">-</option>
                <?php foreach ($age_raiting as $item){ ?>
                    <option value="<?= $item['id']?>"><?= $item['name']?></option>
                <?php } ?>
            </select><br><br>
            <label>Жанр</label><br>
            <input type="text" name="ganre" value="<?php echo @$data['ganre'];?>" placeholder="Жанр"><br><br>
            <label>Режиссёр</label><br>
            <select name="producer_id">
                    <option value="0">-</option>
                <?php foreach ($producer as $item){ ?>
                    <option value="<?= $item['id']?>"><?= $item['name']?></option>
                <?php } ?>
            </select><br><br>
            <label>Тип</label><br>
            <select name="type_id">
                    <option value="0">-</option>
                <?php foreach ($type as $item){ ?>
                    <option value="<?= $item['id']?>"><?= $item['name']?></option>
                <?php } ?>
            </select><br><br>
            <label>Серии</label><br>
            <input type="number" name="series" placeholder="Серии" value="<?= @$data['series']?>"><br><br>
            <label>Студия</label><br>
            <select name="studio_id">
                    <option value="0">-</option>
                <?php foreach ($studio as $item){ ?>
                    <option value="<?= $item['id']?>"><?= $item['name']?></option>
                <?php } ?>
            </select><br><br>
            <label>Первоисточник</label><br>
            <select name="original_source_id">
                    <option value="0">-</option>
                <?php foreach ($original_source as $item){ ?>
                    <option value="<?= $item['id']?>"><?= $item['name']?></option>
                <?php } ?>
            </select><br><br>
            <label>Перевод</label><br>
            <select name="translation_id">
                    <option value="0">-</option>
                <?php foreach ($translation as $item){ ?>
                    <option value="<?= $item['id']?>"><?= $item['name']?></option>
                <?php } ?>
            </select><br><br>
            <label>Озвучка</label><br>
            <select name="voice_acting_id">
                    <option value="0">-</option>
                <?php foreach ($voice_acting as $item){ ?>
                    <option value="<?= $item['id']?>"><?= $item['name']?></option>
                <?php } ?>
            </select><br><br>
            <label>Описание</label><br>
            <input type="text" name="description" placeholder="Описание" value="<?php echo @$data['description'];?>"><br><br>
            <label>Ссылка на видео</label><br>
            <input type="text" name="iframe" placeholder="Ссылка" value="<?php echo @$data['iframe'];?>"><br><br>
            <input name="do_create" type="submit" value="Добавить"/>
            <a href="/admin/<?= $table ?>/index.php">Назад</a>
        </form>
    </div>
</body>
