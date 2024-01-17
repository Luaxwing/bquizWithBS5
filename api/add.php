<?php
include_once "db.php";


$DB = ${ucfirst($_POST['table'])};
$table = $_POST['table'];

switch ($table) {
    case 'admin':
        unset($_POST['pw2']);
        break;
}

if (isset($_FILES['img']['tmp_name'])) {
    move_uploaded_file($_FILES['img']['tmp_name'], "../img/" . $_FILES['img']['name']);
    $_POST['img'] = $_FILES['img']['name'];
}

if ($table != "admin") {
    //標題頁sh預設為0(不顯示)，其他為1(顯示)
    $_POST['sh'] = ($table == 'title') ? 0 : 1;
}

unset($_POST['table']);
$DB->save($_POST);

to("../back.php?do=$table");


?>