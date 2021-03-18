<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Mercedes-AMG F1</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Xanh+Mono&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Goldman&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        html,
        body {
            background-color: black;
        }
        
        #btn-scroll-top {
            display: none;
            position: fixed;
            bottom: 50px;
            right: 50px;
        }
        
        .carousel-inner img {
            width: 100%;
            height: 100%;
            padding: 1rem;
        }
        
        .container-timer {
            font-family: 'Roboto', sans-serif;
            padding: 2rem;
        }
        
        .text-block {
            position: absolute;
            font-family: 'Goldman', cursive;
            color: black;
            font-size: 2px;
            font-weight: 8px;
            top: 40px;
            left: 50px;
        }
        
        .text-block1 {
            position: absolute;
            font-family: 'Goldman', cursive;
            color: black;
            font-size: 2px;
            font-weight: 8px;
            top: 45%;
            left: 75%;
        }
        
        .img-hover:hover {
            transform: scaleX(-1);
        }
        
        .f1-border {
            border-top: solid 7px #e10600;
            border-right: solid 7px #e10600;
            border-bottom: solid 7px #e10600;
            border-top-right-radius: 15px;
            border-bottom-right-radius: 15px;
            padding-top: 10px;
            padding-right: 10px;
            padding-bottom: 10px;
            width: 65%;
        }
        
        .title-h1 {
            font-size: 60px;
            background-color: black;
            text-align: center;
            font-family: 'Bebas Neue', cursive;
            color: white;
            padding: 2rem;
        }
        .zoom {
            background-color: black;
            transition: transform .2s;   
        }
        .zoom:hover {
        transform: scale(1.15); 
        }
       
    </style>
</head>

