@extends('layouts.layout')

@section('title', 'Материалы продукта')

@section('content')
    <a href="{{ route('products.index') }}" class="btn">Назад к списку продуктов</a>

    <div class="materials">
        <h1 class="labelMaterial">Материалы для продукта: {{ $product->name }}</h1>

        <table class="table">
            <thead>
            <tr>
                <th class="labelMaterial">Наименование материала</th>
                <th class="labelMaterial">Количество</th>
            </tr>
            </thead>
            <tbody>
            @foreach($materials as $pm)
                <tr>
                    <td>{{ $pm->material->name }}</td>
                    <td>{{ $pm->quantity }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
