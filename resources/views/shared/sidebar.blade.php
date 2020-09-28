
    <style>
        .sbContainer {
                display: flex;
                align-items: center;
                justify-content: center;
                flex-direction: column;
                width: 200px;
                height: 100vh;
                position: fixed;
                left: 0px;
                background-color: rgba(143, 196, 130, 1);
                border-right: 1px solid grey;
                z-index: 1;
        }

        .sbContent {
            list-style-type : none;
        }

        a:hover{
            color: white;
            transition: color 0.4s;
        }

    </style>

    <div class= "sbContainer">
        <ul class="sbContent">
            <li><a href ="/">Upload</a></li>
            <li><a href = "/search">Search</a></li>
            <li><a href = "/query">Query </a></li>
        </ul>
    </div>
