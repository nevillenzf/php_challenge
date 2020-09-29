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
            align-items: center;
        }
        .myTitle {
            text-decoration: underline;
            text-decoration-color: rgba(108, 172, 67, 1);
            text-align: center;
        }
        .searchForm {
            text-align: center;
        }
        .searchResultContainer{
            overflow-y: hidden;
        }
        .tableTitle {
            color: rgba(108, 172, 67, 1);
        }

        .zipTable {
            max-height: 300px;
            overflow-y: scroll;
            scrollbar-color: dark;
        }

        .zipTitle {
            text-align: center;
        }

        .queries {
            display: flex;
            flex-direction: row;
        }

        .subquery {
            padding: 10px;
        }

        h4 {
            margin: 5px;
        }

    </style>

    <div class= "wrapper">
        @include('shared.navbar', ['page' => 'Search'])
        @include('shared.sidebar', ['page' => 'Search'])
        <div class="searchContainer">
            <h2 class="myTitle">Search Database</h2>
            <form action="search" method="POST" enctype="multipart/form-data" class="searchForm">
                @csrf 
                <div class="queries">
                    <div class="subquery">
                        <label for="zip"><h4>Zipcode</h4></label>
                        <input type="number" class="textbox" name="zip">
                    </div>
                    <div class="subquery">
                        <label for="city"><h4>City</h4></label>
                        <input type="text" class="textbox" name="city">
                    </div>
                    <div class="subquery">
                        <label for="state"><h4>State</h4></label>
                        <select class="textbox" name="state">
                            @include('shared.stateoptions');
                        </select><br>
                    </div>
                </div>
                <button type="submit">Search</button>
            </form>
        </div>
        @if ($zipcodes && count($zipcodes) > 0)
            <div class="searchResultContainer">
            <h3 class="zipTitle">
                Displaying {{count($zipcodes)}} items from last search.
            </h3>
            <div class = "zipTable">
                <table>
                    <tr class ="tableTitle">
                        <th>Zipcode</th>
                        <th>City</th>
                        <th>State</th>
                        <th>State FIPS</th>
                        <th>County</th>
                        <th>County FIPS</th>
                        <th>Longitude</th>
                        <th>Latitude</th>
                        <th>GMT</th>
                        <th>DST</th>
                    </tr>
                    @foreach ($zipcodes as $zip)
                    <tr>
                        <th>{{$zip->ZipCode}}</th>
                        <th>{{$zip->MixedCity}}</th>
                        <th>{{$zip->StateCode}}</th>
                        <th>{{$zip->StateFIPS}}</th>
                        <th>{{$zip->MixedCounty}}</th>
                        <th>{{$zip->CountyFIPS}}</th>
                        <th>{{$zip->Longitude}}</th>
                        <th>{{$zip->Latitude}}</th>
                        <th>{{$zip->GMT}}</th>
                        <th>{{$zip->DST}}</th>
                    </tr>
                    @endforeach
                </table>
            </div>
            </div>
        @endif
    </div>
@endsection