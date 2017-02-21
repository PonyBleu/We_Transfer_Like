 $(function(){

						        $("#formulaire").submit(function(event){
//console.log("pouet");
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
                                        var urlDonnee = $(this).attr("action");
                                        var donnee = $(this).serialize() ;
                                        console.log($urlDonnee);
						                $.ajax({
						                    type : "POST",
						                    url: $urlDonnee ,
						                    data: $donnee ,
						                    success : function() {
						                        $("#formulaire").html("<p id='publication'>L'article a bien été publié !</p><br><a class='accueil' href='#' id='accueil'>Retourner à l'accueil</a>");

						                    },
						                });
						            }
						            return false;
						        });
						    });
