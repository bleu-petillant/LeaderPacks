<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>mail</title>
</head>
<body>
    <h4>hi, you receive a mail from {{$contact->email}}</h4>
    <p>firstname: {{$contact->prenom}}</p>
    <p>lastname: {{$contact->name}} </p>
    <p>country: {{$contact->country}}</p>
    <p>city: {{$contact->city}}</p>
    <div>
    <p style="color:black; font-size: 2em;">the message: {{ $contact->message }}</p>
    <p style="color:black; font-size: 2em;">you can answer by clicking this email <a href="mailto:{{$contact->email}}">{{$contact->email}}</a></p>
    </div>
</body>
</html>