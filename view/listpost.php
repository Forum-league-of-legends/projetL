<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="post">
        <div id="bienvenue">
            <h1> Bienvenue sur notre forum dédié au jeu vidéo League of Legends ! </h1>
            <?php  if (isset($_SESSION['username'])){ ?>
                <h3> Bonjour <?php echo $_SESSION['username'] ?> amusez vous bien sur notre forum ! </h3>
           <?php } 
                else   { ?>
                    <input class="btn-grad" type="submit" value="Connexion" />
              <?php  }?>
        </div>
        <?php        

                foreach ($resultes as $result) {?>
                    <div id="bienvenue">
                        <h1> <?php echo $result['titre']; ?> </h1>
                        <h3> Cet article a été publié par : <?php echo $result["username"]; ?> a <?php echo $result['date'];?> </h3>
                        <?php echo $result["article"]; ?>
                   </div>
                <?php } ?>
               
            
                        
        
            
</div>
        

    <div id="scrollUp"> 
        <a href="#top"><img src="img/to_top.png"/></a>
    </div>

    
</body>
</html>