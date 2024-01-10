<div class="container loginP">
    <div class="loginF">
        <fieldset>
            <legend>會員登入</legend>
            <table>
            <form method="post" action="./api/usercheck.php">
                <tr>
                    <td class='clo'>帳號</td>
                    <td><input type="text" name="acc" id="acc"></td>
                </tr>
                <tr>
                    <td class='clo'>密碼</td>
                    <td><input type="password" name="pw" id="pw"></td>
                </tr>

                <?=
                    $error = (isset($_GET['err'])) ? "<tr><td><span class='errL'>請輸入正確的帳號密碼</span></td></tr>" : "";
                ?>

                <tr>
                    <td>
                    <input value="送出" type="submit">
                    <input type="reset" value="清除">
                    </td>
                    <td>
                        <a href="?do=forget">忘記密碼</a> | <a href="?do=reg">尚未註冊</a>
                    </td>
                </tr>
</form>
            </table>
        </fieldset>
    </div>


</div>

