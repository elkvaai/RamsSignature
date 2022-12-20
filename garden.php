<?php

$sql = new mysqli("localhost", "root", "", "projectfront");
if($sql -> connect_error){
    die("Connection error: " . $sql -> connect_error);
}

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = $_REQUEST['name'];
    $phone = $_REQUEST['phone'];
    $email = $_REQUEST['email'];
}
if($name !== "" and $phone !== "" and $email !== "" ){
    $q = "Insert into aiz ( `name`, `phone`, `email`) values( '" . $name . "','"  . $phone . "','"  . $email . "')";    
}else{
    $q = "error";
}


if($q === "error"){
    echo "Record is not created";
}else if ($sql->query($q) === TRUE) {
    include("gar.html");
}else {
    echo "Error: " . $q . "<br>" . $sql->error;
  } 
  $sql->close();
?>