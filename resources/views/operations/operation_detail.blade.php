@extends('operations.layout')

@section('content')
    <div class="container">
        <h2>Detalhes da Operação</h2>

        <div class="card">
            <div class="card-header">
                Operation ID: {{ $operation->id }}
            </div>
            <div class="card-body">
                <h5 class="card-title">Product Name: {{ $operation->product_name }}</h5>
                <p class="card-text"><strong>Operador:</strong> {{ $operation->user->name }}</p>
                <p class="card-text"><strong>Tipo de Operação:</strong> {{ ucfirst($operation->operation_type) }}</p>
                <p class="card-text"><strong>Quantidade:</strong> {{ $operation->quantity }}</p>
                <p class="card-text"><strong>Descrição:</strong> {{ $operation->description }}</p>
                <p class="card-text"><strong>Data e Horário:</strong> {{ $operation->operation_date_time }}</p>
                <a href="{{ url('operations') }}" class="btn btn-primary">Voltar</a>
            </div>
        </div>
    </div>
@endsection
