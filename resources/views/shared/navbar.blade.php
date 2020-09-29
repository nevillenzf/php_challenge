
    <style>
        .navBarContainer {
                display: flex;
                align-items: center;
                justify-content: space-between;
                flex-direction: row;
                width: 100vw;
                height: 60px;
                position: fixed;
                top: 0px;
                background-color: black;
                padding: 5px;
                padding-left: 40px;
                padding-right: 40px;
                z-index: 2;
        }
        .title {
            color: rgba(108, 172, 67, 1);
        }
        .companyName{
            color: white;
        }
    </style>

    <div class= "navBarContainer">
        <div class="navLeft"> 
            <h2 class="title"><a href="/"><span class="companyName">EatStreet</span>Challenge </a></h2>
        </div>
        <div class="navRight"> 
            <h3>{{$page}}</h3>
        </div>
    </div>
