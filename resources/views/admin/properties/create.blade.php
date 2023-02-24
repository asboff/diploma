@extends('layouts.admin')

@section('content')
    <h1 class="mb-0 fw-bold">Создание нового объявления</h1>
    <form method="POST" action="{{ route('properties.store') }}">
        @csrf
        <div class="card">
            <h4 class="card-title">Район, в котором расположена недвижимость</h4>
            <input name="location" type="text" class="form-control {{$errors->has('location') ? 'is-invalid':''}}" placeholder="Введите район" value="{{ old('location') }}">
        </div>
        @if($errors->has('location'))
            @foreach($errors->get('location') as $error)
                {{ $error }}
            @endforeach
        @endif
        <div class="card">
            <h4 class="card-title">Адрес недвижимости</h4>
            <input name="address" type="text" class="form-control {{$errors->has('address') ? 'is-invalid':''}}" placeholder="Введите адрес" value="{{ old('address') }}">
        </div>
        @if($errors->has('address'))
            @foreach($errors->get('address') as $error)
                {{ $error }}
            @endforeach
        @endif
        <div class="card">
            <h4 class="card-title">Выберите вид недвижимости</h4>
            <select name="category" class="form-control" value="{{ old('location') }}">
                <option disabled>Выберите вид</option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="card">
            <h4 class="card-title">Выберите агента</h4>
            <select name="user_id" class="form-control" value="{{ old('user_id') }}">
                <option disabled>Выберите агента</option>
                @foreach($users as $user)
                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="card">
            <h4 class="card-title">Площадь недвижимости</h4>
            <input name="area" type="number" class="form-control {{$errors->has('area') ? 'is-invalid':''}}" placeholder="Введите площадь" value="{{ old('area') }}">
        </div>
        @if($errors->has('area'))
            @foreach($errors->get('area') as $error)
                {{ $error }}
            @endforeach
        @endif
        <div class="card">
            <h4 class="card-title">Количество комнат</h4>
            <input name="rooms" type="number" class="form-control {{$errors->has('rooms') ? 'is-invalid':''}}" placeholder="Введите количество комнат" value="{{ old('rooms') }}">
        </div>
        @if($errors->has('rooms'))
            @foreach($errors->get('rooms') as $error)
                {{ $error }}
            @endforeach
        @endif
        <div class="card">
            <h4 class="card-title">Описание</h4>
            <input name="description" type="text" class="form-control {{$errors->has('description') ? 'is-invalid':''}}" placeholder="Введите описание вашей недвижимости" value="{{ old('description') }}">
        </div>
        @if($errors->has('description'))
            @foreach($errors->get('description') as $error)
                {{ $error }}
            @endforeach
        @endif
        <div class="card">
            <h4 class="card-title">Фотографии</h4>
            <input name="images" type="file" multiple class="form-control" value="{{ old('images_dir') }}">
        </div>
        @if($errors->has('images'))
            @foreach($errors->get('images') as $error)
                {{ $error }}
            @endforeach
        @endif
        <button type="submit" class="badge bg-success" style="border: 0px">Создать</button>
    </form>
@endsection
