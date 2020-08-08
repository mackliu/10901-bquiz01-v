<?php

include_once "../base.php";

$table=$_POST['table'];
$db=new DB($table);
$parent=$_POST['parent'];

if(!empty($_POST['id'])){
    foreach($_POST['id'] as $key => $id){
        if(!empty($_POST['del']) && in_array($id,$_POST['del'])){
            $db->del($id);
        }else{
            $row=$db->find($id);
            $row['name']=$_POST['name'][$key];
            $row['href']=$_POST['href'][$key];
            $db->save($row);
        }
    }
}

if(!empty($_POST['name2'])){
    foreach($_POST['name2'] as $key=>$name){
        $new=[];
        $new['name']=$name;
        $new['href']=$_POST['href2'][$key];
        $new['sh']=1;
        $new['parent']=$parent;
        $db->save($new);
    }
}

to("../admin.php?do=menu");

?>