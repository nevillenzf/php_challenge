@extends('layouts.app')

@section('content')
    <style>
        .wrapper {
                display: flex;
                align-items: center;
                justify-content: center;
                flex-direction: column;
                width: 100vw;
                height: 100vh
        }
        .inputWrapper {
            display: flex;
            justify-content: center;
            flex-direction: row;
            align-items: center;
        }

    </style>

    <div class= "wrapper">
        @include('shared.navbar')
        @include('shared.sidebar')
        <div>
            Hey it's the querying page
        </div>
        <form action="upload" method="POST" enctype="multipart/form-data">
            <input type="file" name="zipcodes" class="inputWrapper"/>
            @csrf 
            <button type="submit">Parse Content</button>
        </form>
        @for ($i = 0; $i < 10; $i++)
            <div>The current value is {{ $i }}</div>
        @endfor
    </div>
@endsection