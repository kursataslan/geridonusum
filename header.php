<?php

include 'db.php';

$sql = "SELECT * FROM ayarlar";
$result = $conn->query($sql);

    while($row = $result->fetch_assoc()) {

?>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <title><?php echo $row["baslik"];?></title>
    <meta name="description" content="Geri Dönüşüm">
    <meta name="keywords" content="Bakır , kablo">
    <meta name="author" content="Her Türlü Hurda">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <script type="text/javascript" src="./Galeri_files/jquery-1.7.2.js.indir"></script>
    <script type="text/javascript" src="./Galeri_files/js.js.indir"></script>
    <link href="./Galeri_files/ortak.css" rel="stylesheet" type="text/css">
    <link href="./Galeri_files/font.css" rel="stylesheet" type="text/css">
    <link href="./Galeri_files/style.css" rel="stylesheet" type="text/css"> <style>.slider_w { overflow:hidden; }</style>
    <!--///////////////////////////////////////////////////////////////////////////////-->
    <script type="text/javascript" src="./Galeri_files/jquery.min.js.indir"></script>
    <link rel="stylesheet" type="text/css" href="./Galeri_files/jquery.lightbox.css">
    <script type="text/javascript" src="./Galeri_files/jquery.lightbox.min.js.indir"></script>

    <script type="text/javascript" src="./Galeri_files/jcarousellite_1.0.1.pack.js.indir"></script>

    <!--///////////////////////////////////////////////////////////////////////////////-->
    <link rel="stylesheet" href="./Galeri_files/flexslider.css" type="text/css" media="screen">
    <script defer="" src="./Galeri_files/jquery.flexslider.js.indir"></script>
    <script type="text/javascript">
    </script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body background="img/4614.jpg"   >



<nav class="navbar navbar-expand-lg sticky-top navbar-light bg-white border border-secondary border-top-0 border-left-0 border-right-0 ">
    <div class="container">

        <button class="navbar-toggler" type="button"  data-toggle="collapse" data-target="#geridonusummenuac"><span class="navbar-toggler-icon"></span> </button>
        <a href="index.php" class="navbar-brand"><img class="logo-hizala" src="img/logo.png"></a>

        <div class="collapse navbar-collapse" id="geridonusummenuac">

            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a href="index.php" class="nav-link topmenu">ANASAYFA</a>
                </li>

                <li class="nav-item ">

                    <a href="misyonumuz.php" class="nav-link topmenu" >HAKKIMIZDA</a>



                </li>


                <li class="nav-item">
                    <a href="fotoğraflar.php" class="nav-link topmenu">FOTOĞRAFLAR</a>
                </li>

                <li class="nav-item">
                    <a href="iletişim.php" class="nav-link topmenu">BİZE ULAŞIN</a>
                </li>


            </ul>

            <form class="form-inline">

                <input type="text" class="form-control form-control-sm" placeholder="Ara..." name="">
                <i class="fa fa-search search-icon"></i>

            </form>

        </div>

    </div>
</nav>
<?php
    }

        ?>