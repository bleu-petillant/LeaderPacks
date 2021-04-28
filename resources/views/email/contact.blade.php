<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>mail</title>
    <style>
        body{
            background-color: #02558B;
        }

        .mail-container{
            background-color: white;
            width: 95%;
            height: 95vh;
            margin: auto auto;
            box-shadow: 5px 5px 15px -5px rgba(0,0,0,0.67);
        }

        .mail-h4{
            
            font-size: 24px;
            text-align: center;
            padding: 4%;
        }

        .mail-p{
            font-size:18px;
            margin-left: 10%;
        }
    
    </style>
</head>
<body>
    <div class="mail-container">
        <h4 class="mail-h4">Hi, you receive a mail from <span style="color: #02558B;"> {{$contact->email}}</span></h4>
        <p class="mail-p"> <span style="font-weight: bold;">Firstname:</span>  {{$contact->prenom}}</p>
        <p class="mail-p"><span style="font-weight: bold;">Lastname:</span>  {{$contact->name}} </p>
        <p class="mail-p"><span style="font-weight: bold;">Country:</span>  {{$contact->country}}</p>
        <p class="mail-p"><span style="font-weight: bold;">City:</span>  {{$contact->city}}</p>
        <div>
            <p class="mail-p" style="color:black; "><span style="font-weight: bold;">The message:</span> <br><br> {{ $contact->message }}</p>
            <p class="mail-p" style="color:black;">You can answer by clicking this email <a href="mailto:{{$contact->email}}">{{$contact->email}}</a></p>
        </div>
    </div>
</body>
</html>