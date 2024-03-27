<h1>Lista de Superhéroes</h1>
<a href="{{ route('superheroes.create') }}">Crear Superhéroe</a>
<table>
    <thead>
        <tr>
            <th>Nombre Real</th>
            <th>Nombre del Superhéroe</th>
            <th>Foto</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($superheroes as $superhero)
        <tr>
            <td>{{ $superhero->real_name }}</td>
            <td>{{ $superhero->superhero_name }}</td>
            <td><img src="{{ $superhero->photo_url }}" alt="{{ $superhero->superhero_name }}" width="100"></td>
            <td>
                <a href="{{ route('superheroes.show', $superhero->id) }}">Ver</a>
                <a href="{{ route('superheroes.edit', $superhero->id) }}">Editar</a>
                <form action="{{ route('superheroes.destroy', $superhero->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
