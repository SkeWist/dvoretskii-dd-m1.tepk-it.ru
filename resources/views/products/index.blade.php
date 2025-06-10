@extends('layouts.layout')

@section('title', 'Список продуктов')

@section('content')
    <a class="btn" href="{{ route('products.create') }}">Создать продукт</a>
    @foreach($products as $product)
        <a href="/products/edit/{{$product->id}}">
            <div class="flex border">
                <div class="div85">
                    <div class="bigFontSize">{{ $product->productType->name }} | {{ $product->name }}</div>
                    <div>{{ $product->article }}</div>
                    <div>{{ $product->min_price }} (р)</div>
                    <div>{{ $product->width }} (м)</div>
                </div>
                <div class="div15 bigFontSize">{{ number_format($product->calculated_cost, 2) }} (р)</div>
            </div>
            <a href="{{ route('products.materials', $product) }}" class="btnMaterial">Материалы</a>
        </a>
    @endforeach
@endsection
