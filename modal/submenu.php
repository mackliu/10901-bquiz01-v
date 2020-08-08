<form action="api/submenu.php" method="post" enctype="multipart/form-data">
    <h3 class="cent">編輯次選單</h3>
    <hr>
    <table style="margin:auto;text-align:center" id="submenu">
        <tr>
            <td>次選單名稱</td>
            <td>次選單連結網址</td>
            <td>刪除</td>
        </tr>
        <?php
        include "../base.php";
        $db=new DB('menu');
        $rows=$db->all(['parent'=>$_GET['id']]);
        foreach($rows as $row){
        ?>
        <tr>
            <td><input type="text" name="name[]" value="<?=$row['name'];?>"></td>
            <td><input type="text" name="href[]" value="<?=$row['href'];?>"></td>
            <td><input type="checkbox" name="del[]" value="<?=$row['id'];?>"></td>
            <input type="hidden" name="id[]" value="<?=$row['id'];?>">
        </tr>
        <?php
        }
        ?>
    </table>
    <div class="cent">
        <input type="hidden" name="table" value="<?=$_GET['table'];?>">
        <input type="hidden" name="parent" value="<?=$_GET['id'];?>">
        <input type="submit" value="修改確定">
        <input type="reset" value="重置">
        <input type="button" value="更多次選單" onclick="more()">
    </div>
</form>
<script>

function more(){
    let row=`
        <tr>
            <td><input type="text" name="name2[]"></td>
            <td><input type="text" name="href2[]"></td>
            <td></td>
        </tr>
    `
    $("#submenu").append(row);
}
</script>