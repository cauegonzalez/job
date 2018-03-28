@extends('layouts.app');

@section('content')
<table class="table table-striped">
    <thead>
        <tr>
            <th>Imagem</th>
            <th>Title</th>
            <th>Description</th>
            <th>Price</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($products as $product)
        <tr>
            <td><img width="50" src="{{ asset('/images') }}/{{ $product->thumbnail }}" alt='{{ $product->thumbnail }}'></td>
            <td>{{ $product->title }}</td>
            <td>{{ $product->description }}</td>
            <td>R$ {{ number_format($product->price, 2) }}</td>
            <td><a href="{{ route('products.show', $product->id) }}" class="btn btn-primary"><i class="fas fa-eye"></i></a></td>
            <td><a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning"><i class="fas fa-edit"></i></a></td>
            <td>
                <form action="{{ route('products.destroy', $product->id) }}" method="post">
                    @csrf
                    <input name="_method" type="hidden" value="DELETE">
                    <button class="btn btn-danger" type="submit"><i class="fas fa-trash"></i></button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<a href="{{ route('products.create') }}" class="btn btn-primary" style="float: right; margin-right: 15px;">Novo Produto</a>
@endsection
