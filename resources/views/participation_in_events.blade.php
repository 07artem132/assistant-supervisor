@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Информация об участии в мероприятиях</div>
                    <div class="card-body">
                        <div class="float-right" >
                            <button type="button" class="btn btn-success">Добавить участие в мероприятиях</button>
                        </div>

                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Название</th>
                                <th>Тип</th>
                                <th>Баллы</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Олимпиада ггпу</td>
                                <td>Спортивная деятельность</td>
                                <td>10</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Выступление возле свалки</td>
                                <td>Общественная работа</td>
                                <td>15	</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Уборка мусора</td>
                                <td>Научная работа</td>
                                <td>10</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
