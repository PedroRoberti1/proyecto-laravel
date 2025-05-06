<h1>Crear nota</h1>

<a href="{{route('notes.index')}}">Ir al index</a>

<form action="{{route('notes.store')}}"method="POST">
    @csrf
    <input type="text" name="Titulo" placeholder="Titulo">
    <textarea name="Contenido" id="Contenido" ></textarea>
    <button type="submit">Enviar</button>
</form>

