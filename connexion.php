<!DOCTYPE html>
<html lang="fr">

    <?php require 'includes/header.php'; ?>
    <style>
        form{border: 3px solid #f1#f1#f1;width:50%;}
        input[type=text],input[type=password]{
            width:90%;
            padding:12px 20px;
            margin: 8px 0;

        }
        button{
            background-color:#4CAF50;
            padding:14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width:100%;
        }
        button:hover {
            opacity:0.8;
        }
        .box1{
            box-sizing: border-box;
            width: 100%;
            border: solid #5B6DCD 10px;
            padding: 5px;
        }
        .login-box{
            padding: 5%;
        }

        .inscription{
            padding: 1%;
            border: solid;
            color: blue;

        }
        textarea {
        width: 100%;
        height: 150px;
        padding: 12px 20px;
        box-sizing: border-box;
        border: 2px solid #ccc;
        border-radius: 4px;
        background-color: #f8f8f8;
        resize: none;
        }   
        
    </style>
    <body>
        <?php require 'includes/navbar.php'; ?>
            <?php
                if(isset($_SESSION['status'])){
                   ?> <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Attention!</strong> <?php echo $_SESSION['status'];?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <?php 
                   
                    unset($_SESSION['status']);
                }
            ?>
            <div class ="container">
               <div class="login-box">
                <div class="row">
                <div class="col-md-6">
                    <h2>Connexion </h2>
                    <form action = "includes/validation.php" method="post">
                        <div class="form-group">
                            <label>Pseudo</label>
                            <input type="text" name="user" class="form-control" required>

                        </div>
                        <div class="form-group">
                            <label>Mot de passe</label>
                            <input type="password" name="password" class="form-control" required>
                            <button type="submit" class="btn btn-primary">login</button>
                        </div> 
                    </form>
                </div>
                
                <div class="col-md-6">
                <div class="inscription">
                    <h2>Inscription :</h2>
                    <form action = "includes/enregistrement.php" method="post">
                        <div class="box1">
                            <h5>Information personnelle : </h5>
                            <div class="form-group">
                                <label>Nom</label>
                                <input type="text" name="nom" class="form-control" required>
                                <label>Prénom</label>
                                <input type="text" name="prenom" class="form-control" required>
                                <label>Date</label>
                                <input type="date" name="date" class="form-control" required>
                                <label>Pays :</label>
                                <input type="text" name="pays" class="form-control" required>
                                <label>Addresse :</label>
                                <input type="text" name="address" class="form-control" size="50" required>

                            </div>
                        </div>

                        <div class="form-group">
                            <br>
                               
                                <label for="aff">Choisissez structure d'affiliation : </label>
                                <select id="aff" name="affiliation">
                                    <option value="informatique">Informatique</option>
                                    <option value="math">Mathematique</option>
                                    <option value="Biologie">Biologie</option>
                                    <option value="Physique">Physique</option>
                                </select>
                                <br>
                                <br>
                                <div class="inscription">
                                <table>
                                <tr>
                                    <td>Travail:</td>
                                    <td>Grade:</td>
                                </tr>
                                <tr>
                                    <td><input type="text" name="travail" class="form-control" required></td>
                                    <td> <input type="text" name="grade" class="form-control" required></td>
                                </tr>
                                </table>
                                <br>
                                <label for="rec">Thematique de recherche </label>
                                <select id="rec" name="recherche">
                                    <option value="informatique">Informatique</option>
                                    <option value="math">Mathematique</option>
                                    <option value="Biologie">Biologie</option>
                                    <option value="Physique">Physique</option>
                                </select>                                     
                                </div>

                        </div>
                        <div class="elem-group">
                            <label for="message">Biographie</label>
                            <textarea id="message" name="biographie" placeholder="ecrivez se que vous voulez" required></textarea>
                        </div>
                        <div class="form-group">
                            <label>Pseudo</label>
                            <input type="text" name="user" class="form-control" required>
                            <label>Mot de passe</label>
                            <input type="password" name="password" class="form-control" required>
                            <button type="submit" class="btn btn-primary">S'enregistrer</button>

                        </div>
                    </form>
                </div>
                </div>
                </div>
                </div>  
            </div>
        <?php require 'includes/footer.php'; ?>
    </body>
</html>
