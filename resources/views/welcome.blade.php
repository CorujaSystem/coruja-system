    <!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Campanha Dona Coruja</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css')}}">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    </head>

    <body>
        <div class="container-top">
            <div class="text-top">
                Campanha </br> Dona Coruja
                <div class="subtext">Doação de material escolar para crianças carentes </div>
                <button class="btn-contribua">Contribua <i class="fas fa-chevron-right"></i>
                </button>
            </div>
            <img src="https://i.imgur.com/AInPAE3.png" alt="coruja" height="400">
        </div>
        <div class="quem-somos">
            <h1>Quem somos</h1>
            <div class="card1">
                <img class="imgCard1" src="https://i.imgur.com/uJ3zvwR.jpg" alt="entrega de kits" height="300">
                <div class="cardInfo">
                    <h2 class="titleCard">Nossa história</h2>
                    <p>Surgimos em 2014 na cidade de Caicó - RN, com o objetivo de ajudar as crianças carentes de escolas públicas da região.</p>
                    <p>Na primeira edição, conseguimos arrecadar o suficiente para doar 12 kits. Com a ajuda do público,
                        já doamos mais de mil kits.</p>
                </div>
            </div>
            <div class="card2">
                <div class="cardInfo">
                    <h2 class="titleCard">O que fazemos</h2>
                    <p>A campanha Dona Coruja facilita o acesso de materiais escolares para crianças carentes.</p>
                    <p>Nosso objetivo é atender alunos de escolas públicas, de modo que possam iniciar o ano letivo com um material escolar decente.</p>
                    <p>Esperamos que assim eles se sintam mais estimulados em relação aos estudos e consigam contribuir para um futuro melhor.</p>
                </div>
                <img class="imgCard2" src="https://i.imgur.com/wfuRtz5.png" alt="entrega de kits" height="310">
            </div>
        </div>
    </body>

    </html>