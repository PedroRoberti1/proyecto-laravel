<h1>Notas</h1>

<a href="{{route('notes.create')}}">Nueva Nota</a>


@foreach ($notes as $note)
    <h2><a href="{{ route('notes.show', $note)}}">{{ $note->titulo}}</a></h2>
    <p>{{$note->contenido}}</p>
    <a href="{{route('notes.edit, $note')}}">Editar</a>
    <form action="{{route('notas.destroy', $note)}}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit">Eliminar</button>
    </form>
@endforeach