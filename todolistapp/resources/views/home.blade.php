@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('To do list:') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}

                        </div>
                    @endif

                       <a href="/tasks">   <button name="send">Посмотреть задачи</button></a>
                       <form method="post" action="/check">
                    @csrf
                            <input type="text" name="subject" id="subject" placeholder="Введите текст такса" class="form-control">
                            <button type="submit" class="btn btn-success">Отправить</button>

                        </form>

                        {{ __('Вы вошли в аккаунт!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('forms')
<form method="post" action="/tasks">
<input type="text" name="subject" id="text" placeholder="Введите текст такса" class="form-control">

</form>
@endsection
