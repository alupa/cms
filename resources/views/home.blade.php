@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    You are logged in!
@endsection