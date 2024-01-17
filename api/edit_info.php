<?php include_once "db.php" ; ?>
<?php 
// $_POST['total'];

// 取得資料表名稱
$table=$_POST['table'];

// 將資料表名稱轉成首字母大寫的資料庫物件變數
$DB=${ucfirst($table)};

// 取得id為1的資料
$data=$DB->find(1);
// 將對應欄位資料改成POST過來的值
$data[$table]=$_POST[$table];
// 儲存至資料庫
$DB->save($data);

// header("location:../back.php?do=total");
to("../back.php?do=$table");

?>