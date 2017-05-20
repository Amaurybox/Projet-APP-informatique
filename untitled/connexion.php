<?php
session_start();

$bdd = new PDO('mysql:host=127.0.0.1;dbname=espace_membre', 'root', '');

if(isset($_POST['formconnexion'])) {
    $mailconnect = htmlspecialchars($_POST['mailconnect']);
    $mdpconnect = sha1($_POST['mdpconnect']);
    if(!empty($mailconnect) AND !empty($mdpconnect)) {
        $requser = $bdd->prepare("SELECT * FROM membres WHERE mail = ? AND motdepasse = ?");
        $requser->execute(array($mailconnect, $mdpconnect));
        $userexist = $requser->rowCount();
        if($userexist == 1) {
            $userinfo = $requser->fetch();
            $_SESSION['id'] = $userinfo['id'];
            $_SESSION['pseudo'] = $userinfo['pseudo'];
            $_SESSION['mail'] = $userinfo['mail'];
            header("Location: profil.php?id=".$_SESSION['id']);
        } else {
            $erreur = "Mauvais mail ou mot de passe !";
        }
    } else {
        $erreur = "Tous les champs doivent être complétés !";
    }
}
?>
<html>
<head>
    <title>Page de connexion</title>
    <link rel="stylesheet" type ="text/css" href="CssSite1.css" />
    <meta charset="utf-8">
</head>
<body>
<p>
    <a href="test5.html"><input type ="submit" value="Contact Administrateur" class = "new"/></a>

    <a class = "phot"><img src="contenu/Logo_domisep.jpg" alt="Logo du site" title="Domisep" /></a>
</p>
    <form method="POST" action="" class="form" >
        <input type="email" name="mailconnect" placeholder="Mail" class="inputbasic"/>
        <br>
        <input type="password" name="mdpconnect" placeholder="Mot de passe" class="inputbasic"/>
        <br /><br />
        <input type="submit" name="formconnexion" value="Se connecter !" />
    </form>
     <a href="inscription.php"><input type="submit" value="Toujours pas inscrit ?" class ="new2" /></a>

    </p>
    <?php
    if(isset($erreur)) {
        echo '<font color="red">'.$erreur."</font>";
    }
    ?>
</div>
</body>
</html>