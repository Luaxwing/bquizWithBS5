<div class="container" style="width:80%;height:100%;;overflow-y:scroll;">
    <div width="100%" style="text-align:center;">
        <h3>動態輪播牆管理</h3>
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
                <td width="70%">校園映像圖片</td>
                <td width="10%">顯示</td>
                <td width="10%">刪除</td>
                <td></td>
            </tr>
            <?php
            // $Img=${ucfirst($do)};
            // $rows=$Img->all();
            $total = $Img->count();
            $div = 4;

            
            [$pages, $now, $start]=pageInit($total, $div);
            $rows = $Img->all("limit $start,$div");
            foreach ($rows as $row) {
                ?>
                <tr>
                    <td>
                        <img src="./img/<?= $row['img']; ?>" style="width:100px;height:68px">
                    </td>
                    <!--  -->
                    <input type="hidden" name="id[]" value="<?= $row['id']; ?>">
                    <!--  -->
                    <td>
                        <input type="checkbox" name="sh[]" value="<?= $row['id']; ?>" <?= ($row['sh'] == 1) ? 'checked' : ''; ?>>
                    </td>
                    <td>
                        <input type="checkbox" name="del[]" value="<?= $row['id']; ?>">
                    </td>
                    <td>
                        <input type="button"
                            onclick="op('#cover','#cvr','./modal/upload.php?table=<?= $do; ?>&id=<?= $row['id']; ?>')"
                            value="更換動畫">
                    </td>
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>
    <div class="cent">
        <?php
        pagetabs($now, $pages, $_GET['do']);
        ?>
    </div>
    <table style="margin-top:40px; width:70%;">
        <tbody>
            <tr>
                <input type="hidden" name="table" value="<?= $do; ?>">
                <td width="200px"><input type="button"
                        onclick="op('#cover','#cvr','./modal/<?= $do; ?>.php?table=<?= $do; ?>')" value="新增校園映像圖片"></td>
                <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置"></td>
            </tr>
        </tbody>
    </table>

</form>




</div>
        <div class="col"></div>
    </div>

</div>