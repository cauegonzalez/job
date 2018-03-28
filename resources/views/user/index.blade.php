@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">User Profile</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                        </div>
                    @endif

                    @guest
                        Página indisponível
                    @else
                        <h3>{{ Auth::user()->name }}</h3>
                        <ul style="list-style-type: none;">
                            <li><strong>Email:</strong> {{ $user->email }}</li>
                            <li><strong>City:</strong> {{ $user->city }}</li>
                            <li><strong>State:</strong> {{ $user->state }}</li>
                            <li><strong>Postal Code:</strong> {{ $user->postal_code }}</li>
                            <li><strong>Address:</strong> {{ $user->address }}</li>
                            <li><strong>Number:</strong> {{ $user->number }}</li>
                            <li><strong>Complement:</strong> {{ $user->complement }}</li>
                            <li><strong>District:</strong> {{ $user->district }}</li>
                        </ul>
                    @endguest

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
