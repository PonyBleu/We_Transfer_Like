<body>

<div class="loader"></div>

    <div class="container">

       <div class="row">

          <div class="col s12 m7 l5 offset-m1 offset-l2">

              <div class="row dropfile">

                    <form method="post"name="formulaire" id="formulaire" action="controller/upload.php" enctype="multipart/form-data" >

                        <h1 class="center-align" id="redac">Envoyer un fichier</h1>
                        <hr>

                        <div class="col s12 m12 l12">

                            <input id="nom" name="nom" placeholder="Nom" value="<?php echo $_SESSION["$nom"];?>"><br>

                        </div>


                        <div class="col s12 m12 l12">

                            <input id="mail" name="mail" placeholder="Email" value="<?php echo $_SESSION["$mail"];?>"><br>

                        </div>


                        <div class="col s12 m12 l12">

                            <input id="maildest" name="maildest" placeholder="Email destinataire" value="<?php echo $_SESSION["maildest"];?>"><br>

                        </div>


                         <div class="col s12 m12 l12">

                            <div class="row">

                                <div class="input-field col s12">

                                    <textarea style="border-bottom: 0" id="article" name="article" class="materialize-textarea"></textarea>

                                    <label for="article">Message(facultatif)</label>

                                </div>

                            </div>

                        </div>


                        <div class="col s12 m6 l6" class="form-group">

                            <div class="file-field input-field">

                                <div class="btn">

                                       <span>Fichier</span>

                                        <input name="monFichier" id="monFichier" type="file"/>
                                 </div>
<!--<p id="fichierr"></p> -->
                                 <div class="file-path-wrapper">


                                    <input class="file-path validate" type="text">

                                    <input type="hidden" name="MAX_FILE_SIZE" value="3000000000000000" />

                                </div>

                           </div>


                        </div>

                        <button style="margin-top: 0.9em; height: 3rem" class="col s4 m4 l4 offset-s1 offset-m2 offset-l2 btn waves-effect waves-light" name="submit" type="submit">Envoyer

                            <i class="material-icons right">send</i>

                        </button>

                    </form>

                </div>

            </div>

          </div>

	   </div>

	   <div class="card" id="divError">

	         <img id="finger" style="position: absolute; transform: rotate(90deg); right: 23em; width: 35%; display: none" src="view/img/Finger.png"/>

            <span id="nomerr" class="error"><?php echo $_SESSION["errnom"];?></span>

            <span id="mailerr" class="error"><?php echo $_SESSION["errmail"];?></span>

            <span id="maildesterr" class="error"><?php echo $_SESSION["$maildesterr"];?></span>

            <span id="fichiererr" class="error"><?php echo $_SESSION["errfichier"];?></span>

             <!--<div id="fichieralerte">Veuillez selectionner un fichier !</div> -->

            <span id="message"></span>
            <span id="msg_all"></span>

        </div>

	   </div>
    

</body>
