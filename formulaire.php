<?php include '_inc.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
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

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]>
    <script src="assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src='https://www.google.com/recaptcha/api.js'></script>

  </head>

  <body>

    <img src="img/CGTM.png" alt="Logo CGTM" class="logo">

    <div class="container">
      <br>

      <?php if(array_key_exists('errors', $_SESSION)): ?>
          <div class="alert alert-danger div-alert">
            <p>
              <?= implode('<br>', $_SESSION['errors']); ?>
            </p>
          </div>
      <?php endif; ?>
        <form class="form-main" action="post_contact.php" method="POST">

          <?php $form = new Form(isset($_SESSION['inputs']) ? $_SESSION['inputs'] : []); ?>

          <div class="row">

            <div class="col-xs-6">

              <?= $form->text('firstname', 'Prénom*'); ?>

            </div>
            <div class="col-xs-6">

              <?= $form->text('lastname', 'Nom*'); ?>

            </div>

            <div class="col-xs-6">

              <?= $form->email('email', 'Email*'); ?>

            </div>

            <div class="col-xs-6">

              <?= $form->text('phone', 'Téléphone'); ?>

            </div>

            <div class="col-xs-6">

              <?= $form->text('city', 'Ville*'); ?>

            </div>

            <div class="col-xs-12">

              <?= $form->text('soft', 'Logiciel de télétransmitions*'); ?>

            </div>

            <div class="col-xs-12">

              <?= $form->textarea('message', 'Votre message'); ?>

              <div>
                <div class="g-recaptcha" data-theme="dark" data-sitekey="6LcKeQoUAAAAAAAqSgvXBS-Dki4YTzfMcD0Mrtz6">
                </div>
              </div>


              <div class="btn-contact">
                <button type="submit" class="btn btn-primary btn-color btn-formulaire-lowScreen"><span class="text-btn-color">Envoyer</span></button>
              </div>
              <br><br>


            </div>

          </div>

        </form>

    </div><!-- /.container -->


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
<?php
unset($_SESSION['inputs']);
unset($_SESSION['errors']);
unset($_SESSION['success']);
?>
