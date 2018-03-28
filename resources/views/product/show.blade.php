@extends('layouts.app')

@section('content')

<div style="width: 50%; margin-left: 25%;">
    <div class="row">
        <ul style="list-style-type: none;">
            <li><strong>Nome:</strong> {{ $product->title }}</li>
            <li><strong>Descrição: </strong> {{ $product->description }}</li>
            <li><strong>Imagem:</strong> <img style="max-width: 500px;" src="{{ asset('/images') }}/{{ $product->image }}" alt='{{ $product->image }}'></li>
            <li><strong>Thumbnail:</strong> <img style="max-width: 100px;" src="{{ asset('/images') }}/{{ $product->thumbnail }}" alt='{{ $product->thumbnail }}'></li>
            <li><strong>Preço:</strong> R$ {{ number_format($product->price, 2) }}</li>
        </ul>
    </div>
</div>
@endsection