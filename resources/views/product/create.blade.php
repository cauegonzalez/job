@extends('layouts.app')

@section('content')
<div style="width: 50%; margin-left: 25%;">
    <form method="post" action="{{ route('products.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <label for="title">Nome</label>
            <input type="text" name="title" id="title" class="form-text form-control"><br />
            <label for="description">Descrição</label>
            <textarea name="description" id="description" class="form-text form-control"></textarea><br />
            <label for="image">Imagem</label>
            <input type="file" name="image" id="image" class="form-text form-control"><br />
            <label for="thumbnail">Thumbnail</label>
            <input type="file" name="thumbnail" id="thumbnail" class="form-text form-control"><br />
            <label for="price">Preço</label>
            <input type="text" name="price" id="price" class="form-text form-control"><br />
            <input type="submit" name="submit" value="Salvar" class="btn btn-primary" style="margin-top: 5px;"><br />
        </div>
    </form>

</div>

@endsection