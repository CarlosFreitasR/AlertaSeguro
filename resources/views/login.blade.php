@extends('layouts.main')

@section('title', 'Login')

@section('content')

 <!-- Link CSS -->
 <link rel="stylesheet" href="{{ asset('css/login.css') }}">

<div class="login-container">
    <h2>Login</h2>
    <div class="input-group">
        <input type="email" placeholder="E-mail" required>
    </div>
    <div class="input-group">
        <input type="password" placeholder="Senha" required>
    </div>
    <div class="links">
        <a href="#">Esqueci Senha</a>
        <a href='/cadastro'">Fazer Cadastro</a>
    </div>
    <button class="login-button">Logar</button>
</div>
@endsection
