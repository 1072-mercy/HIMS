<?php
if(isset($_POST['submit'])){
$name =$_POST['name'];
$email =$_POST['email'];
$age =$_POST['age'];
$gender =$_POST['gender'];
$pwd =$_POST['passwd'];

//database connection
$conn = new mysqli('localhost','root','','tutorial2');
if($conn->connect_error){
    die('connection failed'.$conn->connect_error);

}else{
    $stmt = $conn->prepare("INSERT INTO registrstion(Name,Email,Age,Gender,password)VALUES(?,?,?,?)"); 
    $stmt->bind_param("ssibs",$name,$email,$age,$gender,$pwd);
    $stmt->execute();
    echo "REGISTRATION SECCESSFULL";
    $stmt->close();
     $conn->close();
}
}
