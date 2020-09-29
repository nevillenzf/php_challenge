@extends('layouts.app')

@section('content')
    <style>

        .myTitle {
            text-decoration: underline;
            text-decoration-color: rgba(108, 172, 67, 1);
        }

    </style>

    <div class= "wrapper">
        @include('shared.navbar', ['page' => 'Upload'])
        @include('shared.sidebar', ['page' => 'Upload'])

        <h2 class="myTitle">Upload CSV file</h2>
        <form action="upload" method="POST" enctype="multipart/form-data" >
            <input type="file" name="zipcodes" class="inputWrapper"/>
            @csrf 
            <button type="submit">Parse Content</button>
        </form>
    </div>
@endsection