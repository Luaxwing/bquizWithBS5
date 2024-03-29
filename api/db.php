<?php
date_default_timezone_set("Asia/Taipei");
session_start();
class DB
{
    // 定義class函數 "資料庫" "PDO" "TABLE"
    // protected $dsn = "mysql:host=localhost;charset=utf8;dbname=s1120425";
    protected $dsn = "mysql:host=localhost;charset=utf8;dbname=db91";
    protected $pdo;
    protected $table;
    //$sql 放置MariaDB 的查找語句
// 
// 執行DB時 將自訂義的table 帶入 DB函數
// PDO:PHP Data Objects_登入
    public function __construct($table)
    {
        $this->table = $table;
        // $this->pdo = new PDO($this->dsn, 's1120425', 's1120425');
        $this->pdo = new PDO($this->dsn, 'root', '');
    }
    // 
// 測試檢視資料表用
    function all($where = '', $other = '')
    {
        $sql = "select * from `$this->table` ";
        $sql = $this->sql_all($sql, $where, $other);
        return $this->pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);

        // if (isset($this->table) && !empty($this->table)) {

        //     if (is_array($where)) {

        //         if (!empty($where)) {
        //             $tmp = $this->a2s($where);
        //             $sql .= " where " . join(" && ", $tmp);
        //         }
        //     } else {
        //         $sql .= " $where";
        //     }

        //     $sql .= $other;
        //     $rows = $this->pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        //     return $rows;
        // } else {
        //     echo "錯誤:沒有指定的資料表名稱";
        // }
    }
    // 
    // 驗證指定資料欄位中的值是否有對應對象
    function count($where = '', $other = '')
    {
        $sql = "select count(*) from `$this->table` ";
        $sql = $this->sql_all($sql, $where, $other);
        return $this->pdo->query($sql)->fetchColumn();
    }

    // 整合函式
// $math=方法
    function math($math, $col = "*", $array = "", $other = "")
    {
        // $result=$this->$math($col,$array,$other);
        // return $result;
        $sql = "select $math(`$col`) from `$this->table` ";
        $sql = $this->sql_all($sql, $array, $other);
        return $this->pdo->query($sql)->fetchColumn();
    }



    // SUM-計算table v col 中的 "數值"
// 要指定欄位
    function sum($col, $where = '', $other = '')
    {
        $sql = "select sum(`$col`) from `$this->table` ";
        $sql = $this->sql_all($sql, $where, $other);
        return $this->pdo->query($sql)->fetchColumn();
    }
    // 

    // max
// 要指定欄位
    function max($col, $where = '', $other = '')
    {
        $sql = "select max(`$col`) from `$this->table` ";
        $sql = $this->sql_all($sql, $where, $other);
        return $this->pdo->query($sql)->fetchColumn();
        ;
    }
    // 

    // min
// 要指定欄位
    function min($col, $where = '', $other = '')
    {
        $sql = "select min(`$col`) from `$this->table` ";
        $sql = $this->sql_all($sql, $where, $other);
        return $this->pdo->query($sql)->fetchColumn();
        ;
    }
    // 

    // 
    // 查找特定ID
    function find($id)
    {
        $sql = "select * from `$this->table` ";

        if (is_array($id)) {
            $tmp = $this->a2s($id);
            $sql .= " where " . join(" && ", $tmp);
        } else if (is_numeric($id)) {
            $sql .= " where `id`='$id'";
        } else {
            echo "錯誤:參數的資料型態比須是數字或陣列";
        }
        //echo 'find=>'.$sql;
        $row = $this->pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
        return $row;
    }
    // 
    // 做儲存/更新用
    function save($array)
    {
        // 驗證資料是否存在
        // 若存在則更新內容
        if (isset($array['id'])) {
            $sql = "update `$this->table` set ";

            if (!empty($array)) {
                $tmp = $this->a2s($array);
            } else {
                echo "錯誤:缺少要編輯的欄位陣列";
            }

            $sql .= join(",", $tmp);
            $sql .= " where `id`='{$array['id']}'";
        }
        // 
        // 若不存在則新增一筆資料
        else {
            $sql = "insert into `$this->table` ";
            $cols = "(`" . join("`,`", array_keys($array)) . "`)";
            $vals = "('" . join("','", $array) . "')";

            $sql = $sql . $cols . " values " . $vals;
        }

        return $this->pdo->exec($sql);
    }
    // 
// 刪除資料
    function del($id)
    {
        $sql = "delete from `$this->table` where ";

        if (is_array($id)) {
            $tmp = $this->a2s($id);
            $sql .= join(" && ", $tmp);
        } else if (is_numeric($id)) {
            $sql .= " `id`='$id'";
        } else {
            echo "錯誤:參數的資料型態比須是數字或陣列";
        }
        //echo $sql;

        return $this->pdo->exec($sql);
    }
    // 
    // 受不了重複的程式碼
    function q($sql)
    {
        return $this->pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);

    }
    // 簡化上述重複程式，詳細見上列函式
// array to sql
    private function a2s($array)
    {
        foreach ($array as $col => $value) {
            $tmp[] = "`$col`='$value'";
        }
        return $tmp;
    }
    //  
    // 
    private function sql_all($sql, $array, $other)
    {
        if (isset($this->table) && !empty($this->table)) {

            if (is_array($array)) {

                if (!empty($array)) {
                    $tmp = $this->a2s($array);
                    $sql .= " where " . join(" && ", $tmp);
                }
            } else {
                $sql .= " $array";
            }

            $sql .= $other;
            //echo 'all=>'.$sql;
            // $rows = $this->pdo->query($sql)->fetchColumn();
            return $sql;
        } else {
            echo "錯誤:沒有指定的資料表名稱";
        }
    }
}

function dd($array)
{
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}

function to($str){
    header("location:$str");
}

function pageInit($total, $div)
{
    $pages = ceil($total / $div);
    $now = $_GET['p'] ?? 1;
    $start = ($now - 1) * $div;
    $array = [$pages, $now, $start];
    return $array;
}
;

// 分頁標籤
function pagetabs($now, $pages, $table = "")
{
    $str = ($table != "") ? "do=$table&" : "";
    $prev = $now - 1;
    if ($prev >= 1) {

        echo "<a href='?do=$table&p=$prev'> &lt; </a>";
    }

    for ($i = 1; $i <= $pages; $i++) {
        $fontsize = ($now == $i) ? '24px' : '16px';
        echo " <a href=?{$str}p=$i";
        echo " style=font-size:$fontsize;";
        // if($i==$now){
        //     echo " style=font-size:25px;";
        // }
        echo ">";
        echo $i;
        echo "</a>";
    }

    $next = $now + 1;
    if ($next <= $pages) {
        echo "<a href='?{$str}p=$next'> &gt; </a>";
    }

}



















// 記得:這裡的table是輸入字串，不是欄位
// 引入字串，字串才去帶`col`
// $Test=new DB('test');









$Admin=new DB('admin');
$News=new DB('news');
$Img=new DB("image");
$Mvim=new DB("mvim");
$Title=new DB("title");




?>