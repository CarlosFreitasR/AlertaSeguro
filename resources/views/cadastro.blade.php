@extends('layouts.main')

@section('title', 'Cadastro')

@section('content')

<link rel="stylesheet" href="{{ asset('css/cadastro.css') }}">

<div class="cadastro-container">
    <h2>Cadastro</h2>
    <form id="cadastro-form">
        @csrf
        <div class="section">
            <h3>Dados Pessoais</h3>
            <div class="input-group">
                <input type="text" id="cpf" name="cpf" placeholder="CPF" required>
                <span class="invalid-feedback" id="cpf-error" role="alert" style="display: none;">
                    <strong></strong>
                </span>
            </div>
            <div class="input-group">
                <input type="text" id="nome" name="nome" placeholder="Nome" required>
            </div>
            <div class="input-group">
                <input type="date" id="data_nascimento" name="data_nascimento" placeholder="Data de nascimento" required>
                <span class="invalid-feedback" id="data_nascimento-error" role="alert" style="display: none;">
                    <strong></strong>
                </span>
            </div>
            <div class="input-group">
                <input type="tel" id="telefone" name="telefone" placeholder="Telefone" required>
            </div>
        </div>
        <div class="section">
            <h3>Contatos de Emergência</h3>
            <div class="input-group">
                <input type="tel" id="contato1" name="contato1" placeholder="Contato 1" required>
            </div>
            <div class="input-group">
                <input type="tel" id="contato2" name="contato2" placeholder="Contato 2" required>
            </div>
            <div class="input-group">
                <input type="tel" id="contato3" name="contato3" placeholder="Contato 3" required>
            </div>
        </div>
        <button class="cadastro-button" type="submit">Cadastrar</button>
    </form>
</div>
@endsection
