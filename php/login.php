<?php
// inclusion du fichier de connexion à la base de donnée
include ('../php/connexion.php') ;

// Récupérer les données du formulaire
$login = $_POST['email'];
$mdp = $_POST['pwd'];
// Échapper les données pour éviter les attaques par injection SQL
$login = $conn->real_escape_string($login);
$motDePasse = $conn->real_escape_string($mdp);
// Construire la requête SQL
$sql = "SELECT * FROM utilisateur WHERE id_users = '$login'";
// Exécuter la requête
$resultat = $conn->query($sql);
// Vérifier s’il y a des résultats
if ($resultat->num_rows > 0) {
    // Récupérer la ligne de résultats
    $row = $resultat->fetch_assoc();
    // Vérifier le mot de passe
    if ($mdp == $row['pwd']) {
        // Mot de passe correct, connexion réussie
        echo ("Connexion réussie pour l/utilisateur avec l/ID ") . $row['id_users'];
    } else {
        // Mot de passe incorrect
        echo ("Mot de passe incorrect");
    }
} else {
    // Aucun utilisateur trouvé avec ce login
    echo ("Aucun utilisateur trouvé avec le login : $login");
}
// Fermer la connexion
$conn->close();
?>