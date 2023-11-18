<?php
// (A) Parametre de la base de donné
define("DB_HOST", "localhost");
define("DB_NAME", "projetweb");
define("DB_CHARSET", "utf8");
define("DB_USER", "admin");
define("DB_PASSWORD", "admin");

// (B) Connection a la base de donnée
try {
  $pdo = new PDO(
    "mysql:host=".DB_HOST.";dbname=".DB_NAME.";charset=".DB_CHARSET,
    DB_USER, DB_PASSWORD, [
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]
  );
} catch (Exception $ex) { exit($ex->getMessage()); }
?>