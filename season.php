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
    <link rel="stylesheet" href="css/proj.css">

    <style>
        #btn-scroll-top {
            display: none;
            position: fixed;
            bottom: 50px;
            right: 50px;
        }
        
        .timeline_content {
            border: 2px solid #f9efef;
            border-radius: 5px 20px 5px;
            padding: 1rem;
        }
        
        .h1-title {
            font-size: 60px;
            background-color: black;
            text-align: center;
            font-family: 'Bebas Neue', cursive;
            color: white;
            padding: 3rem;
        }
        
        .h4-CAL {
            color: white;
        }
        
        .timeline_content span {
            font-size: 22px;
            font-family: 'Courier New', Courier, monospace;
            color: #ff3636;
        }
        
        .p {
            font-family: 'Xanh Mono', monospace;
            font-size: 1.5rem;
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

        <section class="experience pt-100 pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 mx-auto text-center">
                        <div class="section-title">
                            <h1 class="h1-title"> 2020 Season</h1>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4 mx-auto">
                        <div class="timeline_content float-left w-45">
                            <img src="imgs-proj/car/austria.png" class="img-fluid" alt="" style="float: left;">
                            <span>Round 1</span>
                            <h4 class="h4-CAL">AUSTRIA<br>03-05<br>JUL</h4>
                            <div class="d-block-flex">
                                <p style="color:#018076; text-align: center; border-top: solid 5px #e10600; border-top-right-radius: 15px; padding-top: 15px;">1º Valteri Bottas<img src="imgs-proj/tb-logo/mer-lgo.png" alt="" style="height:30px;"></p>
                                <p style="color:white; text-align: center; border-top: solid 5px #fff; border-top-right-radius: 15px; padding-top: 15px;">2º Charles Leclerc<img src="imgs-proj/tb-logo/ff-logo.png" alt="" style="height:30px;"></p>
                                <p style="color:white; text-align: center; border-top: solid 5px #e10600; border-top-right-radius: 15px; padding-top: 15px;">3º Lando Norris <img src="imgs-proj/tb-logo/mclaren-lgo.png" style="height: 30px;"> </p>
                            </div>
                        </div>
                        <div class="timeline_content float-right w-45 ">
                            <img src="imgs-proj/car/austria.png" class="img-fluid" alt="" style="float: right;">
                            <span>Round 2</span>
                            <h4 class="h4-CAL">AUSTRIA<br>10-12<br>JUL</h4>
                            <div class="d-block-flex ">
                                <p style="color:#018076; text-align: center; border-top: solid 5px #e10600; border-top-right-radius: 15px; padding-top: 15px">1º Lewis Hamilton<img src="imgs-proj/tb-logo/mer-lgo.png" alt="" style="height:30px;"></p>
                                <p style="color:#018076; text-align: center; border-top: solid 5px #fff; border-top-right-radius: 15px; padding-top: 15px;">2º Valteri Bottas<img src="imgs-proj/tb-logo/mer-lgo.png" alt="" style="height:30px;"></p>
                                <p style="color:white; text-align: center; border-top: solid 5px #e10600; border-top-right-radius: 15px; padding-top: 15px;">3º Max Verstappen<img src="imgs-proj/tb-logo/rb-lgo.png" style="height: 30px;"> </p>
                            </div>
                        </div>
                        <div class="timeline_content float-left w-45">
                            <img src="imgs-proj/car/hungary.png" class="img-fluid" alt="" style="float: left;">
                            <span>Round 3</span>
                            <h4 class="h4-CAL">HUNGARY<br>17-19<br>JUL</h4>
                            <div class="d-block-flex">
                                <p style="color:#018076; text-align: center; border-top: solid 5px #e10600; border-top-right-radius: 8px; padding-top: 5px;">1º Lewis Hamilton<img src="imgs-proj/tb-logo/mer-lgo.png" alt="" style="height:30px;"></p>
                                <p style="color:white; text-align: center; border-top: solid 5px #fff; border-top-right-radius: 10px; padding-top: 10px;">2º Max Verstappen<img src="imgs-proj/tb-logo/rb-lgo.png" style="height: 30px;"></p>
                                <p style="color:#018076; text-align: center; border-top: solid 5px #00e600; border-top-right-radius: 10px; padding-top: 10px;">3º Valteri Bottas<img src="imgs-proj/tb-logo/mer-lgo.png" alt="" style="height:30px;"></p>
                            </div>
                        </div>
                        <div class="timeline_content float-right w-45">
                            <img src="imgs-proj/car/united-kingdom.png" class="img-fluid" alt="" style="float: right; ">
                            <span>Round 4</span>
                            <h4 class="h4-CAL">GREAT BRITAIN<br>31-02<br>JUL-AUG</h4>
                            <div class="d-block-flex">
                                <p style="color:#018076; text-align: center; border-top: solid 5px #0066ff; border-top-right-radius: 8px; padding-top: 5px;">1º Lewis Hamilton<img src="imgs-proj/tb-logo/mer-lgo.png" alt="" style="height:30px;"></p>
                                <p style="color:white; text-align: center; border-top: solid 5px #fff; border-top-right-radius: 10px; padding-top: 10px;">2º Max Verstappen<img src="imgs-proj/tb-logo/rb-lgo.png" style="height: 30px;"></p>
                                <p style="color:white; text-align: center; border-top: solid 5px #e10600; border-top-right-radius: 10px; padding-top: 10px;">3º Charles Leclerc<img src="imgs-proj/tb-logo/ff-logo.png" alt="" style="height:30px;"></p>
                            </div>
                        </div>
                        <div class="timeline_content float-left w-45">
                            <img src="imgs-proj/car/united-kingdom.png" class="img-fluid" alt="" style="float: left;">
                            <span>Round 5</span>
                            <h4 class="h4-CAL">GREAT BRITAIN<br>07-09<br>AUG</h4>
                            <div class="d-block-flex">
                                <p style="color:white; text-align: center; border-top: solid 5px #0066ff; border-top-right-radius: 8px; padding-top: 5px;">1º Max Verstappen<img src="imgs-proj/tb-logo/rb-lgo.png" style="height: 30px;"></p>
                                <p style="color:#018076; text-align: center; border-top: solid 5px #fff; border-top-right-radius: 10px; padding-top: 10px;">2º Lewis Hamilton<img src="imgs-proj/tb-logo/mer-lgo.png" style="height:30px;"></p>
                                <p style="color:#018076; text-align: center; border-top: solid 5px #e10600; border-top-right-radius: 10px; padding-top: 10px;">3º Valteri Bottas<img src="imgs-proj/tb-logo/mer-lgo.png" style="height:30px;"></p>
                            </div>
                        </div>
                        <div class="timeline_content float-right  w-45">
                            <img src="imgs-proj/car/spain.png" class="img-fluid" alt="" style="float: right;">
                            <span>Round 6</span>
                            <h4 class="h4-CAL">SPAIN<br>14-16<br>AUG</h4>
                            <div class="d-block-flex">
                                <p style="color:#018076; text-align: center; border-top: solid 5px #e10600; border-top-right-radius: 8px; padding-top: 5px;">1º Lewis Hamilton<img src="imgs-proj/tb-logo/mer-lgo.png" alt="" style="height:30px;"></p>
                                <p style="color:white; text-align: center; border-top: solid 5px #f6b511; border-top-right-radius: 10px; padding-top: 10px;">2º Max Verstappen<img src="imgs-proj/tb-logo/rb-lgo.png" style="height: 30px;"></p>
                                <p style="color:#018076; text-align: center; border-top: solid 5px #e10600; border-top-right-radius: 10px; padding-top: 10px;">3º Valteri Bottas<img src="imgs-proj/tb-logo/mer-lgo.png" alt="" style="height:30px;"></p>
                            </div>
                        </div>

                        <div class="timeline_content float-left  w-45">
                            <img src="imgs-proj/car/belgium.png" class="img-fluid" alt="" style="float: left;">
                            <span>Round 7</span>
                            <h4 class="h4-CAL">Belgium<br>28-30<br>AUG</h4>
                            <div class="d-block-flex ">
                                <p style="color:#018076; text-align: center; border-top: solid 5px #000; border-top-right-radius: 15px; padding-top: 15px;">1º Lewis Hamilton<img src="imgs-proj/tb-logo/mer-lgo.png" alt="" style="height:30px;"></p>
                                <p style="color:#018076; text-align: center; border-top: solid 5px #f6b511; border-top-right-radius: 15px; padding-top: 15px;">2º Valteri Bottas<img src="imgs-proj/tb-logo/mer-lgo.png" alt="" style="height:30px;"></p>
                                <p style="color:white; text-align: center; border-top: solid 5px #e10600; border-top-right-radius: 15px; padding-top: 15px;">3º Max Verstappen<img src="imgs-proj/tb-logo/rb-lgo.png" style="height: 30px;"> </p>
                            </div>
                        </div>

                        <div class="timeline_content float-right  w-45">
                            <img src="imgs-proj/car/italy.png" class="img-fluid" alt="" style="float: right;">
                            <span>Round 8</span>
                            <h4 class="h4-CAL">Italy<br>04-06<br>SEP</h4>
                            <div class="d-block-flex ">
                                <p style="color:white; text-align: center; border-top: solid 5px #00e600; border-top-right-radius: 15px; padding-top: 15px;">1º Pierre Gasly<img src="imgs-proj/tb-logo/alpha-lgo.png" alt="" style="height:30px;"></p>
                                <p style="color:white; text-align: center; border-top: solid 5px #fff; border-top-right-radius: 15px; padding-top: 15px;">2º Carlos Sainz<img src="imgs-proj/tb-logo/mclaren-lgo.png" alt="" style="height:30px;"></p>
                                <p style="color:white; text-align: center; border-top: solid 5px #e10600; border-top-right-radius: 15px; padding-top: 15px;">3º Lance Stroll<img src="imgs-proj/tb-logo/rp-lgo.png" style="height: 30px;"> </p>
                            </div>
                        </div>

                        <div class="timeline_content float-left  w-45">
                            <img src="imgs-proj/car/italy.png" class="img-fluid" alt="" style="float: left;">
                            <span>Round 9</span>
                            <h4 class="h4-CAL">Italy<br>12-13<br>SEP</h4>
                            <div class="d-block-flex ">
                                <p style="color:#018076; text-align: center; border-top: solid 5px #00e600; border-top-right-radius: 15px; padding-top: 15px;">1º Lewis Hamilton<img src="imgs-proj/tb-logo/mer-lgo.png" alt="" style="height:30px;"></p>
                                <p style="color:#018076; text-align: center; border-top: solid 5px #fff; border-top-right-radius: 15px; padding-top: 15px;">2º Valteri Bottas<img src="imgs-proj/tb-logo/mer-lgo.png" alt="" style="height:30px;"></p>
                                <p style="color:white; text-align: center; border-top: solid 5px #e10600; border-top-right-radius: 15px; padding-top: 15px;">3º Alexander Albon<img src="imgs-proj/tb-logo/rb-lgo.png" style="height: 30px;"> </p>
                            </div>
                        </div>

                        <div class="timeline_content float-right  w-45">
                            <img src="imgs-proj/car/russia.png" class="img-fluid" alt="" style="float: right;">
                            <span>Round 10</span>
                            <h4 class="h4-CAL">Russia<br>25-27<br>SEP</h4>
                            <div class="d-block-flex ">
                                <p style="color:#018076; text-align: center; border-top: solid 5px #fff; border-top-right-radius: 15px; padding-top: 15px;">1º Valteri Bottas<img src="imgs-proj/tb-logo/mer-lgo.png" alt="" style="height:30px;"></p>
                                <p style="color:white; text-align: center; border-top: solid 5px blue; border-top-right-radius: 15px; padding-top: 15px;">2º Max Verstappen <img src="imgs-proj/tb-logo/rb-lgo.png" alt="" style="height:30px;"></p>
                                <p style="color:#018076; text-align: center; border-top: solid 5px #e10600; border-top-right-radius: 15px; padding-top: 15px;">3º Lewis Hamilton<img src="imgs-proj/tb-logo/mer-lgo.png" style="height: 30px;"> </p>
                            </div>
                        </div>
                        <div class="timeline_content float-left  w-45 ">
                            <img src="imgs-proj/car/germany.png" class="img-fluid" alt="" style="float: left;">
                            <span>Round 11</span>
                            <h4 class="h4-CAL">Germany<br>09-11<br>OCT</h4>
                            <div class="d-block-flex ">
                                <p style="color:#018076; text-align: center; border-top: solid 5px #000; border-top-right-radius: 15px; padding-top: 15px;">1º Lewis Hamilton<img src="imgs-proj/tb-logo/mer-lgo.png" alt="" style="height:30px;"></p>
                                <p style="color:white; text-align: center; border-top: solid 5px #e10600; border-top-right-radius: 15px; padding-top: 15px;">2º Max Verstappen<img src="imgs-proj/tb-logo/mer-lgo.png" alt="" style="height:30px;"></p>
                                <p style="color:white; text-align: center; border-top: solid 5px #f6b511; border-top-right-radius: 15px; padding-top: 15px;">3º Daniel Ricciardo <img src="imgs-proj/tb-logo/rn-lgo.png" style="height:30px;"> </p>
                            </div>
                        </div>
                        <div class="timeline_content float-right  w-45 ">
                            <img src="imgs-proj/car/portugal.png" class="img-fluid" alt="" style="float: right;">
                            <span>Round 12</span>
                            <h4 class="h4-CAL">Portugal<br>23-25<br>OCT</h4>
                            <div class="d-block-flex ">
                                <p style="color:#018076; text-align: center; border-top: solid 5px green; border-top-right-radius: 15px; padding-top: 15px;">1º Lewis Hamilton<img src="imgs-proj/tb-logo/mer-lgo.png" alt="" style="height:30px;"></p>
                                <p style="color:#018076; text-align: center; border-top: solid 5px #f6b511; border-top-right-radius: 15px; padding-top: 15px;">2º Valteri Bottas<img src="imgs-proj/tb-logo/mer-lgo.png" alt="" style="height:30px;"></p>
                                <p style="color:white; text-align: center; border-top: solid 5px #e10600; border-top-right-radius: 15px; padding-top: 15px;">3º Max Verstappen<img src="imgs-proj/tb-logo/rb-lgo.png" style="height: 30px;"> </p>
                            </div>
                        </div>

                        <div class="timeline_content float-left  w-45">
                            <img src="imgs-proj/car/italy.png" class="img-fluid" alt="" style="float: left;">
                            <span>Round 13</span>
                            <h4 class="h4-CAL">Italy<br>31-01<br>OUT-NOV</h4>
                            <div class="d-block-flex ">
                                <p style="color:#018076; text-align: center; border-top: solid 5px #00e600; border-top-right-radius: 15px; padding-top: 15px;">1º Lewis Hamilton<img src="imgs-proj/tb-logo/mer-lgo.png" alt="" style="height:30px;"></p>
                                <p style="color:#018076; text-align: center; border-top: solid 5px #fff; border-top-right-radius: 15px; padding-top: 15px;">2º Valteri Bottas<img src="imgs-proj/tb-logo/mer-lgo.png" alt="" style="height:30px;"></p>
                                <p style="color:white; text-align: center; border-top: solid 5px #e10600; border-top-right-radius: 15px; padding-top: 15px;">3º Daniel Ricciardo<img src="imgs-proj/tb-logo/rn-lgo.png" style="height: 30px;"> </p>
                            </div>
                        </div>
                        <div class="timeline_content float-right  w-45">
                            <img src="imgs-proj/car/turkey.png" class="img-fluid" alt="" style="float: right;">
                            <span>Round 14</span>
                            <h4 class="h4-CAL">Turkey<br>13-15<br>NOV</h4>
                            <div class="d-block-flex ">
                                <p style="color:#018076; text-align: center; border-top: solid 5px #e10600; border-top-right-radius: 15px; padding-top: 15px;">1º Lewis Hamilton<img src="imgs-proj/tb-logo/mer-lgo.png" alt="" style="height:30px;"></p>
                                <p style="color:#018076; text-align: center; border-top: solid 5px #fff; border-top-right-radius: 15px; padding-top: 15px;">2º Sergio Pérez<img src="imgs-proj/tb-logo/rp-lgo.png" alt="" style="height:30px;"></p>
                                <p style="color:white; text-align: center; border-top: solid 5px #e10600; border-top-right-radius: 15px; padding-top: 15px;">3º Sebastian Vettel <img src="imgs-proj/tb-logo/ff-logo.png" style="height: 30px;"> </p>
                            </div>
                        </div>

                        <div class="timeline_content float-left  w-45 ">
                            <img src="imgs-proj/car/bahrain_flag.png" class="img-fluid" alt="" style="float: left;">
                            <span>Round 15</span>
                            <h4 class="h4-CAL">Bahrain<br>27-29<br>NOV</h4>
                            <div class="d-block-flex ">
                                <p style="color:#018076; text-align: center; border-top: solid 5px #fff; border-top-right-radius: 15px; padding-top: 15px;">1º Lewis Hamilton<img src="imgs-proj/tb-logo/mer-lgo.png" alt="" style="height:30px;"></p>
                                <p style="color:white; text-align: center; border-top: solid 5px #e10600; border-top-right-radius: 15px; padding-top: 15px;">2º Max Verstappen<img src="imgs-proj/tb-logo/rb-lgo.png" alt="" style="height:30px;"></p>
                                <p style="color:white; text-align: center; border-top: solid 5px #fff; border-top-right-radius: 15px; padding-top: 15px;">3º Alexander Albon<img src="imgs-proj/tb-logo/rb-lgo.png" style="height: 30px;"> </p>
                            </div>
                        </div>

                        <div class="timeline_content float-right  w-45 ">
                            <img src="imgs-proj/car/bahrain_flag.png" class="img-fluid" alt="" style="float: right;">
                            <span>Round 16</span>
                            <h4 class="h4-CAL">Bahrain<br>04-06<br>DEC</h4>
                            <div class="d-block-flex ">
                                <p style="color:white; text-align: center; border-top: solid 5px #fff; border-top-right-radius: 15px; padding-top: 15px;">1º Sergio Pérez <img src="imgs-proj/tb-logo/rp-lgo.png" alt="" style="height:30px;"></p>
                                <p style="color:white; text-align: center; border-top: solid 5px #e10600; border-top-right-radius: 15px; padding-top: 15px;">2º Esteban Ocon <img src="imgs-proj/tb-logo/rn-lgo.png" alt="" style="height:30px;"></p>
                                <p style="color:white; text-align: center; border-top: solid 5px #fff; border-top-right-radius: 15px; padding-top: 15px;">3º Lance Stroll<img src="imgs-proj/tb-logo/rp-lgo.png" style="height: 30px;"> </p>
                            </div>
                        </div>

                        <div class="timeline_content float-left  w-45 ">
                            <img src="imgs-proj/car/EAU.png" class="img-fluid" alt="" style="float: left;">
                            <span>Round 17</span>
                            <h4 class="h4-CAL">Abu Dhabi<br>11-13<br>DEC</h4>
                            <div class="d-block-flex ">
                                <p style="color:white; text-align: center; border-top: solid 5px greenyellow; border-top-right-radius: 15px; padding-top: 15px;">1º Max Verstappen<img src="imgs-proj/tb-logo/rb-lgo.png" alt="" style="height:30px;"></p>
                                <p style="color:#018076; text-align: center; border-top: solid 5px #fff; border-top-right-radius: 15px; padding-top: 15px;">2º Valteri Bottas<img src="imgs-proj/tb-logo/mer-lgo.png" alt="" style="height:30px;"></p>
                                <p style="color:#018076; text-align: center; border-top: solid 5px darkgrey; border-top-right-radius: 15px; padding-top: 15px;">3º Lewis Hamilton<img src="imgs-proj/tb-logo/mer-lgo.png" style="height: 30px;"> </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

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