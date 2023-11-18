<!DOCTYPE html>
<html lang="fr">

<style>
    table {
  border-collapse: collapse !important;
  width: 100%;
}

th, td {
  padding: 8px;
  text-align: left;
  border-bottom: 1px solid #DDD !important;
}
      .centre{
        padding : 1em;
      }
     
      .select{
        float: right;
      }


tr:hover {background-color: #D6EEEE;}
</style>

    <?php require 'includes/header.php'; ?>

    <body>
        <?php require 'includes/navbar.php'; ?>
        <div class="centre">
        <div class="filter-condition">
          <form id="myForm" action="publication.php" method="post">
            <div class="select">
            <span> trié par :</span>
            <select name="select" id="monSelect" onchange="document.getElementById('myForm').submit()">
                <option value="titre" <?php if(isset($_POST["select"])){
                  if(strcmp($_POST["select"], "titre") == 0 )
                  echo "selected";
                } ?>>Titre</option>
                <option value="date" <?php if(isset($_POST["select"])){
                  if(strcmp($_POST["select"], "date") == 0)
                  echo "selected";
                } ?>>Date</option>
            </select>
            </div>
        </form>
        </div>
        
        <p>publication :</p>

        <?php
require 'includes/conn2.php';


$selected = "titre";
if(isset($_POST["select"])){
  $selected = $_POST["select"];
}


$sql = "SELECT titre, auteur, contenu, date FROM publication ORDER BY " . $selected;
$result = $conn->query($sql);


echo "<table>  <tr>
<th>titre</th>
<th>auteur</th>
<th>contenu</th>
<th>date publication</th>
</tr>";


if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {

    echo "<tr><td>" . $row["titre"]. "</td><td>" . $row["auteur"]. "</td><td>" . $row["contenu"]. "</td><td>" . $row["date"] . "</td></tr>";
}
echo "</table>";
} else {
  echo "0 results";
}
$conn->close();
?>

</div>

        <?php require 'includes/footer.php'; ?>



      
    </body>
</html>
