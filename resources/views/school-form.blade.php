@extends ('layouts.admin')

@section('content')


<form action="{{ $school ?? '' ? url('/admin/editar/'.$school->id.'/salvar'): route('salvar-escola') }}" method="POST">
    @csrf

    @if($school ?? '')
        <h1>Editar escola {{$school->name}}</h1>
        <input type="hidden" name="schoolId" value={{$school->id}}>
    @else
        <h1>Adicionar Escola</h1>
    @endif

    <div class="mb-3 mt-4">
        <label for="formGroupExampleInput" class="form-label">Nome da Escola *</label>
        <input value="{{$school ?? '' ? $school->name : ''}}" name="name" required type="text" class="form-control" placeholder="Nome da Escola">
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Endereço *</label>
        <input value="{{$school ?? '' ? $school->address : ''}}" name="address" required type="text" class="form-control" placeholder="Endereço">
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">E-mail</label>
        <input value="{{$school ?? '' ? $school->email : ''}}" name="email" type="email" class="form-control" placeholder="Email">
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label">Responsável pela comunicação *</label>
        <input value="{{$school ?? '' ? $school->communication_responsible : ''}}" name="communication_responsible" required type="text" class="form-control" placeholder="Responsável pela comunicação">
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Telefone *</label>
        <input value="{{$school ?? '' ? $school->tel : ''}}" name="tel" required type="tel" class="form-control" placeholder="Telefone">
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
