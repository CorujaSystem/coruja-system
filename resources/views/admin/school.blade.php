@extends ('layouts.admin')

@section('content')

<h1>Escola - {{$school->name}}</h1>

<div class="d-flex flex-column">
    <div class="mt-2 d-flex justify-content-end">
        <a class="btn btn-success" href="{{ url('/admin/escola/'.$school->id.'/registrar') }}">
            <i class="fas fa-plus"></i>
            Adicionar Estudante
        </a>
    </div>

    <table class="table table-hover mt-4">
        <thread>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Gênero</th>
                <th scope="col">Telefone</th>
                <th scope="col">Responsável</th>
                <th scope="col">Observação</th>
                <th scope="col"></th>
            </tr>
        </thread>
        <tbody>
            @foreach ($students as $s)

            <tr class="clickable-row">
                <td scope="row">{{$s->id}}</td>
                <td scope="row">{{$s->name}}</td>
                <td scope="row">{{$s->gender}}</td>
                <td scope="row">{{$s->tel}}</td>
                <td scope="row">{{$s->responsible}}</td>
                <td scope="row">{{$s->observation}}</td>
                <td scope="row">
                    <a href="{{url('/admin/escola/'.$school->id.'/editar/'.$s->id)}}">
                        <i class="fas fa-edit text-dark"></i>
                    </a>
                </td>
            </tr>

            @endforeach
        </tbody>
    </table>
</div>
@endsection
