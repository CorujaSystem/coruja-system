@extends ('layouts.app')

@section('content')
<div style="height: 460px;" class="d-flex justify-content-center vh-50">
    <div style="height: 300px" class="w-50 bg-light align-self-center shadow rounded">
        <form action="/register" method="POST">
            @csrf
            <div class="container d-flex flex-column vstack gap-2 px-5">
                <div class="form-group row mt-3">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Nome: </label>
                    <div class="col-sm-10 ">
                        <input name="name" type="text" class="form-control" required  placeholder="Nome">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">E-mail: </label>
                    <div class="col-sm-10">
                        <input name="email" type="email" class="form-control" required placeholder="E-mail">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Senha: </label>
                    <div class="col-sm-10">
                        <input name="password" minlength="8" type="password" class="form-control" required placeholder="Senha">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Confirmar: </label>
                    <div class="col-sm-10">
                        <input name="password_confirmation" minlength="8" type="password" class="form-control" required  placeholder="Confirme sua senha">
                    </div>
                </div>
                <input class="btn-contribua align-self-center" type="submit">
            </div>
        </form>
        @if ($errors->any())
            <div class="alert alert-danger mt-5">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
</div>
@endsection