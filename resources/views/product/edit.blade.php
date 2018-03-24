@extends('layouts.app')

@section('content')
<div style="width: 50%; margin-left: 25%;">
    <form method="post" action="{{ route('products.update', $product->id) }}">
        @csrf
        <div class="row">
            <input type="hidden" name="_method" value="PATCH">
            <label for="name">Nome</label><br />
            <input type="text" name="name" id="name" value="{{ $product->title }}" class="form-text form-control"><br />
            <label for="description">Descrição</label>
            <textarea name="description" id="description" class="form-text form-control">{{ $product->description }}</textarea><br />
            <label for="image">Imagem</label>
            <input type="file" name="image" id="image" value="{{ $product->image }}" class="form-text form-control"><br />
            <label for="thumbnail">Thumbnail</label>
            <input type="file" name="thumbnail" id="thumbnail" value="{{ $product->thumbnail }}" class="form-text form-control"><br />
            <label for="price">Preço</label>
            <input type="text" name="price" id="price" value="{{ $product->price }}" class="form-text form-control">

            <input type="submit" name="submit" value="Salvar" class="btn btn-primary" style="margin-top: 5px;">
        </div>
    </form>
</div>
@endsection