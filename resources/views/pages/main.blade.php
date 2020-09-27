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
        <div>
            Upload XML, CSV file
        </div>
        <form action="upload" method="POST" enctype="multipart/form-data">
            <input type="file" name="zipcodes" class="inputWrapper"/>
            @csrf 
            <button type="submit">Parse Content</button>
        </form>
    </div>
@endsection