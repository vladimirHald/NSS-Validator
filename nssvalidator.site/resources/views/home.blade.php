@extends('layouts.app')

@section('title-block') NSS Validator @endsection

@section('content')
<div class="d-flex w-100 h-100 p-3 mx-auto flex-column" id="nBlock">
 
  
    <h1 class="cover-heading">NSS Validator</h1>
    <p class="lead">If you want to validate NSS-Code, press button</p>
    <p class="lead">
    <a class="btn btn-primary" href="{{route('nssValidate')}}" >Validate NSS</a>
    </p>
  

</div>
@endsection