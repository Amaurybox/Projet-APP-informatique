<?php
try
{
    // On se connecte à MySQL
    $bdd = new PDO('mysql:host=localhost;dbname=bddomisep;charset=utf8', 'root', '');
}
catch(Exception $e)
{
    // En cas d'erreur, on affiche un message et on arrête tout
    die('Erreur : '.$e->getMessage());
}

// On récupère tout le contenu de la table utilisateur

$reponse = $bdd->query('SELECT * FROM utilisateur');

// On affiche chaque entrée une à une
while ($donnees = $reponse->fetch())
{
    ?>
    <p>

    </p>
    <?php
}

$reponse->closeCursor(); // Termine le traitement de la requête

?>
