<div class="post">
        <div id="bienvenue">.
        	<h1>Contact en cas de bug !</h1>
    <form method="post">
        <label>Nom</label>
        <input type="text" name="nom" required>
        <label>Email</label>
        <input type="email" name="email" required>
        <label>Message</label>
        <textarea name="message" required></textarea>
        <input type="submit">
    </form>
    <?php
    if(isset($_POST['message'])){
        $entete  = 'MIME-Version: 1.0' . "\r\n";
        $entete .= 'Content-type: text/html; charset=utf-8' . "\r\n";
        $entete .= 'From: ' . $_POST['email'] . "\r\n";

        $message = '<h1>Message envoyé depuis la page Contact de monsite.fr</h1>
        <p><b>Nom : </b>' . $_POST['nom'] . '<br>
        <b>Email : </b>' . $_POST['email'] . '<br>
        <b>Message : </b>' . $_POST['message'] . '</p>';

        $retour = mail('matheo.palmier42@gmail.com', 'Envoi depuis page Contact', $message, $entete);
        if($retour) {
            echo '<p>Votre message a bien été envoyé.</p>';
        }
    }
    ?>
        	
    

    
