<?php 
ini_set('display_errors', 'on'); 
session_start();

$con=mysqli_connect('localhost','admin','admin');
mysqli_select_db($con,'projetweb');
$name=$_POST['user'];
$pass=$_POST['password'];
$s ="select  * from utilisateur where name ='$name' && password = '$pass' ";
$result = mysqli_query($con,$s);
$num=mysqli_num_rows($result);

//met dans tableau row la requete sql
$row = $result->fetch_assoc();

if($num == 1){
    $_SESSION['username']=$name;
    $_SESSION['id']=$row['admin'];
   
   header('location:../index.php');
}
else{
    $_SESSION['status']="Le nom d'utilisateur ou le mot de passe est faux";
    header('location:../connexion.php');
}

?>