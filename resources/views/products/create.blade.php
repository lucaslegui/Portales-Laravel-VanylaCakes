<x-layout>
    <x-slot name="title">Agregar Producto</x-slot>

    <div class="container mt-4">
        <h2>Agregar Nuevo Producto</h2>
        <form action="{{ route('products.create.process') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nombre del Producto</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="mb-3">
                <label for="category_id" class="form-label">Categoría</label>
                <select class="form-select" id="category_id" name="category_id" required>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
                <a href="{{ route('categories.create') }}">Agregar Nueva Categoría</a>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Descripción</label>
                <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
            </div>
            <div class="mb-3">
                <label for="ingredients" class="form-label">Ingredientes</label>
                <textarea class="form-control" id="ingredients" name="ingredients" rows="3" required></textarea>
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Precio</label>
                <input type="number" class="form-control" id="price" name="price" required>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Imagen</label>
                <input class="form-control" type="file" id="image" name="image" accept="image/*" required>
            </div>
            <div class="mb-3">
                <label for="stock" class="form-label">Existencias</label>
                <input type="number" class="form-control" id="stock" name="stock" required>
            </div>
            <button type="submit" class="btn btn-primary">Agregar Producto</button>
        </form>
    </div>
</x-layout>
