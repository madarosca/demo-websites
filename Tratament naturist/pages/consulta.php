<!DOCTYPE html>
<html lang="en-US">
    <head>
        <title>Tratament naturist - tratamentnaturist.com.ro</title>
        <link rel="shortcut icon" href="../favicon.ico">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="description" content="Tratamentele naturiste si remediile naturale au fost folosite de omenire inca din cele mai vechi timpuri in ameliorarea diferitelor afectiuni">
        <meta name="keywords" content="">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800" rel="stylesheet">
        <!-- Styles -->
        <link href="../assets/style.css" type="text/css" rel="stylesheet">
        <link href="../assets/responsive.css" type="text/css" rel="stylesheet">
        <link href="../assets/buttons.css" type="text/css" rel="stylesheet">
        <!-- Bootstrap -->
        <link href="../assets/bootstrap/css/bootstrap.min.css" type="text/css" rel="stylesheet">
        <!-- Font awesome -->
        <link href="../assets/font-awesome/css/font-awesome.min.css" type="text/css" rel="stylesheet">
        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
    </head>
<body>
    <div class="main-wrapper row">
        <?php include (__DIR__ .'/menus.php'); ?>
        <div class="bg-overlay2"><!-- start bg-overlay -->
            <div class="overlay-content2 introduction">
                <h1 class="h-large animation-element slide-top">Tratamente naturiste</h1>
                <a href="http://drrosca.flavonoide.ro/" class="btn btn-overlay animation-element slide-bottom" target="_blank">Afla  mai mult >></a>
            </div>
            <div class="clearfix"></div>
            <div class="intro_contact pull-right">
                <h4 class="animation-element slide-left">Vodafone: 0733.368.833</h4>
                <h4 class="animation-element slide-right">Orange: 0758.970.397</h4>
                <h4 class="animation-element slide-left">Cosmote: 0768.246.224</h4>
                <h4 class="animation-element slide-right">RDS: 0770.329.208</h4>
            </div>
            <div class="clearfix"></div>
            <div class="scroll">
                <a href="#intro">
                    <span id="scroll-text">mai mult</span>
                    <br>
                    <span id="scroll-icon" class="glyphicon glyphicon-circle-arrow-down"></span>
                </a>
            </div>
        </div><!-- end bg-overlay -->
        <div class="clearfix"></div>
        <br>
        <div id="intro2" class="container-fluid">
            <h3 class="b-title text-center">Consulta specialistul</h3>
        </div>
        <div class="clearfix"></div>
        <div class="spacing-1"></div>
        <div id="banner_section2" class="col-lg-12 text-center">
            <div class="section_overlay2 container-fluid">
                <div class="big_icon2 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <p class="sec_text2 col-md-8 col-md-offset-2">Va rugam sa completati formularul de mai jos si in cel mai scurt timp posibil veti fi contactat de unul din consultantii nostri care va va oferi solutia optima de tratament naturist personalizat pentru cazul dumneavoastra.</p>
                    <p class="sec_text2 col-md-8 col-md-offset-2">Va multumim!</p>
                </div>
            </div>
        </div><!-- end banner_section2 -->
        <div class="clearfix"></div>
        <!-- Formular consulta specialistul -->
        <div class="consulta_specialistul container-fluid">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" name="consulta_specialistul" id="consulta_specialistul" role="form" data-toggle="validator" class="
        col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-12 col-xs-12">
            <div class="container-fluid col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <div class="form-group">
                <label><b>Nume</b></label>
                <input type="text" placeholder="Numele tau" name="name" class="form-control" required>
                <div class="help-block with-errors"></div>
              </div>
              <div class="form-group">
                <label><b>E-mail</b></label>
                <input type="email" placeholder="Adresa e-mail" name="email" class="form-control" required>
                <div class="help-block with-errors"></div>
              </div>
              <div class="form-group">
                <label><b>Telefon</b></label>
                <input type="text" placeholder="Numar de telefon" name="telefon" class="form-control" required>
                <div class="help-block with-errors"></div>
              </div>
              <div class="form-group">
                <label><b>De ce afectiuni suferiti? De cat timp?</b></label>
                <textarea class="form-control" rows="5" name="afectiuni" required></textarea>
                <div class="help-block with-errors"></div>
              </div>
              <div class="form-group">
                <label><b>Ce medicamente sau produse naturiste consumati (sau ati mai consumat) pentru aceasta afectiune?</b></label>
                <textarea class="form-control" rows="5" name="medicamente" required></textarea>
                <div class="help-block with-errors"></div>
              </div>
              <div class="form-group">
                <label><b>Observatii:</b></label>
                <textarea class="form-control" rows="5" name="observatii" required></textarea>
                <div class="help-block with-errors"></div>
              </div>
              <div class="form-group">
                <button type="submit" class="form_btn trimite_btn btn btn-success gradient pull-right" name="trimite" id="trimite" value="trimite">Trimite</button>
                <button type="button" class="form_btn btn btn-danger gradient" onclick="document.getElementById('id01').style.display='none'">Cancel</button>
                <button type="reset" value="reset" class="form_btn btn btn-warning gradient">Reset</button>
              </div>
            </div>
        </form>
        </div><!-- End Formular consulta specialistul-->
        <div class="clearfix"></div>
        <?php include (__DIR__ .'/footer.php'); ?>
    </div><!-- end main-wrapper -->
</body>
    <script src="../js/default.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.9/validator.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.9/validator.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC_5vR2Hlo8OMgzGz9DFcd1wfRveo7MIt0&callback=myMap"></script>
</html>