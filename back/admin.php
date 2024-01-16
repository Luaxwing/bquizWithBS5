
<div class="container" style="width:80%;">
<div width="100%" style="text-align:center;">
<h3>管理者帳號管理</h3>
</div>
<br>
<hr>
<div class="row">
    <div class="col"></div>
    <div class="col-8">
    <form method="post" action="./api/edit.php">
        <table width="100%" style="text-align: center">
            <tbody>
                <tr class="yel">
                    <td width="45%">帳號</td>
                    <td width="45%">密碼</td>
                    <td width="10%">刪除</td>
                </tr>
                <?php

                $rows=$Admin->all();
                foreach($rows as $row){
                ?>
                <tr>
                    <td>
                        <input type="text" name="acc[]" style="width:90%" value="<?=$row['acc'];?>">
                    </td>
                    <td>
                        <input type="password" name="pw[]" value="<?=$row['pw'];?>">
                    </td>
                    <td>
                    <input type="checkbox" name="del[]" value="<?=$row['id'];?>">
                    </td>
                </tr>
                <input type="hidden" name="id[]" value="<?=$row['id'];?>">
                <?php
                }
                ?>
            </tbody>
        </table>
        <table style="margin-top:40px; width:70%;">
            <tbody>
                <tr>
                    <input type="hidden" name="table" value="<?=$do;?>">
                    <td width="200px"><input type="button" onclick="op('#cover','#cvr','./modal/<?=$do;?>.php?table=<?=$do;?>')" value="新增管理者帳號"></td>
                    <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置"></td>
                </tr>
            </tbody>
        </table>

    </form>

    </div>
    <div class="col"></div>
</div>

</div>


