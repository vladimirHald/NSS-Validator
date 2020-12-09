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
        @endif
    @endif

    <form action="{{route('nsscode-form')}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nsscode">
                <h2>Введите NSS-данные: </h2>
            </label>

            <div id="nssDetail">
                <input type="text" name="nssFull" id="nssFull" class="form-control" onchange="onNssChange()">
                <label for="nssFull">Nss Full Code</label>
                <input type="text" name="nssSex" id="nssSex" class="form-control" onchange="onNssChange()">
                <label for="nssSex">Sex(Male or Female: 0 or 1)</label>
                <input type="text" name="nssYear" id="nssYear" class="form-control" onchange="onNssChange()">
                <label for="nssYear">Year (2 digits)</label>
                <input type="text" name="nssMonth" id="nssMonth" class="form-control" onchange="onNssChange()">
                <label for="nssMonth">Month (2 digits)</label>
                <input type="text" name="nssDepartment" id="nssDepartment" class="form-control" onchange="onNssChange()">
                <label for="nssDepartment">Department (3 digits or 2a or 2b)</label>
                <input type="text" name="nssComune" id="nssComune" class="form-control" onchange="onNssChange()">
                <label for="nssComune">Comune (2 or 3 digits)</label>
                <input type="text" name="nssOrderNumber" id="nssOrderNumber" class="form-control" onchange="onNssChange()">
                <label for="nssOrderNumber">Order Number (3 digits)</label>
                <input type="text" name="nssControlKey" id="nssControlKey" class="form-control" onchange="onNssChange()">
                <label for="nssControlKey">Control Key (1 or 2 digits)</label>
            </div>
            <br>
            <p>
                <span id="nssCodePregCheck"></span>
            </p>
            <button type="submit" class="btn btn-primary" id="nssCheckBtn" disabled>Проверить</button>
        </div>
    </form>
</div>
<script src="js/app.js"></script>
@endsection