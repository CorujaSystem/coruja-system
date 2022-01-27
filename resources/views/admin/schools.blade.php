@extends ('layouts.admin')

@section('content')

<h1>Escolas</h1>


<div class="d-flex flex-column">

    <div class="mt-2 d-flex justify-content-end">
        <a class="btn btn-success" href="{{ url('/admin/registrar') }}">
            <i class="fas fa-plus"></i>
            Adicionar Escola
        </a>
    </div>

    <table class="table table-hover mt-4">
        <thread>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Telefone</th>
                <th scope="col">Email</th>
                <th scope="col">Endereço</th>
                <th scope="col">Responsável</th>
                <th scope="col"></th>
            </tr>
        </thread>
        <tbody>
            @foreach ($schools as $s)

            <tr class="clickable-row">
                <td scope="row">{{$s->id}}</td>
                <td scope="row">{{$s->name}}</td>
                <td scope="row">{{$s->tel}}</td>
                <td scope="row">{{$s->email}}</td>
                <td scope="row">{{$s->address}}</td>
                <td scope="row">{{$s->communication_responsible}}</td>
                <td scope="row">
                    <a class="mx-3" href="{{url('/admin/editar/'.$s->id)}}">
                        <i class="fas fa-cog text-dark "></i>
                    </a>

                    <a href="{{url('/admin/escola/'.$s->id)}}">
                        <i class="fas fa-user-graduate text-dark"></i>
                    </a>
                </td>
            </tr>

            @endforeach
        </tbody>
    </table>
</div>
@endsection
