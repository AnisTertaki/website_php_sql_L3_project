<!DOCTYPE html>
<html lang="fr">
<style>

#listJornaux ul {
  list-style-type: none;
  padding: 0;
  margin: 0;
}

#listJornaux  ul li {
  border: 1px solid #ddd;
  margin-top: -1px; /* Prevent double borders */
  background-color: #f6f6f6;
  padding: 12px;
}

#listJornaux  ul li:hover {
    background-color: #A9A9A9;
}

#listJornaux a {
    text-decoration: none;
    color : black;
}

#listJornaux a strong
{
    color : #007bff;
}
.centre{
        padding : 1em;
      }

</style>


    <?php require 'includes/header.php'; ?>

    <body>
        <?php require 'includes/navbar.php'; ?>
        <div class="centre">
        <p>journaux</p>


<?php

require 'includes/conn2.php';

$sql = "SELECT titre, ISBN, éditeur, thème FROM journaux ORDER BY titre " ;
$result = $conn->query($sql);


echo "<div id='listJornaux'><ul>";

if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
echo "<li><a href='journal.php?ISBN=" . $row["ISBN"] . "'><strong>Titre : </strong>" . $row["titre"] . "<strong>   Thème : </strong>" . $row["thème"] . "<strong>   Editeur : </strong>"  . $row["éditeur"] . "</a></li>";  
}
echo "<div></ul>";
} else {
  echo "0 results";
}
$conn->close();
?>
<div>



        
        <?php require 'includes/footer.php'; ?>
    </body>
</html>
