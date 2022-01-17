@extends ('layouts.app')

@section('content')
<form action="{{ route('salvar-estudante') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label">Nome do aluno *</label>
        <input name="name" required type="text" class="form-control" placeholder="Nome do aluno">
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Gênero *</label>
        <input name="gender" required type="text" class="form-control" placeholder="Gênero">
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Telefone *</label>
        <input name="tel" required type="tel" class="form-control" placeholder="Telefone">
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label">Responsável *</label>
        <input name="responsible" required type="text" class="form-control" placeholder="Responsável">
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Observação</label>
        <input name="observation" type="text" class="form-control" placeholder="Observação">
    </div>
    <div class="mb-3">
        <input type="submit" class="form-control" value="Enviar">
    </div>
</form>
@endsection