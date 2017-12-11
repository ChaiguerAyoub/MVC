<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulaire</title>
</head>
<body>
<form method="post" action="login/login">
    Nom: <input type="text" name="nom"/>
    Prenom: <input type="text" name="prenom"/>
    Stages: <input type="text" name="stages[]" id="">
    <input type="text" name="stages[]" id="">
    <input type="text" name="stages[]" id="">

    <input type="submit" value="Envoyer" name="login"/>
</form>

</body>
</html>