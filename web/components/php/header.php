<!DOCTYPE html>
<html ng-app="CWUSTARTUP">
<head>
    <title>CWUSTARTUP</title>

    <!-- Viewport mobile tag for sensible mobile support -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!--  
        Stylesheets and Preprocessors
        ==============================
        You can always bring in CSS files manually with `link` tags, or asynchronously
        on the client using a solution like AMD (RequireJS).  Or, if you like, you can
        take advantage of Sails' boilerplate asset management.

        By default, stylesheets from your `assets/linker/styles` folder are included
        here automatically.  Both CSS (.css) and LESS (.less) are supported.
        In production, your styles will be minified and concatenated into a single file.
        
        To customize any part of the built-in behavior, just edit your Gruntfile.
        For example, here are a few things you could do:
            
            + Change the order of your CSS files
            + Import stylesheets from other directories
            + Use a different or additional preprocessor, like SASS, SCSS or Stylus
    -->
    <!--STYLES-->
    <!-- Twitter Bootstrap -->
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.4.0-beta.6/angular.min.js"></script>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <!-- Material Design for Bootstrap -->
    <link href="css/material.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/main.css">
    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
    <script src="js/helper.js"></script>
    <script src="js/cwuMember.js"></script>

    <!--STYLES END-->
</head>

<body>
<div id="page">
<!--    <div class="site-navbar navbar-fixed-top" role="navigation">-->
<!--        <div class="container">-->
<!--            <div class="navbar-header page scroll">-->
<!--                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">-->
<!--                    <span class="sr-only">Toggle navigation</span>-->
<!--                    <span class="icon-bar"></span>-->
<!--                    <span class="icon-bar"></span>-->
<!--                    <span class="icon-bar"></span>-->
<!--                </button>-->
<!--                <!-- Logo  -->-->
<!--                <a class="navbar-brand page-scrol" href="index.html"><h3><strong>CWU Startup</strong></h3></a>-->
<!--            </div>-->
<!--            <!-- Navigation -->-->
<!--            <div class="navbar-collapse collapse">-->
<!--                <ul class="nav navbar-nav navbar-right">-->
<!--                    <li class="active"><a href="#main">Home</a></li>-->
<!--                    <li><a href="#about">About</a></li>-->
<!--                    <li><a href="#services">Events</a></li>-->
<!--                    <li><a href="#team">Team</a></li>-->
<!--                    <li><a href="#contact">Contact</a></li>-->
<!--                </ul>-->
<!--            </div>-->
<!--            <!-- .nav-collapse -->-->
<!--        </div>-->
<!--    </div>-->
    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">Central Washington Startup Club</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#service">Events</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#team">Team</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

