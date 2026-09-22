@extends('layouts.main')

@section('title', 'Контакты')

@section('content')
    <h1>Контакты</h1>
    <p>Свяжитесь с нами любым удобным для вас способом:</p>
    <ul>
        <li><strong>Телефон:</strong> {{ $contactInfo['phone'] }}</li>
        <li><strong>Email:</strong> <a href="mailto:{{ $contactInfo['email'] }}">{{ $contactInfo['email'] }}</a></li>
        <li><strong>Адрес:</strong> {{ $contactInfo['address'] }}</li>
        <li><strong>Рабочие часы:</strong> {{ $contactInfo['work_hours'] }}</li>
    </ul>
@endsection
