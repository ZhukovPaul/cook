@extends('layouts.app') 

@section('title', 'Обратная связь')
@section('sitename', 'COOK TEACHER')

 
@section('content')
<h1 class="text-center">Обратная связь</h1>
<div class="row my-5">
<div class="col-4 offset-lg-4">
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
</div>
<div class="col-4 offset-lg-4">
<form action="{{route('contact-form')}}" method="POST">
@csrf

  <div class="form-group">
    <label for="exampleInputName">Ваше имя</label>
    <input type="text" name="name" id="exampleInputName" class="form-control"   >
    
  </div>
  <div class="form-group">
    <label for="exampleInputEmail">Ваш email</label>
    <input type="text" name="email" class="form-control" id="exampleInputEmail" require >
  </div>
  <div class="form-group form-check">
    <input require type="checkbox" name="sendCheck" class="form-check-input" id="exampleCheck1">
    <label  class="form-check-label" for="exampleCheck1">Согласен на обработку данных</label>
  </div>
  <button type="submit" class="btn btn-primary">Отправить</button>
</form>
</div>
</div>
@endsection