<!DOCTYPE html>
<html lang="fr">
    <?php require 'includes/header.php'; ?>
    <script type="text/javascript">
    $(document).ready(function(){
        $(".tc").toggle();
        $(".mc").click(function() {
            $(".t"+$(this).attr("id")).slideToggle("slow");
        }); 
    });

    </script>
    <style>
      .centre{
        padding : 1em;
      }
       .select{
        float: right;
      }
      
    </style>
    <body>
        <?php require 'includes/navbar.php'; ?>
      <div class="centre">
        <h3>Liste des chercheurs :</h3>
        <p>(cliquez sur un chercheur pour afficher ses informations et connectez vous pour voir plus)</p>
        <div class="filter-condition">
          <form id="myForm" action="chercheur.php" method="post">
            <div class="select">
            <span> trié par :</span>
            <select name="select" id="monSelect" onchange="document.getElementById('myForm').submit()">
                <option value="nom" <?php if(isset($_POST["select"])){
                  if(strcmp($_POST["select"], "nom") == 0 )
                  echo "selected";
                } ?>> Nom</option>
                <option value="prenom" <?php if(isset($_POST["select"])){
                  if(strcmp($_POST["select"], "prenom") == 0)
                  echo "selected";
                } ?>> Prénom</option>
                <option value="pays" <?php if(isset($_POST["select"])){
                  if(strcmp($_POST["select"], "pays") == 0)
                  echo "selected";
                } ?>> Pays</option>
            </select>
            </div>
        </form>
        </div>
        <br>
        <hr>

<?php
require 'includes/conn2.php';


$selected = "nom";
if(isset($_POST["select"])){
  $selected = $_POST["select"];
}


$sql = "SELECT name, nom, prenom, pays, affiliation, biographie FROM utilisateur ORDER BY " . $selected;
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    if(empty($_SESSION['username'])){
      echo "<div id=" . $row["name"] . " class='mc' >" . $row["nom"] . " " . $row["prenom"] . "</div>";
      echo "<div  class='tc t" . $row["name"] . "' > Affiliation :" . $row["affiliation"] . "</div>";
      echo "<hr>";
   }
   else{
    echo "<div id=" . $row["name"] . " class='mc' >" . $row["nom"] . " " . $row["prenom"] . "</div>";
    echo "<div  class='tc t" . $row["name"] . "' > pays :" . $row["pays"] . "</div>";
    echo "<div  class='tc t" . $row["name"] . "' > Affiliation :" . $row["affiliation"] . "</div>";
    echo "<div  class='tc t" . $row["name"] . "' > Bio :" . $row["biographie"] . "</div>";
    echo "<hr>";
   }

  }
} else {
  echo "0 results";
}
$conn->close();
?>
</div>





        <?php require 'includes/footer.php'; ?>
    </body>
</html>
