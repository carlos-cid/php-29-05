<!DOCTYPE html>
<html lang="en">
<?php
$title="El titulo";
$description="Miren, acá es donda la estoy modificando.";
$url="http://acalovoyadejardefinitivamente.cl";
$image="http://estaimageneslaqueveran.com";
$author="Nombre Apellido";
?>
<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title><?php echo $title;?></title>

<meta name="description" content="<?php echo $description;?>">
<meta name="image" content="<?php echo $image;?>">
<meta name="author" content="<?php echo $author;?>">
<!-- Schema.org for Google -->
<meta itemprop="name" content="<?php echo $title;?>">
<meta itemprop="description" content="<?php echo $description;?>">
<meta itemprop="image" content="<?php echo $image;?>">
<!-- Twitter -->
<meta name="twitter:card" content="summary">
<meta name="twitter:title" content="<?php echo $title;?>">
<meta name="twitter:description" content="<?php echo $description;?>">
<!-- Open Graph general (Facebook, Pinterest & Google+) -->
<meta name="og:title" content="<?php echo $title;?>">
<meta name="og:description" content="<?php echo $description;?>">
<meta name="og:image" content="<?php echo $image;?>">
<meta name="og:url" content="<?php echo $url;?>">
<meta name="og:site_name" content="<?php echo $title;?>">
<meta name="og:locale" content="es_CL">
<meta name="og:type" content="website">

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/clean-blog.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only"><?php echo $title></span>
                    Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="index.html"><?php echo $title></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                <li<?php if((basename($_SERVER['PHP_SELF']))=='index.php'){?> class="active" <?php };?>><a href="index.php">Artículos</a></li>
                <li<?php if((basename($_SERVER['PHP_SELF']))=='biblio.php'){?> class="active" <?php };?>><a href="biblio.php">Bibliografía</a></li>
                <li<?php if((basename($_SERVER['PHP_SELF']))=='viz.php'){?> class="active" <?php };?>><a href="viz.php">Visualizaciones</a></li>
                <li<?php if((basename($_SERVER['PHP_SELF']))=='refs.php'){?> class="active" <?php };?>><a href="refs.php">Antecedentes</a></li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('img/play.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1>La Evolución del Cine Chileno<br/>
      Y cómo refleja nuestra sociedad</h1>
                        <hr class="small">
                        <span class="subheading">Artículos de Interés</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="post-preview">
                    <a href="post1.html">
                        <h2 class="post-title">
                            Raúl Ruiz a través del Espejo: de la representación a la alegoría
                        </h2>
                        <h3 class="post-subtitle">
                            de los Ríos, Valeria. (2010). Raúl Ruiz a través del Espejo: de la representación a la alegoría. Aisthesis, (47), 115-127. <a href="https://dx.doi.org/10.4067/S0718-71812010000100008">En Línea</a>
                        </h3>
                    </a>
                    <p class="post-meta">Posted by <a href="#">carlos-cid</a> on April 17, 2017</p>
                </div>

                <div class="post-preview">
                    <a href="post2.html">
                        <h2 class="post-title">
                            Nuevas Tendencias del Cine Chileno tras la llegada del Cine Digital
                        </h2>
                        <h3 class="post-subtitle">
                            Larraín Pulido, Carolina. (2010). Nuevas Tendencias del Cine Chileno tras la llegada del Cine Digital. Aisthesis, (47), 156-171. <a href="https://dx.doi.org/10.4067/S0718-71812010000100011">En Línea</a>
                        </h3>
                    </a>
                    <p class="post-meta">Posted by <a href="#">carlos-cid</a> on April 17, 2017</p>
                </div>

                <div class="post-preview">
                    <a href="post3.html">
                        <h2 class="post-title">
                            Hacia una política en tránsito. Ficción en el cine chileno (2008-2010)
                        </h2>
                        <h3 class="post-subtitle">
                            Urrutia, Carolina. (2010). Hacia una política en tránsito: Ficción en el cine chileno (2008-2010). Aisthesis, (47), 33-44. <a href="https://dx.doi.org/10.4067/S0718-71812010000100003">En Línea</a>
                        </h3>
                    </a>
                    <p class="post-meta">Posted by <a href="#">carlos-cid</a> on April 17, 2017</p>
                </div>
                <hr>

                <!-- Pager -->
                <ul class="pager">
                    <li class="next">
                        <a href="#">Older Posts &rarr;</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <hr>

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/clean-blog.min.js"></script>

</body>

</html>
