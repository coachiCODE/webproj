<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Mercedes-AMG F1</title>
    <link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro:wght@300;400&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Xanh+Mono&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Goldman&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/partners.css">

    <style>
        .container-img {
            position: relative;
            text-align: center;
            color: white;
            padding: 1.5rem;
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
            padding-right: 4rem;
            padding-left: 3rem;
            border-color: #1f1f1f;
            border-top-right-radius: 20px;
            top: 60px;
            left: 80px;
        }
        
        .container-fluid {
            font-size: 20px;
            font-family: 'Xanh Mono', monospace;
        }
        
        .title-h1 {
            font-size: 50px;
            background-color: black;
            text-align: center;
            font-family: 'Bebas Neue', cursive;
            color: white;
            padding: 2rem;
        }
    </style>
</head>

<body>
    <?php
    $currentPage = 'team';
    require 'includes/menu.php';
    ?>
        <button id="btn-scroll-top" class="btn btn-outline-info" onclick="scrollToTop()">
        <i class="fal fa-arrow-alt-circle-up"></i>
        </button>

        <div class="container-img">
            <img src="imgs-proj/image/team.png" alt="" style="width: 100%;">
            <div class="text-block">
                <h2 style="font-size: 35px;">Team</h2>
            </div>
        </div>

        <h1 class="title-h1">Drivers</h1>
        <?php 
        require 'includes/connection.php'; 
        ?> 
        <?php 
        $sql = 'SELECT * FROM Drivers ORDER BY Role ASC';   
        $sth = $dbh->prepare($sql);
        $sth->execute();
        //echo($sth->rowCount());
        ?>
        <!-- Drivers -->
        <div class="container-fluid">
            <div class="row m-2">
            <?php 
             while($Drivers = $sth->fetchObject()){
                $Name = $Drivers->Name;
                $Number = $Drivers->Number;
                $Role = $Drivers->Role;
                $Img = $Drivers->Img;
            ?>
            <div class="col-12 col-md-6 col-lg-3" onclick="editUser()" style="font-family: 'Goldman', cursive;">
                <img src="imgs-proj/image/<?= $Img ?>" alt="" width="90%">
                <p class="text-white text-center p-1" style="font-size: 18px;"><?= $Name ?></p>
                <p class="text-white text-center p-1" style="font-size: 18px;"><?= $Number ?></p>
                <p class="text-white text-center p-1" style="font-size: 18px;"><?= $Role ?></p>
            </div>
             <?php } //foreach ?>
            </div>
        </div>
        <!-- Fim Drivers -->

        <h1 class="title-h1">Management – Board<br>of Directors</h1>
        <?php 
        $sql = 'SELECT * FROM Managers ORDER BY Role ASC';   
        $sth = $dbh->prepare($sql);
        $sth->execute();
        ?>
        <!-- Management -->
        <div class="container-fluid">
            <div class="row m-2">
            <?php 
             while($Directors = $sth->fetchObject()){
                $Name = $Directors->Name;
                $Role = $Directors->Role;
                $Img = $Directors->Img;
            ?>
                <div class="col-12 col-md-6 col-lg-3" onclick="editUser()" style="font-family: 'Goldman', cursive;">
                <img src="imgs-proj/image/<?= $Img ?>" alt="" width="90%">                    
                <p class="text-white text-center p-1" style="font-size: 18px;"><?= $Name ?></p>
                <p class="text-white text-center p-1" style="font-size: 18px;"><?= $Role ?></p>
                </div>
                <?php } //foreach ?>
            </div>
        </div>
        <!-- Fim Board Management -->

        <h1 class="title-h1">Niki Lauda<br>Tribute</h1>

        <!-- Niki Lauda Tribute -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <img src="imgs-proj/image/niki.jpg" class="rounded mx-auto d-block" alt="" width="50%">
                    <p class="text-white text-center" style="font-size: 22px;">Niki Lauda<br>1049-2019<br><img src="imgs-proj/images/star.png" alt="" height="22px"></p>
                </div>
            </div>
        </div>
        <!-- Fim Niki Lauda Tribute -->

        <h1 class="title-h1">Mercedes<br>Technology Centres</h1>

        <!-- Technology center-->
        <div class="container-fluid">
            <div class="row m-5">
                <div class="col-md-6">
                    <img src="imgs-proj/image/brackley.png" class="img-fluid" alt="" width="80%">
                    <p class="text-white" style="font-size: 20px;">Brackley Center, UK <img src="imgs-proj/images/reino-unido.png" alt="UK"> </p>
                </div>
                <div class="col-md-6">
                    <img src="imgs-proj/image/brixworth.png" class="img-fluid" alt="" width="80%">
                    <p class="text-white" style="font-size: 20px;">Brixworth Center, UK <img src="imgs-proj/images/reino-unido.png" alt="UK"> </p>
                </div>
            </div>
        </div>
        <!-- Fim Technology center-->

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