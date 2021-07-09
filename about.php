<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>About</title>

    <style>
        body{
            background-color: rgb(121, 65, 16);
        }
        .accordion {
            width: 60%;
            display: inline-block;
            border: 0%;
            padding: 0%;
        }

        .accordion1 {
            width: 38%;
            display: inline-block;
            border: 0%;
            padding: 0%;
        }

        .nav_item{
            padding: 10px;
            border: 10px;
            float: left;
        }

        #place_name,#temp,#cloudy{
            padding: 10px;
            font-size: 20px;
            color: white;
        }
        #place_name:hover{
            color: black;
        }
        #temp:hover{
            color: black;
        }
        #cloudy:hover{
            color: black;
        }
        .nav-item{
            padding: 5px;
            font-size: 20px;
            color: white;
            border-radius: 5px;
        }
        .nav-item:hover{
            background-color: peru;
        }

        .flex-container{
            display: flex;
            background: #fff;
            border-radius: 7px;
            box-shadow: 0 2px 5px #ccc;
            padding: 10px;
            
            
        }
        .flex-child{
            flex: 1;
            
            padding: 0px 100px;
        }
        .flex-child:first-child{
            margin-right: 20px;
        }

        .flex-container h1 {
            background-color: rgb(31, 211, 218);
            padding: 5px;
            border-radius: 5px;
            font-size: 1.1em;
            margin-bottom: 6px;
            text-align: center;
        }
        .flex-container p {
            font-size: 1.1em;
            margin-bottom: 10px;
            white-space: pre-wrap;
            word-wrap: break-word;
        }
        h2{
            background-color: white;
            text-align: center;
        }

        footer{
            text-align: center;
            padding: 4px;
            background-color: darksalmon;
            color: white;
        }
        a{
            color: white;
        }
    </style>
</head>
<body>
      <!--Navigation Bar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">NEWS</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active"  href="index.php"><i class="fa fa-fw fa-home"></i> Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="about.php"><i class="fa fa-fw fa-user"></i> About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php"><i class="fa fa-fw fa-envelope"></i> Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="weather.php"><i class="fa fa-sun-o" aria-hidden="true"></i> weather</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="register.php">Register</a>
                    </li>
                    
                </ul>
                <!-- search column -->
                <form class="d-flex">
                    <input class="form-control me-2" id="search_box" type="search" placeholder="Search"
                        aria-label="Search">
                    <button class="btn btn-outline-success" type="button" id="click_btn" style="width: 130px;"
                        onclick="ones()"><i class="fa fa-fw fa-search"></i>Search</button>
                </form>
            </div>
        </div>
    </nav>

    <h2>ABOUT</h2>
    <div class="flex-container">
            
        <div class="flex-child magenta">
            <P>
                BBC World News is the BBC's commercially funded international 24-hour news and information channel, broadcast in English in more than 200 countries and territories across the globe.

Its estimated weekly audience of 112 million makes it the BBC's biggest television service.

Available in more than 452 million homes, millions of hotel rooms, 170 cruise ships, 53 airlines (including 14 distributing the channel live in-flight) and 23 mobile phone networks, BBC World News broadcasts a diverse mix of authoritative international news, sport, weather, business, current affairs and documentary programming.

BBC World News is at the heart of the BBC's commitment to global broadcasting. As an integral member of BBC Global News, sitting alongside BBC World Service radio, BBC World News delivers impartial, in-depth analysis of breaking news, as well as looking at the stories behind the news - not just what is happening, but why.

BBC World News is owned and operated by BBC Global News Ltd, a member of the BBC's commercial group of companies and is funded by subscription and advertising revenues.

The registered address of BBC Global News Ltd is Broadcasting House, Portland Place, London, W1A 1AA. GNL's registered number is 4514407
            </P>
        </div>
        
        </div>
    
</div>

    <ul class="nav bg-dark">
        <li class="nav_item" >
            <abbr title="place name">
            <span class="badge bg-secondary" id="place_name"></span>
        </abbr>
        </li>
        <li class="nav_item" >
            <abbr title="tempertature">
            <span class="badge bg-secondary" id="temp"></span>
        </abbr>
        </li>
        <li class="nav_item" >
            <abbr title="climate">
            <span class="badge bg-secondary" id="cloudy"></span>
            </abbr>
        </li>
    </ul>

    <div id="news_div">
        <div id="container_1">
            <span class="badge bg-secondary">BBC News</span><br>
            <div class="accordion" id="accordionnews_1">
    
            </div>
        </div>
    
        <div id="container_2">
            <span class="badge bg-secondary">News24</span><br>
            <div class="accordion" id="accordionnews_2">
    
            </div>
        </div>
    </div>
    <!--Collapse or accordion Buttons-->


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
        crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->

    <script src="https://code.jquery.com/jquery-3.2.1.min.js"
        integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>

    <script src="index.js"></script>
    <footer>
        <p>Copyright by BBC news @ 2021
        <br>
        <a href="contact.html">contact us</a>
        </p>
    </footer>
</body>
</html>