<?php
session_start();

$bdd = new PDO('mysql:host=127.0.0.1;dbname=bddomisep', 'root', '');

if(isset($_POST['modifcapt'])){
header("location:Capteurs.php");
}
}
if(isset($_POST['modifactio'])){

}

if(isset($_POST['modifcam'])){

}

?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="CssSite1.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<meta charset="UTF-8">
<body>

<ul class="horinav">
    <li><a href="Acceuil.html">Home</a></li>
    <li><a class="active" href="Mes_Fonctionnalitées.html">Mes Fontionnalitées</a></li>
    <li><a href="Mes_Pieces.html">Mes pièces</a></li>
    <li><a href="about.html">Aide</a></li>
</ul>

<div class="content">
    <a class="logo"><img src="contenu/LOGO%20ISEP%20FINAL.png" alt="Logo" width="63" height="61"/></a>
    <h1 class="double">Vos Fonctionnalitées</h1>
</div>
<div class="content">
    <div class="general">
        <div class="information">
            <p>Vos Capteurs :</p>
            <input type="submit" name="modifcapt" value="Modifier vos capteurs" />

        </div>

        <div class="information1">
            <p>Vos Actionneurs :</p>
            <input type="submit" name="modifactio" value="Modifier vos actionneurs" />

        </div>

        <div class="information1">
            <p>Vos Cameras :</p>
            <input type="submit" name="modifcam" value="Modifier vos caméras" />

        </div>
    </div>


</body>
</html>
