<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>massage</title>
    <meta name="description" content="
    Le massage post-partum favorise la détente et réduit les douleurs musculaires après l'accouchement, aidant ainsi à la récupération physique.
    Il peut contribuer à stimuler la circulation sanguine, apportant un soulagement aux nouvelles mamans.
    Le massage post-partum offre un moment de réconfort et de relaxation essentiel pendant cette période de changement et d'ajustement.">
    <link rel="stylesheet" href="../css/contactez-nous.css">
    
</head>
<body>
    <header>
        <div>
            <img src="" alt="">
            <h1 id="logo"><a href="/html/accueil.html">ZenMom</a></h1>
        </div>
        <nav>
            <ul>
                <li> <a href="#">Nos massages</a></li>
                <li> <a href="#">Carte cadeau</a></li>
                <li><a href="#">Mon compte</a></li>
            </ul>
        </nav>
    </header> 
    <main>
        <!--formulaire Contactez-nous-->
        <section class="Contactez-nous">
             <!--Début du formulaire-->
            <form class="formla">
                <h2>Contactez-nous</h2>
                <label for="email">E-mail : </label>
                <input type="email" id="email" name="email">
                <label for="motif">Motif de Contact :</label>
                 <!--option de motif-->
                <select id="motif" name="motif">
                    <option value="question">Modifier ou Annuler la réservation! </option>
                    <option value="demande">Demande</option>
                    <option value="plainte">Réclamation</option>
                    <option value="suggestion">Suggestion</option>
            </select>
            <p class="message">Votre message :</p>
            <textarea id="text" name="message" maxlength="200" style="width:650px; height:200px;">Écrivez votre demande ici...</textarea><br><br>
            <input id="submit" type="submit" value="Envoyer mon message">
            </form>
             <!--fin du formulaire-->
        </section>
    </main>
</body>
</html>