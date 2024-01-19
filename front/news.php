<?php

if(isset($_GET['news'])){
    $new=$News->find(["id" => $_GET['news']]);
    echo "<pre>".$new['text']."</pre>";
}
?>