<!DOCTYPE html>
<html lang="en">

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

    <!-- Custom onts -->
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
                <a class="navbar-brand page-scroll" href="index.php">
                    <i class="fa fa-home"></i>  <span class="light">terug naar</span> Home
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
                        <a class="page-scroll" href="#about">Tarieven</a>
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
                        <h1 class="brand-heading">Registreren</h1>
                        <p class="intro-text">Laat uw goede voornemens niet wachten.</p>
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
                <h2>Kom nu sporten bij benno en krijg je eerste 6 maanden met 50%       korting</h2>
                <p>1 jaar €24,50 per maand</p>
                <p>2 jaar €19,50 per maand</p>
                
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
                    <h2 >inloggen gebruikers</h2>
                    <p>Log hier in voor uw resultaten en sportgegevens</p>
					<?php
						if ((isset($_SESSION['ingelogd'])) && ($_SESSION['ingelogd'] == true))
						{
							echo $_SESSION['klantcode']." is ingelogd";
						}
						else
						{
							echo "Nog niet ingelogd.";
						}
					?>
                    
                </div>
            </div>
    </section>
    
    <?php
        if (isset($_POST['Inloggen']))
        {
            mysql_connect('localhost','root','usbw');
            mysql_select_db('sportschool')
                
				$Email = $_POST['email'];
				$Wachtwoord = $_POST['wachtwoord']
					
					if (mysql_query("SELECT * FROM klanten;") == false)
					{
						echo mysql_error();
					}
					else
					{			
						$resultaat = mysql_query(SELECT 'Wachtwoord' FROM 'klanten' WHERE 'Email' = $Email);
						$data = mysql_fetch_assoc($resultaat);		
						$Wachtwoord = $data["wachtwoord"];
						echo $Wachtwoord;

							if ($wachtwoord==$Wachtwoord)
							{
								echo "U bent ingelogd";
								session_start();
								$_SESSION['ingelogd'] = true;
								$_SESSION['Email'] = 'Email';
								
							}
							else
							{
								echo "Er is iets fout gegaan tijdens met het inloggen.";
							}
							mysql_close();
			}  
        }
    ?>
    
    <section>
        <div class='login'>
            <form method="post" action="">
                <ul>
                    <label for='usermail'>email &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                    <input type='text' name='email' placeholder="jouwnaam@mail.nl" required>
                </ul>
                <ul>
                    <label for="password">Wachtwoord</label>
                    <input type='password' name="password" placeholder="wachtwoord" required>
                </ul>
                <ul>
                    <div class='login-btn btn btn-default btn-lg'>
                        <input type="submit" name="inloggen" value="Inloggen" />
                    </div>
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

    <!-- Custom Theme JavaScript -->
    <script src="js/grayscale.js"></script>

</body>

</html>
