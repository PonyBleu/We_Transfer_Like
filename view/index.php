<body>
   
    <div class="container">
      
       <div class="row">
       
        <div class="editext">
           
            <form method="post"name="formulaire" id="formulaire" action="controller/upload.php" enctype="multipart/form-data" >
               
                <h1 class="center-align" id="redac">Envoyer un fichier</h1>
                <hr>
                
                <div class="col s12 m4 l4">
                   
                    <input id="nom" name="nom" placeholder="Nom" value="<?php echo $_SESSION["$nom"];?>"><br>
                    <span id="nomerr" class="error"><?php echo $_SESSION["errnom"];?></span>
                    
                </div>
                
                <div id="nomalerte">Veuillez entrer votre Nom !</div>
                
                <div class="col s12 m4 l4">
                   
                    <input id="mail" name="mail" placeholder="Email" value="<?php echo $_SESSION["$mail"];?>"><br>
                    <span id="mailerr" class="error"><?php echo $_SESSION["errmail"];?></span>
                    
                </div>
                
                <div id="mailalerte">Veuillez entrer votre Email !</div>

                <div class="col s12 m4 l4">
                   
                    <input id="maildest" name="maildest" placeholder="Email destinataire" value="<?php echo $_SESSION["maildest"];?>"><br>
                    <span id="maildesterr" class="error"><?php echo $_SESSION["$maildesterr"];?></span>
                    
                </div>
                
                <div class="col s12 m4 l4" id="maildestalerte">Veuillez entrer l'Email du destinataire !>
                   
                    <textarea id="article" name="article" rows="15" cols="100" placeholder="Message (facultatif)"></textarea><br>
                    
                </div>
                
                <div class="col s12 m4 l4" class="form-group">
                   
                    <div class="file-field input-field">
                              
                        <div class="btn">
                               
                               <span>Fichier</span>
                               
                                <input type="file" name="monFichier" id="monFichier" />
                         </div>
                                
                         <div class="file-path-wrapper">
                               
                                
                            <input type="hidden" name="MAX_FILE_SIZE" value="3000000000000000" />
                                
                                
                            <span id="fichiererr" class="error"><?php echo $_SESSION["errfichier"];?></span>
                            
                        </div>
                        
                   </div>
                    
                </div>
                
                <div class="col s12 m4 l4">
                    
                    <div class="row">
                        
                        <div class="input-field col s12">
                            
                            <textarea style="border-bottom: 0" id="article" name="article" class="materialize-textarea"></textarea>
                            
                            <label for="article">Message(facultatif)</label>
                            
                        </div>
                        
                    </div>
                    
                </div>
                
                <div id="fichieralerte"><img id='imgfichieralerte' src="view/img/fleche2.png" alt="fleche">Veuillez selectionner un fichier !</div>
                
                <div class="col s12 m4 l4">
                   
                    <button class="btn waves-effect waves-light" name="submit" style="height: 3rem" type="submit">Envoyer

                        <i class="material-icons right">send</i>

                    </button>
                    
                </div>
                
            

            </form>
            
            <span id="message"></span>
            <span id="msg_all"></span>
        </div>
        
	   </div>
	
    </div>
    
</body>



<!--<form action="controller/upload.php" method="post" enctype="multipart/form-data">
    <div class="">
        <div style="visibility:hidden; opacity:0" id="dropzone">
            <div id="textnode">Drop ici</div>
        </div>
        <input type="hidden" name="MAX_FILE_SIZE" value="5000" />
        <input type="file" name="monFichier" id="monFichier" class="inputfile" />
        <label for="file"><strong>Choose a file</strong></label>
        <p>ou drag and drop baby!</p>
        <div id=text></div>
    </div>
    <button type="submit" name="submit" value="Upload Image">Envoyer !! </button>
</form> -->
