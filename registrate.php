<?php 
 
$sql = new mysqli("localhost", "root", "", "projectfront"); 
if($sql -> connect_error){ 
    die("Connection error: " . $sql -> connect_error); 
} 
 
if($_SERVER['REQUEST_METHOD'] == 'POST'){ 
    $name = $_REQUEST['name']; 
    $phone = $_REQUEST['phone']; 
   
} 
if($name !== "" and $phone !== ""){ 
    $q = "Insert into aizada (`name`, `phone`) values( '" . $name . "','"  . $phone . "')";     
}else{ 
    $q = "error"; 
} 
 
 
if($q === "error"){ 
    echo "Record is not created"; 
}else if ($sql->query($q) === TRUE) { 
    include("main.html"); 
}else { 
    echo "Error: " . $q . "<br>" . $sql->error; 
  }  
  $sql->close(); 
?>