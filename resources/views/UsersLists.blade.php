@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card" style="display:inline-block">
                    <div class="card-header">@lang('basic.User list')</div>
                    <div class="card-body">
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th>№</th>
                                    <th>@lang('auth.Name')</th>
                                    <th>@lang('auth.surname')</th>
                                    <th>@lang('auth.patronymic')</th>
                                    <th>@lang('auth.E-Mail Address')</th>
                                    <th>@lang('auth.phone')</th>
                                    <th>@lang('basic.group')</th>
                                    <th>@lang('auth.role')</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                        <th scope="row">{{ $user['id'] }}</th>
                                        <td>{{ $user['surname'] }}</td>
                                        <td>{{ $user['name'] }}</td>
                                        <td>{{ $user['patronymic'] }}</td>
                                        <td>{{ $user['email'] }}</td>
                                        <td>{{ $user['phone'] }}</td>
                                        <td>{{ $user['groups'] }}</td>
                                        <td>{{ $user['roles'] }}</td>
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
