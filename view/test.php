<?php 
error_reporting(E_ALL & ~E_NOTICE);
session_start();
?>

<!DOCTYPE html>


	<html>

			
			<head>

				<title>Envoyer un fichier</title>
				<meta charset="utf-8" />
				<meta name="viewport" content="width=device-width, initial-scale=1" />
				<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

				

			</head>



				<body>

							<div class="editext">

									<form method="post" action="script_test.php" name="formulaire" id="formulaire" >

											<h1 id="redac">Envoyer un fichier</h1>

											<hr>

											<div>
												<input id="nom" name="nom" placeholder="Nom" value="<?php echo $_SESSION["nom"];?>"><br>
												<span id="nomerr" class="error"><?php echo $_SESSION["errnom"];?></span>
											<div>

											<div>
												<input id="mail" name="mail" placeholder="Email" value="<?php echo $_SESSION["mail"];?>"><br>
												<span id="mailerr" class="error"><?php echo $_SESSION["errmail"];?></span>
											<div>

											<div>
												<input id="maildest" name="maildest" placeholder="Email destinataire" value="<?php echo $_SESSION["maildest"];?>"><br>
												<span id="maildesterr" class="error"><?php echo $_SESSION["maildesterr"];?></span>
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


					<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>

					<script>

						    $(function(){

						        $("#formulaire").submit(function(event){

						            var monnom        = $("#nom").val();
						            var monmail      = $("#mail").val();
						            var sonmail      = $("#maildest").val();
						            var monfichier	 = $("#fichier").val();
						            var meschamps = monnom + monmail + sonmail + monfichier;

						            var nomalerte  = "<span style='color:lightblue'>Veuillez entrer votre nom</span>";
									var mailalerte  = "<span style='color:lightblue'>Veuillez entrer votre email</span>";
									var maildestalerte  = "<span style='color:lightblue'>Veuillez entrer l'email du destinataire</span>";
									var fichieralerte  = "<span style='color:lightblue'>Veuillez selectionner votre fichier</span>";
									var erreurenvoi = false;
									
									$("#nomerr").html("");
									$("#mailerr").html("");
									$("#maildesterr").html("");
									$("#fichiererr").html("");
						            if (meschamps  == "") {
						                $("#msg_all").html(message);
										var erreurenvoi = true;
						            } 
									if (monnom == "") {
						                $("#nomerr").html(nomalerte);
										var erreurenvoi = true;
						            } 
						            if (monmail == "") {
						                $("#mailerr").html(mailalerte);
										var erreurenvoi = true;
						            } 
									if (sonmail == "") {
						                $("#maildesterr").html(maildestalerte);
										var erreurenvoi = true;
						            } 

						            if (monfichier == "") {
						                $("#fichiererr").html(fichieralerte);
										var erreurenvoi = true;
						            } 

									if (erreurenvoi == false) {
						                $.ajax({
						                    type : "POST",
						                    url: $(this).attr("action"),
						                    data: $(this).serialize(),
						                    success : function() {
						                        $("#formulaire").html("<p id='publication'>L'article a bien été publié !</p><br><a class='accueil' href='#' id='accueil'>Retourner à l'accueil</a>");
											
						                    },
						                });
						            }
						            return false;
						        });
						    });
						</script>


				</body>





	</html>

	<!-- yep -->
