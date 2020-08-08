<form action="api/upload.php" method="post" enctype="multipart/form-data">
    <h3 class="cent">更換動畫圖片</h3>
    <hr>
    <table style="margin:auto">
        <tr>
            <td style="text-align:right">動畫圖片：</td>
            <td><input type="file" name="img"></td>
        </tr>
    </table>
    <div class="cent">
        <input type="hidden" name="table" value="<?=$_GET['table'];?>">
        <input type="hidden" name="id" value="<?=$_GET['id'];?>">
        <input type="submit" value="更新">
        <input type="reset" value="重置">
    </div>
</form>