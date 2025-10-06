<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">  
    <link href="{{ asset('style.css') }}" rel="stylesheet">
    
    <title>Студент {{ $student->surname }} {{ $student->name }}</title>
</head>
<body>
    @extends('layouts.app')
    @section('content')
    <div class="forma">
        <h2>Студент: {{ $student->surname }} {{ $student->name }}</h2>
        
        <p>Группа: 
            <a href="{{ route('groups.show', $group) }}">{{ $group->title }}</a>
        </p>
    </div>
    @endsection
</body>
</html>