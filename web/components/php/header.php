<!DOCTYPE html>
<html>
<head>
    <title>Whatsonplate</title>

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
    <link rel="stylesheet" href="./css/animate.css">
    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="./css/main.css">
    <!--STYLES END-->
</head>

<body>
<div id="page">
    <div class="site-navbar navbar navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Logo  -->
                <a class="navbar-brand" href="index.html"><img src="images/logo.png" alt="Logo"></a>
            </div>
            <!-- Navigation -->
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="#main">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#portfolio">Mobile Apps</a></li>
                    <li><a href="#team">Team</a></li>
                    <li><a href="#blog">Login | resgister</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </div>
            <!-- .nav-collapse -->
        </div>
    </div>
