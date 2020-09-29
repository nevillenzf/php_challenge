
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
                background-color: rgba(15,15,15, 1);
                border-right: 1px solid rgba(88, 88, 88, 1);
                z-index: 1;
        }
        .selected {
            color: rgba(108, 172, 67, 1);
            border-right: solid;
        }

        .sbContent {
            list-style-type : none;
            width: 100%;
        }

        a:hover{
            color: rgba(108, 172, 67, 1);
            transition: color 0.4s;
        }
        li {
            font-size: 20px;
        }

    </style>

    <div class= "sbContainer">
        <ul class="sbContent">
            @foreach (array("Upload","Search","Query") as $item)
                @if ($item == $page)
                    @if ($item == "Upload")
                        <li class="selected"><a href ="/">Upload</a></li>
                    @else
                        <li class="selected"><a href = "/{{$item}}">{{$item}}</a></li>
                    @endif
                @else
                    @if ($item == "Upload")
                        <li><a href ="/">Upload</a></li>
                    @else
                        <li><a href = "/{{$item}}">{{$item}}</a></li>
                    @endif
                @endif
                    
            
            @endforeach
        </ul>
    </div>
