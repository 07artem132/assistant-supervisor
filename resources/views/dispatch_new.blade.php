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
                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Тема">
                                </div>
                                <div class="form-group">
                                    <label for="exampleSelect2">Группы для рассылки</label>
                                    <select multiple class="form-control" id="exampleSelect2">
                                        <option>КН-17д</option>
                                        <option>КН-16д</option>
                                        <option>КН-15д</option>
                                        <option>КН-14д</option>
                                        <option>КН-13д</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" id="exampleTextarea" rows="3" placeholder="Текст рассылки"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Отправить</button>
                            </form>
                        </div>
                </div>
            </div>
        </div>
    </div>
@endsection
