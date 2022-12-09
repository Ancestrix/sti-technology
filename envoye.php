<?php
$to      = "mokadem59200@live.fr";
$subject ='"'.$_GET['sujet'].'"';
$message = '"'.$_GET['message'].'"';
$headers = 'From: webmaster@example.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
echo $_GET['sujet'] $_GET['message'] $_GET['nom'] $_GET['prenom']
mail($to, $subject, $message);
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
    <h1>Mail envoyé</h1>
</body>
</html>
