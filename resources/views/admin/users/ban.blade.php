@extends('layouts.admin')

@section('content')
    <h1 class="mb-0 fw-bold">Вы действительно хотите заблокировать пользователя {{ $user->name }}?</h1>
    <form method="POST" action="">
        @csrf
        <div class="card">
            <h4 class="card-title">Причина блокировки</h4>
            <input name="ban_reason" type="text" class="form-control {{$errors->has('ban_reason') ? 'is-invalid':''}}" placeholder="Введите причину блокировки" value="{{ old('ban_reason') }}">
        </div>
        @if($errors->has('ban_reason'))
            @foreach($errors->get('ban_reason') as $error)
                {{ $error }}
            @endforeach
        @endif
        <button type="submit" class="badge bg-danger" style="border: 0px">Заблокировать</button>
        <a class="badge bg-cyan" href="{{ route('users.index') }}">Вернуться</a>
    </form>
@endsection
