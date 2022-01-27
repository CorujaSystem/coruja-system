@extends ('layouts.admin')

@section('content')

<form action="{{ $student ?? '' ? url('/admin/escola/'.$student->school_id.'/editar/'.$student->id.'/salvar'): url('/admin/escola/'.$school->id.'/registrar/salvar') }}" method="POST">
    @csrf

    @if($student ?? '')
        <h1>Editar estudante {{$student->name}} da escola {{$school->name}}</h1>
        <input type="hidden" name="studentId" value={{$student->id}}>
    @else
        <h1>Adicionar estudante da escola {{$school->name}}</h1>
    @endif

    <div class="mb-3 mt-4">
        <label for="formGroupExampleInput" class="form-label">Nome do estudante *</label>
        <input value="{{$student ?? '' ? $student->name : ''}}" name="name" required type="text" class="form-control" placeholder="Nome do estudante">
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Gênero *</label>
        <input value="{{$student ?? '' ? $student->gender : ''}}" name="gender" required type="text" class="form-control" placeholder="Gênero">
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Telefone *</label>
        <input value="{{$student ?? '' ? $student->tel : ''}}" name="tel" type="tel" class="form-control" placeholder="Telefone">
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label">Responsável  *</label>
        <input value="{{$student ?? '' ? $student->responsible : ''}}" name="responsible" required type="text" class="form-control" placeholder="Responsável">
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Observação *</label>
        <input value="{{$student ?? '' ? $student->observation : ''}}" name="observation" required class="form-control" placeholder="Observação">
    </div>
    <div class="mb-3">
        <input type="submit" class="form-control" value="Enviar">
    </div>
</form>
@endsection
