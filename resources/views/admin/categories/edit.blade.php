@extends('layouts.admin')

@section('content')
    <h1 class="mb-0 fw-bold">Редактирование категории {{ $category->name }}</h1>
    <form method="POST" action="{{ route('categories.update', compact('category')) }}">
        @method('PUT')
        @csrf
        <div class="card">
            <h4 class="card-title">Название категории</h4>
            <input name="name" type="text" class="form-control {{$errors->has('name') ? 'is-invalid':''}}" placeholder="Название категории" value="{{ old('name') ? old('name') : $category->name }}">
        </div>
        @if($errors->has('name'))
            @foreach($errors->get('name') as $error)
                {{ $error }}
            @endforeach
        @endif
    </form>
@endsection
