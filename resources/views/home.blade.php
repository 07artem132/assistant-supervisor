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
                                <td>привязать</td>
                            </tr>
                            <tr>
                                <td>
                                    <i class="far fa-envelope" style="font-size:3em; color:#908d8d"></i>

                                </td>
                                <td>disabled</td>
                                <td>привязать</td>

                            </tr>
                            <tr>
                                <td>
                                    <i class="fab fa-viber" style="font-size:3em; color:#7b519d"></i>

                                </td>
                                <td>disabled</td>
                                <td>привязать</td>

                            </tr>
                            <tr>
                                <td>
                                    <i class="fab fa-facebook-square" style="font-size:3em; color:#3b5bdb"></i>

                                </td>
                                <td>disabled</td>
                                <td>привязать</td>

                            </tr>
                            <tr>
                                <td>
                                    <i class="fab fa-whatsapp-square" style="font-size:3em; color:#20a413"></i>

                                </td>
                                <td>disabled</td>
                                <td>привязать</td>

                            </tr>
                            <tr>
                                <td>
                                    <i class="fab fa-odnoklassniki-square"
                                       style="font-size:3em; color:#e8590c"></i>
                                </td>
                                <td>disabled</td>
                                <td>привязать</td>

                            </tr>
                            <tr>
                                <td>
                                    <i class="fab fa-vk"
                                       style="font-size:2.5em; color:#5e89b3"></i>
                                </td>
                                <td>disabled</td>
                                <td>привязать</td>

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
