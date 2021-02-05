<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="utf-8" />
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
        ?>
        <div class="inscrit1">
            <div id="connexion"><a id="texte"href="login.php"/>
                <img id="porte" src="img/porte.png">
                <a id="texte"href="logout.php">Deconnexion</a>
            </div>
	</div>
			<div class="inscrit">
            <a id="inscription"href="cregister.php">Mon profil</a>
            </div>
    </div>
        <?php
        }
        else { ?>
	<div class="inscrit1">
            <div id="connexion"><a id="texte"href="login.php"/>
                <img id="porte" src="img/porte.png">
                <a id="texte"href="login.php">Connexion</a>
            </div>
	</div>
			<div class="inscrit">
            <a id="inscription"href="cregister.php">Inscription</a>
            </div>
    </div>
    <?php
        }
        ?>
    <div class="nav">
        
        <ul>
            <li> <a href="index.php">Accueil<img id="imageacceuil" src="img/acceuil.png"/>   </a></li>
            <li><a href="dernierpost.php">Les derniers posts<img id="imageacceuil" src="img/etoile.png"/></a></li>
            <li><a href="post.php">Écrire un post<img id="imageacceuil" src="img/ecrire.png"/></a></li>
            <li><a href="about.asp">Contact<img id="imageacceuil" src="img/tel.png"/></a></li>
        </ul>
    </div>
</body>
</html>