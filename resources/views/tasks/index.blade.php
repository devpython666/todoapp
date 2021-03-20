@extends('layouts.app')

@section('content')
    <h2 style="margin-bottom: 30px">Список задач</h2>
    @foreach($tasks as $task)
        <div class="card @if($task->isCompleted()) border-success @endif" style="margin-bottom: 20px">
            <div class="card-body">

                <p>
                {{ $task->description }}
                </p>
                @if(!$task->isCompleted())
                <form action="/tasks/{{ $task->id }}" method="POST">
                    @method('PATCH')
                    @csrf
                <button class="btn btn-light btn-block" type="submit">Завершить задачу</button>
                </form>
                @else
                    <form action="/tasks/{{ $task->id }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-danger btn-block" type="submit">Удалить задачу</button>
                    </form>
                @endif
            </div>
        </div>
    @endforeach
    <a href="/tasks/create" class="btn btn-primary btn-lg btn-block">Новая задача</a>
@endsection
