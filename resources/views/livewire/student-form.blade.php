<div class="d-flex flex-column align-items-center">
    <p>{{$studentCount}}</p>

    <button wire:click="$emit('openModal', 'student-modal') class="form-control w-50 align-self-center mb-4 "> Enviar </button>

    <div>
    <table class="table mt-4">
        <thread>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Telefone</th>
                <th scope="col">Genero</th>
                <th scope="col">Responsável</th>
                <th scope="col">observação</th>
        </thread>
        <tbody>
        @foreach ($students as $s)

            <tr>
                <th scope="row">{{$s['id']}}</th>
                <th scope="row">{{$s['name']}}</th>
                <th scope="row">{{$s['tel']}}</th>
                <th scope="row">{{$s['gender']}}</th>
                <th scope="row">{{$s['responsible']}}</th>
                <th scope="row">{{$s['observation']}}</th>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>


</div>