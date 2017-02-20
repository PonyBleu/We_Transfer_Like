<?php 
error_reporting(E_ALL & ~E_NOTICE);
session_start();
?>
<!DOCTYPE>


<html>
   
   
    
<head>
        
    <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.css" media="screen,projection"/>
    <link rel="stylesheet" href="view/css/style.css"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Mono"> <!-- font-family: "Roboto Mono", monospace -->
        
    <meta charset="utf-8"/>
    <meta name="description" content="Website for transfer files to email"/>
        
</head>



<body>



    <header>

        <div class="navbar-fixed">

              <nav>

                  <ul class="nav-wrapper cyan lighten-4">


                    <img id="logo" class="brand-logo" src="view/img/email.png"/>


                  </ul>

              </nav>

        </div>

    </header>

    <main>

        <?php

        include ($page);

        ?>

    </main>

    <footer>
    
        <div>Icons made by <a href="http://www.flaticon.com/authors/madebyoliver" title="Madebyoliver">Madebyoliver</a> from <a href="http://www.flaticon.com" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div>
        
    </footer>



    <script type="text/javascript" src="https://code.jquery.com/jquery-3.1.1.js" integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="view/js.js"></script>
    

</body>



</html>
