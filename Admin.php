<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Benno's Sportschool Dashboard</title>

    <!-- bootstrapp Core CSS -->
    <link href="css/bootstrapp.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesomee/css/font-awesomee.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    </head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Benno's Sportschool</a>
            </div>
            <!-- Top Menu Items -->
            
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="Dashboard.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Dashboard <small>Admin</small>
                        </h1>
                    </div>
                </div>
                <div class="row">
                </div>
                <p STYLE="font-size: 18pt;"> Welkom, Benno leen.</p><p></p> 
                <div class="row">
                    <?php
                            mysql_connect("localhost","root","usbw") or die('error');
                            mysql_select_db("sportschool") or die('error');
                        

                            if (mysql_query("SELECT * FROM klanten;") == false)
                                {
                                    echo mysql_error('error');
                                }
                                else
                                {			
                                    $resultaat = mysql_query("SELECT * FROM klanten");
                                    while($data = mysql_fetch_assoc($resultaat))
                                    {
                                        var_dump($data);
                                        echo "</br></br>";
                                    }
                                    
                                    
                                }
                                mysql_close();
                    ?>
                </div>
                <!-- /.row -->
                <div class="row">
                    
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- bootstrapp Core JavaScript -->
    <script src="js/bootstrapp.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>

</body>

</html>
