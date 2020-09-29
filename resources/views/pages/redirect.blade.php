@extends('layouts.app')

@section('content')
    <style>
        .wrapper {
                display: flex;
                align-items: center;
                justify-content: center;
                flex-direction: column;
                width: 100vw;
                height: 100vh;
                text-align: center;
        }
        .inputWrapper {
            text-align: center;
            margin: auto;
        }

    </style>

    <div class= "wrapper">
        @include('shared.navbar', ['page' => 'Upload'])
        @include('shared.sidebar', ['page' => 'Upload'])
        @if ($failed)
            <h3>File Type not supported.</h3>
        @endif
        <h1>Redirecting to main page...</h1>
    </div>
@endsection