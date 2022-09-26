<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="style.css" />
</head>
  
<body>

<form method="post" action="mail.php">
    <label for="name">Nom:</label>
    <input type="text" name="name" id="name" required placeholder="Nom" />
     
    <label for="subject">Objet Du Message:</label>
    <input type="text" name="subject" id="subject" required placeholder="Sujet" />
     
    <label for="email">Email:</label>
    <input type="email" name="email" id="email" required placeholder="email@exemple.com" />
     
    <label for="message">Message:</label>
    <textarea name="message" id="message" required></textarea>
     
    <input type="submit" value="Envoyer Mon Message" />
</form>

</body>
</html>