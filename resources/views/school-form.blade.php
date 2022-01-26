@extends ('layouts.app')

@section('content')
<form action="{{ route('salvar-escola') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label">Nome da Escola *</label>
        <input name="name" required type="text" class="form-control" placeholder="Nome da Escola">
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Endereço *</label>
        <input name="address" required type="text" class="form-control" placeholder="Endereço">
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">E-mail</label>
        <input name="email" type="email" class="form-control" placeholder="Email">
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label">Responsável pela comunicação *</label>
        <input name="communication_responsible" required type="text" class="form-control" placeholder="Responsável pela comunicação">
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Telefone *</label>
        <input name="tel" required type="tel" class="form-control" placeholder="Telefone">
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Senha *</label>
        <input name="password" required type="password" class="form-control" placeholder="Senha">
    </div>
    <div class="mb-3">
        <input type="submit" class="form-control" value="Enviar">
    </div>
</form>
@endsection