<!DOCTYPE html>
<html lang="fr">

<style>
    table {
  border-collapse: collapse !important ;
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
          <div class="select">
        <div class="filter-condition">
          <form id="myForm" action="conferences.php" method="post">
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
        </form>
        </div>
        </div>
        
        <p>Conférences :</p>

        <?php
$servername = "localhost";
$username = "admin";
$password = "admin";
$dbname = "projetweb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$selected = "titre";
if(isset($_POST["select"])){
  $selected = $_POST["select"];
}


$sql = "SELECT id, titre, abreviation, sujet, date, dateLimite, conferencier, pays FROM conferences ORDER BY " . $selected;
$result = $conn->query($sql);


echo "<table> <tr>
<th>titre de la conference</th>
<th>abreviation</th>
<th>sujet</th>
<th>date</th>
<th>date limite inscreption</th>
<th>conferencier principal</th>
<th>pays</th>
</tr>";


if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {

    echo "<tr><td><a href='conference.php?id=" . $row["id"] . "'>" . $row["titre"] . "</a></td><td>" . $row["abreviation"]. "</td><td>" . $row["sujet"]. "</td><td>" . $row["date"] . "</td><td>" . $row["dateLimite"]. "</td><td>" . $row["conferencier"]. "</td><td>" . $row["pays"]. "</td></tr>";
}
echo "</table>";
} else {
  echo "0 results";
}
$conn->close();
?>
<div>


        <?php require 'includes/footer.php'; ?>



      
    </body>
</html>
