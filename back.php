<?php  
  
$sql = new mysqli("localhost", "root", "", "projectfront");  
if($sql -> connect_error){  
    die("Connection error: " . $sql -> connect_error);  
}  
  
if($_SERVER['REQUEST_METHOD'] == 'POST'){  
    $name = $_REQUEST['name'];  
    $email = $_REQUEST['email']; 
    $phone = $_REQUEST['phone'];  
}  
if($name !== "" and $email !== "" and $phone !== ""){  
    $q = "Insert into daiana ( name, email, phone) values( '" . $name . "','" . $email . "','" . $phone . "')";      
}else{  
    $q = "error";  
}  
  
  
if($q === "error"){  
    echo "Record is not created";  
}else if ($sql->query($q) === TRUE) {  
    include("yes.html");  
}else {  
    echo "Error: " . $q . "<br>" . $sql->error;  
  }   
  $sql->close();  
?>