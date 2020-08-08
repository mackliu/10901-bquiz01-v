<?php

include_once "../base.php";

$table=$_POST['table'];
$db=new DB($table);
$data=[];

if(!empty($_FILES['img']['tmp_name'])){
    $filename=$_FILES['img']['name'];
    move_uploaded_file($_FILES['img']['tmp_name'],'../img/'.$filename);
    $data['img']=$filename;
}

switch($table){
    case "title":
        $data['text']=$_POST['text'];
        $data['sh']=0;
    break;
    case "admin":
        $data['acc']=$_POST['acc'];
        $data['pw']=$_POST['pw'];
    break;
    case "menu":
        $data['name']=$_POST['name'];
        $data['href']=$_POST['href'];
        $data['sh']=1;
    break;
    default:
        $data['text']=$_POST['text'];
        $data['sh']=1;
    break;
}

    $db->save($data);

    to("../admin.php?do=$table");

?>