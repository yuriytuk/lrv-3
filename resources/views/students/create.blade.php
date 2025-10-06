<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">  
    <link href="{{ asset('style.css') }}" rel="stylesheet">

    <title>Добавление студента</title>
</head>
<body>
    @extends('layouts.app')
    @section('content')
    <div class="forma">
        <h2>Добавление студента: {{ $group->title }}</h2>
        
        <form action="{{ route('groups.students.store', $group) }}" method="POST">
            @csrf
            <div class="block">
                <label for="surname">Фамилия:</label>
                <input type="text" name="surname" id="surname" required>
            </div>
            
            <div class="block">
                <label for="name">Имя:</label>
                <input type="text" name="name" id="name" required>
            </div>
            
            <button type="submit" class="btn btn-outline-dark mb-3">Добавить студента</button>
        </form>
    </div>
    @endsection
</body>
</html>