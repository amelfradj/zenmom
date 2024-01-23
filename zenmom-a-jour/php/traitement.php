<?php
include("../php/connexion.php");

// Vérification du formulaire
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer et nettoyer les données du formulaire
    $username = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    $password = $_POST["password"];
    $lastname = $_POST["lastname"];
    $firstname = $_POST["name"];
    $birthdate = $_POST["birthdate"];
    $password_to_save = password_hash($password, PASSWORD_DEFAULT);
    var_dump($username, $password_to_save, $lastname, $firstname, $birthdate);
    // Utilisez une requête SQL pour insérer l'utilisateur dans la base de données
    $query = "INSERT INTO utilisateur (email, password, nom, prenom, date_naissance) VALUES (?,?,?,?,?)";
    $stmt = $conn->prepare($query);
    $stmt->bind_param('sssss', $username, $password_to_save, $lastname, $firstname, $birthdate);

    if ($stmt->execute()) {
        // L'utilisateur a été enregistré avec succès
    } else {
        // Gestion de l'erreur d'inscription
        echo "Erreur lors de l'enregistrement : " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>
