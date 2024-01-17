<?php
switch($_GET['table']){
case "title":
    echo "<h3>更新網站標題圖片</h3>";
    break;
case "mvim":
    echo "<h3>更新動畫圖片</h3>";
    break;
}
?>






<hr>


<form action="./api/update.php" method="post" enctype="multipart/form-data">


    <table>
        <tr>

        <?php
switch($_GET['table']){
case "title":
    echo "<td>標題區圖片</td>";
    break;
case "mvim":
    echo "<td>動畫圖片</td>";
    break;
}
?>
            
            <td><input type="file" name="img" id=""></td>
        </tr>

    </table>
    <div>
        <input type="hidden" name="table" id="" value="<?= $_GET['table'] ?>">
        <input type="hidden" name="id" id="" value="<?= $_GET['id'] ?>">
        <input type="submit" value="新增">
        <input type="reset" value="重置">
    </div>

</form>