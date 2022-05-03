<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Bem me Quero</title>


        <style>
            body {
                font-family: 'Nunito', sans-serif;

            }

            img{
                height: 70%;
                width: 70%;
                margin: center;
            }

            @media screen and (max-width: 600px) {
                img {
                    height: 100%;
                    width: 100%;
                    margin-top:140px;
                     }

            }
        </style>


    </head>
    <body>
        <div class="text-center" >
            <a href="{{route('login')}}"><img src="/img/processed.jpeg" alt="logo"></a>
        </div>
    </body>
</html>
