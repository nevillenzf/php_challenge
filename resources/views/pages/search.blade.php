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
        }

        .searchForm {
            text-align: center;
        }

    </style>

    <div class= "wrapper">
        @include('shared.navbar', ['page' => 'Search'])
        @include('shared.sidebar', ['page' => 'Search'])
        <h2 class="myTitle">Search Database</h2>
        <form action="search" method="POST" enctype="multipart/form-data" class="searchForm">
            @csrf 
            <label for="zip">Zipcode</label><br>
            <input type="text" class="zip" name="zip"><br>
            <label for="city">City</label><br>
            <input type="text" class="city" name="city"><br>
            <label for="state">State</label><br>
            <select class="state" name="state">
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
            <button type="submit">Search</button>
        </form>
    </div>
@endsection