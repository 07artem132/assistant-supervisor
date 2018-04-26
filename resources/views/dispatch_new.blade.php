@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Создание рассылки</div>
                    <div class="card-body">
                            <form>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Тема рассылки</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Тестовая рассылка">
                                    <small id="emailHelp" class="form-text text-muted">Укажите тему рассылки, она будет использоваться как заголовок</small>
                                </div>
                                <div class="form-group">
                                    <label for="exampleSelect2">Выберите группы для рассылки</label>
                                    <select multiple class="form-control" id="exampleSelect2">
                                        <option>КН-17д</option>
                                        <option>КН-16д</option>
                                        <option>КН-15д</option>
                                        <option>КН-14д</option>
                                        <option>КН-13д</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleTextarea">Текст рассылки</label>
                                    <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Отправить</button>
                            </form>
                        </div>
                </div>
            </div>
        </div>
    </div>
@endsection
