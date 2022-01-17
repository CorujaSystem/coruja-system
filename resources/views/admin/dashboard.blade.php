@extends ('layouts.app')

@section('content')
<div>
    <table class="table mt-4">
        <thread>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Telefone</th>
                <th scope="col">Email</th>
                <th scope="col">Endereço</th>
                <th scope="col">Responsável</th>
        </thread>
        <tbody>
        @foreach ($schools as $s)

            <tr>
                <th scope="row">{{$s->id}}</th>
                <th scope="row">{{$s->name}}</th>
                <th scope="row">{{$s->tel}}</th>
                <th scope="row">{{$s->email}}</th>
                <th scope="row">{{$s->address}}</th>
                <th scope="row">{{$s->communication_responsible}}</th>

            </tr>

            @endforeach
        </tbody>
    </table>
</div>
@endsection