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
      <a class="navbar-brand" href="../index.php"><img src="../img/logo1-a.png" id="logo"></img></a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-navbar-collapse-1">
      <ul class="nav navbar-nav col-lg-8 col-lg-offset-4">
        <li><a href="../index.php">Acasa</a></li>
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Cazuistica <span class="caret"></span></a>
            <ul class="dropdown-menu">
                <li><a href="cazuistica.php">Prezentare generala</a></li>
                <li><a href="infarct_miocardic.php"><i class="fa fa-heart" aria-hidden="true"></i>&nbsp; Infarct miocardic</a></li>
                <li><a href="hipertensiune.php"><i class="fa fa-line-chart" aria-hidden="true"></i>&nbsp; Hipertensiune</a></li>
                <li><a href="litiaza_renala.php"><i class="fa fa-filter" aria-hidden="true"></i>&nbsp; Litiaza renala</a></li>
                <li><a href="noduli_tiroidieni.php"><i class="fa fa-stethoscope" aria-hidden="true"></i>&nbsp; Noduli tiroidieni</a></li>
                <li><a href="diabet_tip_II.php"><i class="fa fa-plus-square" aria-hidden="true">&nbsp; Diabet tip II</i></a></li>
                <li><a href="cancer_colorectal.php"><i class="fa fa-exclamation-circle" aria-hidden="true"></i>&nbsp; Cancer colorectal</a></li>
                <li><a href="cancer_mamar.php"><i class="fa fa-female" aria-hidden="true"></i>&nbsp; Cancer mamar</a></li>
                <li><a href="chist_cerebral.php"><i class="fa fa-universal-access" aria-hidden="true"></i>&nbsp; Chist cerebral</a></li>
                <li><a href="diabet_cu_complicatii.php"><i class="fa fa-wheelchair" aria-hidden="true"></i>&nbsp; Diabet cu complicatii</a></li>
            </ul>
        </li>
        <li><a href="consulta.php">Consulta specialistul</a></li>
        <li><a onclick="document.getElementById('id01').style.display='block'" href="#id01">Contact</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.nav-container-fluid -->
</nav><!-- end navbar -->
<div class="clearfix"></div>
<!-- Sidebar -->
<div id="sidebar-wrapper">
    <ul class="sidebar-nav" id="sidebar" role="navigation">     
      <li><a href="infarct_miocardic.php">Infarct miocardic<i class="sub_icon fa fa-heart" aria-hidden="true" data-toggle="tooltip" data-placement="right" title="Infarct miocardic"></i></a></li>
      <li><a href="hipertensiune.php">Hipertensiune<i class="sub_icon fa fa-line-chart" aria-hidden="true" data-toggle="tooltip" data-placement="right" title="Hipertensiune"></i></a></li>
      <li><a href="litiaza_renala.php">Litiaza renala<i class="sub_icon fa fa-filter" aria-hidden="true" data-toggle="tooltip" data-placement="right" title="Litiaza renala"></i></a></li>
      <li><a href="noduli_tiroidieni.php">Noduli tiroidieni<i class="sub_icon fa fa-stethoscope" aria-hidden="true" data-toggle="tooltip" data-placement="right" title="Noduli tiroidieni"></i></a></li>
      <li><a href="diabet_tip_II.php">Diabet tip II<i class="sub_icon fa fa-plus-square" aria-hidden="true" data-toggle="tooltip" data-placement="right" title="Diabet tip II"></i></a></li>
      <li><a href="cancer_colorectal.php">Cancer colorectal<i class="sub_icon fa fa-exclamation-circle" aria-hidden="true" data-toggle="tooltip" data-placement="right" title="Cancer colorectal"></i></a></li>
      <li><a href="cancer_mamar.php">Cancer mamar<i class="sub_icon fa fa-female" aria-hidden="true" data-toggle="tooltip" data-placement="right" title="Cancer mamar"></i></a></li>
      <li><a href="chist_cerebral.php">Chist cerebral<i class="sub_icon fa fa-universal-access" aria-hidden="true" data-toggle="tooltip" data-placement="right" title="Chist cerebral"></i></a></li>
      <li><a href="diabet_cu_complicatii.php">Diabet cu complicatii<i class="sub_icon fa fa-wheelchair" aria-hidden="true" data-toggle="tooltip" data-placement="right" title="Diabet cu complicatii"></i></a></li>
    </ul>
</div><!-- End Sidebar -->
<div class="clearfix"></div>
<?php if(isset($thankYou)){ ?>
  <div class="alert alert-success alert-dismissable container-fluid col-lg-12 col-md-12 col-sm-12 col-xs-12" role="alert" id="raspuns_consulta"><b><?php echo $thankYou; ?></b>
      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  </div>
<?php } ?>
<!-- Open Contact Modal -->
<div id="id01" class="modal">
<!-- Modal Content -->
<form class="modal-content animate" action="#" method="POST" id="contact" role="form" data-toggle="validator">
    <div class="img_container col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <button type="button" class="close" onclick="document.getElementById('id01').style.display='none'" data-dismiss="modal">&times;</button>
    <h4>Contact</h4>
      <img src="../img/logo1-a.png" alt="Tratament naturist" class="contact_logo">
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