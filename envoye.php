<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_contact.css">
    <title>STI Technology</title>
</head>
<body>
    <nav>
      <a href="index.html" class="logo"><img src="stilogo.png" /></a>
      <ul class="menu">
        <li><a href="#">Accueil</a>
        </li>
        <li><a href="#">Nos sercices</a>
        </li>
        <li><a href="#">Contact</a></li>
        <li><a href="#">A propos</a></li>
      </ul>
    </nav>
    
    <contenu>
      <table>
        <tr>
          <td class="formulaire">
            <form action="envoye.php" method="get">
              Nom <input type="text" name="nom"><br>
              Prénom <input type="text" name="prenom"><br>
              Email <input type="email" name="email" id=""><br>
              Message <input type="text" name="message" id="msg" width="200"><br>
              <input type="submit" value="Envoyer" id="send" >
            </form>
          </td>
        </tr>
      </table>
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
