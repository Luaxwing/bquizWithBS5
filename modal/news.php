<h3>
    <!--  -->
新增最新消息資料
<!--  -->
</h3>
<hr>


<form action="./api/add.php" method="post" enctype="multipart/form-data">


    <table>
        <!-- <tr>
            <td>標題區圖片</td>
            <td><input type="file" name="img" id=""></td>
        </tr> -->

        <!--  -->
        <tr>
            <td>最新消息資料</td>
            <td><textarea type="text" name="text" id="" style="width:300px;height:150px;"></textarea></td>
        </tr>
        <!--  -->
        
    </table>
    <div>
        <input type="hidden" name="table" id="" value="<?=$_GET['table']?>">
        <input type="submit" value="新增">
        <input type="reset" value="重置">
    </div>

</form>