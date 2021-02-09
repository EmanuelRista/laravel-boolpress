@extends('layouts.app')

@section('content')

@isset($user)
<h1>Ciao {{ $user->name }}</h1>
@endisset

@endsection
