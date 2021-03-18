<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Mercedes-AMG F1</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro:wght@300;400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Xanh+Mono&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Goldman&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/partners.css">

    <style>
        .html,
        body {
            background-color: black;
            color: white;
        }
        
        #btn-scroll-top {
            display: none;
            position: fixed;
            bottom: 50px;
            right: 50px;
        }
        .title-h1{
            font-size: 60px; 
            text-align: center; 
            padding: 2rem; 
            font-family: 'Bebas Neue', cursive;
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
require 'includes/menu.php';
?>
    <button id="btn-scroll-top" class="btn btn-outline-info" onclick="scrollToTop()">
    <i class="fal fa-arrow-alt-circle-up"></i>
    </button>

    <div class="container-fluid text-center bg-black p-3">
        <img src="imgs-proj/img/back-f1.png" class=" img-fluid" width="80%" alt="Image">
        <h1 class="title-h1">Our Partners</h1>
        <p class="title-2" style=" font-size: 22px; font-family: 'Playfair Display', serif;">Pleasure Making History with Them</p>
    </div>
    <?php 
        require 'includes/connection.php'; 
        ?> 
        <?php 
        $sql = 'SELECT * FROM Title_Partners';        
        $sth = $dbh->prepare($sql);
        $sth->execute();
        ?>
    <div class="container">
        <h3 style="color: goldenrod; font-size: 35px;">Title<br>Partner</h3>
        <div class="row p-2">
        <?php 
             while($Title_Partners = $sth->fetchObject()){
                $Name = $Title_Partners->Name;
                $Img = $Title_Partners->Img;
            ?>
            <div class="col-sm-2 zoom">
                <img src="imgs-proj/img/<?= $Img ?>" class="img-responsive" style="width:90%" alt="Image">
            </div>
            <?php } //foreach ?>
        </div>
    </div>

    <hr>
    <?php 
        $sql = 'SELECT * FROM Principal_Partners';        
        $sth = $dbh->prepare($sql);
        $sth->execute();
        ?>
    <div class="container">
        <h3 style="color:#C0C0C0; font-size: 30px;">Principal<br>Partner</h3>
        <div class="row p-2">
        <?php 
             while($Principal_Partners = $sth->fetchObject()){
                $Name = $Principal_Partners->Name;
                $Img = $Principal_Partners->Img;
            ?>
            <div class="col-sm-2 zoom">
            <img src="imgs-proj/img/<?= $Img ?>" class="img-responsive" style="width:90%" alt="Image">
            </div>
            <?php } //foreach ?>
        </div>
    </div>

    <hr>
    <?php 
        $sql = 'SELECT * FROM Team_Partners';        
        $sth = $dbh->prepare($sql);
        $sth->execute();
        ?>
    <div class="container">
        <h3 style="color: #cd7f32; font-size: 30px;">Team<br>Partners</h3>
        <div class="row p-2">
        <?php 
             while($Team_Partners = $sth->fetchObject()){
                $Name = $Team_Partners->Name;
                $Img = $Team_Partners->Img;
            ?>
            <div class="col-sm-2 zoom">
                <img src="imgs-proj/img/<?= $Img ?>" class="img-responsive" style="width:100%" alt="Image">
            </div>
            <?php } //foreach ?>
        </div>
    </div>
    
    <?php 
        $sql = 'SELECT * FROM Team_Supliers';        
        $sth = $dbh->prepare($sql);
        $sth->execute();
        ?>
    <div class="container">
        <h3 style="font-size: 30px;">Team<br>Supliers</h3>
        <div class="row p-2">
        <?php 
             while($Team_Supliers = $sth->fetchObject()){
                $Name = $Team_Supliers->Name;
                $Img = $Team_Supliers->Img;
            ?>
            <div class="col-sm-2 zoom">
            <img src="imgs-proj/img/<?= $Img ?>" class="img-responsive" style="width:100%" alt="Image">
            </div>
            <?php } //foreach ?>
        </div>
    </div>

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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<?php
require 'includes/footer.php';
?>
    
</body>

</html>