<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Mercedes-AMG F1</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Xanh+Mono&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Goldman&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/car-proj.css">

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
         
        .text-block {
            position: absolute;
            font-family: 'Goldman', cursive;
            color: #17a2b8;
            display: block;
            border-style: solid #fff;
            background-color: black;
            padding-right: 2rem;
            padding-left: 2rem;
            border-color: #1f1f1f;
            border-top-right-radius: 20px;
            top: 105px;
            left: 120px;
        }
        
        .col-lg-6 {
            max-width: 50%;
        }
        
        .container-fluid {
            width: 100%;
        }
        
        .title-showcase {
            color: black;
            padding: 2rem;
            background-color: white;
            text-align: center;
            font-family: 'Bebas Neue', cursive;
            font-size: 60px;
        }
        .title-h1{
            color: white; 
            padding: 2rem; 
            font-size: 30px; 
            text-align: center;
            font-family: 'Bebas Neue', cursive; 
            font-size: 50px;
        }
    </style>
</head>

<body>
    
<?php
require 'includes/menu.php';
?>

    <button id="btn-scroll-top" class="btn btn-outline-info" onclick="scrollToTop()">
    <i class="fal fa-arrow-alt-circle-up"></i>
    </button>

    <div class="container-fluid text-center bg-black p-3">
        <img src="imgs-proj/images/car-bg.png" alt="car" width="80%">
        <div class="text-block">
            <h2 style="font-size: 23px; font-weight: bold;">EQ W11 Performance</h2>
        </div>
    </div>

    <hr>

    <h1 class="title-h1">Our 2020 Car Delivery</h1>

    <!-- Image Showcases -->
    <section class="showcase">
        <div class="container-fluid p-0">
            <div class="row no-gutters">
                <div class="col-lg-6 order-lg-2 text-white showcase-img"> <img src="imgs-proj/img/car_1ft.png" height="500" width="100%"></div>
                <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                    <h2 class="title-showcase" style="padding: 1rem; background-color: #03bfb5;">Chassis</h2>
                    <p class="lead mb-0" style="color: white; padding: 1rem; text-align: center;">Structural stiffness is the basis of what you feel at the seat of your back bottom. It defines how a car handles, body integrity, and the overall feel of the car.<br>Chassis stiffness is what separates a great car to drive from what
                        is merely OK.</p>
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-lg-6 text-white showcase-img"> <img src="imgs-proj/img/car_f1.png" width="100%"></div>
                <div class="col-lg-6 my-auto showcase-text">
                    <h2 class="title-showcase" style="color: black; padding: 1rem; background-color: #03bfb5; text-align: center;">Aerodynamics</h2>
                    <p class="lead mb-0" style="color: white; padding: 1rem; text-align: center;">The primary aim of aerodynamics is to generate downforce to push the wheels harder into the road, so the tyres give more grip. More grip means faster cornering speeds, harder acceleration and braking - and quicker lap times.</p>
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-lg-6 order-lg-2 text-white showcase-img"> <img src="imgs-proj/img/car_w11.jpg" width="100%"></div>
                <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                    <h2 class="title-showcase" style="color: black; padding: 1rem; background-color: #03bfb5; text-align: center;">Engine</h2>
                    <p class="lead mb-0" style="color: white; padding: 1rem; text-align: center;"> Mercedes-AMG F1 M11 EQ Performance (AMG HPP M11) 1.6 L (98 cu in), 90° - V6 turbocharged engine, limited to 15,000 RPM, in a mid-mounted, rear-wheel drive layout</p>
                </div>
            </div>
        </div>
    </section>

    <!--Tabela-->
    <div class="container-table" style="background-color: black; font-family: 'Goldman', cursive; margin: auto;width: 50%;">
        <h2 style="color: white; font-size: 25px; padding: 2rem; padding: 1rem; text-align: center; ">Mercedes AMG F1 EQ W11 Performance - Technical Specification</h2>
        <table class="table table-responsive text-white text-center">
            <tbody>
                <tr scope="row" class="table" style="color: #eff5f9">
                    <td>Monocoque:</td>
                    <td>Moulded carbon fibre and honeycomb composite structure</td>
                </tr>
                <tr scope="row" class="table">
                    <td>Cockpit:</td>
                    <td>Removable driver's seat made of anatomically formed carbon composite</td>
                </tr>
                <tr scope="row" class="table" style="color: white;">
                    <td>Front/Rear Suspension:</td>
                    <td>Carbon fibre wishbone and pushrod-activated torsion springs and rockers/dampers</td>
                </tr>
                <tr scope="row" class="table">
                    <td>Brake System:</td>
                    <td>Carbone Industries Carbon / Carbon discs and pads with rear brake-by-wire</td>
                </tr>
                <tr scope="row" class="table" style="color: white;">
                    <td>Steering Wheel:</td>
                    <td>Carbon fibre construction</td>
                </tr>
                <tr scope="row" class="table">
                    <td>Electronics:</td>
                    <td>FIA standard ECU and FIA homologated electronic and electrical system</td>
                </tr>
            </tbody>
        </table>
    </div>
    <!--Fim da Tabela-->

    <style>
        * {
            box-sizing: border-box;
        }
        
        .row {
            margin-left: -5px;
            margin-right: -5px;
        }
        
        .column {
            float: left;
            width: 50%;
            padding: 5px;
        }
        /* Clearfix (clear floats) */
        
        .row::after {
            content: "";
            clear: both;
            display: table;
        }
        
        table {
            border-collapse: collapse;
            border-spacing: 0;
            width: 100%;
            border: 1px solid #ddd;
        }
        
        th,
        td {
            text-align: left;
            padding: 16px;
        }
        
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>

    <div class="row" style="color: white;">
        <div class="column">
            <table>
                <h2 class="title-table" style="color: white; text-align: left;">Transmission</h2>
                <tr>
                    <td>Gearbox:</td>
                    <td>Eight speed forward, one reverse unit with carbon fibre</td>
                </tr>
                <tr style="color: black;">
                    <td>Gear Selection:</td>
                    <td>Sequential, semi-automatic, hydraulic activation</td>
                </tr>
                <tr>
                    <td>Clutch:</td>
                    <td>Carbon plate</td>
                </tr>
            </table>
        </div>
        <div class="column">
            <table>
                <h2 class="title-table" style="color: white; text-align: left;">Dimensions</h2>
                <tr>
                    <td>Overall Length:</td>
                    <td>Over 5000mm</td>
                </tr>
                <tr style="color: black;">
                    <td>Overall Width:</td>
                    <td>2000mm</td>
                </tr>
                <tr>
                    <td>Overall Weight:</td>
                    <td>746kg</td>
                </tr>
            </table>
        </div>
    </div>

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

<?php
require 'includes/footer.php';
?>
</body>
</html>