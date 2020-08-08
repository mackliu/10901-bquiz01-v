<?php

include_once "../base.php";

$table=$_POST['table'];
$db=new DB($table);
$row=$db->find(1);
switch($table){
    case "total":
        $row['total']=$_POST['total'];
        
    break;
    case "bottom":
        $row['bottom']=$_POST['bottom'];

    break;

}
    $db->save($row);

    to("../admin.php?do=$table");

?>