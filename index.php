<?php include '_inc.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="viewport" content="initial-scale=1.0, user-scalable=yes" />
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>CGTM</title>

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="dist/css/starter-template.css" rel="stylesheet">
    <link href="dist/css/main.css" rel="stylesheet">
    <link href="dist/css/css-footer/demo.css" rel="stylesheet">
    <link href="dist/css/css-footer/footer-distributed-with-address-and-phones.css" rel="stylesheet">

    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">


    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]>
    <script src="assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <div class="div-ico-logo-center">
        <img src="img/engrenage.png" class="img-engrenage" alt="engrenage">
        <img src="img/CGTM.png" alt="Logo CGTM" class="logo">
    </div>

    <div class="container">

        <br><br><br>

        <?php if(array_key_exists('success', $_SESSION)): ?>
            <div class="alert alert-success div-alert">
                <p>Votre message a été envoyé. Vous receverez dans quelques instants un email de confirmation.</p>
            </div>
        <?php endif; ?>
            <p>
                <strong> <span style="font-size:30px;">C.</span><span style="font-size:20px ;color: grey;">G.</span><span style="font-size:30px;">T.</span><span style="font-size:20px ;color: grey;">M.</span></strong> est un service de  facturation des télétransmissions médicales pour les infirmiers(ères) libéraux(ales) et autres professionnels de santé.
                 <br>
            </p>
             <div style="text-align: center;">
                <img src="img/logo2.png" alt="Logo2" style="width:150px; display: inline-block;">
            </div>
            <br>
            <p style="text-align: center; margin-top:-2%;">
                Notre site est en cours de construction vous pouvez néanmoins nous contacter via notre formulaire de contact ou par téléphone disponnible ci-dessous.
            </p>

            <div class="btn-contact">
                <a type="button" class="btn btn-default btn-color" href="formulaire.php">
                    <span class="text-btn-color">Contact</span>
                </a>
            </div>

    </div><!-- /.container -->

    <footer class="footer-distributed">

        <div class="footer-left">

            <h3>CGTM</h3>
            <br>

            <p class="footer-company-name">
               Le déclic vital à adopter
            </p>
        </div>

        <div class="footer-center">

            <div>
                <a type="button" href="https://www.google.fr/maps/place/21+Avenue+Dubonnet,+92400+Courbevoie/@48.9027483,2.2606635,17z/data=!3m1!4b1!4m5!3m4!1s0x47e6659eb6cfd4e3:0xb98fa7f83675a3a6!8m2!3d48.9027483!4d2.2628522?hl=fr"><i class="fa fa-map-marker"></i></a>
                <p><span>19-21 Av. Dubonnet</span> 92400 Courbevoie</p>
            </div>

            <div>
                <i class="fa fa-phone"></i>
                <p>06 56 81 24 22</p>
            </div>

            <div>
                <i class="fa fa-envelope"></i>
                <p><a type="button" href="formulaire.php">Email contact</a></p>
            </div>

        </div>

        <div class="footer-right">

            <p class="footer-company-about">
                <span>Suivez nous !</span>
                cgtm.fr
            </p>

            <div class="footer-icons" style="text-align: center">

                <a href="#"><i class="fa fa-facebook"></i></a>

            </div>

        </div>

    </footer>
<br><br><br>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
