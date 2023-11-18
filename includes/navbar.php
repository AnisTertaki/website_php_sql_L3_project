<a href="index.php"><img src="img/logo.webp" alt="logo" width="130" height="130"></a>
       <?php if(empty($_SESSION['username'])){
           echo "<a id='login' href='connexion.php'>Se connecter</a>";
        }
        else{
            //si session = 1 alors c'est l'admin sinon ce c'est un utilisateur
            if($_SESSION['id']==1){
                $_SESSION['id']='';
            }
            else{
                $_SESSION['id']='utilisateur';
            }
            echo "l'{$_SESSION['id']} {$_SESSION['username']}  est connecté";
            echo "<a id='login' href='deconnexion.php'>Se déconnecter</a>";
           
        }
        ?>
       
        <ul id="menu">
            <li><a href="chercheur.php">Chercheurs</a></li>
            <li><a href="publication.php">Publications</a></li>
            <li><a href="journaux.php">Journaux</a></li>
            <li><a href="conferences.php">Conférences</a></li>
        </ul>