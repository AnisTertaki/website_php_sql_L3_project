<!DOCTYPE html>
<html lang="fr">

<style>
    h5,h3
    {
        font-weight: bolder !important;
    }
    #conferenceInfos{
        background-image : url("img/conference.png");
    }

</style>

    <?php 
    ini_set('display_errors', 'on'); 
    require 'includes/header.php'; ?>

    <body>
        <?php require 'includes/navbar.php'; ?>
        


        <?php

require 'includes/conn2.php';


$sql =  "SELECT id, titre, abreviation, sujet, date, dateLimite, conferencier, pays FROM conferences WHERE id=" . $_GET["id"] ;
$result = $conn->query($sql);




if ($result->num_rows > 0) {

$row = $result->fetch_assoc() ;
}
else {
    echo "0 results";
}
$conn->close();

?>


<div id="conferenceInfos" class="container"  style="height:1012px;">
    <h3><?php echo $row["titre"] ?></h3>
    <p><?php echo $row["abreviation"] ?></p>
    <h5>Sujet </h5>
    <p><?php echo $row["sujet"] ?>.</p>
    <p><strong>Date : </strong><?php echo $row["date"] ?><strong>  Date-limite :</strong><?php echo $row["dateLimite"] ?></p>
    <h5>Conferencier principal</h5>
    <p><?php echo $row["conferencier"] ?>.</p>
    <h5>Pays</h5>
    <p><?php echo $row["pays"] ?>.</p>

</div>

        





        <?php require 'includes/footer.php'; ?>
    </body>
</html>
