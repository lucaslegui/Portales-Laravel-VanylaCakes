<x-layout>
    <x-slot name="title">Lista de Productos</x-slot>

    <div class="container mt-4">
        <h2>Lista de Productos</h2>
        <a href="{{ route('products.create') }}" class="btn btn-primary mb-3">Agregar Producto</a>

        @if($products->isNotEmpty())

            <table class="table table-striped">
                <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Categoría</th>
                    <th>Descripción</th>
                    <th>Ingredientes</th>
                    <th>Precio</th>
                    <th>Imagen</th>
                    <th>Stock</th>
                    <th>Acciones</th>
                </tr>
                </thead>
                <tbody>
                @foreach($products as $product)
                    <tr>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->category->name }}</td>
                        <td>{{ $product->description }}</td>
                        <td>{{ $product->ingredients }}</td>
                        <td>{{ $product->price }}</td>
                        <td><img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" width="50">
                        </td>
                        <td>{{ $product->stock }}</td>
                        <td>
                            <a href="{{ route('products.show', $product->id) }}" class="btn btn-info btn-sm">Ver</a>
                            <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning btn-sm">Editar</a>
                            <a href="{{ route('products.confirmDelete', $product->id) }}" class="btn btn-danger btn-sm">Eliminar</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @else
            <div class="alert alert-warning" role="alert">
                No hay productos registrados.
            </div>
        @endif

    </div>
</x-layout>
