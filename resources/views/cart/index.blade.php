@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')
<div class="card">
    <div class="card-header">
        Produtos no Carrinho
    </div>
    <div class="card-body">
        <table class="table table-bordered table-striped text-center">
            <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">Preço</th>
                <th scope="col">Quantidade</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($viewData["products"] as $product)
                <tr>
                <td>{{ $product->getId() }}</td>
                <td>{{ $product->getName() }}</td>
                <td>${{ $product->getPrice() }}</td>
                <td>{{ session('products')[$product->getId()] }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="row">
            <div class="text-end">
                <a class="btn btn-outline-secondary mb-2"><b>Total a pagar:</b> ${{ $viewData["total"] }}</a>
                @if (count($viewData["products"]) > 0)
                    <a href="{{ route('cart.purchase') }}" class="btn bg-primary text-white mb-2">Comprar</a>
                    <a href="{{ route('cart.delete') }}">
                    <button class="btn btn-danger mb-2">
                        Remover todos os produtos do carrinho
                    </button>
                    </a>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection