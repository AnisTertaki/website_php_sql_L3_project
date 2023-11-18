<!DOCTYPE html>

<html lang="fr">
    <?php require 'includes/header.php'; ?>
    <link rel="stylesheet" href="asset/index.css">
  <link rel="stylesheet" href="asset/accueil.css">
    <body>
        <?php require 'includes/navbar.php'; ?>
        <div id="mainContainer" class="row">

    <div class="col-md-9">
        <div class="row">
        <div class="col-sm-8" style="text-align: justify;">
            <h3>présentation du site</h3>
            <p>
            Nous considérons la Science ouverte comme un atout et une force motrice qui accélère la circulation des informations entre les chercheurs et chercheuses afin d'augmenter l'efficacité de la science et multiplier les découvertes.

Notre site s'engage pour une transition durable vers la Science ouverte. Nous offrons aux scientifiques, et aux institutions différentes options de libre accès pour les revues, les livres et le partage des données de recherche. Nous favorisons la découverte et le libre accès à la recherche grâce à nos partenariats et à notre collaboration étroite avec les différentes communautés dans les domaines de la science, de la technologie, de la médecine, des sciences humaines et sociales.

Depuis plus de 20 ans, et notamment à la suite du rôle pionnier de BMC en faveur du libre accès, l'ouverture et l'innovation sont au cœur de notre activité. Aujourd'hui, nous publions le portefeuille en libre accès le plus important au monde.
            </p>
        </div>
        <div class="col-sm-4">
            <h3>annexes</h3>
            <ul>
                <li>Modèles, lois et théories scientifiques</li>
                <li>Séquences d'acides nucléiques</li>
                <li>Données sur la structure</li>
                <li>ADN et données cliniques relatives au complexe majeur d'histocompatibilité (CMH) humain</li>
                <li>Données à l’origine de publications scientifiques et médicales</li>
                <li>Données sur la protéomique1</li>
            </ul>
        </div>
    </div>
    <div class="slideshow-container">

        <div class="mySlides fade">
          <img src="img/galaxie.jpg" style="width:100%">
          <div class="text">galaxie</div>
        </div>
        
        <div class="mySlides fade">
          <img src="img/intelligence_artificielle.jpg" style="width:100%">
          <div class="text">intelligence_artificielle</div>
        </div>
        
        <div class="mySlides fade">
          <img src="img/lune.jpg" style="width:100%">
          <div class="text">lune</div>
        </div>
        
        <div class="mySlides fade">
            <img src="img/nasa.jpg" style="width:100%">
            <div class="text">nasa</div>
          </div>

          <div class="mySlides fade">
            <img src="img/mars.jpg" style="width:100%">
            <div class="text">mars</div>
          </div>
        </div>
        <br>
        
        <div style="text-align:center">
          <span class="dot"></span> 
          <span class="dot"></span> 
          <span class="dot"></span> 
          <span class="dot"></span> 
          <span class="dot"></span> 
        </div>

        <div class="infoContainer">    
        <h3>Informations récentes</h3>  
        <div class="info-recente">Portes ouvertes lundi 02 mai</div>
        <div class="info-recente">Compétition entre université va se dérouler à sorbonne université le 05 juin</div>
        <div class="info-recente">Le campus sera fermé pendant 3 semaines...</div>
        <div class="info-recente">Aliquam vulputate magna in congue rhoncus magna in congue.</div>
        <div class="info-recente">Aliquam vulputate magna in congue rhoncus.</div>
        </div>


    </div>
  


    <div class="col-md-3">
        <h3>evenement</h3>
        <ul>
            <li>1. On a vu le Soleil comme jamais auparavant</li>
            <li>2. La mission du siècle s’est envolée vers Mars</li>
            <li>3. De l’ADN de dinosaure aurait été découverte</li>
            <li>4. On a vu naître le premier robot biologique</li>
            <li>5. On trouvé la première molécule de l’Univers !</li>
            <li>6. On a découvert le premier animal qui n’a pas besoin de respirer</li>
            <li>7. Bételgeuse s’est mise à faire n’importe quoi</li>
            <li>8. On a enfin fabriqué de l’hydrogène métallique</li>
            <li>9. Une société privée a envoyé des hommes dans l’espace</li>
            <li>10. Une planète a été saisie au tout début de sa vie</li>
            <li>11. De la phosphine pourrait avoir été découverte sur Vénus</li>
            <li>12. Les anticorps monoclonaux se sont imposés</li>           
            <li>13. On a vu l’Univers en rayons X</li>
            <li>14. La centrale de Fessenheim s’est arrêtée</li>
        </ul>

    </div>



</div>

<script>
    let slideIndex = 0;
    showSlides();
    
    function showSlides() {
      let i;
      let slides = document.getElementsByClassName("mySlides");
      let dots = document.getElementsByClassName("dot");
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";  
      }
      slideIndex++;
      if (slideIndex > slides.length) {slideIndex = 1}    
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex-1].style.display = "block";  
      dots[slideIndex-1].className += " active";
      setTimeout(showSlides, 2000); // Change image every 2 seconds
    }
    </script>
    
    <script>
        // Get the modal
    var modal = document.getElementById('id01');
    
    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
    </script>

        <?php require 'includes/footer.php'; ?>
    </body>
</html>
