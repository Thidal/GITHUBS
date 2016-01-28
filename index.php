<!DOCTYPE html>
<html lang="en">
    <?php
    session_start();
    ?>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Benno's Sportschool</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/grayscale.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">
                    <i class="fa fa-play-circle"></i>  <span class="light">Registreer NU</span>
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">Over ons</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#download">Inloggen</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Intro Header -->
    <header class="intro">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-offset-2">
                        <h1 class="brand-heading">Benno's Sportschool</h1>
                        <p class="intro-text">Laat uw goede voornemens niet wachten.</p>
                       <p> Registreer nu! </p>
                        <a href="Registreren.php" class="btn btn-circle page-scroll">
                            <i> Registreer </i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- About Section -->
    <section id="about" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>Over ons</h2>
                <p>Benno Leen opende zijn eerste sportschool in 1990 in Amersfoort. Deze sportschool was een enorm succes en al snel opende hij 4 nieuwe sportscholen in: Utrecht, Amsterdam, Den Haag en Lelystad.</p>
                <p>Nu 25 jaar later, zijn alle sportscholen na een grote verbouwing vernieuwd en gemoderniseerd door middel van onder andere deze website en vele andere technische snufjes.</p>
            </div>
        </div>
    </section>

    <!-- Download Section -->
    <section id="download" class="content-section text-center">
        <div class="download-section">
        </div>
        <p></p>
            <div class="container">
                <div class="col-lg-8 col-lg-offset-2">
                    <h2>inloggen gebruikers</h2>
                    <p>Log hier in voor uw resultaten en sportgegevens</p>
                </div>
            </div>
        
        <p></p>
   
    </section>
     <section>
        <div class='login'>
    <?php
		if (isset($_POST['submit']))
		{			
			mysql_connect("localhost","root","usbw") or die('error');
			mysql_select_db("sportschool") or die('error');
		
            $link_adres = 'Dashboard.php';
			$k_email = $_POST['email'];
			$wachtwoord = $_POST['wachtwoord'];
			echo $k_email;
			
			if (mysql_query("SELECT * FROM klanten;") == false)
			{
				echo mysql_error();
			}
			else
			{			
				$resultaat = mysql_query("SELECT wachtwoord FROM klanten WHERE email='".$k_email."';");
				$data = mysql_fetch_assoc($resultaat);
				echo "<br />";
				echo "<br />";			
				$k_wachtwoord = $data["wachtwoord"];
                
				if ($wachtwoord==$k_wachtwoord)
				{
					echo "U bent ingelogd";
                    echo '<br />';
                    echo '<br />';
                    echo "<a href='".$link_adres."'>Klik hier voor uw Dashboard</a>";
                    echo '<br />';
					$_SESSION['ingelogd'] = true;
					$_SESSION['klantemail'] = $k_email;
				}
				else
				{
					echo "Er is iets fout gegaan tijdens met het inloggen.";
				}
				echo "<br />";
			}
		}
	?>
            <form method="post" action="">
                <ul>
                    <label for='usermail'>email &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                    <input type='text' name='email' placeholder="jouwnaam@mail.nl" required>
                </ul>
                <ul>
                    <label for="password">Wachtwoord</label>
                    <input type="password" name="wachtwoord" placeholder="wachtwoord" required>
                </ul>
                <ul>
                    <div class='login-btn btn btn-default btn-lg'><input name="submit" type="submit" value="Inloggen"></div>
                </ul>
            </form>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>contact</h2>
                <p>Heeft uw vragen of wilt u feedback geven, neem dan contact op via de volgende opties:</p>
                <p><a href="mailto:bennoleensportschool@gmail.com">bennoleensportschool@gmail.com</a>
                </p>
                <ul class="list-inline banner-social-buttons">
                    <li>
                        <a href="https://twitter.com/sportbenno" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Twitter</span></a>
                    </li>
                    <li>
                        <a href="https://facebook.com" class="btn btn-default btn-lg"><i class="fa fa-facebook fa-fw"></i> <span class="network-name">Facebook</span></a>
                    </li>
                    <li>
                        <a href="https://plus.google.com/u/0/111801165186488252689/posts?hl=nl" class="btn btn-default btn-lg"><i class="fa fa-google-plus fa-fw"></i> <span class="network-name">Google+</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container text-center">
            <p>Copyright &copy; Benno Leen 2016</p>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.min.js"></script>

    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRngKslUGJTlibkQ3FkfTxj3Xss1UlZDA&sensor=false"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/grayscale.js"></script>

</body>

</html>
