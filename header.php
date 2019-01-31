<!DOCTYPE html>

<?php
$path_frontend_folder = "http://104.248.163.205/";

$path_index_php = $path_frontend_folder . "index.php";
$path_register_php = $path_frontend_folder . "register/register.php";
$path_about_php = $path_frontend_folder . "about/about.php";
$path_contact_us_php = $path_frontend_folder . "about/contact-us.php";
$path_terms_php = $path_frontend_folder . "about/terms.php";

$path_main_css = "http://104.248.163.205/static/css/main.css";
$path_main_js = "http://104.248.163.205/static/js/main.js";
?>

<html>
    <head>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600' rel='stylesheet'>
        <script src="http://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href=<?php echo $path_main_css;?>>

        <title>EasyDRPS</title>

        <!-- icon -->
        <link rel="icon" type="image/png" href="http://www.tradedin.co.uk/static/img/tradedin_logo.png">

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script type="text/javascript" src=<?php echo $path_main_js;?>></script>
    </head>

	<body class="bg">
    <nav class="navbar navbar-inverse" style = "background-color: #2c3e50; border: 0px;">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href=<?php echo $path_index_php;?>>EasyDRPS</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li id="home"><a href=<?php echo $path_index_php;?>>Search</a></li>
            <li class="dropdown" id="about">
              <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" href="#">About <span class="caret"></span></a>
              <ul class="dropdown-menu" style="background-color:#fff;">
                <li><a href=<?php echo $path_about_php;?>>About Us</span></a></li>
                <li><a href=<?php echo $path_terms_php;?>>Terms &amp; Conditions</a></li>
              </ul>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
