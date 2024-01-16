
<div class="container" style="width:80%;">
<div width="100%" style="text-align:center;">
<h3>最新消息管理</h3>
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
                    <td width="80%">最新消息資料內容</td>
                    <td width="10%">顯示</td>
                    <td width="10%">刪除</td>
                </tr>
                <?php
                $total=$News->count();
                $div=5;
                $pages=ceil($total/$div);
                $now=$_GET['p']??1;
                $start=($now-1)*$div;
                $rows=$News->all(" limit $start,$div");
                foreach($rows as $row){
                ?>
                <tr>
                    <td>
                        <textarea type="text" name="text[]" style="width:90%;height:60px"><?=$row['text'];?></textarea>
                        <input type="hidden" name="id[]" value="<?=$row['id'];?>">
                    </td>
                    <td>
                        <input type="checkbox" name="sh[]" value="<?=$row['id'];?>" <?=($row['sh']==1)?'checked':'';?>>
                    </td>
                    <td>
                    <input type="checkbox" name="del[]" value="<?=$row['id'];?>">
                    </td>
                </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
        <div class="cent">
            
            <?php
                if($now>1){
                    $prev=$now-1;
                    echo "<a href='?do=$do&p=$prev'> < </a>";
                }

                for($i=1;$i<=$pages;$i++){
                    $fontsize=($now==$i)?'24px':'16px';
                    echo "<a href='?do=$do&p=$i' style='font-size:$fontsize'> $i </a>";
                }

                if($now<$pages){
                    $next=$now+1;
                    echo "<a href='?do=$do&p=$next'> > </a>";
                }
            ?>
        </div>
        <table style="margin-top:40px; width:70%;">
            <tbody>
                <tr>
                    <input type="hidden" name="table" value="<?=$do;?>">
                    <td width="200px"><input type="button" onclick="op('#cover','#cvr','./modal/<?=$do;?>.php?table=<?=$do;?>')" value="新增最新消息資料"></td>
                    <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置"></td>
                </tr>
            </tbody>
        </table>

    </form>












    </div>
    <div class="col"></div>
</div>

</div>


