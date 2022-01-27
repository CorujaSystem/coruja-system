@extends ('layouts.admin')

@section('content')

<h1>Produtividade por Ano</h1>

<div class="d-flex flex-column">

    <h3 class="mt-4 mb-4">Registrados</h3>

    @foreach ($yearProductions as $yearProduction)
        <form action="{{url('/admin/anos/atualizar/'.$yearProduction->id)}}" method="post" class="">
            @csrf
            <div class="d-flex">
                <div class="mb-3 d-flex flex-column w-100">
                    <input value="{{$yearProduction->year}}" id="year" name="year" required type="number" class="form-control" placeholder="Ano">
                </div>

                <div class="mx-2"></div>

                <div class="mb-3 d-flex flex-column w-100">
                    <input value="{{$yearProduction->production}}" id="production" name="production" required type="number" class="form-control" placeholder="Produção">
                </div>

                <div class="mx-2"></div>

                <input type="submit" class="btn btn-success mb-3" value="Enviar">

                <div class="mx-2"></div>

                <a href="{{url('/admin/anos/remover/'.$yearProduction->id)}}" class="btn btn-danger mb-3">Remover</a>
            </div>
        </form>
    @endforeach


    <h3 class="mt-4 mb-4">Adicionar</h3>

    <form action="{{url('/admin/anos/registrar')}}" method="post" class="">
        @csrf
        <div class="d-flex">
            <div class="mb-3 d-flex flex-column w-100">
                <input id="year" name="year" required type="number" class="form-control" placeholder="Ano">
            </div>

            <div class="mx-2"></div>

            <div class="mb-3 d-flex flex-column w-100">
                <input id="production" name="production" required type="number" class="form-control" placeholder="Produção">
            </div>
        </div>

        <input type="submit" class="form-control" value="Enviar">
    </form>

</div>
@endsection
