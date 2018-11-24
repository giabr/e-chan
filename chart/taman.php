<?php
$host = "host = ec2-23-21-201-12.compute-1.amazonaws.com";
$user = "user = bqgtvmqhgoocpi";
$password = "password = 2302bdf02990ee73a5a3f718a2b0ca280f65f27f62ef67e6b3850e05c1eceb37";
$dbname = "dbname = df4d3civge3daf";
$port = "port = 5432";

$db = pg_connect("$host $port $dbname $user $password");
// $str = 'box_abcde';

// $read = substr($str, 4, strlen($str) - 1 );

// echo $read;

//$sql = "INSERT INTO public.basic(id) VALUES ('$id')";

// $ret = pg_query($db, $sql);

if($db){
     //survey 1
     $queryTamanJogjaIndah = "SELECT answersurveyone FROM public.survey_one_answers WHERE answersurveyone = 'Taman Jogja Indah'";
     $queryTamanIndahJogja = "SELECT answersurveyone FROM public.survey_one_answers WHERE answersurveyone = 'Taman Indah Jogja'";
     $queryJogjaTamanIndah = "SELECT answersurveyone FROM public.survey_one_answers WHERE answersurveyone = 'Jogja Taman Indah'";
 
 
     $amtTamanJogjaIndah = 0;
     $amtTamanIndahJogja = 0;
     $amtJogjaTamanIndah = 0;

     $resultTamanJogjaIndah = pg_query($db, $queryTamanJogjaIndah);
    $resultTamanIndahJogja = pg_query($db, $queryTamanIndahJogja);
    $resultJogjaTamanIndah = pg_query($db, $queryJogjaTamanIndah);

    while ($row = pg_fetch_assoc($resultTamanJogjaIndah)) {
        $amtTamanJogjaIndah++;
    }

    while ($row = pg_fetch_assoc($resultTamanIndahJogja)) {
        $amtTamanIndahJogja++;
    }

    while ($row = pg_fetch_assoc($resultJogjaTamanIndah)) {
        $amtJogjaTamanIndah++;
    }

    // echo "Jumlah 1 = \n" . $amtTamanJogjaIndah;
    // echo "Jumlah 2 = \n" . $amtTamanIndahJogja;
    // echo "jumlah 3 = \n" . $amtJogjaTamanIndah;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Survey Kebersihan Selokan Mataram</title>
    <!-- CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/font-awesome.min.css" rel="stylesheet">
    <link href="../css/prettyPhoto.css" rel="stylesheet">
    <link href="../css/animate.min.css" rel="stylesheet">
    <link href="../css/main.css" rel="stylesheet">
    <link href="../css/responsive.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
    <!-- logo -->
    <link rel="shortcut icon" href="../images/ico/echan2.png">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.3.0/Chart.min.js"></script>
	
</head>
<body>
<header id="header">
        <nav class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="col-sm-9 col-xs-4">
                        <a href="../home.html"><img id='logo' src="../images/logo3.png" alt="E-Chan"></a>
                    </div>
                    <div class="col-sm-3 col-xs-8">
                        <div class="search">
                            <form role="form">
                                <input type="text" class="search-form" autocomplete="off" placeholder="Search">
                                <i class="fa fa-search"></i>
                            <form>
                       </div>
                    </div>
            </div><!--/.container-->
        </nav><!--/nav-->
        
    </header><!--/header-->

    <div class="wrapper">
      <h1>Survey Kebersihan Selokan Mataram</h1>
      <h2>Lorem ipsum dolor sit amet, discere pericula est ne. Malis solet molestiae vis ea. Accusam blandit explicari et vel. Sit at congue albucius repudiare. Laudem splendide sed an. Nam no tale facete.</h2>
      <hr>
      <h3>Data survey nama taman kota yang akan dibangun oleh pemkot yogyakarta</h3>
      <br>
      <canvas id="myChart" width="1600" height="900"></canvas>
    </div>

    <input id="jogjaindah" type="text" name="name" value="<?php echo htmlspecialchars($amtTamanJogjaIndah); ?>">
	<input id="indahjogja" type="text" name="name" value="<?php echo htmlspecialchars($amtTamanIndahJogja); ?>">
    <input id="jogjataman" type="text" name="name" value="<?php echo htmlspecialchars($amtJogjaTamanIndah); ?>">
    
	<script src="graph.js"></script>
</body>
</html>