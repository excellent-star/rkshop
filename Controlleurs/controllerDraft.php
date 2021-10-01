<?php 

session_start();
$p=!empty($_GET['p'])?$_GET['p']:"";



switch ($p) {
	case 'single-portfolio-dark':

	

		require("Vues/front/single-portfolio-dark.php");
		// 
		break;
	case 'single-blog-dark':
		
		require("Vues/front/single-blog-dark.php");
		break;

	case 'login': 
		require("Vues/backend/login.php");
		break;
	case 'dashboard': 
		if(isset($_SESSION['user_id'])  && $_SESSION['user_role']==1){

			if(isset($_SESSION['error_google'])){

				unset($_SESSION['error_google']);
			}


			

			require("Vues/backend/index.php");

		}else{

			require("Vues/backend/login.php");
		}
		
		break;
	case 'header_information': 

		if(isset($_SESSION['user_id'])  && $_SESSION['user_role']==1){



			$utilisateur  = new UtilisateurManager($db);

			$email = $_SESSION["user_email"];

			$result_query = $utilisateur->getRow("SELECT * FROM utilisateur WHERE userEmail=?",array($email));

			$result_query2 = $utilisateur->getRow("SELECT * FROM usersocialnetwork");

			

			

			require("Vues/backend/header_information.php");


		}else{

			require("Vues/backend/login.php");
		}
		break;
	case 'login_run': 

		if(!empty($_POST)){


			// if(isset($_SESSION['error_google'])){

			// 	unset($_SESSION['error_google']);
			// }


			

			$data = [];

			$email = $_POST['email'];
			$password = $_POST['password'];


			  if(!empty($email) && !empty($password)){


				     if(!filter_var($email,FILTER_VALIDATE_EMAIL)){

						$data['type'] = 0;
						$data['message'] ="Email Incorrect";
						echo json_encode($data);
						exit();
						   
					 }

					 if(strlen($password) < 6){

						$data['type'] = 0;
						$data['message'] ="Mot de Passe Incorrect";
						echo json_encode($data);
						exit();
					 }


					//  $password = password_hash($password,PASSWORD_DEFAULT);



					 $utilisateur  = new UtilisateurManager($db);

					 $result_query = $utilisateur->getRow("SELECT * FROM utilisateur WHERE userEmail=? ",array($email));

					

					 if($result_query){



						if(password_verify($password,$result_query->userPassword)){


						  if(isset($_POST["rememberme"])){


							    setcookie("remember_email",$email,time()+(10*365*24*60*60));
							    setcookie("remember_password",$password,time()+(10*365*24*60*60));


						  }
						  else{


							       if(isset($_COOKIE["remember_email"])){

									     setcookie("remember_email","");
								   }

								   if(isset($_COOKIE["remember_password"])){

									setcookie("remember_password","");
							  }
						  }


						    $_SESSION['user_email'] = $result_query->userEmail;
						    $_SESSION['user_id'] = $result_query->userId;
						    $_SESSION['user_name'] = $result_query->userName;
						    $_SESSION['user_firstname'] = $result_query->userPrenom;
						    $_SESSION['user_role'] = $result_query->userRole;


							


							




							
							  

							$data['type'] = 1;
					    	$data['message'] = "Patientez quelquez seconde";


					    echo json_encode($data);


						}else{


							$data['type'] = 0;
							$data['message'] ="Mot de Passe Incorrect";
							echo json_encode($data);
							exit();


						}


						


					 }else{

						$data['type'] = 0;
						$data['message'] ="Email Incorrect";
						echo json_encode($data);
						exit();
					 }


					 
				 

				
			  }else{


				   $data['type'] = 0;
				   $data['message'] ="Email or Mot de passe incorrect";
				   echo json_encode($data);
				   exit();
				   
			  }

			
		}
		 
		break;
	case 'sedeconnecter': 
		   session_destroy();
		   header("Location:?p=login");
		   exit();
		break;
	case 'config_api': 

		// if(isset($_SESSION['error_google'])){

		// 	unset($_SESSION['error_google']);
		// }
		require_once "assets/library/googleApi/vendor/autoload.php";

		$gClient = new Google_Client();
		$gClient->setClientId("938883142279-qktpe3jsld16ph404ejar1qricn8f176.apps.googleusercontent.com");
		$gClient->setClientSecret("1486tDNl8-W0WBduooLnagn5");
		$gClient->setApplicationName("my cv");
		$gClient->setRedirectUri("http://localhost/mycvproject/?p=login_with_google");
		$gClient->addScope("https://www.googleapis.com/auth/userinfo.email");
		// $gClient->addScope("https://www.googleapis.com/auth/gmail.readonly");

		$loginURL = $gClient->createAuthUrl();






		echo json_encode($loginURL);
		break;
	case 'login_with_google': 

		// if(isset($_SESSION['error_google'])){

		// 	unset($_SESSION['error_google']);
		// }

			    require_once "assets/library/googleApi/vendor/autoload.php";

				$gClient = new Google_Client();
				$gClient->setClientId("938883142279-qktpe3jsld16ph404ejar1qricn8f176.apps.googleusercontent.com");
				$gClient->setClientSecret("1486tDNl8-W0WBduooLnagn5");
				$gClient->setApplicationName("my cv");
				$gClient->setRedirectUri("http://localhost/mycvproject/?p=login_with_google");
				$gClient->addScope("https://www.googleapis.com/auth/userinfo.email");

				 if(isset($_GET['code'])){

					   $token = $gClient->fetchAccessTokenWithAuthCode($_GET['code']);

					   $_SESSION['access_token'] = $token;
				 }

				 $oAuth = new Google_Service_Oauth2($gClient);

				 $userData = $oAuth->userinfo_v2_me->get();

				 $email = $userData['email'];

				 $utilisateur  = new UtilisateurManager($db);

			     $result_query = $utilisateur->getRow("SELECT * FROM utilisateur WHERE userEmail=? ",array($email));

				 if($result_query){

					
							$_SESSION['user_email'] = $result_query->userEmail;
						    $_SESSION['user_id'] = $result_query->userId;
						    $_SESSION['user_name'] = $result_query->userName;
						    $_SESSION['user_firstname'] = $result_query->userPrenom;
						    $_SESSION['user_role'] = $result_query->userRole;

					  header("Location:?p=dashboard");

				 }else{

					    $_SESSION["error_google"] ="error_google";

					   
					      header("Location:?p=login");

				 }
		break;
	case 'config_facebook_api': 

		// if(isset($_SESSION['error_google'])){

		// 	unset($_SESSION['error_google']);
		// }


		require_once "assets/library/facebookApi/autoload.php";

			
		$fb = new \Facebook\Facebook([


			       'app_id'=>'910657409499795',
				   'app_secret'=>'70c6a07a5c949675c5c286adaf0b68c9',
				   'default_graph_version'=>'v2.10'

		]);


		$helper = $fb->getRedirectLoginHelper();

		

		$redirectURL   = 'http://localhost/mycvproject/?p=facebook_login_run';

		$permissions = ['email'];

		$loginURL = $helper->getLoginUrl($redirectURL,$permissions);




			  echo json_encode($loginURL);
		break;
	case 'facebook_login_run': 


		require_once "assets/library/facebookApi/autoload.php";

			
		$fb = new \Facebook\Facebook([


			       'app_id'=>'910657409499795',
				   'app_secret'=>'70c6a07a5c949675c5c286adaf0b68c9',
				   'default_graph_version'=>'v2.10'

		]);


		$helper = $fb->getRedirectLoginHelper();

		try{

			   $accessToken = $helper->getAccessToken();
		}catch(\Facebook\Exceptions\FacebookSDKException $e){

			   
			    echo "SDK Exception: ". $e->getMessage();
				exit();


		}catch(\Facebook\Exceptions\FacebookSDKException $e){

			 echo "SDK Exception: ". $e->getMessage();

			 exit();

		}

	//   var_dump($accessToken);
	//   exit();

		if(!$accessToken){

			  header("Location:?p=login");
			  exit();
		}

		$oAuth2Client = $fb->getOAuth2Client();

		if(!$accessToken->isLongLived()){

			  $accessToken = $oAuth2Client->getLongLivedAccessToken($accessToken);
		}

		$response = $fb->get("/me?fields=id,first_name,last_name,email,picture.type(large)",$accessToken);

		$userData = $response->getGraphNode()->asArray();

		$_SESSION['user_Data'] = $userData;
		$_SESSION['access_token'] = (string) $accessToken;


    //    var_dump($userData);
	// 	exit();

	        $firstName = $userData['first_name'];
			$lastName = $userData['last_name'];
			$email = $userData['email'];

			$utilisateur  = new UtilisateurManager($db);

			$result_query = $utilisateur->getRow("SELECT * FROM utilisateur WHERE userEmail=? OR userPrenom=? OR userName=? ",array($email,$firstName,$lastName));

			if($result_query){


							$_SESSION['user_email'] = $result_query->userEmail;
						    $_SESSION['user_id'] = $result_query->userId;
						    $_SESSION['user_name'] = $result_query->userName;
						    $_SESSION['user_firstname'] = $result_query->userPrenom;
						    $_SESSION['user_role'] = $result_query->userRole;


				 header("Location:?p=dashboard");

			}else{

				   $_SESSION["error_google"] ="error_google";

				  
					 header("Location:?p=login");

			}




		  
		break;
	case 'forgot_password': 
		  require("Vues/backend/forgot_password.php");
		break;
	case 'forgot_password_run': 

		$data["type"]=0;
		$data["message"]="";

		$email = $_POST['email'];

		$email = filter_var($email, FILTER_SANITIZE_EMAIL);

			// Validate e-mail
			if (filter_var($email, FILTER_VALIDATE_EMAIL)) {

				$utilisateur  = new UtilisateurManager($db);

				$result_query = $utilisateur->getRow("SELECT * FROM utilisateur WHERE userEmail=?",array($email));

				if($result_query){


					  $token = "qwertyuiopasdfghjklzxcvbnm0123456789";

					  $token  = str_shuffle($token);

					  $token = substr($token,0,10);

					 

					  $result_update = $utilisateur->updateRow1("UPDATE utilisateur SET token=?,tokenExpire=DATE_ADD(NOW(),INTERVAL 7 MINUTE) WHERE userEmail=?",array($token,$email));

					//   use PHPMailer\PHPMailer\PHPMailer;
					//   use PHPMailer\PHPMailer\SMTP;
					//   use PHPMailer\PHPMailer\Exception;


					  require_once "assets/library/PHPMailer/PHPMailer.php";
					  require_once "assets/library/PHPMailer/Exception.php";
					  require_once "assets/library/PHPMailer/SMTP.php";

					  $mail = new PHPMailer\PHPMailer\PHPMailer();

					  try {
						//Server settings
						// $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
						// $mail->SMTPDebug = 3;
						$mail->isSMTP();                                            //Send using SMTP
						$mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
						$mail->SMTPAuth   = true;                                   //Enable SMTP authentication
						$mail->Username   = 'hedechrisexcellentweb@gmail.com';                     //SMTP username
						$mail->Password   = '1997011419970114';                               //SMTP password
						// $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
						
						$mail->Port       = 465;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
						$mail->SMTPSecure = "ssl";
					
						//Recipients
						$mail->setFrom('hedechrisexcellentweb@gmail.com', 'cv');
						$mail->addAddress($email);     //Add a recipient
						// $mail->addAddress('ellen@example.com');               //Name is optional
						// $mail->addReplyTo('info@example.com', 'Information');
						// $mail->addCC('cc@example.com');
						// $mail->addBCC('bcc@example.com');
					
						//Attachments
						// $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
						// $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name
					
						//Content
						$mail->isHTML(true);                                  //Set email format to HTML
						$mail->Subject = 'Changer le mot de passe';
						$mail->Body    = "
						
						        Bonjour, <br/>

								pour changer votre mot de passe ; s'il vous plait cliquez sur le lien  ci dessous:<br/>
								<a href='http://localhost/mycvproject/?p=changer_passe&email=$email&token=$token'>http://localhost/mycvproject/?p=changer_passe&email=$email&token=$token</a><br/>
						";
						$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
					
						if($mail->send()){

							$data["type"]=1;
							$data['message']="Verifiez votre email";
						}else{

							  echo "something is wrong <br>".$mail->ErrorInfo;
						}
						// echo 'Message has been sent';
						
					} catch (Exception $e) {
						echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
					}

					  

				}else{

						$data["message"]="Vous n'avez de compte ici";
				}
				     
			
			} else {
			
					$data["message"]="Votre email n'est pas valide";
			}

		   echo json_encode($data);
		break;
	case 'changer_passe': 
		

		        if(isset($_GET['email']) && isset($_GET['token'])){


					 $email = $_GET['email'];
					 $token = $_GET['token'];


					 $utilisateur  = new UtilisateurManager($db);

				$result_query = $utilisateur->getRow("SELECT userId FROM utilisateur WHERE userEmail=? AND token=? AND token<>'' AND tokenExpire > NOW()",array($email,$token));

				if($result_query){


					 require("Vues/backend/change_password.php");
					  
				}else{

					header("Location:?p=login");
					exit();
					 
				}

					 
				}else{


					   header("Location:?p=login");
					   exit();
				}


		break;
	case 'change_password_run': 
		   
		       $password = $_POST['password'];
			   $email = $_POST['email'];

			   $data = [];

			   if(strlen($password) >=6){

				$password = password_hash($password,PASSWORD_DEFAULT);

				  
				$utilisateur  = new UtilisateurManager($db);

				$result_query = $utilisateur->updateRow1("UPDATE utilisateur SET userPassword=? WHERE userEmail=?",array($password,$email));

				  $data['type'] =1;
				  $data['message']="votre mot de passe est modifié";

			   }else{

				  $data['type'] =0;
				  $data['message']="votre mot de passe doit contenir au moins 6 caracteres";


			   }
			   echo json_encode($data);
		break;
	case 'first_form_run':

		$data =[];


		$nom = $_POST['nom'];
		$prenom1 = $_POST["prenom1"];
		$prenom2 = $_POST["prenom2"];
		$adresse = $_POST["adresse"];
		$domain = $_POST["domain"];
		// $email = $_POST["email"];
		$intro = $_POST["intro"];
		$siteweb = $_POST["siteweb"];
		$skype = $_POST["skype"];
		$tel = $_POST["tel"];





		$utilisateur  = new UtilisateurManager($db);

	    $result_query = $utilisateur->updateRow1("UPDATE utilisateur SET userName=?,userPrenom=?,userMiddleName=?,userAddress=?,userField=?,userIntro=?,userWebsite=?,userSkeype=?,userMobile=?",array($nom,$prenom1,$prenom2,$adresse,$domain,$intro,$siteweb,$skype,$tel));

		$data["message"] = "Vos informations mises à jour avec success";


		echo json_encode($data); 
		break;

	case 'second_form_run_profile':


		$data = [];
		
		
		$fileName = $_FILES['file']['name'];
		$fileTmpName = $_FILES['file']['tmp_name'];
		$fileSize = $_FILES['file']['size'];
		$fileError = $_FILES['file']['error'];
		$fileType = $_FILES['file']['type'];


		$fileExt = explode('.',$fileName);

		$fileActualExt =strtolower(end($fileExt));


		$allowed = array('jpg','jpeg','png','pdf');


		if(in_array($fileActualExt,$allowed)){


			 if($fileError ===0){


				  
					$fileNameNew = uniqid('',true).".".$fileActualExt;


					$fileDestination = 'assets/images/'.$fileNameNew;


					move_uploaded_file($fileTmpName,$fileDestination);




					$utilisateur  = new UtilisateurManager($db);

					$result_query = $utilisateur->updateRow1("UPDATE utilisateur SET userProfile=? WHERE userId=?",array($fileNameNew,$_SESSION['user_id']));



					$data['message'] = "sauvegardé !!!!!!!!";

			 }else{


				   $data['message'] = "une erreur s'est produite";
			 }


		}else{


				$data['message'] =" cet extension n'est pas autorisé";
		}




		


		 echo json_encode($data); 
	     break;

	case 'second_form_run_cover': 

		
		$data = [];
		
		
		$fileName = $_FILES['file']['name'];
		$fileTmpName = $_FILES['file']['tmp_name'];
		$fileSize = $_FILES['file']['size'];
		$fileError = $_FILES['file']['error'];
		$fileType = $_FILES['file']['type'];


		$fileExt = explode('.',$fileName);

		$fileActualExt =strtolower(end($fileExt));


		$allowed = array('jpg','jpeg','png','pdf');


		if(in_array($fileActualExt,$allowed)){


			 if($fileError ===0){


				  
					$fileNameNew = uniqid('',true).".".$fileActualExt;


					$fileDestination = 'assets/images/'.$fileNameNew;


					move_uploaded_file($fileTmpName,$fileDestination);




					$utilisateur  = new UtilisateurManager($db);

					$result_query = $utilisateur->updateRow1("UPDATE utilisateur SET userCoverImage=? WHERE userId=?",array($fileNameNew,$_SESSION['user_id']));



					$data['message'] = "sauvegardé !!!!!!!!";

			 }else{


				   $data['message'] = "une erreur s'est produite";
			 }


		}else{


				$data['message'] =" cet extension n'est pas autorisé";
		}




		


		 echo json_encode($data);

		break;

	case 'second_form_run_video': 

			
		$data = [];
		
		
		$fileName = $_FILES['file']['name'];
		$fileTmpName = $_FILES['file']['tmp_name'];
		$fileSize = $_FILES['file']['size'];
		$fileError = $_FILES['file']['error'];
		$fileType = $_FILES['file']['type'];


		$fileExt = explode('.',$fileName);

		$fileActualExt =strtolower(end($fileExt));


		$allowed = array('mp4');


		if(in_array($fileActualExt,$allowed)){


			 if($fileError ===0){


				  
					$fileNameNew = uniqid('',true).".".$fileActualExt;


					$fileDestination = 'assets/videos/'.$fileNameNew;


					move_uploaded_file($fileTmpName,$fileDestination);




					$utilisateur  = new UtilisateurManager($db);

					$result_query = $utilisateur->updateRow1("UPDATE utilisateur SET userVideo=? WHERE userId=?",array($fileNameNew,$_SESSION['user_id']));



					$data['message'] = "sauvegardé !!!!!!!!";

			 }else{


				   $data['message'] = "une erreur s'est produite";
			 }


		}else{


				$data['message'] =" cet extension n'est pas autorisé";
		}




		


		 echo json_encode($data);
		break;
	case 'upload_cv_run': 
		
		  	$data = [];
		
		
		$fileName = $_FILES['file']['name'];
		$fileTmpName = $_FILES['file']['tmp_name'];
		$fileSize = $_FILES['file']['size'];
		$fileError = $_FILES['file']['error'];
		$fileType = $_FILES['file']['type'];


		$fileExt = explode('.',$fileName);

		$fileActualExt =strtolower(end($fileExt));


		$allowed = array('pdf');


		if(in_array($fileActualExt,$allowed)){


			 if($fileError ===0){


				  
					$fileNameNew = uniqid('',true).".".$fileActualExt;


					$fileDestination = 'assets/pdfs/'.$fileNameNew;


					move_uploaded_file($fileTmpName,$fileDestination);




					$utilisateur  = new UtilisateurManager($db);

					$result_query = $utilisateur->updateRow1("UPDATE utilisateur SET userCv=? WHERE userId=?",array($fileNameNew,$_SESSION['user_id']));



					$data['message'] = "CV sauvegardé !!!!!!!!";

					$data['fileName'] = $fileNameNew;

			 }else{


				   $data['message'] = "une erreur s'est produite";
			 }


		}else{


				$data['message'] =" cet extension n'est pas autorisé";
		}




		


		 echo json_encode($data);
		break;

	case 'my_last_form': 

		      $facebook = $_POST['facebook'];
			  $whatsapp = $_POST['whatsapp'];
			  $twitter =  $_POST['twitter'];
			  $instagram = $_POST['instagram'];
			  $linkedin = $_POST['linkedin'];

			   $utilisateur = new UtilisateurManager($db);

			  $query = $utilisateur->updateRow1("UPDATE usersocialnetwork SET facebook=?,whatsapp=?,twitter=?,instagram=?,linkedin=? WHERE usnId=1",array($facebook,$whatsapp,$twitter,$instagram,$linkedin));

			  $data['message'] = "Sauvegarder avec succès";
		

			echo json_encode($data);
		
		 
		break;

	case 'education': 

		if(isset($_SESSION['user_id'])  && $_SESSION['user_role']==1){

			if(isset($_SESSION['error_google'])){

				unset($_SESSION['error_google']);
			}

			require("Vues/backend/education.php");

		}else{

			require("Vues/backend/login.php");
		}
		break;
	case 'education_add_run':

		$data = [];

		$titre = $_POST['titre'];
		$school = $_POST['school'];
		$description = $_POST['description'];
		$dates = $_POST['dates'];

		$utilisateur  = new UtilisateurManager($db);
		

		if($_FILES){


			
		
		
			$fileName = $_FILES['file']['name'];
			$fileTmpName = $_FILES['file']['tmp_name'];
			$fileSize = $_FILES['file']['size'];
			$fileError = $_FILES['file']['error'];
			$fileType = $_FILES['file']['type'];
	
	
			$fileExt = explode('.',$fileName);
	
			$fileActualExt =strtolower(end($fileExt));
	
	
			$allowed = array('jpeg','jpg','png','gif');
	
	
			if(in_array($fileActualExt,$allowed)){
	
	
				 if($fileError ===0){
	
	
					  
						$fileNameNew = uniqid('',true).".".$fileActualExt;
	
	
						$fileDestination = 'assets/images/'.$fileNameNew;
	
	
						move_uploaded_file($fileTmpName,$fileDestination);
	
	
	
	
						
	
						// $result_query = $utilisateur->updateRow1("UPDATE utilisateur SET userCv=? WHERE userId=?",array($fileNameNew,$_SESSION['user_id']));


						// educTitle	educFirstLettre	educSchool	educSchoolDate	educPhoto	educText	

						$result_query = $utilisateur->insertRow("INSERT INTO education(educTitle,educSchool,educSchoolDate,educPhoto,educText) VALUES(?,?,?,?,?)",array($titre,$school,$dates,$fileNameNew,$description));
	
	
						$data['message'] = "Sauvegardé avec succes !!!!!!!!";
						$data['ok']="bon";
	
						$data['fileName'] = $fileNameNew;
	
				 }else{
	
	
					   $data['message'] = "une erreur s'est produite";
				 }
	
	
			}else{
	
	
					$data['message'] =" cet extension n'est pas autorisé";
			}


		}else{


			$result_query = $utilisateur->insertRow("INSERT INTO education(educTitle,educSchool,educSchoolDate,educText) VALUES(?,?,?,?)",array($titre,$school,$dates,$description));

			$data['message'] = "Sauvegardé avec succes !!!!!!!!";
			$data['ok']="bon";
		}



		
		
		echo json_encode($data);
		break;
	case 'all_educations': 
		if(isset($_SESSION['user_id'])  && $_SESSION['user_role']==1){

			if(isset($_SESSION['error_google'])){

				unset($_SESSION['error_google']);
			}

			$utilisateur = new UtilisateurManager($db);

			$result_query = $utilisateur->getRows("SELECT * FROM education");

			require("Vues/backend/all_educations.php");

		}else{

			require("Vues/backend/login.php");
		}
		break;
	case 'update_education': 
		if(isset($_SESSION['user_id'])  && $_SESSION['user_role']==1){

			if(isset($_SESSION['error_google'])){

				unset($_SESSION['error_google']);
			}

			$id = $_GET['id'];

			$verif = false;

			$utilisateur = new UtilisateurManager($db);

			$result = $utilisateur->getRows("SELECT educId FROM education",array());

			foreach ($result as  $value) {

					  if($id==$value->educId){

						    $verif=true;
							break;
					  }
				# code...
			}

			

			if($verif){

				$result_query1 = $utilisateur->getRow("SELECT * FROM education WHERE educId=?",array($id));

				require("Vues/backend/update_education.php");
			}else{

				header("Location:?p=all_educations");
			}

			

		}else{

			require("Vues/backend/login.php");
		}
		break;

	case 'education_update_run':
		
		$data = [];

		$titre = $_POST['titre'];
		$school = $_POST['school'];
		$description = $_POST['description'];
		$dates = $_POST['dates'];
		$id = $_POST['id'];

		$utilisateur  = new UtilisateurManager($db);
		

		if($_FILES){


			
		
		
			$fileName = $_FILES['file']['name'];
			$fileTmpName = $_FILES['file']['tmp_name'];
			$fileSize = $_FILES['file']['size'];
			$fileError = $_FILES['file']['error'];
			$fileType = $_FILES['file']['type'];
	
	
			$fileExt = explode('.',$fileName);
	
			$fileActualExt =strtolower(end($fileExt));
	
	
			$allowed = array('jpeg','jpg','png','gif');
	
	
			if(in_array($fileActualExt,$allowed)){
	
	
				 if($fileError ===0){
	
	
					  
						$fileNameNew = uniqid('',true).".".$fileActualExt;
	
	
						$fileDestination = 'assets/images/'.$fileNameNew;
	
	
						move_uploaded_file($fileTmpName,$fileDestination);
	
	
	
	
						
	
						// $result_query = $utilisateur->updateRow1("UPDATE utilisateur SET userCv=? WHERE userId=?",array($fileNameNew,$_SESSION['user_id']));


						// educTitle	educFirstLettre	educSchool	educSchoolDate	educPhoto	educText	

						// $result_query = $utilisateur->insertRow("INSERT INTO education(educTitle,educSchool,educSchoolDate,educPhoto,educText) VALUES(?,?,?,?,?)",array($titre,$school,$dates,$fileNameNew,$description));

						$result_query = $utilisateur->updateRow1("UPDATE education SET educTitle=?,educSchool=?,educSchoolDate=?,educText=?,educPhoto=? WHERE educId=?",array($titre,$school,$dates,$description,$fileNameNew,$id));
	
	
						$data['message'] = "Sauvegardé avec succes !!!!!!!!";
						$data['ok']="bon";
	
						$data['fileName'] = $fileNameNew;
	
				 }else{
	
	
					   $data['message'] = "une erreur s'est produite";
				 }
	
	
			}else{
	
	
					$data['message'] =" cet extension n'est pas autorisé";
			}


		}else{


			$result_query = $utilisateur->updateRow1("UPDATE education SET educTitle=?,educSchool=?,educSchoolDate=?,educText=? WHERE educId=?",array($titre,$school,$dates,$description,$id));

			$data['message'] = "Mise à Jour avec succes !!!!!!!!";
			$data['ok']="bon";
		}



		
		
		echo json_encode($data);
		break;

	case 'education_suppression': 

		$id = $_POST['id'];

		$utilisateur = new UtilisateurManager($db);
		$result_query = $utilisateur->deleteRow("DELETE FROM education WHERE educId=?",array($id));

		$data['message'] ="supprimé avec succès";
		echo json_encode($data);
		break;

	case 'experience_add': 
		if(isset($_SESSION['user_id'])  && $_SESSION['user_role']==1){

			if(isset($_SESSION['error_google'])){

				unset($_SESSION['error_google']);
			}

			

			require("Vues/backend/experience_add.php");

		}else{

			require("Vues/backend/login.php");
		}
		break;

	case 'experience_add_run': 

		$data = [];

		$titre = $_POST['titre'];
		$school = $_POST['school'];
		$description = $_POST['description'];
		$dates = $_POST['dates'];

		$utilisateur  = new UtilisateurManager($db);
		

		if($_FILES){


			
		
		
			$fileName = $_FILES['file']['name'];
			$fileTmpName = $_FILES['file']['tmp_name'];
			$fileSize = $_FILES['file']['size'];
			$fileError = $_FILES['file']['error'];
			$fileType = $_FILES['file']['type'];
	
	
			$fileExt = explode('.',$fileName);
	
			$fileActualExt =strtolower(end($fileExt));
	
	
			$allowed = array('jpeg','jpg','png','gif');
	
	
			if(in_array($fileActualExt,$allowed)){
	
	
				 if($fileError ===0){
	
	
					  
						$fileNameNew = uniqid('',true).".".$fileActualExt;
	
	
						$fileDestination = 'assets/images/'.$fileNameNew;
	
	
						move_uploaded_file($fileTmpName,$fileDestination);
	
	
	
					
						
	
						// $result_query = $utilisateur->updateRow1("UPDATE utilisateur SET userCv=? WHERE userId=?",array($fileNameNew,$_SESSION['user_id']));


						// expId	expTitle	expEntreprise	expEntrepriseDate	expText	expImage	expFirstLetter		

						$result_query = $utilisateur->insertRow("INSERT INTO experience(expTitle,expEntreprise,expEntrepriseDate,expImage,expText) VALUES(?,?,?,?,?)",array($titre,$school,$dates,$fileNameNew,$description));
	
	
						$data['message'] = "Sauvegardé avec succes !!!!!!!!";
						$data['ok']="bon";
	
						$data['fileName'] = $fileNameNew;
	
				 }else{
	
	
					   $data['message'] = "une erreur s'est produite";
				 }
	
	
			}else{
	
	
					$data['message'] =" cet extension n'est pas autorisé";
			}


		}else{


			$result_query = $utilisateur->insertRow("INSERT INTO experience(expTitle,expEntreprise,expEntrepriseDate,expText) VALUES(?,?,?,?)",array($titre,$school,$dates,$description));

			$data['message'] = "Sauvegardé avec succes !!!!!!!!";
			$data['ok']="bon";
		}



		
		
		echo json_encode($data);
		break;

	case 'all_experiences': 
		if(isset($_SESSION['user_id'])  && $_SESSION['user_role']==1){

			if(isset($_SESSION['error_google'])){

				unset($_SESSION['error_google']);
			}

			$utilisateur = new UtilisateurManager($db);

			$result_query = $utilisateur->getRows("SELECT * FROM experience");

			require("Vues/backend/all_experiences.php");

		}else{

			require("Vues/backend/login.php");
		}
		break;

	case 'update_experience': 

		if(isset($_SESSION['user_id'])  && $_SESSION['user_role']==1){

			if(isset($_SESSION['error_google'])){

				unset($_SESSION['error_google']);
			}

			$id = $_GET['id'];

			$verif = false;

			$utilisateur = new UtilisateurManager($db);

			$result = $utilisateur->getRows("SELECT expId FROM experience",array());

			foreach ($result as  $value) {

					  if($id==$value->expId){

						    $verif=true;
							break;
					  }
				# code...
			}

			

			if($verif){

				$result_query1 = $utilisateur->getRow("SELECT * FROM experience WHERE expId=?",array($id));

				require("Vues/backend/update_experience.php");
			}else{

				header("Location:?p=all_educations");
			}

			

		}else{

			require("Vues/backend/login.php");
		}
		
		break;
	case 'experience_update_run':
		$data = [];

		$titre = $_POST['titre'];
		$school = $_POST['school'];
		$description = $_POST['description'];
		$dates = $_POST['dates'];
		$id = $_POST['id'];

		$utilisateur  = new UtilisateurManager($db);
		

		if($_FILES){


			
		
		
			$fileName = $_FILES['file']['name'];
			$fileTmpName = $_FILES['file']['tmp_name'];
			$fileSize = $_FILES['file']['size'];
			$fileError = $_FILES['file']['error'];
			$fileType = $_FILES['file']['type'];
	
	
			$fileExt = explode('.',$fileName);
	
			$fileActualExt =strtolower(end($fileExt));
	
	
			$allowed = array('jpeg','jpg','png','gif');
	
	
			if(in_array($fileActualExt,$allowed)){
	
	
				 if($fileError ===0){
	
	
					  
						$fileNameNew = uniqid('',true).".".$fileActualExt;
	
	
						$fileDestination = 'assets/images/'.$fileNameNew;
	
	
						move_uploaded_file($fileTmpName,$fileDestination);
	
	
	
	
						
	
						// $result_query = $utilisateur->updateRow1("UPDATE utilisateur SET userCv=? WHERE userId=?",array($fileNameNew,$_SESSION['user_id']));


						// educTitle	educFirstLettre	educSchool	educSchoolDate	educPhoto	educText	

						// $result_query = $utilisateur->insertRow("INSERT INTO education(educTitle,educSchool,educSchoolDate,educPhoto,educText) VALUES(?,?,?,?,?)",array($titre,$school,$dates,$fileNameNew,$description));

						$result_query = $utilisateur->updateRow1("UPDATE experience SET expTitle=?,expEntreprise=?,expEntrepriseDate=?,expText=?,expImage=? WHERE expId=?",array($titre,$school,$dates,$description,$fileNameNew,$id));
	
	
						$data['message'] = "Sauvegardé avec succes !!!!!!!!";
						$data['ok']="bon";
	
						$data['fileName'] = $fileNameNew;
	
				 }else{
	
	
					   $data['message'] = "une erreur s'est produite";
				 }
	
	
			}else{
	
	
					$data['message'] =" cet extension n'est pas autorisé";
			}


		}else{


			$result_query = $utilisateur->updateRow1("UPDATE experience SET expTitle=?,expEntreprise=?,expEntrepriseDate=?,expText=? WHERE expId=?",array($titre,$school,$dates,$description,$id));

			$data['message'] = "Mise à Jour avec succes !!!!!!!!";
			$data['ok']="bon";
		}



		
		
		echo json_encode($data); 
		break;

	case "experience_suppression": 


		$id = $_POST['id'];

		$utilisateur = new UtilisateurManager($db);
		$result_query = $utilisateur->deleteRow("DELETE FROM experience WHERE expId=?",array($id));

		$data['message'] ="supprimé avec succès";
		echo json_encode($data);

		break;
	case 'competence':
		if(isset($_SESSION['user_id'])  && $_SESSION['user_role']==1){

			if(isset($_SESSION['error_google'])){

				unset($_SESSION['error_google']);
			}

			$utilisateur = new UtilisateurManager($db);

		   $result_query1 = $utilisateur->getRows("SELECT * FROM skill_type",array());

			require("Vues/backend/competence.php");

		}else{

			require("Vues/backend/login.php");
		} 
		break;

	case 'competence_run': 

		$competence = $_POST['competence'];
		$type = $_POST['type'];
		$pourcentage = $_POST['pourcentage'];

		$utilisateur = new UtilisateurManager($db);
		$result_query = $utilisateur->insertRow("INSERT INTO skills(stId,skillTitle,skillPercentage) VALUES(?,?,?)",array($type,$competence,$pourcentage));
		$data["message"] = "enregistré avec succès";
		echo json_encode($data);
		break;
	case 'all_skills': 
		if(isset($_SESSION['user_id'])  && $_SESSION['user_role']==1){

			if(isset($_SESSION['error_google'])){

				unset($_SESSION['error_google']);
			}

			$utilisateur = new UtilisateurManager($db);

		   $result_query = $utilisateur->getRows("SELECT * FROM skills",array());

			require("Vues/backend/all_skills.php");

		}else{

			require("Vues/backend/login.php");
		} 
		break;

	case 'update_skill': 
		if(isset($_SESSION['user_id'])  && $_SESSION['user_role']==1){

			if(isset($_SESSION['error_google'])){

				unset($_SESSION['error_google']);
			}

			$id = $_GET['id'];

			$utilisateur = new UtilisateurManager($db);

		   $result_query = $utilisateur->getRow("SELECT * FROM skills WHERE skillId=?",array($id));
		   $result_query1 = $utilisateur->getRows("SELECT * FROM skill_type",array());

		   $result_query3 = $utilisateur->getRow("SELECT * FROM skill_type WHERE stId=?",array($result_query->stId));

			require("Vues/backend/update_skill.php");

		}else{

			require("Vues/backend/login.php");
		} 
		break;

	case 'update_competence_run':

		$id = $_POST['id'];

		$titre = $_POST['competence'];
		$pourcentage = $_POST['pourcentage'];
		$type = $_POST['type'];



		$utilisateur = new UtilisateurManager($db);

		$result_query = $utilisateur->updateRow1("UPDATE skills SET stId=?,skillTitle=?,skillPercentage=? WHERE skillId=?",array($type,$titre,$pourcentage,$id));
		
		$data['message'] = "Mis à jour avec success";

		 echo json_encode($data);
		break;

	case 'skill_suppression': 

		$id = $_POST['id'];

		

		$utilisateur = new UtilisateurManager($db);

		$result = $utilisateur->deleteRow("DELETE FROM skills WHERE skillId=?",array($id));

		$data['message'] = "Supprimé avec succès";

		echo json_encode($data);
		break;

	case 'interest': 
		if(isset($_SESSION['user_id'])  && $_SESSION['user_role']==1){

			if(isset($_SESSION['error_google'])){

				unset($_SESSION['error_google']);
			}

			

			require("Vues/backend/interest.php");

		}else{

			require("Vues/backend/login.php");
		}
		break;

	case 'interest_run':

		$titre = $_POST["titre"];
		$awesome = $_POST["awesome"];



		
		$utilisateur = new UtilisateurManager($db);

		$result_query = $utilisateur->insertRow("INSERT INTO interests(intText,intIcon) VALUES(?,?)",array($titre,$awesome));

		$data["message"] = "Enregistré avec succès";
		   echo json_encode($data);
		break;

	case 'all_interests': 
		if(isset($_SESSION['user_id'])  && $_SESSION['user_role']==1){

			if(isset($_SESSION['error_google'])){

				unset($_SESSION['error_google']);
			}

			$utilisateur = new UtilisateurManager($db);

			$result_query = $utilisateur->getRows("SELECT * FROM interests");

			require("Vues/backend/all_interests.php");

		}else{

			require("Vues/backend/login.php");
		}
		break;

	case 'interest_suppression':
		
		$id = $_POST["id"];
		$utilisateur = new UtilisateurManager($db);

		$result_query = $utilisateur->deleteRow("DELETE FROM interests WHERE intId=?",array($id));

		$data["message"]  = "supprimé avec succès";
		echo json_encode($data);
		break;

	case 'contact_run':
			$nom = $_POST['nom'];
			$subject = $_POST['subject'];
			$message = $_POST['message'];
			$email = $_POST['email'];
			
			$utilisateur = new UtilisateurManager($db);
			$result_query = $utilisateur->insertRow("INSERT INTO contact(contNom,contSubject,contMessage,contEmail) VALUES(?,?,?,?)",array($nom,$subject,$message,$email));

			$data["message"] = "votre message a été bien envoyé";

			echo json_encode($data);
		break;

	case 'notification_run':
		       
		        if(isset($_POST["view"])){

					$utilisateur = new UtilisateurManager($db);


					if($_POST["view"] != ""){

						  $result_update = $utilisateur->updateRow1("UPDATE contact SET contStatus=1 WHERE contStatus=0",array());
					}


					
					
					$result_query1 = $utilisateur->getRows("SELECT * FROM contact ORDER BY contId DESC LIMIT 5");

					$output='';


					 if($result_query1){

						   foreach ($result_query1 as $value) {

							   $output.='<div class="dropdown-divider"></div>
							   <a href="?p=all_messages" class="dropdown-item preview-item"><div class="preview-item-content">
							   <p class="preview-subject ellipsis mb-1">message de '.$value->contNom.'</p>
							   <p class="text-muted mb-0"> '.time_ago($value->contDate).' </p>
							 </div></a>';
							   # code...
						   }

						   $output.='<div class="dropdown-divider"></div>
						   <a href="?p=all_messages"class="dropdown-item preview-item"><p class="p-3 mb-0 text-center">Tous les messages</p></a>';


					 }else{

						 $output .='<a class="dropdown-item preview-item">
						 <div class="preview-item-content">
						   <p class="preview-subject ellipsis mb-1">Pas de notifications</p>
						 </div>
					   </>';
					 }




					 



					 $query = "SELECT  count(*) FROM contact WHERE contStatus=0";

					 $result_query2 = $db->prepare($query);
					 $result_query2->execute();
					 $count = $result_query2->fetchColumn();

					 $data = array(

						  'notification' =>$output,
						  'unseen_notification' =>$count
					 );


					 







					echo json_encode($data);


				}
		break;

	case 'all_messages': 

		if(isset($_SESSION['user_id'])  && $_SESSION['user_role']==1){

			if(isset($_SESSION['error_google'])){

				unset($_SESSION['error_google']);
			}

			$utilisateur = new UtilisateurManager($db);

			$result_query1 = $utilisateur->getRows("SELECT * FROM contact WHERE contState=0",array());
			$result_query2 = $utilisateur->getRows("SELECT * FROM contact WHERE contState=1",array());

			require("Vues/backend/all_messages.php");

		}else{

			require("Vues/backend/login.php");
		}
		break;

	case 'message_suppression':
		$id = $_POST['id'];

		$utilisateur = new UtilisateurManager($db);
		$result_query = $utilisateur->deleteRow("DELETE FROM contact WHERE contId=?",array($id));

		$data['message'] ="supprimé avec succès";
		echo json_encode($data); 
		break;

	case 'voir_message': 
		$id = $_POST['id'];

		$utilisateur = new UtilisateurManager($db);
		$result_query = $utilisateur->updateRow1("UPDATE contact SET contState=1 WHERE contId=?",array($id));

		$data["message"] = "ok";

		
		echo json_encode($data); 
		
		break;

	case 'alter_password':
		if(isset($_SESSION['user_id'])  && $_SESSION['user_role']==1){

			if(isset($_SESSION['error_google'])){

				unset($_SESSION['error_google']);
			}

			;

			require("Vues/backend/alter_password.php");

		}else{

			require("Vues/backend/login.php");
		} 
		break;

	case 'alter_password_run1':

		$email = $_POST['email'];
		$utilisateur = new UtilisateurManager($db);
		$result_query = $utilisateur->getRow("SELECT * FROM utilisateur WHERE userEmail=?",array($email)); 

		if($result_query){

				$data['position']=1;
		}else{

				$data['position']=0;
		}

		echo json_encode($data);
		break;

	case 'alter_password_run2': 

		    $password = $_POST['password'];

			$password = password_hash($password,PASSWORD_DEFAULT);

			$utilisateur = new UtilisateurManager($db);

			$result_query = $utilisateur->updateRow1("UPDATE utilisateur SET userPassword=? WHERE userId=?",array($password,$_SESSION["user_id"]));

			$data["message"]  = "Mis à jour avec succès !";

			echo json_encode($data);
		break;
		
	
	default:

	       $utilisateur = new UtilisateurManager($db);

		   $result_query1 = $utilisateur->getRow("SELECT * FROM utilisateur",array());

		   $result_query2 = $utilisateur->getRow("SELECT * FROM usersocialnetwork");

		   $result_query3 = $utilisateur->getRows("SELECT * FROM education");

		   $result_query4 = $utilisateur->getRows("SELECT * FROM experience",array());

		   $professionels = $utilisateur->getRows("SELECT * FROM skills WHERE stId=?",array(1));
		   $personnels = $utilisateur->getRows("SELECT * FROM skills WHERE stId=?",array(2));
		   $logiciels = $utilisateur->getRows("SELECT * FROM skills WHERE stId=?",array(3));

		   $result_query5 = $utilisateur->getRows("SELECT * FROM interests LIMIT 6");



		
		   require("Vues/front/index.php");
		break;
}

 

 ?>

 