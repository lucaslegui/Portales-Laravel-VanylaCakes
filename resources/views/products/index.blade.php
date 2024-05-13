<?php
$title = 'Productos';
?>

<x-layout>
    <x-slot:title>
        Productos
    </x-slot>

    <h1>todos los productos</h1>

    <table class="table table-bordered table-striped">
        <thead>
        <tr>
            <th>ID</th>
            <td>Categoría</td>
            <th>Nombre</th>
            <th>Descripción</th>
            <td>Ingredientes</td>
            <td>Precio</td>
            <td>Existencias</td>
        </tr>
        </thead>
        <tbody>
        @foreach($products as $product)
            <tr>
                <td>{{ $product->product_id }}</td>
                <td>{{ $product->category_id }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->description }}</td>
                <td>{{ $product->ingredients }}</td>
                <td>{{ $product->price }}</td>
                <td>{{ $product->exists }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</x-layout>
