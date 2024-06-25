<x-layout>
    <x-slot name="title">Agregar Categoría</x-slot>

    <div class="container mt-4">
        <h2>Agregar Nueva Categoría</h2>
        <form action="{{ route('categories.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nombre de la Categoría</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Descripción</label>
                <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Agregar Categoría</button>
        </form>
    </div>
</x-layout>
