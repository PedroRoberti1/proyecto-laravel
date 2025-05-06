<h1>Editar nota</h1>

<a href="{{route('notes.index')}}">Ir al index</a>


<form action="{{route('notes.update', $note)}}" method="POST">Editar
    @csrf
    @method('PUT')
    <input type="text" name="Titulo" placeholder="Titulo">
    <textarea name="Contenido" id="Contenido"></textarea>
    <button name="submit">Editar</button>
</form>