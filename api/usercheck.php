<?php include_once "db.php" ; ?>
<?php

// $user=$Admin->find(['acc'=>$_POST['acc']]);

// if(isset($user['acc']) && $_POST['pw']==$user['pw']){
if($Admin->count(['acc'=>$_POST['acc'],'pw'=>$_POST['pw']])>0){
    // $_SESSION['login']=1;
    $_SESSION['login']=$_POST['acc'];
    to("../back.php");
}else{
    
    // $_SESSION['error']="請輸入正確的使用者";
    to("../?do=login&err=1");
}
