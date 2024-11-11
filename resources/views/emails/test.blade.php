<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible"
          content="ie=edge">
    <title>Test Mail</title>
</head>
<body>
    <h2>Mon super mail</h2>

<div class="mail-content">
    <p>Nom : {{ $name }}</p>
    <p>Email : {{ $email }}</p>
    <p>Message :</p>
    <p>{{ $messageContent }}</p>
</div>
</body>
</html>
