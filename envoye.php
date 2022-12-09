<?php
$to      = "mokadem59200@live.fr";
$subject ='"'.$_GET['sujet'].'"';
$message = '"'.$_GET['message'].'"';
$headers = 'From: webmaster@example.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
echo $_GET['sujet'] $_GET['message'] $_GET['nom'] $_GET['prenom']
mail($to, $subject, $message,$headers);
echo '<html>';
echo '<body>';
echo '<p>test</p>';
echo '</body>';
echo '</html>';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_index.css">
    <title>STI Technology</title>
</head>
<body>
    <a href="index.html" class="logo"><img src="stilogo.png" /></a>
    <nav>
      <ul class="menu">
        <li><a href="#">Accueil</a>
        </li>
        <li><a href="#">Nos services</a>
        </li>
        <li><a href="#">Contact</a></li>
        <li><a href="#">A propos</a></li>
      </ul>
    </nav>
    
    <contenu>
      <p class="valide"> Mail envoyé avec succès </p>
    </contenu>
    <footer>
      <table class="gauche">
        <tr>
          <td class="logo">
            <img src="stilogo.png"/>
          </td>
          <td class="coordonnee">
            <img src="adresse.png"/><b>106, rue de Mouvaux 59200 TOURCOING </b><br>
            <p><img src="rcs.png"/><b>R.C.S. Roubaix – Tourcoing :</b> 517 866 075 00016 </p> <br>
            <p><img src="phone.png"/><b>Tél. : </b><a href="tel:" class="tel"> 09 20 70 34 43</a></p><br>
            <p><img src="phone.png"/><b>Fax :</b><a href="tel:" class="tel"> 09 56 53 36 47</a></p>
          </td>
          <td><a href="#" class="foot">Contactez-nous</a></td>
        </tr>
      </table><br>
      <p style="color: white;">@ 2022 STI Technology Copyright Ihssane</p> 
    </footer>
</body>
</html>