<body>

    <?php
    $currentPage = 'home';
    require 'includes/menu.php';
    ?>

        <button id="btn-scroll-top" class="btn btn-outline-info" onclick="scrollToTop()">
         <i class="fal fa-arrow-alt-circle-up"></i>
        </button>

        <!--Carousel slide-->

        <div id="slideshow" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="imgs-proj/images/7wt.png" class="d-block w-100" alt="7">
                </div>
                <div class="carousel-item">
                    <img src="imgs-proj/images/bg_1.png" class="d-block w-100" alt="austria">
                    <div class="text-block">
                        <h2 class="title-carousel" style="font-family: 'Roboto', sans-serif;">BLM Delivery</h2>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="imgs-proj/images/bg_2.png" class="d-block w-100" alt="hungria">
                    <div class="text-block1">
                        <h2 class="title-carousel" style="font-family: 'Roboto', sans-serif;">Post Card<br>from, Austria</h2>
                    </div>
                </div>
            </div>
            <ol class="carousel-indicators">
                <li data-target="#slideshow" data-slide-to="0" class="active"></li>
                <li data-target="#slideshow" data-slide-to="1"></li>
                <li data-target="#slideshow" data-slide-to="2"></li>
            </ol>
        </div>
        <!--Fim carousel-->

        <!--Services-->
        <h1 class="title-h1">Key Rules at Mercedes</h1>

        <div class="container text-center">
            <div class="row p-3">
                <div class="col-lg-4">
                    <img class="img-hover" src="imgs-proj/images/sustain_icon.png" alt="sustain">
                    <h4 style="color: white; font-size: 30px; font-family: 'Xanh Mono', monospace; ">Countdown to Zero</h4>
                    <p style="font-size: 16px; font-family: 'Xanh Mono', monospace; color:gray; ">Our ambition to be net-zero carbon in 2020 with a 50% reduction in CO2 emissions by 2022.</p>

                </div>

                <div class="col-lg-4 ">
                    <img class="img-hover" src="imgs-proj/images/tech-data.png " alt="data ">
                    <h4 style="color: white; font-size: 30px; font-family: 'Xanh Mono', monospace; ">Applied Science</h4>
                    <p style="font-size: 16px; font-family: 'Xanh Mono', monospace; color:gray; ">We leverage the best of aerospace and motorsport technologies, to deliver performance across the domains of land, sea and air.</p>
                </div>

                <div class="col-lg-4 ">
                    <img class="img-hover" src="imgs-proj/images/hydrid1.png " alt=" ">
                    <h4 style="color: white; font-size: 30px; font-family: 'Xanh Mono', monospace; ">Hybrid</h4>
                    <p style="font-size: 16px; font-family: 'Xanh Mono', monospace; color:gray;">Mercedes have won 74% of the races in the turbo hybrid era!<br>EQ Power in F1: A Decade of Hybrid Success.</p>
                </div>
            </div>
        </div>
        <!--Services-->

        <!--card deck-->
        <?php 
        require 'includes/connection.php'; 
        ?>
        <?php 
        $sql = 'SELECT * FROM Index_Drivers ';   
        $sth = $dbh->prepare($sql);
        $sth->execute();
        ?>
        <div class="container-driver text-center">
            <h1 class="title-h1">Our Drivers</h1>
            <div class="row" style="background-color: black;">
                <?php 
             while($Index_Drivers = $sth->fetchObject()){
                $Name = $Index_Drivers->Name;
                $Number = $Index_Drivers->Number;
                $Img = $Index_Drivers->Img;
            ?>
                <div class="col-lg-6 mb-2 ">
                    <div class="card mx-auto " style="width: 20rem; background-color: black; ">
                        <img src="imgs-proj/images/<?= $Img ?>" class="img-fluid img-hover" alt="... ">
                        <div class="card-body" style="background-color: black; text-align: center; font-family: 'Goldman', cursive; border: black; ">
                            <h5 class="card-title " style="color: white; ">
                                <?= $Name ?>
                            </h5>
                            <h6 class="card-text " style="color: white; ">
                                <?= $Number ?>
                            </h6>
                        </div>
                    </div>
                </div>
                <?php } //foreach ?>
            </div>
        </div>
        <!--card deck-->

        <!--Tabela-->
        <div class="container" style="background-color: black; font-family: 'Goldman', cursive; ">
            <h2 style="color: white; font-size: 25px; ">TOP 10<br>Last Race Results</h2>
            <img src="imgs-proj/car/abu_dhabi.png" height="200px " alt="Track ">
            <p style="color: white; font-size: 20px;">Yas Marina Circuit,<br>Abu Dhabi <img src="imgs-proj/car/emirados-arabes-unidos.png" alt="EAU"></p>
            <table class="table table-responsive table-striped text-white f1-border">
                <thead>
                    <tr>
                        <th scope="col ">POS</th>
                        <th scope="col ">NO</th>
                        <th scope="col ">DRIVER</th>
                        <th scope="col ">CAR</th>
                        <th scope="col ">LAPS</th>
                        <th scope="col ">TIME/RETIRED</th>
                        <th scope="col ">PTS</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>33</td>
                        <td>Max Verstappen</td>
                        <td>RED BULL RACING HONDA <img src="imgs-proj/tb-logo/rb-lgo.png" alt="" style="height:30px;"></td>
                        <td>55</td>
                        <td>1:36:28.645</td>
                        <td>25</td>
                    </tr>
                    <tr scope="row " class="table" style="color: #17a2b8;">
                        <td>2</td>
                        <td>77</td>
                        <td>Valteri Bottas</td>
                        <td>Mercedes <img src="imgs-proj/tb-logo/mer-lgo.png" alt="" style="height:30px;"></td>
                        <td>55</td>
                        <td>+15.976s</td>
                        <td>18</td>
                    </tr>
                    <tr scope="row " class="table" style="color: #17a2b8;">
                        <td>3</td>
                        <td>44</td>
                        <td>Lewis Hamilton</td>
                        <td>Mercedes <img src="imgs-proj/tb-logo/mer-lgo.png" alt="" style="height:30px;"></td>
                        <td>55</td>
                        <td>+18.415s</td>
                        <td>15</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>23</td>
                        <td>Alexander Albon</td>
                        <td>RED BULL RACING HONDA <img src="imgs-proj/tb-logo/rb-lgo.png" alt="" style="height:30px;"></td>
                        <td>55</td>
                        <td>+19.987s</td>
                        <td>12</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>4</td>
                        <td>Lando Norris</td>
                        <td>MCLAREN RENAULT <img src="imgs-proj/tb-logo/mclaren-lgo.png" alt="" style="height:30px;"></td>
                        <td>55</td>
                        <td>+60.729s</td>
                        <td>10</td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>55</td>
                        <td>Carlos Sainz</td>
                        <td>MCLAREN RENAULT <img src="imgs-proj/tb-logo/mclaren-lgo.png" alt="" style="height:30px;"></td>
                        <td>55</td>
                        <td>+65.662s</td>
                        <td>8</td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>3</td>
                        <td>Daniel Ricciardo</td>
                        <td>RENAULT <img src="imgs-proj/tb-logo/rn-lgo.png" alt="" style="height:30px;"></td>
                        <td>55</td>
                        <td>+73.748s</td>
                        <td>7</td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>10</td>
                        <td>Pierre Gasly</td>
                        <td>Alpha Tauri <img src="imgs-proj/tb-logo/alpha-lgo.png" alt="" style="height:30px;"></td>
                        <td>55</td>
                        <td>+89.718s</td>
                        <td>4</td>
                    </tr>
                    <tr>
                        <td>9</td>
                        <td>3</td>
                        <td>Esteban Ocon</td>
                        <td>RENAULT <img src="imgs-proj/tb-logo/rn-lgo.png" alt="" style="height:30px;"></td>
                        <td>55</td>
                        <td>+101.069s</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>10</td>
                        <td>18</td>
                        <td>Lance Stroll</td>
                        <td>RACING POINT BWT <img src="imgs-proj/tb-logo/rp-lgo.png" alt="" style="height:30px;"></td>
                        <td>55</td>
                        <td>+102.738s</td>
                        <td>1</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!--Fim da Tabela-->

        <!--Countdown Timer to last race -->
        <div class="container-timer " style="color: lightskyblue; margin: 0 auto; text-align: center; ">
            <h2 style="font-size: 50px; letter-spacing: .125rem; text-transform: uppercase; color: white; ">Countdown to next season:</h2>
            <div id="countdown ">
                <ul>
                    <li class="clock zoom"><span id="days "></span>Day</li>
                    <li class="clock zoom "><span id="hours "></span>Hrs</li>
                    <li class="clock zoom"><span id="minutes "></span>Min</li>
                    <li class="clock zoom"><span id="seconds "></span>Sec</li>
                    <h4 class="text-white text-center p-3 " style="font-size: 1rem; "><span style="color:red; font-size:1rem;">Next race:</span> Bahrain, International Circuit</h4>
                    <h4 class="text-white text-center " style="font-size: 1rem; "><span style="color:red; font-size:1rem;">Formula 1</span> Gulf Air Bahrain Grand Prix 2021</h4>
                    <img src="imgs-proj/car/f1_logo.png " class="img-fluid " alt=" " style="height: 300px; display: block; margin: 0 auto; ">
                </ul>
            </div>
        </div>
        <!--Countdown Timer to next race -->

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js "></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js "></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js "></script>

        <!-- Button scroll-->
        <script>
            /* scrolltotop */
            function scrollToTop() {
                document.documentElement.scrollTop = 0;
                document.body.scrollTop = 0;
            }

            /* scroll window */
            window.onscroll = function() {
                btn = document.getElementById('btn-scroll-top');
                if (document.documentElement.scrollTop > 100 || document.body.scrollTop > 100) {
                    btn.style.display = 'block';
                } else {
                    btn.style.display = 'none';
                }
            }
        </script>
        <!-- Button scroll-->

        <!-- Counter style-->
        <style>
            /* RACE COUNTER */
            
            .clock {
                display: inline-block;
                font-size: 1rem;
                border-radius: 50%;
                padding: 1rem;
                color: #03BFB5;
            }
            
            li span {
                display: block;
                font-size: 4rem;
            }
        </style>
        <!-- Counter style-->

        <!-- JS counter code-->
        <script>
            (function() {
                const second = 1000,
                    minute = second * 60,
                    hour = minute * 60,
                    day = hour * 24;

                let race = "MAR 28, 2021 18:00:00:00 ",
                    countDown = new Date(race).getTime(),
                    x = setInterval(function() {

                        let now = new Date().getTime(),
                            distance = countDown - now;

                        document.getElementById("days ").innerText = Math.floor(distance / (day)),
                            document.getElementById("hours ").innerText = Math.floor((distance % (day)) / (hour)),
                            document.getElementById("minutes ").innerText = Math.floor((distance % (hour)) / (minute)),
                            document.getElementById("seconds ").innerText = Math.floor((distance % (minute)) / second);

                        //qnd chegar o dia
                        if (distance < 0) {
                            let headline = document.getElementById("headline "),
                                countdown = document.getElementById("countdown "),
                                content = document.getElementById("content ");

                            headline.innerText = "Race day!";
                            countdown.style.display = "none";
                            content.style.display = "none";

                            clearInterval(x);
                        }
                        //seconds
                    }, 0)
            }());
        </script>
        <!-- JS counter code-->

        <?php
    require 'includes/footer.php';
    ?>
</body>

</html>