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
        <div>
            <h2 class="myTitle">Search Database</h2>
            <form action="search" method="POST" enctype="multipart/form-data" class="searchForm">
                @csrf 
                <div class="queries">
                    <div class="subquery">
                        <label for="zip"><h4>Zipcode</h4></label><br>
                        <input type="number" class="textbox" name="zip">
                    </div>
                    <div class="subquery">
                        <label for="city"><h4>City</h4></label><br>
                        <input type="text" class="textbox" name="city">
                    </div>
                    <div class="subquery">
                        <label for="state"><h4>State</h4></label><br>
                        <select class="textbox" name="state">
                            <option value="ANY">Any</option>
                            <option value="AL">Alabama</option>
                            <option value="AK">Alaska</option>
                            <option value="AZ">Arizona</option>
                            <option value="AR">Arkansas</option>
                            <option value="CA">California</option>
                            <option value="CO">Colorado</option>
                            <option value="CT">Connecticut</option>
                            <option value="DE">Delaware</option>
                            <option value="DC">District Of Columbia</option>
                            <option value="FL">Florida</option>
                            <option value="GA">Georgia</option>
                            <option value="HI">Hawaii</option>
                            <option value="ID">Idaho</option>
                            <option value="IL">Illinois</option>
                            <option value="IN">Indiana</option>
                            <option value="IA">Iowa</option>
                            <option value="KS">Kansas</option>
                            <option value="KY">Kentucky</option>
                            <option value="LA">Louisiana</option>
                            <option value="ME">Maine</option>
                            <option value="MD">Maryland</option>
                            <option value="MA">Massachusetts</option>
                            <option value="MI">Michigan</option>
                            <option value="MN">Minnesota</option>
                            <option value="MS">Mississippi</option>
                            <option value="MO">Missouri</option>
                            <option value="MT">Montana</option>
                            <option value="NE">Nebraska</option>
                            <option value="NV">Nevada</option>
                            <option value="NH">New Hampshire</option>
                            <option value="NJ">New Jersey</option>
                            <option value="NM">New Mexico</option>
                            <option value="NY">New York</option>
                            <option value="NC">North Carolina</option>
                            <option value="ND">North Dakota</option>
                            <option value="OH">Ohio</option>
                            <option value="OK">Oklahoma</option>
                            <option value="OR">Oregon</option>
                            <option value="PA">Pennsylvania</option>
                            <option value="RI">Rhode Island</option>
                            <option value="SC">South Carolina</option>
                            <option value="SD">South Dakota</option>
                            <option value="TN">Tennessee</option>
                            <option value="TX">Texas</option>
                            <option value="UT">Utah</option>
                            <option value="VT">Vermont</option>
                            <option value="VA">Virginia</option>
                            <option value="WA">Washington</option>
                            <option value="WV">West Virginia</option>
                            <option value="WI">Wisconsin</option>
                            <option value="WY">Wyoming</option>
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