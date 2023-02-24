@extends('layouts.admin')

@section('content')
    <h1 class="mb-0 fw-bold">Вы действительно хотите @if($user->is_banned)разблокировать @else заблокировать @endif пользователя {{ $user->name }}?</h1>
    <form method="POST" action="{{ route('users.update', compact('user')) }}">
        @method('PUT')
        @csrf
        <div class="card">
            <h4 class="card-title">Причина блокировки:</h4>
            @if($user->is_banned)
                <h5 class="card-title">{{ $user->ban_reason }}</h5>
            @else
                <input name="ban_reason" type="text" class="form-control {{$errors->has('ban_reason') ? 'is-invalid':''}}" placeholder="Введите причину блокировки" value="{{ old('ban_reason') }}">
            @endif
        </div>>
        @if($errors->has('ban_reason'))
            @foreach($errors->get('ban_reason') as $error)
                {{ $error }}
            @endforeach
        @endif
        @if($user->is_banned)
            <button type="submit" class="badge bg-success" style="border: 0px">Разлокировать</button>
        @else
            <button type="submit" class="badge bg-danger" style="border: 0px">Заблокировать</button>
        @endif
        <a class="badge bg-cyan" href="{{ route('users.index') }}">Вернуться</a>
    </form>
@endsection
