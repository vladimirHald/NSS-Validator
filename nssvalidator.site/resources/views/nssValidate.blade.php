@extends('layouts.app')

@section('title-block') NSS Validator @endsection

@section('content')

<div class="d-flex w-100 h-100 p-3 mx-auto flex-column" id="nBlock">
    @if($errors->any())
    <div class="alert alert-danger">
        <ul class="list-unstyled">
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>

    </div>
    @elseif(session()->has('isChecked'))
        @if(session('isChecked'))
            <div class="alert alert-success">
                    <span>NSS Код прошел валидацию успешно</span>
            </div>
            {{session()->put('isChecked', false)}}
        @endif
    @endif

    <form action="{{route('nsscode-form')}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nsscode">
                <h2>Введите NSS-Код: </h2>
            </label>
            <input type="text" name="nsscode" id="nsscode" class="form-control">
            <br>
            <button type="submit" class="btn btn-primary">Проверить</button>
        </div>

    </form>


</div>
@endsection