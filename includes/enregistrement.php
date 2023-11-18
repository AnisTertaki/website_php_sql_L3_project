<?php 
//ini_set('display_errors', 'on'); 
session_start();
header('location:../connexion.php');
$con=mysqli_connect('localhost','admin','admin');
mysqli_select_db($con,'projetweb');
$name=$_POST['user'];
$pass=$_POST['password'];

//permet de mettre des apostrophes
$bio=addslashes($_POST['biographie']);
$address=addslashes($_POST['$address']); 
$travail=addslashes($_POST['travail']); 
$grade=addslashes($_POST['grade']); 


$s ="select  * from utilisateur where name ='$name' ";
$result = mysqli_query($con,$s);
$num=mysqli_num_rows($result);

if($num == 1){

    $_SESSION['status']="<div class ='status'>pseudo deja pris</div>";
    header('location:../connexion.php');
}
else{
    $reg="insert into utilisateur(name,password,nom,prenom,date,pays,address,affiliation,travail,grade,recherche,biographie) values ('$name','$pass','{$_POST['nom']}','{$_POST['prenom']}','{$_POST['date']}','{$_POST['pays']}','$address','{$_POST['affiliation']}','$travail','$grade','{$_POST['recherche']}','$bio')";
    mysqli_query($con,$reg);
    $_SESSION['status']="<div class ='status'>Enregistrement Reussi !</div>";
    header('location:../connexion.php');
}

?>