@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">@lang('basic.profile')</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">@lang('auth.surname')</div>
                            <div class="col-md-6">{{ Auth::user()->surname }}</div>
                            <div class="col-md-6">@lang('auth.Name')</div>
                            <div class="col-md-6">{{ Auth::user()->name }}</div>
                            <div class="col-md-6">@lang('auth.patronymic')</div>
                            <div class="col-md-6">{{ Auth::user()->patronymic }}</div>
                            <div class="col-md-6">@lang('auth.E-Mail Address')</div>
                            <div class="col-md-6">{{ Auth::user()->email }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
