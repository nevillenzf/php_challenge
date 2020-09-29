@extends('layouts.app')

@section('content')
    <style>

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

        .alertTag {
            background-color: rgba(235, 64, 52, 1);
            width: 100%;
        }

        .result {
            margin-top: 20px;
        }

        .labels {
            margin-bottom: 10px;
        }

        .queryBtn{
            margin-top: 20px;
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
                    <label for="zip1"><h4 class="labels">Zipcode 1</h4></label>
                    <input type="number" class="textbox" name="zip1">
                </div>
                <div class="zipItem">
                    <label for="zip2"><h4 class="labels">Zipcode 2</h4></label>
                    <input type="number" class="textbox" name="zip2">
                </div>
            </div>
            <label for="distance"><h4 class="labels">Distance(miles) </h4></label>
            <input type="number" class="textbox" name="distance"><br>

            <button type="submit" class="queryBtn">Query</button>
        </form>

        @if ($data != null)
            <div>
                @foreach ($data as $item)
                    <div class="result">Distance between zipcodes <b>{{$item->zip_code1}}</b> and <b>{{$item->zip_code2}}</b> is <b>{{$item->distance}}</b> miles.</div>
                @endforeach
            </div>
        @endif
    </div>
@endsection