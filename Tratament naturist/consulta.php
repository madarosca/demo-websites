<?php
$to_email = "mada.rosca@yahoo.com";

if(isset($_POST['trimite']))
{
$to_email = "mada.rosca@yahoo.com";
$name = $_POST['name'];
$email = $_POST['email'];
$telefon = $_POST['telefon'];
$afectiuni = $_POST['afectiuni'];
$medicamente = $_POST['medicamente'];
$observatii = $_POST['observatii'];

$email_from = $email;
$email_subject = "Formular consulta specialistul";
$email_body = "Ai primit un mesaj nou de la $name.\n". "Email: $email\n". "Telefon: $telefon\n". "Afectiuni: $afectiuni\n". "Medicamente: $medicamente\n". "Observatii: $observatii\n";

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
        <meta name="keywords" content="">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800" rel="stylesheet">
        <!-- Styles -->
        <link href="assets/style.css" type="text/css" rel="stylesheet">
        <link href="assets/buttons.css" type="text/css" rel="stylesheet">
        <!-- Bootstrap -->
        <link href="assets/bootstrap/css/bootstrap.min.css" type="text/css" rel="stylesheet">
        <!-- Font awesome -->
        <link href="assets/font-awesome/css/font-awesome.min.css" type="text/css" rel="stylesheet">

    </head>
<body>
    <div class="main-wrapper">
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
              <a class="navbar-brand" href="index.html"><img src="img/logo1-a.png" id="logo"></img></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-navbar-collapse-1">
              <ul class="nav navbar-nav navbar-right">
                <li><a href="index.html">Acasa</a></li>
                <li><a href="cazuistica.html">Cazuistica</a></li>
                <li><a href="consulta.php">Consulta specialistul</a></li>
                <li><a onclick="document.getElementById('id01').style.display='block'" href="#">Contact</a></li>
              </ul>
            </div><!-- /.navbar-collapse -->
            <!-- Change color theme -->
            <div id="change_theme" class="col-lg-4 col-md-4 col-sm-3 col-xs-12">
                <a href="#">Change color theme <span id="change_icon" class="glyphicon glyphicon-arrow-down"></span></a>
                <div id="color_themes">
                    <div id="style_green"><a href="#">Green</a></div>
                    <div id="style_blue"><a href="#">Blue</a></div>
                    <div id="style_red"><a href="#">Red</a></div>
                </div>
            </div>
            <!-- End change color theme -->
          </div><!-- /.nav-container-fluid -->
        </nav><!-- end navbar -->
        <?php if(isset($thankYou)){ ?><div class="alert alert-success alert-dismissable container-fluid col-lg-12 col-md-12 col-sm-12 col-xs-12" role="alert" id="raspuns_consulta"><b><?php echo $thankYou; ?></b>
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            </div><?php } ?>
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
                <input type="text" placeholder="Numele tau" name="username" id="username" class="form-control" required>
                <div class="help-block with-errors"></div>
              </div>
              <div class="form-group">
                <label><b>E-mail</b></label>
                <input type="email" placeholder="Adresa e-mail" name="email" id="email" class="form-control" required>
                <div class="help-block with-errors"></div>
              </div>
              <div class="form-group">
                <label><b>Telefon</b></label>
                <input type="password" placeholder="Numar de telefon" name="password" id="password" class="form-control" required>
                <div class="help-block with-errors"></div>
              </div>
              <div class="form-group">
                <label><b>Subiect</b></label>
                <input type="password" placeholder="Subiectul mesajului" name="password" id="password" class="form-control" required>
                <div class="help-block with-errors"></div>
              </div>
            </div>
            <div class="container-fluid col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="form-group">
                <label><b>Mesaj</b></label>
                <textarea class="form-control" rows="11" id="mesaj" placeholder="Mesajul tau" required></textarea>
                <div class="help-block with-errors"></div>
              </div>
              <div class="form-group">
                <button type="submit" class="trimite_btn btn btn-success gradient pull-right" name="submit" id="trimite" value="trimite">Trimite</button>
                <button type="button" class="form_btn btn btn-danger gradient" onclick="document.getElementById('id01').style.display='none'">Cancel</button>
                <button type="reset" value="reset" class="form_btn btn btn-warning gradient">Reset</button>
              </div>
            </div>
        </form>
        </div><!-- end Contact modal -->
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
        <br>
        <div id="intro2" class="container-fluid">
            <h3 class="b-title text-center">Consulta specialistul</h3>
        </div>
        <div class="clearfix"></div>
        <div class="spacing-1"></div>
        <div id="banner_section2" class="col-lg-12 text-center">
            <div class="section_overlay2 container-fluid">
                <div class="big_icon2 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <p class="sec_text2">Va rugam sa completati formularul de mai jos si in cel mai scurt timp posibil veti fi contactat de unul din consultantii nostri care va va oferi solutia optima de tratament naturist personalizat pentru cazul dumneavoastra.</p>
                    <p class="sec_text2">Va multumim!</p>
                </div>
            </div>
        </div><!-- end banner_section2 -->
        <div class="clearfix"></div>
        <!-- Formular consulta specialistul -->
        <div class="consulta_specialistul container-fluid">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" name="consulta_specialistul" id="consulta_specialistul" role="form" data-toggle="validator" class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
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
        <div id="banner_section" class="col-lg-12 text-center">
            <div class="section_overlay">
                <div class="big_icon col-lg-4 col-md-6 col-sm-6 col-xs-12"><a href="www.drrosca.flavonoide.ro" target="_blank"><img id="icon3" src="img/icon3.png"><p class="sec_text">www.drrosca.flavonoide.ro</p></a></div>
                <div class="big_icon col-lg-4 col-md-6 col-sm-6 col-xs-12"><a href="www.flavonoide.ro" target="_blank"><img id="icon4" src="img/icon4.png"><p class="sec_text">www.flavonoide.ro</p></a></div>
                <div class="big_icon col-lg-4 col-md-12 col-sm-12 col-xs-12"><a href="www.vitacrystal.flavonoide.ro" target="_blank"><img id="icon2" src="img/icon2.png"><p class="sec_text">www.vitacrystal.flavonoide.ro</p></a></div>
            </div>
        </div><!-- end banner_section -->
        <div class="clearfix"></div>
        <div class="footer col-lg-12">
            <div class="container-fluid" id="container-footer">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 contact_us">
                <h5 class="footer_header"><i class="fa fa-address-card"></i>  Contact</h5>
                    <ul class="contact_list col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <li><i class="fa fa-phone-square"></i> <span>Telefon:</span>
                            <li>Vodafone: 0733.368.833</li>
                            <li>Orange: 0758.970.397</li>
                            <li>Cosmote: 0768.246.224</li>
                            <li>RDS: 0770.329.208</li>
                        </li>
                    </ul>
                    <ul class="contact_list col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <li><i class="fa fa-map"></i> <span>Adresa:</span> Campina</li>
                        <li><i class="fa fa-envelope"></i> <span>E-mail:</span> <a href="mailto:bionismedical@yahoo.com" class="a_social footer">bionismedical@yahoo.com</a></li>
                        <li><i class="fa fa-clock-o"></i> <span>Cand ne puteti contacta:</span>
                            <li>Luni-Sambata: 9:00 - 19:00 </li>
                            <li>Duminica: 10:00 am - 1:00 pm</li>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 social_media">
                    <h5 class="footer_header"><i class="fa fa-users"></i>  Site-uri partenere</h5>
                    <div class="social_links col-lg-12">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3" data-toggle="tooltip" data-placement="bottom" title="Dr. Rosca Dorian"><a href="http://drrosca.flavonoide.ro/" class="a_social" target="_blank"><i class="fa fa-user-md"></i><br></a></div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3" data-toggle="tooltip" data-placement="bottom" title="Flavonoide"><a href="http://www.flavonoide.ro/" class="a_social" target="_blank"><i class="fa fa-globe"></i></a></div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3" data-toggle="tooltip" data-placement="bottom" title="Vita Crystal"><a href="http://vitacrystal.flavonoide.ro/" class="a_social" target="_blank"><i class="fa fa-heartbeat"></i></a></div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3" data-toggle="tooltip" data-placement="bottom" title="Facebook"><a href="#" class="a_social" target="_blank"><i class="fa fa-facebook-square"></i></a></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 copyright container-fluid">
                <small>Copyright © www.tratamentnaturist.com.ro</small>
            </div>
        </div>
        <div id="scroll_to_top" data-toggle="tooltip" data-placement="left" title="Sus"><a href="#top"><i class="fa fa-angle-double-up"></i></a></div><!-- scroll to top button -->
    </div><!-- end main-wrapper -->
</body>
<!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="js/default.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.9/validator.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.9/validator.min.js"></script>
</html>