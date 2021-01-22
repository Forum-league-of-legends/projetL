<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

</body>
<body id="fondecran">
    <div id="header">
        <a  href="index.php">
            <img id="icone"src="img/icone.png" />
        </a>
         <?php
        if (isset($_SESSION['username'])){
        echo "Bonjour ".$_SESSION['username'];
        ?>
        <a href="logout.php">
             <input type="button"  value='deconnexion' >
        </a>
        <?php
        }
        ?>

	<div class="inscrit1">
            <div id="connexion"><a id="texte"href="login.php"/>
                <img id="porte" src="img/porte.png">
                <a id="texte"href="login.php">Connexion</a>
            </div>
	</div>
			<div class="inscrit">
            <a id="inscription"href="register.php">Inscription</a>
            </div>
    </div>
    <div class="nav">
        
        <ul>
            <li> <a href="index.html">Accueil<img id="imageacceuil" src="img/acceuil.png"/>   </a></li>
            <li><a href="news.asp">Les derniers posts<img id="imageacceuil" src="img/etoile.png"/></a></li>
            <li><a href="Connexion/login.php">Écrire un post<img id="imageacceuil" src="img/ecrire.png"/></a></li>
            <li><a href="about.asp">Contact<img id="imageacceuil" src="img/tel.png"/></a></li>
        </ul>
    </div>
</body>
</html>