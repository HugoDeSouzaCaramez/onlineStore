@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')
@forelse ($viewData["orders"] as $order)
<div class="card mb-4">
    <div class="card-header">
        Pedido #{{ $order->getId() }}
    </div>
    <div class="card-body">
        <b>Data:</b> {{ $order->getCreatedAt() }}<br />
        <b>Total:</b> ${{ $order->getTotal() }}<br />
        <table class="table table-bordered table-striped text-center mt-3">
            <thead>
                <tr>
                    <th scope="col">Item ID</th>
                    <th scope="col">Nomde do Produto</th>
                    <th scope="col">Preço</th>
                    <th scope="col">Quantidade</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($order->getItems() as $item)
            <tr>
                <td>{{ $item->getId() }}</td>
                <td>
                    <a class="link-success" href="{{ route('product.show', ['id'=> $item->getProduct()->getId()]) }}">
                    {{ $item->getProduct()->getName() }}
                    </a>
                </td>
            <td>${{ $item->getPrice() }}</td>
            <td>{{ $item->getQuantity() }}</td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
@empty
<div class="alert alert-danger" role="alert">
    Parece que você não comprou nada na nossa loja =(.
</div>
@endforelse
@endsection