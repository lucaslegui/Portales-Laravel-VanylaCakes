<x-layout>
    <x-slot name="title">Editar Producto</x-slot>

    <div class="container mt-4">
        <h2>Editar Producto</h2>
        <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-label">Nombre del Producto</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $product->name }}" required>
            </div>
            <div class="mb-3">
                <label for="category_id" class="form-label">Categoría</label>
                <select class="form-select" id="category_id" name="category_id" required>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}" {{ $product->category_id == $category->id ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Descripción</label>
                <textarea class="form-control" id="description" name="description" rows="3" required>{{ $product->description }}</textarea>
            </div>
            <div class="mb-3">
                <label for="ingredients" class="form-label">Ingredientes</label>
                <textarea class="form-control" id="ingredients" name="ingredients" rows="3" required>{{ $product->ingredients }}</textarea>
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Precio</label>
                <input type="number" class="form-control" id="price" name="price" value="{{ $product->price }}" required>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Imagen</label>
                <input class="form-control" type="file" id="image" name="image" accept="image/*">
                <p class="mt-2">Imagen actual: <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" width="100"></p>
            </div>
            <div class="mb-3">
                <label for="stock" class="form-label">Existencias</label>
                <input type="number" class="form-control" id="stock" name="stock" value="{{ $product->stock }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Actualizar Producto</button>
        </form>
    </div>
</x-layout>
