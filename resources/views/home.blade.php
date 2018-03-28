@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <ul>
                    @guest
                        <li><a href="register">Registrar novo Usuário</a></li>
                        <li><a href="login">Realizar Login</a></li>
                    @else
                        <li><a href="{{ route('products.index') }}">Listar Produtos</a></li>
                        <li><a href="user/{{ Auth::user()->id }}">Perfil {{ Auth::user()->name  }}</a></li>
                        <li>
                            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                        </li>
                    @endguest
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
