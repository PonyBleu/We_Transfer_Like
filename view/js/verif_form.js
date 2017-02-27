 $(function(){

						        $("#formulaire").submit(function(event){
//console.log("pouet");
						            var monnom        = $("#nom").val();
						            var monmail      = $("#mail").val();
						            var sonmail      = $("#maildest").val();
						            var monfichier	 = $("#monFichier").val();
						            var meschamps = monnom + monmail + sonmail + monfichier;

						            var nomalerte  = "<div id='nomalerte' style='display:block'><img style='display:none' id='imgnomalerte' src='view/img/fleche1.png' alt='fleche'>Veuillez entrer votre Nom !</div>";
									var mailalerte  = "<div id='mailalerte' style='display:block'><img style='display:none' id='imgmailalerte' src='view/img/fleche1.png' alt='fleche'>Veuillez entrer votre email !</div>";
									var maildestalerte  = "<div id='maildestalerte' style='display:block'><img style='display:none' id='imgmaildestalerte' src='view/img/fleche1.png' alt='fleche'>Veuillez entrer l'email du destinataire !</div>";
									var fichieralerte  = "<div id='fichieralerte' style='display:block'><img style='display:none' id='imgfichieralerte' src='view/img/fleche2.png' alt='fleche'>Veuillez selectionner votre fichier !</div>";
                                    $("#divError").css('display' , "block" );


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
