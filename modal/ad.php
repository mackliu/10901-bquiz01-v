<form action="api/add.php" method="post" enctype="multipart/form-data">
    <h3 class="cent">新增動態文字廣告</h3>
    <hr>
    <table style="margin:auto">
        
        <tr>
            <td style="text-align:right">動態文字廣告：</td>
            <td><input type="text" name="text"></td>
        </tr>
    </table>
    <div class="cent">
        <input type="hidden" name="table" value="<?=$_GET['table'];?>">
        <input type="submit" value="新增">
        <input type="reset" value="重置">
    </div>
</form>