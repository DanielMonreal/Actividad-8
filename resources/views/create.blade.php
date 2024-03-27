<h1>Crear Superhéroe</h1>
<form action="{{ route('superheroes.store') }}" method="POST">
    @csrf
    <label for="real_name">Nombre Real:</label>
    <input type="text" name="real_name" id="real_name">

    <label for="superhero_name">Nombre del Superhéroe:</label>
    <input type="text" name="superhero_name" id="superhero_name">

    <label for="photo_url">URL de la Foto:</label>
    <input type="text" name="photo_url" id="photo_url">

    <label for="additional_info">Información Adicional:</label>
    <textarea name="additional_info" id="additional_info"></textarea>

    <button type="submit">Crear Superhéroe</button>
</form>
