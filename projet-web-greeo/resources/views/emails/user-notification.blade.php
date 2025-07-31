<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Confirmation de réception</title>
</head>
<body>
    <p>Bonjour {{ $userName }},</p>
    <p>Merci de nous avoir contacté <br>
        Message reçu avec succès 😎
    </p>
    <p>Cordialement,</p>
    <p>L'équipe {{ config('app.name') }}</p>
</body>
</html>
