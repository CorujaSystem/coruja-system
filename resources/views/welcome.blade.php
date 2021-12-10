@extends ('layouts.app')

@section('content')
<div class="row text-top mt-5">
    <div class="col-6 align-self-center">
        <h3 class="display-1 fw-bold"> Campanha </br> Dona Coruja</h3>
        <div class="fs-4 text-muted font-we">Doação de material escolar para crianças carentes </div>
        <button class="btn-contribua mt-4   ">Contribua <i class="fas fa-chevron-right"></i>
        </button>
    </div>

    <img class="col-6" src="{{ asset('images/coruja-grande.png') }}" alt="coruja">
</div>

<div class="row">
    <h1>Quem somos</h1>
    <div class="card mb-3 text-white w-75 p-0" style="background-color: #cf7dad;">
        <div class="row g-0">
            <div class="col-6 ">
                <img class="img-responsive" width="400" src="{{ asset('images/foto-nossa-historia.jpg') }}" alt="entrega de kits">
            </div>
            <div class="col-6">
                <div class="card-body ">
                    <h2 class="card-title">Nossa história</h2>
                    <p class="card-text">Surgimos em 2014 na cidade de Caicó - RN, com o objetivo de ajudar as crianças carentes de escolas públicas da região.</p>
                    <p class="card-text">Na primeira edição, conseguimos arrecadar o suficiente para doar 12 kits. Com a ajuda do público,
                        já doamos mais de mil kits.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-end">
        <div class="card mb-3 text-white w-75 d-flex p-0  align-self-end" style="background-color: #474787">
            <div class="row">
                <div class="col-6">
                    <div class="card-body">

                        <h2 class="card-title">O que fazemos</h2>
                        <p class="card-text">A campanha Dona Coruja facilita o acesso de materiais escolares para crianças carentes.</p>
                        <p class="card-text">Nosso objetivo é atender alunos de escolas públicas, de modo que possam iniciar o ano letivo com um material escolar decente.</p>
                        <p class="card-text">Esperamos que assim eles se sintam mais estimulados em relação aos estudos e consigam contribuir para um futuro melhor.</p>
                    </div>
                </div>
                <div class="col-6 ">
                    <img class="img-responsive" src="{{ asset('images/foto-oque-fazemos.png') }}" alt="entrega de kits" width="100%">
                </div>
            </div>
        </div>
    </div>
</div>


<div class="row">
    <h2>Como funciona?</h2>
    <div class="d-flex align-items-center justify-content-between">
        <livewire:info-card title='Doações' description='Com as doações, compramos os materiais escolares.' image_url="{{ asset('images/foto-card-doacoes.png') }}" bg_color='#e73042' />

        <livewire:info-card title='Compra de materiais' description='Com as doações, compramos os materiais escolares.' image_url="{{ asset('images/foto-card-compra-materiais.png') }}" bg_color='#1e90ff' />

        <livewire:info-card title='Montagem dos kits' description='Montamos os kits: caderno,
lápis, borracha, tesoura, lápis de
colorir, tudo em uma pasta.' image_url="{{ asset('images/foto-card-montagem.png') }}" bg_color='#A050C8' />
        <livewire:info-card title='Entrega dos kits' description='Realizamos a entrega dos
materiais para diversas famílias..' image_url="{{ asset('images/foto-card-entrega.png') }}" bg_color='#77AD5C' />

    </div>
</div>

<div class="align-self-center ">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('images/coruja-grande.png') }}" class="d-block w-50" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/coruja-grande.png') }}" class="d-block w-50" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/coruja-grande.png') }}" class="d-block w-50" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>


@endsection