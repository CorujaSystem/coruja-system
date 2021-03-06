@extends ('layouts.app')

@section('content')

<div class="d-flex flex-column flex-lg-row align-items-center justify-content-lg-between justify-content-between">
    <div class="col mt-5 align-items-center align-items-lg-start">
        <h1 class="display-4">Nossas redes sociais</h1>
        <div class="fs-4 text-muted font-we ">Nos mande uma mensagem</div>

        <a class="text-dark d-flex mt-3 align-items-center" style="text-decoration: none; max-width:fit-content;" target="_blank" href="https://www.instagram.com/campanhadonacoruja/">

            <img class="img-fluid" src="{{ asset('images/instagram.webp') }}" alt="instagram">

            <h3 class="p-2">Instagram</h3>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-in-up-right" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M6.364 13.5a.5.5 0 0 0 .5.5H13.5a1.5 1.5 0 0 0 1.5-1.5v-10A1.5 1.5 0 0 0 13.5 1h-10A1.5 1.5 0 0 0 2 2.5v6.636a.5.5 0 1 0 1 0V2.5a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 .5.5v10a.5.5 0 0 1-.5.5H6.864a.5.5 0 0 0-.5.5z" />
                <path fill-rule="evenodd" d="M11 5.5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793l-8.147 8.146a.5.5 0 0 0 .708.708L10 6.707V10.5a.5.5 0 0 0 1 0v-5z" />
            </svg>
        </a>

        <a class="text-dark d-flex mt-3 align-items-center" style="text-decoration: none; max-width:fit-content;" target="_blank" href="https://www.facebook.com/groups/campanhadonacoruja//">

            <img class="img-fluid" src="{{ asset('images/facebook.webp') }}" alt="facebook">
            <h3 class="p-2">Facebook</h3>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-in-up-right" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M6.364 13.5a.5.5 0 0 0 .5.5H13.5a1.5 1.5 0 0 0 1.5-1.5v-10A1.5 1.5 0 0 0 13.5 1h-10A1.5 1.5 0 0 0 2 2.5v6.636a.5.5 0 1 0 1 0V2.5a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 .5.5v10a.5.5 0 0 1-.5.5H6.864a.5.5 0 0 0-.5.5z" />
                <path fill-rule="evenodd" d="M11 5.5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793l-8.147 8.146a.5.5 0 0 0 .708.708L10 6.707V10.5a.5.5 0 0 0 1 0v-5z" />
            </svg>
        </a>
        <a class="text-dark d-flex mt-3 align-items-center" style="text-decoration: none; max-width:fit-content;" target="_blank" href="https://whats.link/donacoruja/">

            <img class="img-fluid" src="{{ asset('images/whatsapp.webp') }}" alt="whatsapp">
            <h3 class="p-2">Whatsapp</h3>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-in-up-right" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M6.364 13.5a.5.5 0 0 0 .5.5H13.5a1.5 1.5 0 0 0 1.5-1.5v-10A1.5 1.5 0 0 0 13.5 1h-10A1.5 1.5 0 0 0 2 2.5v6.636a.5.5 0 1 0 1 0V2.5a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 .5.5v10a.5.5 0 0 1-.5.5H6.864a.5.5 0 0 0-.5.5z" />
                <path fill-rule="evenodd" d="M11 5.5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793l-8.147 8.146a.5.5 0 0 0 .708.708L10 6.707V10.5a.5.5 0 0 0 1 0v-5z" />
            </svg>
        </a>

    </div>

    <div class="d-flex flex-column mt-5 ">
        <h1 class="display-4 ">Dados banc??rios</h1>
        <div class="fs-4 text-muted font-we ">Realize uma doa????o</div>
        <div class="d-flex flex-lg-row flex-column mt-3 ">
            <div class="d-flex flex-column mt-2 ">
                <h4 class="align-self-lg-center align-self-start ">Por PIX</h4>
                <img class="img-fluid mt-3" src="{{ asset('images/pix.webp') }}" alt="pix" width="250">
                <h5 class="align-self-center mt-2">Chave PIX: (84) 999720931</h5>
            </div>
            <!-- <ul class="list-group ms-5">
                <h4 class="align-self-lg-center align-self-start">Por Transfer??ncia </br>ou Dep??sito:</h4>
                <li class="list-group-item">Caixa Econ??mica Federal
                    </br>
                    Poupan??a
                    </br>
                    Ag??ncia 0758
                    </br>
                    Opera????o 013
                    </br>
                    Conta Poupan??a 869816901-3
                </li>
            </ul> -->
        </div>
    </div>
</div>
@endsection