Site fait par FOFANA ABDELMALIK ET TERTAKI ANIS GROUPE 1
Bonjour
une video d'explication est disponible nous vous invitons à la voir. le lien : https://youtu.be/UklJ1BeHmFQ

prérequis: phpmyadmin, apache2,mysql

1) Allumer le serveur

aller dans le dossier website_php_sql_L3_project et ouvrir un terminal et ecrivez
- sudo systemctl start apache2
- sudo systemctl start mysql
- php -S localhost:8000

2) Ouvrir phpmyadmin: http://localhost/phpmyadmin/ 

pseudo = admin ; mdp = admin
crée base de donnée en mettant dans le sql : CREATE DATABASE projetweb;

3) puis continuer  dans le sql et copier coller le contenue de projetweb.sql dans phpmyadmin

4) entrer dans la barre de recherche  : http://localhost:8000/index.php
si tout a été respecté le site fonctionne

5) si on souhaite se connecté voici les identifiant

utilisateur pseudo: anis  ; utilisateur mdp: anis
---------------------------------------------------------
admin pseudo: admin ; admin mdp: admin



On as tout fait scrupuleusement (sauf oublie) il y a tout 
On à reussi a faire l'admin (pseudo = admin mdp = admin) on a essayé de faire en sorte de faire changé le logo (voir index2) mais sans succes et on as pas fait la partie IV)optionnel 
