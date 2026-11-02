# GameData-web
# Connexion a la Base de données 


<?php
// Configuration des identifiants par défaut de MAMP sur Mac
$host     = 'localhost';
$dbname   = 'GAME_DATA';
$username = 'root';
$password = 'root'; // Sur MAMP Mac, le mot de passe par défaut est 'root'
$port     = 8889;   // Port MySQL par défaut sur MAMP Mac

try {
    // Connexion sécurisée via PDO avec gestion de l'encodage UTF-8
    $pdo = new PDO("mysql:host=$host;port=$port;dbname=$dbname;charset=utf8mb4", $username, $password, [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, // Active les alertes en cas d'erreur SQL
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC        // Récupère les résultats sous forme de tableaux associatifs
    ]);
} catch (PDOException $e) {
    // En cas d'erreur de connexion, on stoppe l'exécution et on affiche le message
    die("Erreur de connexion à la base de données : " . $e->getMessage());
}
?>


