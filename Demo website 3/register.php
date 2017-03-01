<!DOCTYPE html>
<html lang="en-US">
  <head>
      <title>Register account</title>
      <link rel="shortcut icon" href="favicon.ico">
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
      <meta name="apple-mobile-web-app-capable" content="yes">
      <meta name="description" content="Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit">
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800" rel="stylesheet">
      <link href="css/style.css" type="text/css" rel="stylesheet">
      <link href="css/buttons.css" type="text/css" rel="stylesheet">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js">></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
<body class="login_register">
<!-- navbar -->
<nav class="navbar navbar-default" role="navigation">
  <div class="nav-container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.html"><img src="img/logo.gif" id="logo"></img></a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Menu 1</a></li>
        <li><a href="#">Menu 2</a></li>
        <li><a href="#">Menu 3</a></li>
        <li><a href="login.php">Login</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.nav-container-fluid -->
</nav>
<!-- end navbar -->
<div class="main-wrapper col-lg-10 col-lg-offset-1 col-md-12 col-sm-12 col-xs-12">
  <form action="/action_page.php">
    <div class="img_container col-lg-10 col-lg-offset-1 col-md-12 col-sm-12 col-xs-12">
      <img src="img/img_avatar2.png" alt="Avatar" class="avatar">
    </div>
    <div class="container col-lg-8 col-lg-offset-2">
      <div class="form-group">
        <label><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="user_name" class="form-control" required>
      </div>
      <div class="form-group">
        <label><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="pwd" class="form-control" required>
      </div>
      <div class="form-group">
        <button type="submit" class="login_btn btn btn-success gradient pull-right">Submit</button>
        <button type="button" class="cancel_btn btn btn-danger gradient">Cancel</button>
      </div>
    </div>
  </form>
</div><!-- end main-wrapper -->
</body>
</html>