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
        .restricted{
            color: rgba(235, 64, 52, 1);
        }

    </style>

    <div class= "wrapper">
        @include('shared.navbar', ['page' => 'Upload'])
        @include('shared.sidebar', ['page' => 'Upload'])
        @if ($failed)
            <h3>File Type <span class="restricted">not supported</span>.</h3>
        @endif
        <h3>Redirecting to main page in 3 seconds...</h3>
    </div>
@endsection