<x-layout>
    <x-slot name="title">Confirmación necesaria para eliminar el producto {{ $product->name }}</x-slot>

    <hr>
    <div class="container mt-4">
        <h1>Confirmación Necesaria para eliminar el producto</h1>
        <h2>{{ $product->name }}</h2>
        <p><strong>Categoría:</strong> {{ $product->category->name }}</p>
        <p><strong>Descripción:</strong> {{ $product->description }}</p>
        <p><strong>Ingredientes:</strong> {{ $product->ingredients }}</p>
        <p><strong>Precio:</strong> ${{ $product->price }}</p>
        <p><strong>Stock:</strong> {{ $product->stock }}</p>
        <p><strong>Imagen:</strong></p>
        <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" width="300">

        <div class="mt-4">
            <a href="{{ route('products.index') }}" class="btn btn-primary">Volver a la lista de productos</a>

            <form action="{{ route('products.delete', $product->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Confirmar Eliminacion</button>
            </form>
        </div>
    </div>

    <hr>
</x-layout>
