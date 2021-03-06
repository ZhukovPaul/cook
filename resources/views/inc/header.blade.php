@section('header')

<div class="d-flex  flex-column flex-md-row align-items-center p-3 px-md-4 mb-3   top-block border-bottom shadow-sm">
  <h5 class="my-0 mr-md-auto font-weight-normal"><a href="/">Cooking teacher</a></h5>
  <nav class="my-2 my-md-0 mr-md-3">
    <a class="p-2 text-dark {{Request::path() === route('homepage',[],false) ? 'font-weight-bold' : '' }}" href="{{route('homepage')}}">Главная</a>
    <a class="p-2 text-dark {{Request::url() === route('contact') ? 'font-weight-bold' : '' }}" href="{{route('contact')}}">Контакты</a>
    <a class="p-2 text-dark {{Request::url() === route('feedback') ? 'font-weight-bold' : '' }}" href="{{route('feedback')}}">Обратная связь</a>
    <a class="p-2 text-dark {{Request::url() === route('about') ? 'font-weight-bold' : '' }}" href="{{route('about')}}">О нас</a>
  </nav>
  <a class="btn btn-outline-primary" href="#">Войти</a>
</div>

 