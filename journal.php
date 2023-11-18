<!DOCTYPE html>
<html lang="fr">
    <?php require 'includes/header.php'; ?>

    <body>
        <?php require 'includes/navbar.php'; ?>


        <?php

require 'includes/conn2.php';

$sql = "SELECT titre, ISBN, éditeur, thème FROM journaux WHERE ISBN=" . $_GET["ISBN"] ;
$result = $conn->query($sql);




if ($result->num_rows > 0) {

$row = $result->fetch_assoc() ;
}
else {
    echo "0 results";
}
$conn->close();

?>

<div class="container" style="overflow:hidden;">
<div class="row">
<div id="jouranlInfo" class="col-md-6" >
    <h3>ISBN</h3>
    <p><?php echo $_GET["ISBN"] ?></p>
    <h3>Titre</h3>
    <p> <?php echo $row["titre"]?></p>
    <h3>Auteur</h3>
    <p><?php echo $row["éditeur"]?></p>
    <h3>Thème</h3>
    <p><?php echo $row["thème"]?></p>
    

</div>

<div class="col-md-6"><img src="img/news.jpg" alt="jouranl" style="width=100%;">
</div>
        

</div>
</div>




        <?php require 'includes/footer.php'; ?>
    </body>
</html>
