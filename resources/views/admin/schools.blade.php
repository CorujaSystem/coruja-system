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
        <thead>
            <tr>
                <th scope="col">
                    <a data-column="id" href="#">
                        #
                    </a>
                </th>

                <th scope="col">
                    <a data-column="name" href="#">
                        Nome
                    </a>
                </th>

                <th scope="col">
                    <a data-column="tel" href="#">
                        Telefone
                    </a>
                </th>

                <th scope="col">
                    <a data-column="email" href="#">
                        Email
                    </a>
                </th>

                <th scope="col">
                    <a data-column="address" href="#">
                        Endereço
                    </a>
                </th>

                <th scope="col">
                    <a data-column="communication_responsible" href="#">
                        Responsável
                    </a>
                </th>

                <th scope="col">Alunos</th>

                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($schools as $s)

            <tr class="clickable-row">
                <td scope="row">{{$loop->iteration}}</td>
                <td scope="row">{{$s->name}}</td>
                <td scope="row">{{$s->tel}}</td>
                <td scope="row">{{$s->email}}</td>
                <td scope="row">{{$s->address}}</td>
                <td scope="row">{{$s->communication_responsible}}</td>

                <td scope="row">


                    <a data-toggle="tooltip" data-placement="top" title="Ver alunos" href="{{url('/admin/escola/'.$s->id)}}">
                        <i class="fas fa-user-graduate text-dark"></i>
                    </a>
                </td>
                <td scope="row">

                    <a id="tool1" class="mr-2" data-toggle="tooltip" data-placement="top" title="Editar informações" href="{{url('/admin/editar/'.$s->id)}}">
                        <i class="fas fa-cog text-dark "></i>
                    </a>

                    <a href="{{url('/admin/remover/'.$s->id)}}" data-toggle="tooltip" data-placement="top" title="Excluir escola">
                        <i class="fa fa-trash mx-3 text-danger"></i>
                    </a>

                </td>
            </tr>

            @endforeach

        </tbody>
    </table>

    <script>
        const sort = "{{$sort}}";
        const direction = "{{$direction}}";
        const columnsLinks = document.querySelectorAll('table > thead > tr > th > a')
        columnsLinks.forEach(column => {
            const columnKey = column.dataset.column
            if (columnKey === sort) {
                column.classList.add('active')
                if (direction === 'asc') {
                    column.innerHTML = `${column.innerHTML} <i class="fas fa-sort-up"></i> `
                } else {
                    column.innerHTML = `${column.innerHTML} <i class="fas fa-sort-down"></i>`
                }
                column.href = `?sort=${columnKey}&direction=${direction === 'asc' ? 'desc' : 'asc'}`
            } else {
                column.href = `?sort=${columnKey}`
            }
        })
    </script>
</div>
@endsection