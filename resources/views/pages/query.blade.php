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

        .zipcodesContainer{
            display: flex;
            justify-content: center;
            flex-direction: row;
            align-items: center;
        }

        .formContainer{
            text-align: center;
        }

        .zipItem {
            padding: 10px;
            display: flex;
            flex-direction: column;
        }

        .myTitle {
            text-decoration: underline;
            text-decoration-color: rgba(108, 172, 67, 1);
        }

        .textbox {
            font-size: 20px;
            text-align: center;
        }

        .alertTag {
            background-color: rgba(235, 64, 52, 1);
            width: 100%;
        }

    </style>

    <div class= "wrapper">
        @include('shared.navbar', ['page' => 'Query'])
        @include('shared.sidebar', ['page' => 'Query'])
        <h2 class="myTitle">
            Query API 
        </h2>
        <form action="query" method="POST" enctype="multipart/form-data" class="formContainer">
            @csrf
            @if ($error == true)
                <div class="alertTag">One or more fields were left empty or was invalid.</div>
            @endif
            <div class="zipcodesContainer">
                <div class="zipItem">
                    <label for="zip1"><h4>Zipcode 1</h4></label>
                    <input type="number" class="textbox" name="zip1">
                </div>
                <div class="zipItem">
                    <label for="zip2"><h4>Zipcode 2</h4></label>
                    <input type="number" class="textbox" name="zip2">
                </div>
            </div>
            <label for="distance">Distance (miles)</label><br>
            <input type="number" class="textbox" name="distance"><br>
            <button type="submit">Query</button>
        </form>

        @if ($data != null)
            <div>
                @foreach ($data as $item)
                    <div>Distance between {{$item->zip_code1}} and {{$item->zip_code2}} is {{$item->distance}} miles.</div>
                @endforeach
            </div>
        @endif
    </div>
@endsection