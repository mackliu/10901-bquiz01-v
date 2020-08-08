<form action="api/add.php" method="post" enctype="multipart/form-data">
    <h3 class="cent">新增管理者帳號</h3>
    <hr>
    <table style="margin:auto">
        <tr>
            <td style="text-align:right">帳號：</td>
            <td><input type="text" name="acc"></td>
        </tr>
        <tr>
            <td style="text-align:right">密碼：</td>
            <td><input type="password" name="pw"></td>
        </tr>
        <tr>
            <td style="text-align:right">確認密碼：</td>
            <td><input type="password" name="pw2"></td>
        </tr>
    </table>
    <div class="cent">
        <input type="hidden" name="table" value="<?=$_GET['table'];?>">
        <input type="submit" value="新增">
        <input type="reset" value="重置">
    </div>
</form>