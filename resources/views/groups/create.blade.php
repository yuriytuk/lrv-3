<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">  
    <link href="{{ asset('style.css') }}" rel="stylesheet">

    <title>Создание группы</title>
</head>
<body>
    @extends('layouts.app')
    @section('content')
    <div class="forma">
        <h2>Создание новой группы</h2>
        <form action="{{ route('groups.store') }}" method="POST">
            @csrf
            <div class="block">
                <label for="title">Название группы:</label>
                <input type="text" name="title" id="title" required>
            </div>
            
            <div class="block">
                <label for="start_from">Дата начала обучения:</label>
                <input type="date" name="start_from" id="start_from" required>
            </div>
            
            <div class="block">
                <label for="is_active">
                    <input type="checkbox" name="is_active" id="is_active" value="1" checked>
                    Активная группа
                </label>
            </div>
            
            <button type="submit" class="btn btn-outline-dark mb-3">Создать группу</button>
        </form>
        
        <a href="{{ route('groups.index') }}" class="block">Назад к списку групп</a>
    </div>
    @endsection
</body>
</html>