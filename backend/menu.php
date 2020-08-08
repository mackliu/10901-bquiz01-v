<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
    <p class="t cent botli">選單管理</p>
    <form method="post" action="api/edit.php">
        <table width="100%">
            <tbody>
                <tr class="yel">

                    <td width="30%">主選單名稱</td>
                    <td width="30%">選單連結網址</td>
                    <td width="10%">次選單數</td>
                    <td width="10%">顯示</td>
                    <td width="10%">刪除</td>
                    <td></td>

                </tr>
                <?php
                $table=$do;
                $db=new DB($table);
                $rows=$db->all(['parent'=>0]);
                foreach($rows as $row){
                    $isChk=($row['sh']==1)?"checked":"";
                ?>
                <tr class="cent">
                    
                    <td><input type="text" name="name[]" value="<?=$row['name'];?>"></td>
                    <td><input type="text" name="href[]" value="<?=$row['href'];?>"></td>
                    <td><?=$db->count(['parent'=>$row['id']]);?></td>
                    <td><input type="checkbox" name="sh[]" value="<?=$row['id'];?>" <?=$isChk;?>></td>
                    <td><input type="checkbox" name="del[]" value="<?=$row['id'];?>"></td>
                    <td><input type="button" value="編輯次選單" onclick="op('#cover','#cvr','modal/submenu.php?table=<?=$table;?>&id=<?=$row['id'];?>')" ></td>
                    
                    <input type="hidden" name="id[]" value="<?=$row['id'];?>">
                </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
        <table style="margin-top:40px; width:70%;">
            <tbody>
                <tr>
                    <td width="200px">
                    <input type="hidden" name="table" value="<?=$table;?>">
                    <input type="button"  onclick="op('#cover','#cvr','modal/<?=$table;?>.php?table=<?=$table;?>')" value="新增主選單">
                    </td>
                    <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置">
                    </td>
                </tr>
            </tbody>
        </table>

    </form>
</div>