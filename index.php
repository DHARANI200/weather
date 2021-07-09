<?php
session_start();

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>News project</title>
    <style>
        
        img{
            width: 100%;
            max-height: 50vh;
        
        }

        #container_1 {
            width: 60%;
            padding: 10px;
        }

        #container_2 {
            width: 39%;
            padding: 10px;
        }

        .nav_item {
            padding: 10px;
            border: 10px;
        }
        #news_div{
            display: flex;
        }

        .accordion{
            /*border-style:outset;*/
            border-width: 2px;
            border-radius: 1px;
            padding: 10px;
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

<!-- login success message -->
<?php
                    if(isset($_SESSION['username'])){
                ?>
                <div class="alert alert-success d-flex align-items-center" role="alert">
                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                    <div>
                       <strong>Welcome</strong><br><?php echo $_SESSION['username']; ?>
                    </div>
                </div>
                <?php
                    unset($_SESSION['username']);
                 }
                ?>


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
                        <a class="nav-link active" aria-current="page" href="index.html"><i class="fa fa-fw fa-home"></i> Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php"><i class="fa fa-fw fa-user"></i> About</a>
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

    <img src="https://ichef.bbci.co.uk/news/1024/branded_news/17E4B/production/_118976879_fbg7020_comp_v003_bf38a189_cut.jpg" alt="bg">

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

    <!--Header to print news company name-->
    <h3>Top News <span class="badge bg-secondary">By NewsTimes</span></h3>

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