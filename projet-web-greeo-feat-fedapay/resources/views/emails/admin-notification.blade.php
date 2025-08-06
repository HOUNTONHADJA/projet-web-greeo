<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Nouveau message de contact</title>
</head>
<body>
    <div class="container bg-white mt-5 w-50">
        <p>Bonjour Administrateur,</p>
        <p>Vous avez reçu un nouveau message de contact de :</p>
        <p><strong>Nom:</strong> {{ $userName }}</p>
        <p><strong>Email:</strong> {{ $userEmail }}</p>
        <p><strong>Message:</strong> {{ $userMessage }}</p>
    </div>
    
</body>
</html>
