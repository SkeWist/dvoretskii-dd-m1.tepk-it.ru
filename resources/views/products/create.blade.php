@extends('layouts.layout')

@section('title', 'Создание продукта')

@section('content')
    <a class="btn" href="{{ route('products.index') }}">Назад</a>

    <form class="container" action="{{ route('products.store') }}" method="POST" enctype="application/x-www-form-urlencoded">
        <label class="labelFont">Создание продукта</label>
        @csrf
        @if($errors->any())
            <script>
                alert("Ошибка валидации данных. Изучите ошибки валидации и исправьте данные.")
            </script>
        @endif
        <div class="containerItems">
            @error('product_type_id')
            <p class="warning">{{ $message }}</p>
            @enderror
            <label>Тип продукции</label>
            <select name="product_type_id" required>
                @foreach($types as $type)
                    <option value="{{ $type->id }}">{{ $type->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="containerItems">
            @error('name')
            <p class="warning">{{ $message }}</p>
            @enderror
            <label>Наименование продукта</label>
            <input type="text" name="name" placeholder="Введите название продукта" required>
        </div>
        <div class="containerItems">
            @error('article')
            <p class="warning">{{ $message }}</p>
            @enderror
            <label>Артикул</label>
            <input type="text" name="article" placeholder="Введите артикул" required>
        </div>
        <div class="containerItems">
            @error('min_price')
            <p class="warning">{{ $message }}</p>
            @enderror
            <label>Мин.стоимость</label>
            <input type="number" name="min_price" min="0.01" step="0.01" placeholder="Введите мин.стоимость" required>
        </div>
        <div class="containerItems">
            @error('width')
            <p class="warning">{{ $message }}</p>
            @enderror
            <label>Ширина рулона</label>
            <input type="number" name="width" min="0.01" step="0.01" placeholder="Введите ширину рулона" required>
        </div>

        <button type="submit" class="btn">Создать</button>
    </form>
@endsection
