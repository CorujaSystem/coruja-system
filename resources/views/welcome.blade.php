@extends ('layouts.app')

@section('content')
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

    @endsection