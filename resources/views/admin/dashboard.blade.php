@foreach ($schools as $s)
    <h1>{{$s->name}}</h1>
    <h1>{{$s->tel}}</h1>
    <h1>{{$s->email}}</h1>
    <h1>{{$s->address}}</h1>
    <h1>{{$s->communication_responsible}}</h1>
@endforeach