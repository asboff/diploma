@extends('layouts.admin')

@section('content')
    <div class="row">
        <!-- column -->
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <!-- title -->
                    <div class="d-md-flex">
                        <div>
                            <h4 class="card-title">Список объявлений</h4>
{{--                            <h5 class="card-subtitle">Overview of Top Selling Items</h5>--}}
                        </div>
                    </div>
                    <a class="btn btn-primary text-white" href="{{ route('properties.create') }}">Добавить объявление</a>
                    <!-- title -->
                    <div class="table-responsive">
                        <table class="table mb-0 table-hover align-middle text-nowrap">
                            <thead>
                            <tr>
                                <th class="border-top-0">ID</th>
                                <th class="border-top-0">Автор</th>
                                <th class="border-top-0">Адрес</th>
                                <th class="border-top-0">Действия</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($categories as $category)
                            <tr>
                                <td>{{ $category->id }}</td>
                                <td>{{ $category->user() }}</td>
                                <td>
                                    <a class="badge bg-success" href="{{ route('properties.edit', compact('property')) }}">Изменить</a>
                                    <form action="{{ route('properties.destroy', compact('property')) }}" method="post">
                                        @method('DELETE')
                                        @csrf
                                        <button class="badge bg-danger" style="border: 0px; display: flex" type="submit">Удалить</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
