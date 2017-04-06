<?php
$to_email = "mada.rosca@yahoo.com";

if(isset($_POST['trimite']))
{
$to_email = "mada.rosca@yahoo.com";
$name = $_POST['name'];
$email = $_POST['email'];
$telefon = $_POST['telefon'];
$subiect = $_POST['subiect'];
$mesaj = $_POST['mesaj'];

$email_from = $email;
$email_subject = "Formular consulta specialistul";
$email_body = "Ai primit un mesaj nou de la $name.\n". "Email: $email\n". "Telefon: $telefon\n". "Subiect: $subiect\n". "Mesaj: $mesaj\n";

$to = $to_email;
$headers = "From: $email \r\n";
$headers .= "Reply-To: $email \r\n";
mail($to,$email_subject,$email_body,$headers);
$thankYou="Multumim! Mesajul tau a fost trimis iar medicul specialist te va contacta in curand.";
}
?>
<!DOCTYPE html>
<html lang="en-US">
    <head>
        <title>Tratament naturist - tratamentnaturist.com.ro</title>
        <link rel="shortcut icon" href="favicon.ico">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="description" content="Tratamentele naturiste si remediile naturale au fost folosite de omenire inca din cele mai vechi timpuri in ameliorarea diferitelor afectiuni">
        <meta name="keywords" content="cancer, tratament, naturist, tratament naturist, boli, regim, nutritie, dieta, infarct, hipertensiune, diabet, litiaza, noduli, diabet tip II, colorectal, mamar, cancer mamar, chist, chist cerebral, cerebral, diabet cu complicatii, pastile, pastile naturiste, tratament cancer, tratament diabet, tratament boli, tratare, natural">
        <meta name="google-site-verification" content="FJdw4RlBtZi9yaOWVXgELgHRFBywebakiU0wGAkl050" />
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800" rel="stylesheet">
        <!-- Styles -->
        <link href="assets/style.css" type="text/css" rel="stylesheet">
        <link href="assets/responsive.css" type="text/css" rel="stylesheet">
        <link href="assets/buttons.css" type="text/css" rel="stylesheet">
        <!-- Bootstrap -->
        <link href="assets/bootstrap/css/bootstrap.min.css" type="text/css" rel="stylesheet">
        <!-- Font awesome -->
        <link href="assets/font-awesome/css/font-awesome.min.css" type="text/css" rel="stylesheet">
        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    </head>
