<x-layout>
    <x-slot name="title">{{ $product->name }}</x-slot>

    <div class="container mt-4">
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
            <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning">Editar</a>
            <a href="{{ route('products.confirmDelete', $product->id) }}" class="btn btn-danger">Eliminar</a>

        </div>
    </div>
</x-layout>
