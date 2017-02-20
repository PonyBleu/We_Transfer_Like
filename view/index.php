
				<body>

							<div class="editext">

									<form method="post" name="formulaire" id="formulaire" >

											<h1 id="redac">Envoyer un fichier</h1>

											<hr>

											<div>
												<input id="nom" name="nom" placeholder="Nom" value="<?php echo $_SESSION["$nom"];?>"><br>
												<span id="nomerr" class="error"><?php echo $_SESSION["errnom"];?></span>
											<div>

											<div>
												<input id="mail" name="mail" placeholder="Email" value="<?php echo $_SESSION["$mail"];?>"><br>
												<span id="mailerr" class="error"><?php echo $_SESSION["errmail"];?></span>
											<div>

											<div>
												<input id="maildest" name="maildest" placeholder="Email destinataire" value="<?php echo $_SESSION["maildest"];?>"><br>
												<span id="maildesterr" class="error"><?php echo $_SESSION["$maildesterr"];?></span>
											</div>

												<textarea id="article" name="article" rows="15" cols="100" placeholder="Message (facultatif)"></textarea><br>
											</div>

													<div class="form-group">
													
											            <label for="name">fichier</label>
											                    <input type="hidden" name="MAX_FILE_SIZE" value="3000000000000000" />
											                    <input type="file" id="fichier" name="fichier" />
											                    <span id="fichiererr" class="error"><?php echo $_SESSION["errfichier"];?></span>
											        </div>
											       


											<input id="button" type="submit" value="Envoyer"/>


										</div>
							</div>												
						</div>
																									
									</form>


						<span id="message"></span>
						<span id="msg_all"></span>

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