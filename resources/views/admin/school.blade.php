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
                    <a data-column="gender" href="#">
                        Sexo
                    </a>
                </th>

                <th scope="col">
                    <a data-column="tel" href="#">
                        Telefone
                    </a>
                </th>

                <th scope="col">
                    <a data-column="responsible" href="#">
                        Responsável
                    </a>
                </th>

                <th scope="col">
                    <a data-column="grade" href="#">
                        Série
                    </a>
                </th>


                <th scope="col">
                    <a data-column="observation" href="#">
                        Observação
                    </a>
                </th>

                <th scope="col">
                    <a data-column="is_kit_done" href="#">
                        Kit Concluído
                    </a>
                </th>

                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $s)

            <tr class="clickable-row">
                <td scope="row">{{$loop->iteration}}</td>
                <td scope="row">{{$s->name}}</td>
                <td scope="row">{{$s->gender}}</td>
                <td scope="row">{{$s->tel}}</td>
                <td scope="row">{{$s->responsible}}</td>
                <td scope="row">{{$s->grade}}</td>
                <td scope="row">{{$s->observation}}</td>
                <td scope="row">
                    <form class="d-flex mx-3" action="{{url('/admin/escola/'.$school->id.'/kit/'.$s->id)}}" method="POST">
                        @csrf
                        <input onchange="this.form.submit()" type="checkbox" id="kit" name="kit" @if($s->is_kit_done == 1) checked @endif/>
                    </form>
                </td>
                <td scope="row">
                    <a href="{{url('/admin/escola/'.$school->id.'/editar/'.$s->id)}}">
                        <i class="fa fa-edit text-dark"></i>
                    </a>

                    <a href="{{url('/admin/escola/'.$school->id.'/remover/'.$s->id)}}">
                        <i class="fa fa-trash mx-3 text-danger"></i>
                    </a>
                </td>
            </tr>

            @endforeach
        </tbody>
    </table>
</div>

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
@endsection