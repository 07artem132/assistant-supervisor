@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">@lang('basic.students add')</div>
                    <div class="card-body">
                        <form method="POST">
                            @csrf
                            <div class="form-group">
                                <input type="text" class="form-control" id="surname"  name="surname" placeholder="Фамилия">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="name"  name="name" placeholder="Имя">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="patronymic" name="patronymic"  placeholder="Отчество">
                            </div>
                            <div class="form-group">
                                <label for="groups">Группа</label>
                                <select multiple class="form-control" id="groups" name="groups[]">
                                    @foreach($groups as $group)
                                        <option value="{{$group->id}}">{{$group->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Добавить студента</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
