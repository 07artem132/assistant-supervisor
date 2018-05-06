@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">@lang('basic.students list')</div>
                    <div class="card-body">
                        <div class="float-right">
                            <button type="button" class="btn btn-success"
                                    onclick="location.href='/students/add'">@lang('basic.students add')</button>
                        </div>
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>№</th>
                                <th>@lang('auth.Name')</th>
                                <th>@lang('auth.surname')</th>
                                <th>@lang('auth.patronymic')</th>
                                <th>@lang('basic.group')</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($students as $student)
                                <tr>
                                    <th scope="row">{{ $student['id'] }}</th>
                                    <td>{{ $student['surname'] }}</td>
                                    <td>{{ $student['name'] }}</td>
                                    <td>{{ $student['patronymic'] }}</td>
                                    <td>{{ $student['groups'] }}</td>
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
