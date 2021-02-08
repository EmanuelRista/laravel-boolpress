@extends('layouts.app')

@section('content')

@isset($user)
<h1>Ciao {{ $user->name }}</h1>
@endisset

@unless (Auth::check())
<h1>Ciao utente non autenticato! :)</h1>
@endunless

@endsection