<body>
    <div class="main-wrapper row">
        <!-- navbar -->
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation" id="top">
          <div class="nav-container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="index.php"><img src="img/logo1-a.png" id="logo"></img></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-navbar-collapse-1">
              <ul class="nav navbar-nav col-lg-8 col-lg-offset-4">
                <li><a href="index.php">Acasa</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Cazuistica <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="pages/cazuistica.php">Prezentare generala</a></li>
                        <li><a href="pages/infarct_miocardic.php"><i class="fa fa-heart" aria-hidden="true"></i> Infarct miocardic</a></li>
                        <li><a href="pages/hipertensiune.php"><i class="fa fa-line-chart" aria-hidden="true"></i> Hipertensiune</a></li>
                        <li><a href="pages/litiaza_renala.php"><i class="fa fa-wheelchair" aria-hidden="true"></i> Litiaza renala</a></li>
                        <li><a href="pages/noduli_tiroidieni.php"><i class="fa fa-stethoscope" aria-hidden="true"></i> Noduli tiroidieni</a></li>
                        <li><a href="pages/diabet_tip_II.php"><i class="fa fa-plus-square" aria-hidden="true"> Diabet tip II</i></a></li>
                        <li><a href="pages/cancer_colorectal.php"><i class="fa fa-exclamation-circle" aria-hidden="true"></i> Cancer colorectal</a></li>
                        <li><a href="pages/cancer_mamar.php"><i class="fa fa-female" aria-hidden="true"></i> Cancer mamar</a></li>
                        <li><a href="pages/chist_cerebral.php"><i class="fa fa-universal-access" aria-hidden="true"></i> Chist cerebral</a></li>
                        <li><a href="pages/diabet_cu_complicatii.php"><i class="fa fa-wheelchair" aria-hidden="true"></i> Diabet cu complicatii</a></li>
                    </ul>
                </li>
                <li><a href="pages/consulta.php">Consulta specialistul</a></li>
                <li ><a onclick="document.getElementById('id01').style.display='block'" href="#">Contact</a></li>
              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.nav-container-fluid -->
        </nav><!-- end navbar -->
        <?php if(isset($thankYou)){ ?>
            <div class="alert alert-success alert-dismissable container-fluid col-lg-12 col-md-12 col-sm-12 col-xs-12" role="alert" id="raspuns_consulta"><b><?php echo $thankYou; ?></b>
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            </div>
        <?php } ?>
        <div class="clearfix"></div>
        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav" id="sidebar" role="navigation">     
              <li><a href="pages/infarct_miocardic.php">Infarct miocardic<i class="sub_icon fa fa-heart" aria-hidden="true"></i></a></li>
              <li><a href="pages/hipertensiune.php">Hipertensiune<i class="sub_icon fa fa-line-chart" aria-hidden="true"></i></a></li>
              <li><a href="pages/litiaza_renala.php">Litiaza renala<i class="sub_icon fa fa-wheelchair" aria-hidden="true"></i></a></li>
              <li><a href="pages/noduli_tiroidieni.php">Noduli tiroidieni<i class="sub_icon fa fa-stethoscope" aria-hidden="true"></i></a></li>
              <li><a href="pages/diabet_tip_II.php">Diabet tip II<i class="sub_icon fa fa-plus-square" aria-hidden="true"></i></a></li>
              <li><a href="pages/cancer_colorectal.php">Cancer colorectal<i class="sub_icon fa fa-exclamation-circle" aria-hidden="true"></i></a></li>
              <li><a href="pages/cancer_mamar.php">Cancer mamar<i class="sub_icon fa fa-female" aria-hidden="true"></i></a></li>
              <li><a href="pages/chist_cerebral.php">Chist cerebral<i class="sub_icon fa fa-universal-access" aria-hidden="true"></i></a></li>
              <li><a href="pages/diabet_cu_complicatii.php">Diabet cu complicatii<i class="sub_icon fa fa-wheelchair" aria-hidden="true"></i></a></li>
            </ul>
        </div><!-- End Sidebar -->
        <div class="clearfix"></div>
        <!-- Open Contact Modal -->
        <div id="id01" class="modal">
        <!-- Modal Content -->
        <form class="modal-content animate" action="#" method="POST" id="contact" role="form" data-toggle="validator">
            <div class="img_container col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <button type="button" class="close" onclick="document.getElementById('id01').style.display='none'" data-dismiss="modal">&times;</button>
            <h4>Contact</h4>
              <img src="img/logo1-a.png" alt="Tratament naturist" class="contact_logo">
            </div>
            <div class="container-fluid col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="form-group">
                <label><b>Nume</b></label>
                <input type="text" placeholder="Numele tau" name="name" id="name" class="form-control" required>
                <div class="help-block with-errors"></div>
              </div>
              <div class="form-group">
                <label><b>E-mail</b></label>
                <input type="email" placeholder="Adresa e-mail" name="email" id="email" class="form-control" required>
                <div class="help-block with-errors"></div>
              </div>
              <div class="form-group">
                <label><b>Telefon</b></label>
                <input type="text" placeholder="Numar de telefon" name="telefon" id="telefon" class="form-control" required>
                <div class="help-block with-errors"></div>
              </div>
              <div class="form-group">
                <label><b>Subiect</b></label>
                <input type="text" placeholder="Subiectul mesajului" name="subiect" id="subiect" class="form-control" required>
                <div class="help-block with-errors"></div>
              </div>
            </div>
            <div class="container-fluid col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="form-group">
                <label><b>Mesaj</b></label>
                <textarea class="form-control" rows="11" name="mesaj" id="mesaj" placeholder="Mesajul tau" required></textarea>
                <div class="help-block with-errors"></div>
              </div>
              <div class="form-group">
                <button type="submit" class="trimite_btn btn btn-success gradient pull-right" name="trimite" id="trimite" value="trimite">Trimite</button>
                <button type="button" class="form_btn btn btn-danger gradient" onclick="document.getElementById('id01').style.display='none'">Cancel</button>
                <button type="reset" value="reset" class="form_btn btn btn-warning gradient">Reset</button>
              </div>
            </div>
        </form>
        </div><!-- end Contact modal -->
        <div class="clearfix"></div>
        <div class="bg-overlay"><!-- start bg-overlay -->
            <div class="overlay-content introduction">
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
        <div class="spacing-1"></div>
        <div class="container-fluid">
        <div id="intro" class="col-md-offset-3 col-md-8 text-center">
            <h3 class="b-title">Tratament naturist</h3>
            <br>
            <p class="g-txt-par">Tratamentele naturiste si remediile naturale au fost folosite de omenire inca din cele mai vechi timpuri in ameliorarea diferitelor afectiuni. Acest site prezinta <a href="pages/cazuistica.php" id="text_links">studii de caz</a> cu privire la diferite boli si tratamentele naturiste recomandate de catre cei mai buni medici specialisti. Sunt descrise pe larg cazurile pacientilor care au apelat la ajutorul tratamentelor naturiste in ameliorarea unor boli perecum cancer, accident vascular cerebral, diabet, afectiuni ale sistemului renal, dereglari ale sistemului endocrin etc. Fiecare caz in parte este prezentat de catre medicul specialist care s-a ocupat de pacientul respectiv, cuprinzand date relevante referitoare la stadiul in care pacientul s-a prezentat la medicul de medicina naturista, fiind oferite informatii cu privire la rezultatele analizelor de laborator efectuate pana la momentul respectiv. Cu acordul pacientilor sunt prezentate in detaliu rezultatele analizelor medicale de laborator efectuate inainte, in timpul si dupa efectuarea curelor cu tratamentele naturiste recomandate.</p>
            <p class="g-txt-par">Aici veti gasi informatii detaliate referitoare la <a href="pages/consulta.php" id="text_links">recomandarile specialistilor</a> nostri de medicina naturista in ceea ce priveste produsele naturiste sau suplimentele alimentare recomandate ca adjuvant in tratarea diferitelor afectiuni. Aceste recomandari au drept suport folosirea celor mai eficiente tratamente naturiste cunoscute pana in prezent. Medicii nostri specialisti apeleaza la cele mai efieciente produse naturiste existente pe piata, recunoscute si avizate de organsimele de certificare din domeniul sanatatii.</p>
            <p class="g-txt-par">Pentru ameliorarea efectelor bolilor cu care se confrunta omul in zilele noastre este importanta cunoasterea cauzelor declansatoare ale dezechilibrelor sanatatii. Aici veti gasi multiple <a href="pages/cazuistica.php" id="text_links">sfaturi</a> cu privire la imbunatatirea stilului de viata, al regimului alimentar care trebuie respectat atat in cazul diferitelor afectiuni, cat si pentru mentinerea si recapatarea starii de sanatate a organismului nostru.</p>
        </div>
        <div class="clearfix"></div>
        <div class="spacing-1"></div>
        <div class="grey_bg">
            <div id="what_we_do" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="sec-header col-md-offset-2 col-md-8 text-center">
                    <h3 class="b-title">Ce veti afla</h3>
                    <h4 class="g-txt">Cu ce va putem ajuta</h4>
                </div>
                <div class="row boxes col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 animation-element slide-top" id="box_1">
                    <a href="#">
                        <div class="box_image"><span class="glyphicon glyphicon-star"></span></div>
                        <div class="box_title">Descoperiri de ultima ora</div>
                        <div class="box_content">Cele mai recente descoperiri in domeniul tratamentelor naturiste si cele mai eficiente produse naturiste pot fi regasite aici.</div>
                        <div class="box_link pull-right"><a href="pages/cazuistica.php">Vezi mai mult <span class="glyphicon glyphicon-arrow-right"></span></a></div>
                    </a>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 animation-element slide-bottom" id="box_2">
                    <a href="#">
                        <div class="box_image"><span class="glyphicon glyphicon-apple"></span></div>
                        <div class="box_title">Sfaturi pentru sanatate</div>
                        <div class="box_content">Aici veti descoperi sfaturi utile pentru a echilibra si a mentine sanatatea dumneavoastra si a familiei dvs.</div>
                        <div class="box_link pull-right"><a href="pages/cazuistica.php">Vezi mai mult <span class="glyphicon glyphicon-arrow-right"></span></a></div>
                    </a>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 animation-element slide-top" id="box_3">
                    <a href="#">
                        <div class="box_image"><span class="glyphicon glyphicon-user"></span></div>
                        <div class="box_title">Contacteaza specialistul</div>
                        <div class="box_content">Specialistii nostri va stau la dispozitie cu sfaturi si recomandari. Le puteti solicita prin completarea formularului nostru.</div>
                        <div class="box_link pull-right"><a href="pages/consulta.php">Consulta specialistul <span class="glyphicon glyphicon-arrow-right"></span></a></div>
                    </a>
                    </div>
                </div><!-- end boxes -->
            </div>
        </div><!-- end grey_bg -->
        <div class="clearfix"></div>
        <?php include (__DIR__ .'/pages/footer.php'); ?>
    </div><!-- end main-wrapper -->
</body>
    <script src="js/default.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.9/validator.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.9/validator.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC_5vR2Hlo8OMgzGz9DFcd1wfRveo7MIt0&callback=myMap"></script>
</html>