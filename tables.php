<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - bootstrapp Admin Template</title>

    <!-- bootstrapp Core CSS -->
    <link href="css/bootstrapp.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

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
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="Dashboard.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="charts.php"><i class="fa fa-fw fa-bar-chart-o"></i> Statistieken</a>
                    </li>
                    <li>
                        <a href="tables.php"><i class="fa fa-fw fa-table"></i> Totale Resultaten</a>
                    </li>
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
                            Totale Resultaten
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="Dashboard.php">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-table"></i> Totale Resultaten
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    
                    <div class="col-lg-12">
                        <h1>Tabel met totale resultaten</h1>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>Uren gesport</th>
                                        <th>Uren rug</th>
                                        <th>Uren benen</th>
                                        <th>Uren armen</th>
                                        <th>Uren borst</th>
                                        <th>Uren buik</th>
                                        <th>Calorien verbrand</th>
                                        <th>Uren sauna</th>
                                        <th>Uren zonnebank</th>
                                        <th>Km gelopen</th>
                                        <th>Max gewicht</th>
                                        <th>Eigen gewicht</th>
                                        <th>Km gefietst</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th>1000</th>
                                        <th>100</th>
                                        <th>200</th>
                                        <th>200</th>
                                        <th>100</th>
                                        <th>200</th>
                                        <th>50000</th>
                                        <th>34</th>
                                        <th>20</th>
                                        <th>150</th>
                                        <th>130</th>
                                        <th>100</th>
                                        <th>150</th>
                                    </tr>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
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

</body>

</html>
