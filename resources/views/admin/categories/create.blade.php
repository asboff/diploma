@extends('layouts.admin')

@section('content')
    <h1 class="mb-0 fw-bold">Создание новой категории</h1>
    <form method="POST" action="{{ route('categories.store') }}">
        @csrf
        <div class="card">
            <h4 class="card-title">Название категории</h4>
            <input name="name" type="text" class="form-control {{$errors->has('name') ? 'is-invalid':''}}" placeholder="Название категории" value="{{ old('name') }}">
        </div>
        @if($errors->has('name'))
            @foreach($errors->get('name') as $error)
                {{ $error }}
            @endforeach
        @endif
        <button type="submit" class="badge bg-success" style="border: 0px">Создать</button>
    </form>
@endsection
