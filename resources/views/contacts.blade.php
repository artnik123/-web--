@extends('layouts.app')

@section('title', 'Контакты')

@section('content')
    <h1>Контакты</h1>
    <p>Наши контактные данные:</p>
    <br>
    
    @if(isset($contacts) && count($contacts) > 0)
        <ul style="list-style: none;">
            @foreach($contacts as $contact)
                <li style="margin-bottom: 15px; padding: 10px; background: #f4f4f4; border-left: 4px solid #333;">
                    <strong>{{ $contact['name'] }}</strong><br>
                    Телефон: {{ $contact['phone'] }}<br>
                    @if(isset($contact['email']))
                        Email: {{ $contact['email'] }}<br>
                    @endif
                    @if(isset($contact['position']))
                        Должность: {{ $contact['position'] }}
                    @endif
                </li>
            @endforeach
        </ul>
    @else
        <p>Контактная информация загружается...</p>
    @endif
@endsection