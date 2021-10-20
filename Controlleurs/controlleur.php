<?php 

session_start();
$p=!empty($_GET['p'])?$_GET['p']:"";

$fonction  = new fonctions();


if(isset($_GET['p']) && !empty($_GET['p'])){

	$p = $fonction->double_decryptage($_GET['p']);
}





switch ($p) {
	case 'forms_basic': 
		require("Vues/back/forms_basic.php");
		break;
	case 'family':
		$ec_family_manager = new Ec_familleManager($db);

		 $families = $ec_family_manager->getRows("SELECT * FROM ec_famille ORDER BY famille_id DESC");

		 



		require("Vues/back/product_family.php");

		break;
	case 'run_add_family':

		$ec_family_manager = new Ec_familleManager($db);

		

		
		$description = !empty($_POST['description'])?$_POST['description']:'';
		$libelle = !empty($_POST['nom'])?$_POST['nom']:'';


		$existence_request = $ec_family_manager->getRow("SELECT * FROM ec_famille WHERE famille_libelle=?",array(strtolower($libelle)));

		

		if(!$existence_request){


		

		
		

		

		

		 if(isset($_FILES) && !empty($_FILES)){


			$fileTmpName = $_FILES['image']['tmp_name'];

			$imageName = $_FILES['image']['name'];

			$fileExt = explode('.',$imageName);
			$fileActualExt = strtolower(end($fileExt));

			$allowed = array('jpg','jpeg','png');


						if(in_array($fileActualExt,$allowed)){


							

							$imageNew = uniqid('',true).".".$fileActualExt;

							$fileDestination = 'assets/images/families/'.$imageNew;

							move_uploaded_file($fileTmpName,$fileDestination);



							$ec_family_manager->insertRow("INSERT INTO ec_famille(famille_libelle,famille_description,famille_image) VALUES(?,?,?)",array(strtolower($libelle),$description,$imageNew));


							$data['message'] = "Sauvegarder avec succès";
							$data['code'] = 1;

					}else{

						$data['message'] = "ce document n'est pas supporté";
						$data['code'] = 0;
					}


		 }else{


			$ec_family_manager->insertRow("INSERT INTO ec_famille(famille_libelle,famille_description) VALUES(?,?)",array(strtolower($libelle),$description));


			$data['message'] = "Sauvegarder avec succès";
			$data['code'] = 1;


		 }

		

		

		




		// $ec_family = new Ec_famille($_POST);

		

		// $id_family =  $ec_family_manager->Enregistrer($ec_family);

		



	}else{


		$data['message'] = "Cette Famille existe";
		$data['code'] = 0;
	}



		
		
		

		echo json_encode($data);
		break;

	case 'run_update_family': 


		$ec_family_manager = new Ec_familleManager($db);

		

		
		$description = !empty($_POST['description'])?$_POST['description']:'';
		$libelle = !empty($_POST['nom'])?$_POST['nom']:'';
		$id = !empty($_POST['id'])?$_POST['id']:'';

		// var_dump($_POST['id']);
		// die();


		





		$existence_request = $ec_family_manager->getRow("SELECT * FROM ec_famille WHERE famille_libelle=?",array(strtolower($libelle)));

		

		if(!$existence_request){


		

		
		

		

		

		 if(isset($_FILES) && !empty($_FILES)){


			$fileTmpName = $_FILES['image']['tmp_name'];

			$imageName = $_FILES['image']['name'];

			$fileExt = explode('.',$imageName);
			$fileActualExt = strtolower(end($fileExt));

			$allowed = array('jpg','jpeg','png');


						if(in_array($fileActualExt,$allowed)){


							

							$imageNew = uniqid('',true).".".$fileActualExt;

							$fileDestination = 'assets/images/families/'.$imageNew;

							move_uploaded_file($fileTmpName,$fileDestination);



							// $ec_family_manager->insertRow("INSERT INTO ec_famille(famille_libelle,famille_description,famille_image) VALUES(?,?,?)",array(strtolower($libelle),$description,$imageNew));

							$ec_family_manager->updateRow1("UPDATE ec_famille SET famille_libelle=?,famille_description=?,famille_image=? WHERE famille_id=?",array(strtolower($libelle),$description,$imageNew,$id));


							$data['message'] = "Modifier avec succès";
							$data['code'] = 1;

					}else{

						$data['message'] = "ce document n'est pas supporté";
						$data['code'] = 0;
					}


		 }else{


			$image = !empty($_POST['image'])?$_POST['image']:'';


			// $ec_family_manager->insertRow("INSERT INTO ec_famille(famille_libelle,famille_description) VALUES(?,?)",array(strtolower($libelle),$description));

			$ec_family_manager->updateRow1("UPDATE ec_famille SET famille_libelle=?,famille_description=?,famille_image=? WHERE famille_id=?",array(strtolower($libelle),$description,$image,$id));

			


			$data['message'] = "Modifié avec succès";
			$data['code'] = 1;


		 }

		

		

		




		// $ec_family = new Ec_famille($_POST);

		

		// $id_family =  $ec_family_manager->Enregistrer($ec_family);

		



	}else{


		$data['message'] = "Cette Famille existe";
		$data['code'] = 0;
	}















		

		echo json_encode($data);
		break;

	case 'run_delete_family':

		$id  = $_POST['id'];

		$ec_family_manager = new Ec_familleManager($db);


		$delete_query = $ec_family_manager->deleteRow("DELETE FROM ec_famille WHERE famille_id=?",array($id));

		$data['response']="ok";
		
			echo   json_encode($data);
		break;


	case 'run_delete_many_families': 

		$ec_family_manager = new Ec_familleManager($db);

		    $myid = $_POST['id'];

			$id = str_replace(' ',',',$myid);


			$result = $ec_family_manager->deleteRow("DELETE FROM ec_famille WHERE famille_id in($id) ",array());

			
			$data['response']="ok";

		    echo json_encode($data);
		break;


	// here , we build sub-families 

	case 'sub_family': 

		$ec_family_manager = new Ec_familleManager($db);

		$families = $ec_family_manager->getRows("SELECT * FROM ec_famille",array());


		$sub_families = $ec_family_manager->getRows("SELECT * FROM ec_sous_famille	ORDER BY sous_famille_id DESC",array());

		

		
		require("Vues/back/product_sub_family.php");
		

		break;

	case 'run_add_sub_family': 




		$ec_family_manager = new Ec_familleManager($db);

		

		
		$description = !empty($_POST['description'])?$_POST['description']:'';
		$libelle = !empty($_POST['nom'])?$_POST['nom']:'';
		$top_family_name = !empty($_POST['top_family_name'])?$_POST['top_family_name']:'';


		$existence_request = $ec_family_manager->getRow("SELECT * FROM ec_sous_famille WHERE sous_famille_libelle=? AND famille_id=?",array(strtolower($libelle),$top_family_name));

		

		if(!$existence_request){


		

		
		

		

		

		 if(isset($_FILES) && !empty($_FILES)){


			$fileTmpName = $_FILES['image']['tmp_name'];

			$imageName = $_FILES['image']['name'];

			$fileExt = explode('.',$imageName);
			$fileActualExt = strtolower(end($fileExt));

			$allowed = array('jpg','jpeg','png');


						if(in_array($fileActualExt,$allowed)){


							

							$imageNew = uniqid('',true).".".$fileActualExt;

							$fileDestination = 'assets/images/sub_families/'.$imageNew;

							move_uploaded_file($fileTmpName,$fileDestination);



							$ec_family_manager->insertRow("INSERT INTO ec_sous_famille(sous_famille_libelle,sous_famille_description,sous_famille_image,famille_id) VALUES(?,?,?,?)",array(strtolower($libelle),$description,$imageNew,$top_family_name));


							$data['message'] = "Sauvegarder avec succès";
							$data['code'] = 1;

					}else{

						$data['message'] = "ce document n'est pas supporté";
						$data['code'] = 0;
					}


		 }else{


			$ec_family_manager->insertRow("INSERT INTO ec_sous_famille(sous_famille_libelle,sous_famille_description,famille_id) VALUES(?,?,?)",array(strtolower($libelle),$description,$top_family_name));


			$data['message'] = "Sauvegarder avec succès";
			$data['code'] = 1;


		 }

		

		

		




		// $ec_family = new Ec_famille($_POST);

		

		// $id_family =  $ec_family_manager->Enregistrer($ec_family);

		



	}else{


		$data['message'] = "Cette Famille existe";
		$data['code'] = 0;
	}


	


		echo json_encode($data);
		break;
		
		
	case 'run_update_sub_family': 

		$ec_family_manager = new Ec_familleManager($db);

		

		
		$description = !empty($_POST['description'])?$_POST['description']:'';
		$libelle = !empty($_POST['nom'])?$_POST['nom']:'';
		$id = !empty($_POST['id'])?$_POST['id']:'';
		$id_top = !empty($_POST['id_top'])?$_POST['id_top']:'';

		// var_dump($_POST['id']);
		// die();


		





		$existence_request = $ec_family_manager->getRow("SELECT * FROM ec_sous_famille WHERE sous_famille_libelle=?",array(strtolower($libelle)));

		

		if(!$existence_request){


		

		
		

		

		

		 if(isset($_FILES) && !empty($_FILES)){


			$fileTmpName = $_FILES['image']['tmp_name'];

			$imageName = $_FILES['image']['name'];

			$fileExt = explode('.',$imageName);
			$fileActualExt = strtolower(end($fileExt));

			$allowed = array('jpg','jpeg','png');


						if(in_array($fileActualExt,$allowed)){


							

							$imageNew = uniqid('',true).".".$fileActualExt;

							$fileDestination = 'assets/images/sub_families/'.$imageNew;

							move_uploaded_file($fileTmpName,$fileDestination);



							// $ec_family_manager->insertRow("INSERT INTO ec_famille(famille_libelle,famille_description,famille_image) VALUES(?,?,?)",array(strtolower($libelle),$description,$imageNew));

							$ec_family_manager->updateRow1("UPDATE ec_sous_famille SET sous_famille_libelle=?,sous_famille_description=?,sous_famille_image=?,famille_id=? WHERE sous_famille_id=?",array(strtolower($libelle),$description,$imageNew,$id_top,$id));


							$data['message'] = "Modifier avec succès";
							$data['code'] = 1;

					}else{

						$data['message'] = "ce document n'est pas supporté";
						$data['code'] = 0;
					}


		 }else{


			$image = !empty($_POST['image'])?$_POST['image']:'';


			// $ec_family_manager->insertRow("INSERT INTO ec_famille(famille_libelle,famille_description) VALUES(?,?)",array(strtolower($libelle),$description));

			$ec_family_manager->updateRow1("UPDATE ec_sous_famille SET sous_famille_libelle=?,sous_famille_description=?,sous_famille_image=?,famille_id=? WHERE sous_famille_id=?",array(strtolower($libelle),$description,$image,$id_top,$id));

			


			$data['message'] = "Modifié avec succès";
			$data['code'] = 1;


		 }

		

		

		




		// $ec_family = new Ec_famille($_POST);

		

		// $id_family =  $ec_family_manager->Enregistrer($ec_family);

		



	}else{


		$data['message'] = "Cette Famille existe";
		$data['code'] = 0;
	}



		echo json_encode($data);
		break;

	case 'run_delete_sub_family': 


		$id  = $_POST['id'];

		$ec_family_manager = new Ec_familleManager($db);


		$delete_query = $ec_family_manager->deleteRow("DELETE FROM ec_sous_famille WHERE sous_famille_id=?",array($id));

		$data['response']="ok";
		
			echo   json_encode($data);



		break;

	case 'run_delete_many_sub_families': 

		$ec_family_manager = new Ec_familleManager($db);

		    $myid = $_POST['id'];

			$id = str_replace(' ',',',$myid);


			$result = $ec_family_manager->deleteRow("DELETE FROM ec_sous_famille WHERE sous_famille_id in($id) ",array());

			
			$data['response']="ok";

		    echo json_encode($data);


		break;

	case 'category': 


		$ec_family_manager = new Ec_familleManager($db);

		$families = $ec_family_manager->getRows("SELECT * FROM ec_sous_famille",array());


		$category_families = $ec_family_manager->getRows("SELECT * FROM ec_categorie	ORDER BY categorie_id DESC",array());

		

		
		require("Vues/back/product_category.php");
		break;


	case 'run_add_category': 


		

		$ec_family_manager = new Ec_familleManager($db);

		

		
		$description = !empty($_POST['description'])?$_POST['description']:'';
		$libelle = !empty($_POST['nom'])?$_POST['nom']:'';
		$top_family_name = !empty($_POST['top_family_name'])?$_POST['top_family_name']:'';


		$existence_request = $ec_family_manager->getRow("SELECT * FROM categorie_famille WHERE categorie_libelle=? AND sous_famille_id=?",array(strtolower($libelle),$top_family_name));

		

		if(!$existence_request){


		

		
		

		

		

		 if(isset($_FILES) && !empty($_FILES)){


			$fileTmpName = $_FILES['image']['tmp_name'];

			$imageName = $_FILES['image']['name'];

			$fileExt = explode('.',$imageName);
			$fileActualExt = strtolower(end($fileExt));

			$allowed = array('jpg','jpeg','png');


						if(in_array($fileActualExt,$allowed)){


							

							$imageNew = uniqid('',true).".".$fileActualExt;

							$fileDestination = 'assets/images/categories/'.$imageNew;

							move_uploaded_file($fileTmpName,$fileDestination);



							$ec_family_manager->insertRow("INSERT INTO ec_categorie(categorie_libelle,categorie_description,categorie_image,sous_famille_id) VALUES(?,?,?,?)",array(strtolower($libelle),$description,$imageNew,$top_family_name));


							$data['message'] = "Sauvegarder avec succès";
							$data['code'] = 1;

					}else{

						$data['message'] = "ce document n'est pas supporté";
						$data['code'] = 0;
					}


		 }else{


			$ec_family_manager->insertRow("INSERT INTO ec_categorie(categorie_libelle,categorie_description,sous_famille_id) VALUES(?,?,?)",array(strtolower($libelle),$description,$top_family_name));


			$data['message'] = "Sauvegarder avec succès";
			$data['code'] = 1;


		 }

		

		

		




		// $ec_family = new Ec_famille($_POST);

		

		// $id_family =  $ec_family_manager->Enregistrer($ec_family);

		



	}else{


		$data['message'] = "Cette Famille existe";
		$data['code'] = 0;
	}


	

		echo json_encode($data);
		break;


	case 'run_update_category': 


		$ec_family_manager = new Ec_familleManager($db);

		

		
		$description = !empty($_POST['description'])?$_POST['description']:'';
		$libelle = !empty($_POST['nom'])?$_POST['nom']:'';
		$id = !empty($_POST['id'])?$_POST['id']:'';
		$id_top = !empty($_POST['id_top'])?$_POST['id_top']:'';

		// var_dump($_POST['id']);
		// die();


		





		$existence_request = $ec_family_manager->getRow("SELECT * FROM ec_categorie WHERE categorie_libelle=?",array(strtolower($libelle)));

		

		if(!$existence_request){


		

		
		

		

		

		 if(isset($_FILES) && !empty($_FILES)){


			$fileTmpName = $_FILES['image']['tmp_name'];

			$imageName = $_FILES['image']['name'];

			$fileExt = explode('.',$imageName);
			$fileActualExt = strtolower(end($fileExt));

			$allowed = array('jpg','jpeg','png');


						if(in_array($fileActualExt,$allowed)){


							

							$imageNew = uniqid('',true).".".$fileActualExt;

							$fileDestination = 'assets/images/categories/'.$imageNew;

							move_uploaded_file($fileTmpName,$fileDestination);



							// $ec_family_manager->insertRow("INSERT INTO ec_famille(famille_libelle,famille_description,famille_image) VALUES(?,?,?)",array(strtolower($libelle),$description,$imageNew));

							$ec_family_manager->updateRow1("UPDATE ec_categorie SET categorie_libelle=?,categorie_description=?,categorie_image=?,sous_famille_id=? WHERE categorie_id=?",array(strtolower($libelle),$description,$imageNew,$id_top,$id));


							$data['message'] = "Modifier avec succès";
							$data['code'] = 1;

					}else{

						$data['message'] = "ce document n'est pas supporté";
						$data['code'] = 0;
					}


		 }else{


			$image = !empty($_POST['image'])?$_POST['image']:'';


			// $ec_family_manager->insertRow("INSERT INTO ec_famille(famille_libelle,famille_description) VALUES(?,?)",array(strtolower($libelle),$description));

			$ec_family_manager->updateRow1("UPDATE ec_categorie SET categorie_libelle=?,categorie_description=?,categorie_image=?,sous_famille_id=? WHERE categorie_id=?",array(strtolower($libelle),$description,$image,$id_top,$id));

			


			$data['message'] = "Modifié avec succès";
			$data['code'] = 1;


		 }

		

		

		




		// $ec_family = new Ec_famille($_POST);

		

		// $id_family =  $ec_family_manager->Enregistrer($ec_family);

		



	}else{


		$data['message'] = "Cette Famille existe";
		$data['code'] = 0;
	}




		echo json_encode($data);
		break;


	case 'run_delete_category': 

		$id  = $_POST['id'];

		$ec_family_manager = new Ec_familleManager($db);


		$delete_query = $ec_family_manager->deleteRow("DELETE FROM ec_categorie WHERE categorie_id=?",array($id));

		$data['response']="ok";
		
			echo   json_encode($data);


		break;

	case 'run_delete_many_categories': 


		$ec_family_manager = new Ec_familleManager($db);

		    $myid = $_POST['id'];

			$id = str_replace(' ',',',$myid);


			$result = $ec_family_manager->deleteRow("DELETE FROM ec_categorie WHERE categorie_id in($id) ",array());

			
			$data['response']="ok";

		    echo json_encode($data);


		break;

	case 'brand': 


		$ec_family_manager = new Ec_familleManager($db);

		$brands = $ec_family_manager->getRows("SELECT * FROM ec_marque ORDER BY marque_id DESC");

		require("Vues/back/product_brand.php");
		break;


	case 'run_add_brand': 


		$ec_family_manager = new Ec_familleManager($db);

		$nom = $_POST['nom'];


		$existence_request = $ec_family_manager->getRow("SELECT * FROM ec_marque WHERE marque_libelle=?",array(strtolower($nom)));

		

		if(!$existence_request){



			$result = $ec_family_manager->insertRow("INSERT INTO ec_marque(marque_libelle) VALUES(?)",array($nom));

			$data['message'] = "Cette Marque est enregistré avec succès";
			$data['code'] = 1;


		}else{


			$data['message'] = "Cette Marque existe";
			$data['code'] = 0;
		}

		

		echo json_encode($data);
		break;

	case 'run_update_brand': 

		$ec_family_manager = new Ec_familleManager($db);

		$nom = $_POST['nom'];
		$id = $_POST['id'];


		$existence_request = $ec_family_manager->getRow("SELECT * FROM ec_marque WHERE marque_libelle=?",array(strtolower($nom)));

		

		if(!$existence_request){



			$result = $ec_family_manager->updateRow1("UPDATE ec_marque SET marque_libelle=? WHERE marque_id=?",array($nom,$id));


			$data['message'] = "Cette Marque est modifié avec succès";
			$data['code'] = 1;


		}else{


			$data['message'] = "Cette Marque existe";
			$data['code'] = 0;
		}

		

		echo json_encode($data);
		break;

	case 'run_delete_brand': 


		$id  = $_POST['id'];

		$ec_family_manager = new Ec_familleManager($db);


		$delete_query = $ec_family_manager->deleteRow("DELETE FROM ec_marque WHERE marque_id=?",array($id));

		$data['response']="ok";
		
			echo   json_encode($data);


		break;

	case 'run_delete_many_brands': 


		$ec_family_manager = new Ec_familleManager($db);

		    $myid = $_POST['id'];

			$id = str_replace(' ',',',$myid);


			$result = $ec_family_manager->deleteRow("DELETE FROM ec_marque WHERE marque_id in($id) ",array());

			
			$data['response']="ok";

		    echo json_encode($data);


		break;


	case 'color': 

		$ec_family_manager = new Ec_familleManager($db);

		$colors = $ec_family_manager->getRows("SELECT * FROM ec_article_couleur ORDER BY article_couleur_id DESC");

		require("Vues/back/product_color.php");
		
		break;

	case 'run_add_color': 


		$ec_family_manager = new Ec_familleManager($db);

		$nom = $_POST['nom'];


		$existence_request = $ec_family_manager->getRow("SELECT * FROM ec_article_couleur WHERE article_couleur_libelle=?",array(strtolower($nom)));

		

		if(!$existence_request){



			$result = $ec_family_manager->insertRow("INSERT INTO ec_article_couleur(article_couleur_libelle) VALUES(?)",array(strtolower($nom)));

			$data['message'] = "Cette Couleur est enregistré avec succès";
			$data['code'] = 1;


		}else{


			$data['message'] = "Cette Couleur existe";
			$data['code'] = 0;
		}

		

		echo json_encode($data);

		
		break;

	case 'run_update_color': 

		$ec_family_manager = new Ec_familleManager($db);

		$nom = $_POST['nom'];
		$id = $_POST['id'];


		$existence_request = $ec_family_manager->getRow("SELECT * FROM ec_article_couleur WHERE article_couleur_libelle=?",array(strtolower($nom)));

		

		if(!$existence_request){



			$result = $ec_family_manager->updateRow1("UPDATE ec_article_couleur SET article_couleur_libelle=? WHERE article_couleur_id=?",array(strtolower($nom),$id));


			$data['message'] = "Cette Couleur est modifié avec succès";
			$data['code'] = 1;


		}else{


			$data['message'] = "Cette Couleur existe";
			$data['code'] = 0;
		}

		

		echo json_encode($data);

		
		break;


	case 'run_delete_color': 


		$id  = $_POST['id'];

		$ec_family_manager = new Ec_familleManager($db);


		$delete_query = $ec_family_manager->deleteRow("DELETE FROM ec_article_couleur WHERE article_couleur_id=?",array($id));

		$data['response']="ok";
		
			echo   json_encode($data);


		break;

case 'run_delete_many_colors': 


		$ec_family_manager = new Ec_familleManager($db);

		    $myid = $_POST['id'];

			$id = str_replace(' ',',',$myid);


			$result = $ec_family_manager->deleteRow("DELETE FROM ec_article_couleur WHERE article_couleur_id in($id) ",array());

			
			$data['response']="ok";

		    echo json_encode($data);


		break;

	case 'size': 

			$ec_family_manager = new Ec_familleManager($db);
	
			$sizes = $ec_family_manager->getRows("SELECT * FROM ec_taille_pointure WHERE taille_pointure_type=0  ORDER BY taille_pointure_id DESC");
	
			require("Vues/back/product_size.php");
			
			break;
	
	case 'run_add_size': 
	
	
			$ec_family_manager = new Ec_familleManager($db);
	
			$nom = $_POST['nom'];
	
	
			$existence_request = $ec_family_manager->getRow("SELECT * FROM ec_taille_pointure WHERE taille_pointure_libelle=?",array(strtolower($nom)));
	
			
	
			if(!$existence_request){
	
	
	
				$result = $ec_family_manager->insertRow("INSERT INTO ec_taille_pointure(taille_pointure_libelle,taille_pointure_type) VALUES(?,?)",array(strtolower($nom),0));
	
				$data['message'] = "Cette Taille est enregistré avec succès";
				$data['code'] = 1;
	
	
			}else{
	
	
				$data['message'] = "Cette Taille existe";
				$data['code'] = 0;
			}
	
			
	
			echo json_encode($data);
	
			
			break;
	
	case 'run_update_size': 
	
			$ec_family_manager = new Ec_familleManager($db);
	
			$nom = $_POST['nom'];
			$id = $_POST['id'];
	
	
			$existence_request = $ec_family_manager->getRow("SELECT * FROM ec_taille_pointure WHERE taille_pointure_libelle=?",array(strtolower($nom)));
	
			
	
			if(!$existence_request){
	
	
	
				$result = $ec_family_manager->updateRow1("UPDATE ec_taille_pointure SET taille_pointure_libelle=? WHERE taille_pointure_id=?",array(strtolower($nom),$id));
	
	
				$data['message'] = "Cette Taille est modifié avec succès";
				$data['code'] = 1;
	
	
			}else{
	
	
				$data['message'] = "Cette Taille existe";
				$data['code'] = 0;
			}
	
			
	
			echo json_encode($data);
	
			
			break;
	
	
	case 'run_delete_size': 
	
	
			$id  = $_POST['id'];
	
			$ec_family_manager = new Ec_familleManager($db);
	
	
			$delete_query = $ec_family_manager->deleteRow("DELETE FROM ec_taille_pointure WHERE taille_pointure_id=?",array($id));
	
			$data['response']="ok";
			
				echo   json_encode($data);
	
	
			break;
	
	case 'run_delete_many_sizes': 
	
	
			$ec_family_manager = new Ec_familleManager($db);
	
				$myid = $_POST['id'];
	
				$id = str_replace(' ',',',$myid);
	
	
				$result = $ec_family_manager->deleteRow("DELETE FROM ec_taille_pointure WHERE taille_pointure_id in($id) ",array());
	
				
				$data['response']="ok";
	
				echo json_encode($data);
	
	
			break;

	case 'shoeSize': 

				$ec_family_manager = new Ec_familleManager($db);
		
				$sizes = $ec_family_manager->getRows("SELECT * FROM ec_taille_pointure WHERE taille_pointure_type=1  ORDER BY taille_pointure_id DESC");
		
				require("Vues/back/product_shoeSize.php");
				
				break;
		
	case 'run_add_shoeSize': 
		
		
				$ec_family_manager = new Ec_familleManager($db);
		
				$nom = $_POST['nom'];
		
		
				$existence_request = $ec_family_manager->getRow("SELECT * FROM ec_taille_pointure WHERE taille_pointure_libelle=?",array(strtolower($nom)));
		
				
		
				if(!$existence_request){
		
		
		
					$result = $ec_family_manager->insertRow("INSERT INTO ec_taille_pointure(taille_pointure_libelle,taille_pointure_type) VALUES(?,?)",array(strtolower($nom),1));
		
					$data['message'] = "Cette Pointure est enregistré avec succès";
					$data['code'] = 1;
		
		
				}else{
		
		
					$data['message'] = "Cette Pointure existe";
					$data['code'] = 0;
				}
		
				
		
				echo json_encode($data);
		
				
				break;
		
	case 'run_update_shoeSize': 
		
				$ec_family_manager = new Ec_familleManager($db);
		
				$nom = $_POST['nom'];
				$id = $_POST['id'];
		
		
				$existence_request = $ec_family_manager->getRow("SELECT * FROM ec_taille_pointure WHERE taille_pointure_libelle=?",array(strtolower($nom)));
		
				
		
				if(!$existence_request){
		
		
		
					$result = $ec_family_manager->updateRow1("UPDATE ec_taille_pointure SET taille_pointure_libelle=? WHERE taille_pointure_id=?",array(strtolower($nom),$id));
		
		
					$data['message'] = "Cette Pointure est modifié avec succès";
					$data['code'] = 1;
		
		
				}else{
		
		
					$data['message'] = "Cette Pointure existe";
					$data['code'] = 0;
				}
		
				
		
				echo json_encode($data);
		
				
				break;

		
		
	case 'run_delete_shoeSize': 
		
		
				$id  = $_POST['id'];
		
				$ec_family_manager = new Ec_familleManager($db);
		
		
				$delete_query = $ec_family_manager->deleteRow("DELETE FROM ec_taille_pointure WHERE taille_pointure_id=?",array($id));
		
				$data['response']="ok";
				
					echo   json_encode($data);
		
		
				break;
		
	case 'run_delete_many_shoeSizes': 
		
		
				$ec_family_manager = new Ec_familleManager($db);
		
					$myid = $_POST['id'];
		
					$id = str_replace(' ',',',$myid);
		
		
					$result = $ec_family_manager->deleteRow("DELETE FROM ec_taille_pointure WHERE taille_pointure_id in($id) ",array());
		
					
					$data['response']="ok";
		
					echo json_encode($data);
		
		
				break;

	case 'list_article_page': 

		$ec_family_manager = new Ec_familleManager($db);

		$articles = $ec_family_manager->getRows("SELECT * FROM ec_article    ORDER BY article_id DESC");

		// var_dump($articles);
		// die();

		require("Vues/back/product_list_article_page.php");





		        break;

	case 'add_article_page': 


				$ec_family_manager = new Ec_familleManager($db);

				$categories = $ec_family_manager->getRows("SELECT * FROM ec_categorie");

				$brands = $ec_family_manager->getRows("SELECT * FROM ec_marque");





				$liste_taille = $ec_family_manager->getRows("SELECT * FROM ec_taille_pointure WHERE taille_pointure_type=0",array());

				$liste_couleur = $ec_family_manager->getRows("SELECT * FROM ec_article_couleur",array());

				// var_dump($liste_couleur);
				// die();


				$liste_pointure = $ec_family_manager->getRows("SELECT * FROM ec_taille_pointure WHERE taille_pointure_type=1",array());













				require("Vues/back/product_add_article_page.php");


				
				break;

	case 'run_add_article': 


		$ec_family_manager = new Ec_familleManager($db);

		    $prodcut_description = !empty($_POST['prodcut_description'])?$_POST['prodcut_description']:'';
		    $product_brand = !empty($_POST['product_brand'])?$_POST['product_brand']:'';
		    $product_category = !empty($_POST['product_category'])?$_POST['product_category']:'';
		    $product_price = !empty($_POST['product_price'])?$_POST['product_price']:'';
		    $product_quantity = !empty($_POST['product_quantity'])?$_POST['product_quantity']:'';
		    $product_libelle = !empty($_POST['product_libelle'])?$_POST['product_libelle']:'';


		    $section = !empty($_POST['section'])?$_POST['section']:'';

		    $inputoptions = !empty($_POST['inputoptions'])?$_POST['inputoptions']:'';
		    $inputvalues = !empty($_POST['inputvalues'])?$_POST['inputvalues']:'';


			// var_dump($_POST['inputoptions']);
			// die();

			

		

			if($section=="option_radio_input"){


			$option = "option";

			


				

				

				$article_store_id = $ec_family_manager->insertRowChrisHede1("INSERT INTO ec_article(categorie_id,article_libelle,article_description,article_prix,marque_id,article_qte,article_qtestock,article_option) VALUES(?,?,?,?,?,?,?,?)",array($product_category,$product_libelle,$prodcut_description,$product_price,$product_brand,$product_quantity,$product_quantity,$option));




				


				if(isset($_FILES)){

                           $images = $_FILES['image_libelle'];

						   $imagesName = $images['name'];
						   $imagesTpmName  = $images['tmp_name'];

						  $removed_images_str = $_POST['removed_images_str'];

						  $removed_images_array = explode(',',$removed_images_str);


						 foreach($imagesName as $key => $imagename ){

							       if(!in_array($imagename,$removed_images_array)){


									



							

									$fileTmpName = $imagesTpmName[$key];
									
									$fileExt = explode('.',$imagename);
									$fileActualExt = strtolower(end($fileExt));
									$imageNewName = uniqid('',true).".".$fileActualExt;
									$fileDestination = 'assets/images/articles/'.$imageNewName;
									move_uploaded_file($fileTmpName,$fileDestination);


									$images_store = $ec_family_manager->insertRow("INSERT INTO ec_image(image_url,article_id) VALUES(?,?)",array($imageNewName,$article_store_id));



									
									



									    
								   }
						 }

						


				}

				if(isset($inputoptions) || isset($inputvalues)){



					 foreach($inputoptions as $key =>  $input){

						 
							$option_store = $ec_family_manager->insertRow("INSERT INTO ec_option_parametre(option_parametre_parametre,option_parametre_libelle,article_id) VALUES(?,?,?) ",array($input,$inputvalues[$key],$article_store_id));

						 
					 }


					     
				}





					

			
			 






				$data['message'] = "Cet article est ajouté avec succès";
				$data['code'] = 1;
			}


			if($section=="taille_radio_input" || $section=="pointure_radio_input"){


				
				// echo json_encode($_POST);
				// die();


						$taille=array();
						$qte_taille=0;
						if(!empty($_POST['taille_id'])){
						foreach ($_POST['taille_id'] as $key => $value) {
						if(in_array($value, array_keys($_POST))){
						if(!empty($_POST[$value])){
						array_push($taille, $value.':'.$_POST[$value]);
						$qte_taille+=intval($_POST[$value]);
						}
						}
						}
						}

						if(!empty($_POST['couleur_id'])){
						foreach ($_POST['couleur_id'] as $key => $value) {

						}
						}

						$couleur=array();
						$qte_couleur=0;



				if($section=="taille_radio_input"){



					$option = "taille";



				$article_store_id = $ec_family_manager->insertRowChrisHede1("INSERT INTO ec_article(categorie_id,article_libelle,article_description,article_prix,marque_id,article_qte,article_qtestock,article_option) VALUES(?,?,?,?,?,?,?,?)",array($product_category,$product_libelle,$prodcut_description,$product_price,$product_brand,$qte_taille,$qte_taille,$option));




				}else{


					$option = "pointure";



					$article_store_id = $ec_family_manager->insertRowChrisHede1("INSERT INTO ec_article(categorie_id,article_libelle,article_description,article_prix,marque_id,article_qte,article_qtestock,article_option) VALUES(?,?,?,?,?,?,?,?)",array($product_category,$product_libelle,$prodcut_description,$product_price,$product_brand,$qte_taille,$qte_taille,$option));


				}


			


				




				if(isset($_FILES)){

					$images = $_FILES['image_libelle'];

					$imagesName = $images['name'];
					$imagesTpmName  = $images['tmp_name'];

				   $removed_images_str = $_POST['removed_images_str'];

				   $removed_images_array = explode(',',$removed_images_str);


				  foreach($imagesName as $key => $imagename ){

							if(!in_array($imagename,$removed_images_array)){


							 



					 

							 $fileTmpName = $imagesTpmName[$key];
							 
							 $fileExt = explode('.',$imagename);
							 $fileActualExt = strtolower(end($fileExt));
							 $imageNewName = uniqid('',true).".".$fileActualExt;
							 $fileDestination = 'assets/images/articles/'.$imageNewName;
							 move_uploaded_file($fileTmpName,$fileDestination);


							 $images_store = $ec_family_manager->insertRow("INSERT INTO ec_image(image_url,article_id) VALUES(?,?)",array($imageNewName,$article_store_id));



							 
							 



								 
							}
				  }

				 


		 }






						

						
						if(!empty($taille))
						$_POST['produit_taille']=implode(',', $taille);
						else
						$_POST['produit_taille']='';

						if(!empty($couleur))
						$_POST['produit_couleur']=implode(',', $couleur);
						else
						$_POST['produit_couleur']='';


						$_POST['produit_quantite']=$qte_taille;
						$POST['taille_id']=$_POST['taille_id'];
						$POST['couleur_id']=$_POST['couleur_id'];

						// var_dump($_POST['couleur_id']);
						// die();


						$donnees=array();
						if(!empty($POST['taille_id'])){
						foreach ($POST['taille_id'] as $cle => $valeur) {
						$tailleQte=$valeur.':'.$_POST[$valeur];
						foreach ($POST['couleur_id'] as $key => $value) {
						if(!empty($value)){
						$value=str_replace(' ', '_', $value);
						$nouveau=explode('|', $value);
						$nouveau0=!empty($nouveau[0])?$nouveau[0]:'';
						$nouveau1=!empty($nouveau[1])?$nouveau[1]:'';
						if($valeur==$nouveau[0]){
						$donnees['atcq_taille']=$valeur;
						$donnees['atcq_qte']=$_POST[$value];

						$donnees['atcq_couleur']=$nouveau[1];
						// $donnees['produit_id']=$reponse;

						$quantity = $donnees['atcq_qte'];





							$parametre_article_store = $ec_family_manager->insertRow("INSERT INTO ec_parametre_article(parametre_article_couleur,parametre_article_taille_pointure,parametre_article_quantite,article_id) VALUES(?,?,?,?)",array($nouveau[1],$valeur,$quantity,$article_store_id));



							if($section=="taille_radio_input"){

								$ec_parametre_liste_store =  $ec_family_manager->insertRow("INSERT INTO ec_parametre_liste(parametre_liste_liste,parametre_liste_etat,parametre_base_id) VALUES(?,?,?)",array($valeur,1,1));
							}else{


								$ec_parametre_liste_store =  $ec_family_manager->insertRow("INSERT INTO ec_parametre_liste(parametre_liste_liste,parametre_liste_etat,parametre_base_id) VALUES(?,?,?)",array($valeur,1,2));
							}

							

						// $couleur_taille=new atout_taille_couleur_qte($donnees);
						// $Mcouleur_taille=new atout_taille_couleur_qteManager($db);
						// $rep=$Mcouleur_taille->Enregistrer($couleur_taille);



						}
						}
						}

						}
						}



					















		 	
		 $data['message'] = "Cet article est ajouté avec succès";
		 $data['code'] = 1;

				  
			}// end size

			
			

		      echo json_encode($data);


		        break;

	case 'run_delete_article': 


		$id  = $_POST['id'];

		$ec_family_manager = new Ec_familleManager($db);


		$delete_query = $ec_family_manager->deleteRow("DELETE FROM ec_article WHERE article_id=?",array($id));

		$data['response']="ok";
		
			echo   json_encode($data);


				break;

	case 'run_delete_many_articles': 


		$ec_family_manager = new Ec_familleManager($db);

		    $myid = $_POST['id'];

			$id = str_replace(' ',',',$myid);


			$result = $ec_family_manager->deleteRow("DELETE FROM ec_article WHERE article_id in($id) ",array());

			
			$data['response']="ok";

		    echo json_encode($data);



				break;

	default:	

	

		   require("Vues/back/index.php");
		break;
}

 

 ?>

 