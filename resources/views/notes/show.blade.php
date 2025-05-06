

<h1>{{$note->Titulo}}</h1>
<p>{{$note->Contenido}}</p>
<a href="{{route('notes.edit', $note)}}">Editar</a>
<a href="{{route('notes.index')}}">Volver</a>