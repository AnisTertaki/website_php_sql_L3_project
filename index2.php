<!DOCTYPE html>

<html lang="fr">
    <?php 
    ini_set('display_errors', 'on'); 
    require 'includes/header.php'; ?>
    <body>
        <?php require 'includes/navbar.php'; ?>
             
        <!-- (A)Bouton pour mettre l'image dans la base de donnée -->
<form method="post" enctype="multipart/form-data">
  <input type="file" name="upload" accept=".pdf" required>
  <input type="submit" name="submit" value="Upload Image">
</form>

<?php
// (B) on sauvegarde l'image dans la base de donnée
if (isset($_FILES["upload"])) {
  try {
    // (B1) On se connecte a la base de donnée
    require "includes/conn.php";

    // (B2) On lit l'image *on supprimer l'ancienne image* et on insert la nouvelle
   // $sql = "DELETE FROM images WHERE id=1" ;
    //$pdo->query($sql);

    $stmt = $pdo->prepare("INSERT INTO `images` (`img_name`, `img_data`) VALUES (?,?)");
    $stmt->execute([$_FILES["upload"]["name"], file_get_contents($_FILES["upload"]["tmp_name"])]);
    echo "Image bien enregistré";

    $res=$pdo->query("SELECT * FROM images");
    $img = $res->fetch_assoc();
      
      //Render the image
      header("Content-type: image/jpg"); 
      echo $img['image']; 

    
  } catch (Exception $ex) { echo $ex->getMessage(); }
}
?>
        <?php require 'includes/footer.php'; ?>
    </body>
</html>
