<?php

$sql = new mysqli("localhost", "root", "", "projectfront");
if($sql -> connect_error){
    die("Connection error: " . $sql -> connect_error);
}

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = $_REQUEST['name'];
    $phone = $_REQUEST['phone'];
    $email = $_REQUEST['email'];
    $comment = $_REQUEST['comment'];
}
if($name !== "" and $phone !== "" and $email !== "" and $comment!==""){
    $q = "Insert into zaiavka ( `name`, `phone`, `email`, `comment`) values( '" . $name . "','"  . $phone . "','"  . $email . "','"  . $comment . "')";    
}else{
    $q = "error";
}


if($q === "error"){
    echo "Record is not created";
}else if ($sql->query($q) === TRUE) {
    include("success.html");
}else {
    echo "Error: " . $q . "<br>" . $sql->error;
  } 
  $sql->close();
?>