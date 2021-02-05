<!DOCTYPE html>
<html>
<head>
	<title></title>
	  <link rel="stylesheet" type="text/css" href="trix-main/dist/trix.css">
      <script type="text/javascript" src="trix-main/dist/trix.js"></script>
</head>
<body>
<div class="post">
<form class="container" action="creationpost.php" method="post">

        <p > Entrez le titre de votre article : </p><input type="text" name="titre" placeholder="Entrez un titre" maxlength="40" minlength="5">
        <p> Entrez votre message </p>
        <input id="x" class="contenu" type="hidden" name="contenu" placeholder="Entrez votre message" maxlength="200" minlength="10">
        <trix-editor class="editor" input="x"></trix-editor>
        <input type="submit" value="Poster le topic">
    </div>
</div>
    
    

    
</body>
</html>