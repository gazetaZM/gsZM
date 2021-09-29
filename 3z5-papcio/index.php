<?php $zle=0; $haslo=0;
     if (isset($_POST['submit'])) {
     if (lcfirst ($_POST['key'])=="papcio")
     {
       $haslo=1;
       //header("Location: nastepna-zagadka.php");
     }else {
       header("Location: zle.php");
     }

  }
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>gsZuziaiMikolaj</title>
    <meta name="author" content="" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <!-- Libs CSS -->
    <link type="text/css" media="all" href="/assets/boostrap-files/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Template CSS -->
    <link type="text/css" media="all" href="/assets/css/style.css" rel="stylesheet" />
    <!-- Responsive CSS -->
    <link type="text/css" media="all" href="/assets/css/respons.css" rel="stylesheet" />

    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="144x144" href="/favicon.ico" />
    <link rel="apple-touch-icon" sizes="114x114" href="/favicon.ico" />
    <link rel="apple-touch-icon" sizes="72x72" href="/favicon.ico" />
    <link rel="apple-touch-icon" href="/favicon.ico" />
    <link rel="shortcut icon" href="/favicon.ico" />
    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
</head>
<body>

    <!-- Load page -->
    <div class="animationload">
        <div class="loader">
        </div>
    </div>
    <!-- End load page -->

    <!-- load container -->


        <div id="rel" class="center">
                  <div id="obrazek"><img src="zagadka3.jpg" class="img-fluid img-full">
                      <div id="formularz">
                        <form id="form1" action="index.php" method="POST">
                            <input type="text" name="key"><br>
                            <input type="submit" style="display:none;" name="submit">
                        </form>
                     </div>
                 </div>

        </div>
        <!-- end container -->


    <!-- Scripts -->
    <script src="/assets/js/jquery-3.3.1.min.js" type="text/javascript"></script>
    <script src="/assets/boostrap-files/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="/assets/js/modernizr.custom.js" type="text/javascript"></script>
    <script src="/assets/js/scripts.js" type="text/javascript"></script>

</body>
</html>
