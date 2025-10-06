<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">  
    <link href="{{ asset('style.css') }}" rel="stylesheet">

    <title>Список групп</title>
</head>
<body>
    @extends('layouts.app')
    @section('content')
    <div class="forma">
        <h2>Список групп</h2>
        
        <a href="{{ route('groups.create') }}">
            <button type="button" class="btn btn-outline-dark mb-3">Создать новую группу</button>
        </a>
        
        <ul>
            @foreach($groups as $group)
                <li>
                    <a href="{{ route('groups.show', $group) }}">
                        {{ $group->title }}
                    </a>
                    - {{ $group->is_active ? 'Активна' : 'Неактивна' }}
                </li>
            @endforeach
        </ul>
    </div>
    @endsection
</body>
</html>