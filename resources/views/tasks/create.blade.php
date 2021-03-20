@extends('layouts.app')

@section('content')
<h2>Новая задача</h2>
@if($errors->any())
    <div class="alert alert-danger" role="alert">
    <ul>
    @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
    </ul>
    </div>
    @endif
<form method="POST" action="/tasks">
    <div class="form-group">
        @csrf
        <label for="description">Описание задачи</label>
        <input class="form-control" name="description" />
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary">Создать задачу</button>
    </div>
</form>
@endsection
