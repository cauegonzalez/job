@extends('layouts.app');

@section('content')
<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Description</th>
            <th>Price</th>
            <th>Action</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($products as $product)
        <tr>
            <td>{{ $product->id }}</td>
            <td>{{ $product->title }}</td>
            <td>{{ $product->description }}</td>
            <td>R$ {{ number_format($product->price, 2) }}</td>
            <td><a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning">Editar</a></td>
            <td>
                <form action="{{ route('products.destroy', $product->id) }}" method="post">
                    @csrf
                    <input name="_method" type="hidden" value="DELETE">
                    <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
                <!-- <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning">Editar</a></td> -->
        </tr>
        @endforeach
    </tbody>
</table>

<a href="{{ route('products.create') }}" class="btn btn-primary" style="float: right; margin-right: 15px;">Novo Produto</a>
@endsection
