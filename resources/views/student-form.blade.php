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
        <select name="gender" id="gender">
            <option value="masculino"
                @if($student ?? '')
                    @if($student->gender == 'masculino')
                        selected
                    @endif
                @endif
            >M</option>

            <option value="feminino"
                @if($student ?? '')
                    @if($student->gender == 'feminino')
                        selected
                    @endif
                @endif
            >F</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Telefone *</label>
        <input value="{{$student ?? '' ? $student->tel : ''}}" name="tel" type="tel" class="form-control" placeholder="Telefone">
    </div>

    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Série *</label>
        <select name="grade" id="grade">
            <option value="1º ano"
                @if($student ?? '')
                    @if($student->grade == '1º ano')
                        selected
                    @endif
                @endif
            >
                1º ano
            </option>

            <option value="2º ano"
                @if($student ?? '')
                    @if($student->grade == '2º ano')
                        selected
                    @endif
                @endif
            >
                2º ano
            </option>

            <option value="3º ano"
                @if($student ?? '')
                    @if($student->grade == '3º ano')
                        selected
                    @endif
                @endif
            >
                3º ano
            </option>

            <option value="4º ano"
                @if($student ?? '')
                    @if($student->grade == '4º ano')
                        selected
                    @endif
                @endif
            >
                4º ano
            </option>

            <option value="5º ano"
                @if($student ?? '')
                    @if($student->grade == '5º ano')
                        selected
                    @endif
                @endif
            >
                5º ano
            </option>
        </select>
    </div>

    <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label">Responsável  *</label>
        <input value="{{$student ?? '' ? $student->responsible : ''}}" name="responsible" required type="text" class="form-control" placeholder="Responsável">
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Observação *</label>
        <input value="{{$student ?? '' ? $student->observation : ''}}" name="observation" class="form-control" placeholder="Observação">
    </div>
    <div class="mb-3">
        <input type="submit" class="form-control" value="Enviar">
    </div>
</form>
@endsection
