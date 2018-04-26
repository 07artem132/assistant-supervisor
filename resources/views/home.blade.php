@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">@lang('basic.Dashboard')</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                        <table class="notify">
                            <thead>
                            <tr>
                                <td>Канал уведомлений</td>
                                <td>Статус</td>
                                <td>Действие</td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                    <i class="fab fa-telegram" style="font-size:3em; color:#15aabf"></i>
                                </td>
                                <td>disabled</td>
                                <td>
                                    <button type="button"
                                            class="btn btn-success btn-sm" onclick="location.href='/bind/telegram'" disabled="disabled">@lang('basic.bind notification channel')</button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <i class="far fa-envelope" style="font-size:3em; color:#908d8d"></i>
                                </td>
                                <td>
                                    @if ($EmailNotifiesStatus)
                                        enable
                                    @else
                                        disabled
                                    @endif
                                </td>
                                <td>
                                    @if (!$EmailNotifiesStatus)
                                    <button type="button"
                                            class="btn btn-success btn-sm"onclick="location.href='/bind/email'">@lang('basic.bind notification channel')</button>
                                    @else
                                        <button type="button"
                                                class="btn btn-danger btn-sm"onclick="location.href='/bind/email/remove'">@lang('basic.remove a binding notification channel')</button>
                                    @endif

                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <i class="fab fa-viber" style="font-size:3em; color:#7b519d"></i>

                                </td>
                                <td>disabled</td>
                                <td>
                                    <button type="button"
                                            class="btn btn-success btn-sm" disabled="disabled">@lang('basic.bind notification channel')</button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <i class="fab fa-facebook-square" style="font-size:3em; color:#3b5bdb"></i>
                                </td>
                                <td>disabled</td>
                                <td>
                                    <button type="button"
                                            class="btn btn-success btn-sm" disabled="disabled">@lang('basic.bind notification channel')</button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <i class="fab fa-whatsapp-square" style="font-size:3em; color:#20a413"></i>

                                </td>
                                <td>disabled</td>
                                <td>
                                    <button type="button"
                                            class="btn btn-success btn-sm" disabled="disabled">@lang('basic.bind notification channel')</button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <i class="fab fa-odnoklassniki-square"
                                       style="font-size:3em; color:#e8590c"></i>
                                </td>
                                <td>disabled</td>
                                <td>
                                    <button type="button"
                                            class="btn btn-success btn-sm" disabled="disabled">@lang('basic.bind notification channel')</button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <i class="fab fa-vk"
                                       style="font-size:2.5em; color:#5e89b3"></i>
                                </td>
                                <td>disabled</td>
                                <td>
                                    <button type="button"
                                            class="btn btn-success btn-sm" disabled="disabled">@lang('basic.bind notification channel')</button>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <br/>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
