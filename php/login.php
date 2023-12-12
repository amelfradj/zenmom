<?php
session_start(); // Démarrez la session

 include("../php/connexion.php");

// Vérification du formulaire
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer et nettoyer les données du formulaire
    $username = filter_var($_POST["email"], FILTER_SANITIZE_STRING);
    $password = $_POST["pwd"];
    // Vérifier si les champs sont vides
    if (empty($username) || empty($password)) {
        echo "Veuillez remplir tous les champs du formulaire.";
    } else {
       $sql = "". $username ."". $password ."";
        // Requête pour récupérer le mot de passe haché associé à l’utilisateur
        $query = "SELECT password FROM utilisateur WHERE email = ?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $stmt->bind_result($hashedPassword);
        $stmt->fetch();
        $stmt->close();
        // Vérifier si l’utilisateur existe et si le mot de passe est correct
        if (password_verify($password, $hashedPassword)) {
            
            echo "Connexion réussie!";
            // Enregistrez des informations dans la session (par exemple, l'ID de l'utilisateur)
    $_SESSION['user_id'] = $row['id'];

            // Indiquez la redirection côté client en utilisant JavaScript
    echo "<script>window.location.href='../html/compte2.html';</script>";
    exit;
        } else {

            echo "Nom d’utilisateur ou mot de passe incorrect";
        }
        // Fermer la connexion à la base de données
        $conn->close();
    }
}
?>
