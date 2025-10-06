<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">  
    <link href="{{ asset('style.css') }}" rel="stylesheet">

    <title>Группа</title>
</head>
<body>
    @extends('layouts.app')
    @section('content')
    <div class="forma">
        <h2 >Группа: {{ $group->title }}</h2>
               
        <p>Дата начала: {{ $group->start_from->format('d.m.Y') }}</p>
        <p>Статус группы: {{ $group->is_active ? 'Активна' : 'Неактивна' }}</p>
        
        <h2>Студенты группы:</h2>
        
        <a href="{{ route('groups.students.create', $group) }}">
            <button type="button" class="btn btn-outline-dark">Добавить студента</button>
        </a>
        
        <ul>
            @foreach($students as $student)
                <li>
                    <a href="{{ route('groups.students.show', [$group, $student]) }}">
                        {{ $student->surname }} {{ $student->name }}
                    </a>
                </li>
            @endforeach
        </ul>
        
        <a href="{{ route('groups.index') }}">Назад к списку групп</a>
    </div>
    @endsection
</body>
</html>