<h1>Detalles del Superhéroe</h1>
<p><strong>Nombre Real:</strong> {{ $superhero->real_name }}</p>
<p><strong>Nombre del Superhéroe:</strong> {{ $superhero->superhero_name }}</p>
<p><strong>Foto:</strong> <img src="{{ $superhero->photo_url }}" alt="{{ $superhero->superhero_name }}" width="200"></p>
<p><strong>Información Adicional:</strong> {{ $superhero->additional_info }}</p>
<a href="{{ route('superheroes.index') }}">Volver a la Lista de Superhéroes</a>
