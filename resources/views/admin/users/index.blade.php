@extends('layouts.admin')

@section('content')
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Список пользователей</h4>
            </div>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Имя</th>
                        <th scope="col">E-mail</th>
                        <th scope="col">Количество сделок</th>
                        <th scope="col">Админ</th>
                        <th scope="col">Действия</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                    <tr>
                        <th scope="row">{{ $user->id }}</th>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->deals_number }}</td>
                        <td>@if($user->is_admin == 1)<i class="mdi mdi-check"></i>@endif</td>
                        <td>@if($user->is_banned)
                                <a class="badge bg-success" href="{{ route('users.edit', compact('user')) }}">Разблокировать</a>
                            @else
                                <a class="badge bg-danger" href="{{ route('users.edit', compact('user')) }}">Заблокировать</a>
                        @endif</td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
