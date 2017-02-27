<?php
error_reporting(E_ALL & ~E_NOTICE);
session_start();
?>

<!DOCTYPE>


<html>



<head>

    <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.css" media="screen,projection"/>
    <link rel="stylesheet" href="view/css/style.css"/>
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Mono"> <!-- font-family: "Roboto Mono", monospace -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <meta charset="utf-8"/>
    <meta name="description" content="Website for transfer files to email"/>
    <meta name="viewport" content="width=device-width, initial-scale=1" />





</head>



<body >


    <header>

        <div class="navbar-fixed">

            <nav class="cyan lighten-4">

                <div class="nav-wrapper">

                    <a class="brand-logo center grey-text text-darken-2">WeTransfer Like</a>
                    
                    <!--<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a> -->

                    <ul id="nav-mobile" class="left hide-on-med-and-down">

                        <li><img id="logo" src="view/img/Logo.png"/></li>

                    </ul>
                    
                    <ul id="nav-mobile" class="right hide-on-med-and-down">
                    
                         <li>
                                                
                            <a style="display: inline-block; font-size: 130%" href="#" data-activates="slide-out" class="button-collapse"><span class="grey-text text-darken-2" style="vertical-align: super">Accéder à votre boite mail </span><i style="display: inline-block" class="material-icons grey-text text-darken-2">menu</i></a>
                            
                             
                        </li>
                    
                    </ul>

                </div>

            </nav>

        </div>

    </header>

    <main ondrop="drop(event)" ondragover="allowDrop(event)">
        
        <a style="font-size: 130%; margin-top: -4em" id="bloc" href="#" data-activates="slide-out2" class="button-collapse center-align"><span class="grey-text text-darken-4" style="vertical-align: super">Accéder à votre boite mail </span><i style="display: inline-block" class="material-icons grey-text text-darken-4">menu</i></a>

        <?php

        include ($page);

        ?>

    </main>

    <footer>

        <!-- <div>Icons made by <a href="http://www.flaticon.com/authors/madebyoliver" title="Madebyoliver">Madebyoliver</a> from <a href="http://www.flaticon.com" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div> -->

        <ul id="slide-out" class="side-nav">
            <li><i><a href="#"><img src="view/img/Outlook.png"></a></i><a href="https://outlook.live.com">Outlook</a></li>
            <li>
                <div class="divider"></div>
            </li>
            <li><i><a href="#"><img src="view/img/gmail.png"></a></i><a href="https://mail.google.com">GMail</a></li>
        </ul>
        
        <ul id="slide-out2" class="side-nav">
            <li><i><a href="#"><img src="view/img/Outlook.png"></a></i><a href="https://outlook.live.com">Outlook</a></li>
            <li>
                <div class="divider"></div>
            </li>
            <li><i><a href="#"><img src="view/img/gmail.png"></a></i><a href="https://mail.google.com">Gmail</a></li>
        </ul>



    </footer>



    <script type="text/javascript" src="https://code.jquery.com/jquery-3.1.1.js" integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.js"></script>
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> -->
    <script type="text/javascript" src="view/js/verif_form.js"></script>
    <script>$(".button-collapse").sideNav();</script>
    <script type="text/javascript" src="view/js/animation.js"></script>
    <script type="text/javascript" src="view/js/js.js"></script>
    <script type="text/javascript">
        jQuery(function($){
            $('.dropfile').dropfile({
            });
        });
    </script>





</body>



</html>
