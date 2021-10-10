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

	default:	

	

		   require("Vues/back/index.php");
		break;
}

 

 ?>

 