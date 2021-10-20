<!DOCTYPE html>
<html lang="fr">
 
<!-- Mirrored from 99webpage.com/theme-review/html/cekas/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 Jun 2020 12:55:01 GMT -->
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<meta name="keywords" content="corporate html template, agency theme, business html template, creative theme, portfolio html template, gallery bootstrap, furniture html template, package delivery theme, restaurant theme, medical theme, ecommerce template, travel theme, app template, free landing page, construction template, real estate theme">
    <meta name="description" content="Bootstrap HTML5 template for agency corporate, business app and creative portfolio, it is suitable for any kind website like ecommerce, restaurant, medical, and retail website">
    <meta name="author" content="nce18cex">
    <link rel="icon" href="http://atoutdame.epizy.com/assets/logo/petit_logo1.jpeg">


    <meta property="og:url" content="http://atoutdame.epizy.com/index.php">
    <meta property="og:type" content="product.item">
    <meta property="og:title" content="Atouts de Dames">
    <meta property="og:description" content="Page d'accueil d'atouts de dames">
    <meta property="og:image" content="http://atoutdame.epizy.com/assets/logo/logo1_1.jpeg">
    <meta property="og:image:width" content="100" />
<meta property="og:image:height" content="60" />

    <title>Liste des articles</title>

     <link href="assets/assets1/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="assets/assets1/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/assets1/css/style1.css" rel="stylesheet">
   
    <!-- Theme skins -->
    <link id="skin" href="assets/assets1/skins/default.css" rel="stylesheet">

    <!-- dataTable -->
    <link rel="stylesheet" type="text/css" href="assets/dataTable/media/css/jquery.dataTables.css">
    <!-- <link rel="stylesheet" type="text/css" href="assets/dataTable/resources/syntax/shCore.css"> -->
    <!-- <link rel="stylesheet" type="text/css" href="assets/dataTable/resources/demo.css"> -->
   
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="assets/assets1/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="assets/assets1/js/ie-emulation-modes-warning.js"></script>
  </head>

  <body>

<!-- End Navbar -->
<?php include("header.php"); ?>

<div id="warpper1">

    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Description</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body description_suite_texte">
               
              </div>
              <div class="modal-footer">
                <button type="button" style="color: white;" class="btn btn-secondary btn-xs btn-sm" data-dismiss="modal">Fermer</button>
              </div>
            </div>
          </div>
        </div>

    <!-- Start Inner head -->
    <div class="parallax inner-head">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <i class="fa fa-list-alt"></i>
                    <h4>Gestion des articles</h4>
                    <ol class="breadcrumb">
                        <li><a href="#">Articles</a></li>
                        <li><a href="#">Catégories</a></li>
                        <!-- <li class="active">Tabs</li> -->
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- End Inner head -->
   
    <!-- Start tab secondary -->
                <div class="col-md-12 col-sm-12 main">
                    <h5>Gestion des articles</h5>
                    <div class="tab-secondary">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active"><a href="#tab5" role="tab" data-toggle="tab">Listes</a></li>
                            <li role="presentation"><a href="#tab6" role="tab" data-toggle="tab">Ajouter</a></li>
                            <li role="presentation"><a href="#tab7" role="tab" data-toggle="tab">Liste catégorie</a></li>
                            <li role="presentation"><a href="#tab8" role="tab" data-toggle="tab">Ajouter catégorie</a></li>
                            <li role="presentation"><a href="#tab9" role="tab" data-toggle="tab">Taille des articles</a></li>
                            <li role="presentation"><a href="#tab4" role="tab" data-toggle="tab">Couleur des articles</a></li>
                        </ul>
                       

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <?=!empty($alert)?$alert:'' ?>
                            <div role="tabpanel" class="tab-pane active" id="tab5">
                            <table id="example" class="display" style="width:100%" border="1">
                                <thead>
                                    <tr style="background-color: #23262a;color: white;">
                                        <th>Image</th>
                                        <th>Libellé</th>
                                        <th>Catégorie</th>
                                        <th>Prix</th>
                                        <th>Couleur</th>
                                        <th>Taille</th>
                                        <!-- <th>Description</th> -->
                                        <th>Qté</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if(!empty($liste_articles)): ?>
                                    <?php foreach ($liste_articles as $key => $value): ?>
                                    <tr>
                                        <td style="width: 5%;">
                                            <?php if(!empty($value->image_libelle)){ ?>
                                            <a target="_blank" href="?p=<?=$fonction->double_cryptage('detail_image')?>&id=<?=$fonction->double_cryptage($value->produit_id)?>">
                                            <img height="80" width="60" src="<?=$value->image_libelle ?>" >
                                            </a>
                                            <?php } ?>
                                        </td>
                                        <?php

                                        


                                        $Mcouleur_taille=new atout_taille_couleur_qteManager($db);
                                        $taille_simple=$Mcouleur_taille->getDataRequest(array("atout_taille_couleur_qte"),array("produit_id"=>$value->produit_id),array(),"","atcq_taille",true,"","sum(atcq_qte) as qte,atcq_taille")['data'];
                                        $taille_seul=array();
                                        $taille_enregistree=array();
                                        foreach ($taille_simple as $key => $v) {
                                            array_push($taille_seul, $v->atcq_taille);
                                            array_push($taille_enregistree, $v->atcq_taille.':'.$v->qte);
                                        }

                                        $couleur_simple=$Mcouleur_taille->getDataRequest(array("atout_taille_couleur_qte"),array("produit_id"=>$value->produit_id),array(),"","atcq_couleur",true,"","sum(atcq_qte) as qte,atcq_couleur")['data'];
                                        $couleur_seul=array();
                                        $couleur_enregistree=array();
                                        foreach ($couleur_simple as $key => $v) {
                                            array_push($couleur_seul, $v->atcq_couleur);
                                            array_push($couleur_enregistree, $v->atcq_couleur.':'.$v->qte);
                                        }


                                         ?>
                                        <td><?=$value->produit_libelle ?></td>
                                        <td><?=$value->categorie_libelle ?></td>
                                        <td><?=$value->produit_montant ?></td>
                                        <td><?=implode(', ', $couleur_enregistree) ?></td>
                                        <td><?=implode(', ', $taille_enregistree) ?></td>
                                        <!-- <td><?=$value->produit_description ?></td> -->
                                        <td><?=$value->produit_quantite ?></td>
                                       
                                        <td style="text-align: center;">
                                            <a   href="?p=<?=$fonction->double_cryptage('voir_detail_article')?>&id=<?=$fonction->double_cryptage($value->produit_id) ?>"><i class="fa fa-eye" style="color: black;"></i></a>  
                                           <a  href="?p=<?=$fonction->double_cryptage('modifier_article')?>&id=<?=$fonction->double_cryptage($value->produit_id)?>"><i class="fa fa-pencil" style="color: blue;"></i></a>  
                                           <?php $id=$fonction->double_cryptage($value->produit_id); ?>
                                           <a href="#" onclick="DelProduit(<?php echo($value->produit_id) ?>)"  ><i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    <?php endforeach ?>
                                    <?php endif ?>
                                </tbody>
                               
                            </table>
                            <br><br>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="tab6">

                                <form class="save_produit" action="?p=<?=$fonction->double_cryptage('save_produit')?>" method="POST" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label>Catégorie</label>
                                        <select class="form-control" name="categorie_id">
                                            <?php if(!empty($liste_categorie)): ?>
                                            <?php foreach ($liste_categorie as $key => $value): ?>
                                            <option value="<?=$value->getCategorie_id()?>"><?=$value->getCategorie_libelle()  ?></option>
                                            <?php endforeach; ?>
                                            <?php endif; ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Libellé (Obligatoire)</label>
                                        <input type="text" required="" name="produit_libelle" class="form-control"  placeholder="Libellé de l'article" />
                                    </div>

                                    <div class="form-group">
                                        <label>Prix (Obligatoire)</label>
                                        <input type="number" required="" name="produit_montant" class="form-control"  placeholder="Prix de l'article" />
                                    </div>

                                    <div class="form-group" style="display: none;">
                                        <label>Quantité en stock (Obligatoire)</label>
                                        <input type="number"  name="produit_quantite" class="form-control"  placeholder="Quantité de l'article" />
                                    </div>
                                   
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group" style="overflow-x:auto;">
                                                <label>Taille *(Optionel) et quantité || Couleur *(Optionel) et quantité</label>
                                                <table class="table taille_couleur" style="width: 100%">
                                                    <?php if(!empty($liste_taille)): ?>
                                                    <?php foreach ($liste_taille as $key => $value): ?>
                                                    <tr>
                                                        <td style="width: 15%;">
                                                            <div class="checkbox">
                                                                <label>
                                                                <input  type="checkbox" value="<?=$value->getTaille_libelle() ?>" name="taille_id[]">
                                                                <?=$value->getTaille_libelle() ?>
                                                                </label>
                                                                <input class="nombre_taille" style="width: 60px;" type="number"  name="<?=$value->getTaille_libelle() ?>">
                                                            </div>
                                                        </td>
                                                        <td style="width: 85%;">
                                                            <?php $la_taille=$value->getTaille_libelle(); ?>
                                                            <?php if(!empty($liste_couleur)): ?>
                                                            <?php foreach ($liste_couleur as $key => $val): ?>
                                                            <div class="checkbox affiche_couleur" style="display: none;">
                                                                <label>
                                                                <input class="input_couleur" type="checkbox" value="<?=$la_taille.'|'.$val->getCouleur_libelle() ?>" name="couleur_id[]">
                                                                <?=$val->getCouleur_libelle() ?>
                                                                </label>
                                                                <input class="nombre_couleur" style="width: 60px;" type="number" name="<?=$la_taille.'|'.$val->getCouleur_libelle() ?>">
                                                            </div>
                                                            <?php endforeach ?>
                                                            <?php endif ?>
                                                        </td>
                                                    </tr>
                                                    <?php endforeach ?>
                                                    <?php endif ?>
                                                    <tr>
                                                        <div style="display: none;" class="count_couleur"><?=count($liste_couleur)  ?></div>
                                                        <td><button class="btn btn-default btn-xs tab_9">Ajouter une taille</button> </td>
                                                        <td><button class="btn btn-default btn-xs tab_4">Ajouter une couleur</button></td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                    </div>

                                   <div class="form-group">
                                        <label>Description de l'article *(Optionel)</label>
                                         <textarea name="produit_description" class="summernote"></textarea>
 
                                    </div>

                                    <div class="form-group">
                                        <label>Informations complémentaires *(Optionel)</label>
                                         <textarea name="produit_autreDetail" class="summernote"></textarea>
 
                                    </div>
                                   
                                   
                                    <input type="hidden" name="produit_dateCreated" value="<?=date("Y-m-d")  ?>">
                                    <input type="hidden" name="produit_dateUpdate" value="<?=date("Y-m-d")  ?>">
                                    <input type="hidden" name="produit_etat" value="0">
                                    <input type="hidden" name="produit_statut" value="0">
                                    <input type="hidden" name="produitInfo" value="0">
                                    <input type="hidden" name="produit_etoile" value="0">
                                    <input type="hidden" name="produit_nouveauPrix" value="0">

                                    <div class="form-group">
                                        <button class="A btn btn-default btn-bordered btn-icon joindre_image" id="importer"  >IMPORTER LES IMAGES <i class="fa fa-download"></i></button>
                                    </div>

                                    <!-- <div class="form-group">
                                        <button class="B btn btn-default btn-bordered btn-icon " id="ajouter"  >AJOUTER UNE IMAGE<i class="fa fa-download"></i></button>
                                    </div> -->

                                   
                                    <!-- <div class="aj row" >
                                        <div class="col-md-2"><img src="" class="image" style=""/></div>
                                    </div> -->


                                    <div class="col-md-6" style="display: none; text-align: center; margin-bottom: 1%">
                                        <div class="section">
                                            <label  class="field prepend-icon ad_input">
                                                <input type="file"  class="image_libelle"  accept="image/*" name="image_libelle[]" id="image_libelle" onchange="readURL(this);" multiple="" >
                                                <input type="hiddens" class="removed_images_str" name="removed_images_str" value="0">
                                               <!--  <input type="file" accept="image/*" name="image_libelle[]" id="image_libelle1" onchange="readURL_(this);" > -->
                                            </label>
                                        </div>
                                    </div>

                                    <!-- <div class="col-md-6 affiche_images"></div> -->

                                    <div class="loading" style="width: 30%;display: none;">
                                        <div style="text-align: center;"><img width="40" height="40" src="assets/img/loading/loading.gif"></div>
                                      </div>
                                      <table class="table_image" style="width: 30%;display: none;">
                                        <thead>
                                          <tr>
                                            <td style="display: none;"></td>
                                            <td style="width: 25%;text-align: ;font-size: 25px;">Images</td>
                                            <td style="width: 25%;text-align: ;font-size: 25px;">Action</td>
                                          </tr>
                                        </thead>
                                        <tbody class="ajout_images">
                                         
                                        </tbody>
                                      </table>

                                <div class="loading_article" style="width: 30%;display: none;">
                                    <div style="text-align: center;"><img width="40" height="40" src="assets/img/loading/loading.gif"></div>
                                </div>

                                    <div style="text-align: center;margin-top: 5px;">
                                        <button type="submit" class="btn btn-primary save_produit_btn">Sauvegarder</button>
                                    </div>

                                </form>
                                <br><br><br>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="tab7">
                                <table id="example11" class="display" style="width:100%" border="1">
                                <thead>
                                    <tr style="background-color: #23262a;color: white;">
                                        <th style="display: none;"></th>
                                        <th style="width:5%">N°</th>
                                        <th style="width:20%">Libellé</th>
                                        <th style="width:30%">Description</th>
                                        <th style="width:10%">Statut</th>
                                        <th style="width:20%">Image</th>
                                        <th style="width:15%">Action</th>
                                        <th style="width:;display: none;"></th>
                                    </tr>
                                </thead>
                                <tbody class="categorie_tbody">
                                    <?php if (!empty($liste_categorie)): ?>
                                    <?php $i=0; foreach ($liste_categorie as $key=>$value): $i++; ?>
                                    <tr>
                                        <td style="display: none;"><?=$value->getCategorie_id() ?></td>
                                        <td style="width:5%"><?=$i ?></td>
                                        <td style="width:20%"><?=$value->getCategorie_libelle() ?></td>
                                        <td style="width:30%">
                                            <span class="texte" hidden=""><?=$value->getCategorie_description()  ?></span>
                                            <div class="div"><?=cuttexte($value->getCategorie_description(),60) ?> <?php if(!empty($value->getCategorie_description())){ ?><a style="text-decoration: none;" href="#" data-toggle="modal" class="description_suite" data-target="#exampleModalCenter"><label class="label label1" style="background-color: #917250;color: white;cursor: pointer;">Lire tout</label></a> <?php } ?></div></td>
                                        <td style="width:10%">
                                            <?php if($value->getCategorie_statut()=='0') echo '<label class="label label-primary">Actif</label>'; else echo '<label class="label label-danger">Inactif</label>' ?>
                                        </td>
                                        <td style="width:20%">
                                            <?php if(!empty($value->getCategorie_image())){ ?>
                                            <a target="_blank" href="<?=$value->getCategorie_image() ?>">
                                            <img height="50" width="110" src="<?=$value->getCategorie_image() ?>" >
                                            </a>
                                            <a href="#" title="Supprimer l'image" style="text-decoration: none;" onclick="DelImageCategorie(<?=$value->getCategorie_id() ?>)"  ><i class="fa fa-trash"></i> Supprimer</a>
                                            <?php } ?>
                                        </td>
                                       
                                       
                                        <td style="text-align: center;width:15%;">
                                         
                                           <a style="background-color: #8a6d3b;color: white;border: 1px solid #8a6d3b;"  href="?p=<?=$fonction->double_cryptage('voir_categorie') ?>&id=<?=$fonction->double_cryptage($value->getCategorie_id()) ?>" class="btn btn-primary btn-sm btn-xs" title="Consulter la catégorie"  ><i class="fa fa-eye" ></i></a>

                                            <a  style="background-color: #337ab7;color: white;border: 1px solid #337ab7;" title="Modifier" href="?p=<?=$fonction->double_cryptage('modifier_categorie') ?>&id=<?=$fonction->double_cryptage($value->getCategorie_id()) ?>" class="categorie btn btn-success btn-sm btn-xs" ><i class="fa fa-pencil" ></i></a>  
                                           <?php $id=$fonction->double_cryptage($value->getCategorie_id()); ?>
                                           <a href="#" title="Supprimer" class="btn btn-danger btn-sm btn-xs" style="background-color: red;color: white;border: 1px solid red;" onclick="DelCategorie(<?=$value->getCategorie_id() ?>)"  ><i class="fa fa-trash"></i></a>  
                                        </td>
                                        <td style="display: none;"><?=$value->getCategorie_image() ?></td>
                                    </tr>
                                    <?php endforeach ?>
                                    <?php endif ?>
                                   
                                </tbody>
                               
                            </table>
                            <br><br><br>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="tab8">
                                <form action="?p=<?=$fonction->double_cryptage('save_categorie')?>" method="POST" enctype="multipart/form-data">
                                   
                                    <div class="form-group">
                                        <label>Libellé</label>
                                        <input type="text" name="categorie_libelle" class="form-control"  placeholder="Libellé" />
                                    </div>

                                   <input type="hidden" name="categorie_etat" value="0">

                                   <div class="form-group">
                                        <label>Description *(Optionel)</label>
                                         <textarea name="categorie_description" class="summernote"></textarea>
 
                                    </div>

                                    <div class="form-group">
                                        <button class="btn btn-default btn-bordered btn-icon joindre_image_cat" type="submit">JOINDRE UNE IMAGE <i class="fa fa-download"></i></button>
                                    </div>

                                    <div class="bor8 m-b-20 how-pos4-parent">
                           
                                        <div style="display: none;">
                                            <input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30 im_cat" onchange="readURL_cat(this);" accept="image/*" type="file" name="categorie_image" placeholder="Selectionnez la photo"  style="border: 4px solid #f1f1f1">
                                        </div>
                                    </div>

                                    <div class="aj_cat" style="float: left; padding-left:10px;padding-bottom: 5px;">
                                        <img src="" class="image_cat" style=""/>
                                        <br>
                                    </div>

                                    <div style="text-align: center;">
                                        <button type="submit" class="btn btn-primary">Sauvegarder</button>
                                    </div>

                                </form>
                                <br><br><br>
                               

                            </div>

                            <div role="tabpanel" class="tab-pane" id="tab9">
                                <form action="?p=<?=$fonction->double_cryptage('save_taille')?>" method="POST" enctype="multipart/form-data">
                                   
                                    <div class="form-group">
                                        <label>Libellé</label>
                                        <input type="text" name="taille_libelle" class="form-control"  placeholder="Libellé" />
                                    </div>

                                   <input type="hidden" name="taille_etat" value="0">

                                    <div style="text-align: center;">
                                        <button type="submit" class="btn btn-primary">Sauvegarder</button>
                                    </div>

                                </form>
                                <br><br><br>
                                <table id="example1" class="display" style="width:100%" border="1">
                                <thead>
                                    <tr style="background-color: #23262a;color: white;">
                                        <th style="display: none;"></th>
                                        <th style="width:10%">N°</th>
                                        <th style="width:50%">Libellé</th>
                                        <th style="width:20%">Action</th>
                                    </tr>
                                </thead>
                                <tbody class="taille_tbody">
                                    <?php if (!empty($liste_taille)): ?>
                                    <?php $i=0; foreach ($liste_taille as $key=>$value): $i++; ?>
                                    <tr>
                                        <td style="display: none;"><?=$value->getTaille_id() ?></td>
                                        <td><?=$i ?></td>
                                        <td><?=$value->getTaille_libelle() ?></td>
                                       
                                        <td style="text-align: center;">
                                         
                                           <a  href="#" class="taille" data-toggle="modal" data-target="#myModal_taille"><i class="fa fa-pencil" style="color: blue;"></i></a>  
                                           <?php $id=$fonction->double_cryptage($value->getTaille_id()); ?>
                                           <a href="#" onclick="DelTaille(<?php echo($value->getTaille_id()) ?>)"  ><i class="fa fa-trash"></i></a>  
                                        </td>
                                    </tr>
                                    <?php endforeach ?>
                                    <?php endif ?>
                                   
                                </tbody>
                               
                            </table>
                            </div>

                            <div role="tabpanel" class="tab-pane" id="tab4">
                                <form action="?p=<?=$fonction->double_cryptage('save_couleur')?>" method="POST" enctype="multipart/form-data">
                                   
                                    <div class="form-group">
                                        <label>Libellé</label>
                                        <input type="text" name="couleur_libelle" class="form-control"  placeholder="Libellé" />
                                    </div>

                                   <input type="hidden" name="couleur_etat" value="0">

                                    <div style="text-align: center;">
                                        <button type="submit" class="btn btn-primary">Sauvegarder</button>
                                    </div>

                                </form>
                                <br>
                                <table id="example2" class="display" style="width:100%" border="1">
                                <thead>
                                    <tr style="background-color: #23262a;color: white;">
                                        <th style="display: none;"></th>
                                        <th style="width:10%">N°</th>
                                        <th style="width:50%">Libellé</th>
                                        <th style="width:20%">Action</th>
                                    </tr>
                                </thead>
                                <tbody class="couleur_tbody">
                                    <?php if (!empty($liste_couleur)): ?>
                                    <?php $i=0; foreach ($liste_couleur as $key=>$value): $i++; ?>
                                    <tr>
                                        <td style="display: none;"><?=$value->getCouleur_id() ?></td>
                                        <td><?=$i ?></td>
                                        <td><?=$value->getCouleur_libelle() ?></td>
                                       
                                        <td style="text-align: center;">
                                         
                                           <a  href="#" class="couleur" data-toggle="modal" data-target="#myModal_couleur"><i class="fa fa-pencil" style="color: blue;"></i></a>  
                                           <?php $id=$fonction->double_cryptage($value->getCouleur_id()); ?>
                                           <a href="#" onclick="DelCouleur(<?php echo($value->getCouleur_id()) ?>)"  ><i class="fa fa-trash"></i></a>  
                                        </td>
                                    </tr>
                                    <?php endforeach ?>
                                    <?php endif ?>
                                   
                                </tbody>
                               
                            </table>
                           
                            </div>
                        </div>
                    </div>
                    <div style="margin-bottom:100px;"></div>
                </div>
                <!-- End tab secondary -->
               
                <!-- Modal pour modifier la couleur -->
                <div class="modal fade" id="myModal_couleur" tabindex="-1" role="dialog">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" ><span aria-hidden="true">×</span></button>
                                <h6 class="modal-title">Modifier Couleur</h6>
                            </div>
                            <div class="modal-body">
                                <p>
                               <div class="form-group">
                                        <label>Libellé</label>
                                        <input type="text" name="_couleur_libelle" class="form-control"  placeholder="Libellé" />
                                        <input type="hidden" name="_couleur_id" class="form-control"  placeholder="Libellé" />
                                </div>
                                </p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default btn-sm couleur_annuler" data-dismiss="modal">Annuler</button>
                                <button type="button" class="btn btn-primary btn-sm couleur_valider">Enregistrer</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- fin -->

                <!-- Modal pour modifier la categorie -->
                <div class="modal fade" id="myModal_categorie" tabindex="-1" role="dialog">
                    <div class="modal-dialog" role="document">
                        <form class="save_cat" method="POST" enctype="multipart/form-data">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" ><span aria-hidden="true">×</span></button>
                                <h6 class="modal-title">Modifier Catégorie</h6>
                            </div>
                            <div class="modal-body">
                                <p>
                               <div class="form-group">
                                        <label>Libellé</label>
                                        <input type="text" name="_categorie_libelle" class="form-control"  placeholder="Libellé" />
                                        <input type="hidden" name="_categorie_id" class="form-control"  placeholder="Libellé" />
                                </div>
                                </p>
                                 <p>
                                <div class="form-group">
                                        <label>Description *(Optionel)</label>
                                         <textarea name="_categorie_description" id="_categorie_description" class="summernote"></textarea>
 
                                    </div>
                               
                                <div class="form-group col-md-6">
                                    <button class="btn btn-default btn-bordered btn-icon joindre_image_cat_mod" type="submit">JOINDRE UN FICHIER <i class="fa fa-download"></i></button>
                                </div>

                                 <div class="form-group col-md-6">
                               
                                <div style="display: none;">
                                    <input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30 im_cat_mod" onchange="readURL_cat_mod(this);"  type="file" name="fichier_cat_mod" placeholder="Selectionnez la photo"  style="border: 4px solid #f1f1f1">
                                     <input type="text" name="_image" value="">
                                </div>

                                 <div class="aj" style="float: left; padding-left:10px;padding-bottom: 5px;">

                                <img width="100" height="100" src="" class="image_cat_mod" style=""/>
                                <br>
                            </div>
                            </div>
                             

                            <!-- <input type="hidden" name="publicite_fichier_" value=""> -->

                                </p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default btn-sm couleur_annuler" data-dismiss="modal">Annuler</button>
                                <button type="button" class="btn btn-primary btn-sm couleur_valider">Enregistrer</button>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
                <!-- fin -->

                <!-- Modal pour modifier la taille -->
                <div class="modal fade" id="myModal_taille" tabindex="-1" role="dialog">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" ><span aria-hidden="true">×</span></button>
                                <h6 class="modal-title">Modifier Taille</h6>
                            </div>
                            <div class="modal-body">
                                <p>
                               <div class="form-group">
                                        <label>Libellé</label>
                                        <input type="text" name="_taille_libelle" class="form-control"  placeholder="Libellé" />
                                        <input type="hidden" name="_taille_id" class="form-control"  placeholder="Libellé" />
                                </div>
                                </p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default btn-sm couleur_annuler" data-dismiss="modal">Annuler</button>
                                <button type="button" class="btn btn-primary btn-sm couleur_valider">Enregistrer</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- fin -->
     
    <span style="display: none;" class="lien_save_produit"><?=$fonction->double_cryptage('save_produit') ?></span>
    <span style="display: none;" class="lien_page"><?=$_GET['p'] ?></span>
<?php include("footer.php"); ?>

    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/assets1/js/jquery.min.js"></script>
    <script src="assets/assets1/js/bootstrap.min.js"></script>
    <script src="assets/assets1/js/jquery.easing-1.3.min.js"></script>

   
   
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/assets1/js/ie10-viewport-bug-workaround.js"></script>
   
    <!-- jquery nicescroll -->
    <script src="assets/assets1/js/jquery.nicescroll.min.js"></script>

    <!-- dataTable -->
    <!-- <script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script> -->
    <script type="text/javascript" language="javascript" src="assets/dataTable/media/js/jquery.dataTables.js"></script>
    <!-- <script type="text/javascript" language="javascript" src="assets/dataTable/resources/syntax/shCore.js"></script> -->
    <!-- <script type="text/javascript" language="javascript" src="assets/dataTable/resources/demo.js"></script> -->
    <script>
        function DelProduit(id){
            if(confirm("Voulez vous vraiment supprimer ce contenu ?")){
                 window.location="?p=<?=$fonction->double_cryptage('supprime_article')?>&id_supprimer="+id;

            }
            else{
            }
        }

        function DelCategorie(id){
            if(confirm("Voulez vous vraiment supprimer cette catégorie ?")){
                 window.location="?p=<?=$fonction->double_cryptage('supprime_categorie')?>&id_supprimer="+id;

            }
            else{
            }
        }
        function DelImageCategorie(id){
            if(confirm("Voulez vous vraiment supprimer cette image ?")){
                 window.location="?p=<?=$fonction->double_cryptage('supprime_categorie_image')?>&id_supprimer="+id;

            }
            else{
            }
        }

        function DelCouleur(id){
            if(confirm("Voulez vous vraiment supprimer cette couleur ?")){
                 window.location="?p=<?=$fonction->double_cryptage('supprime_couleur')?>&id_supprimer="+id;

            }
            else{
            }
        }
        function DelTaille(id){
            if(confirm("Voulez vous vraiment supprimer cette information ?")){
                 window.location="?p=<?=$fonction->double_cryptage('supprime_taille')?>&id_supprimer="+id;

            }
            else{
            }
        }

        function readURL_cat(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('.image_cat').attr('src', e.target.result).width(110).height(50);
            };
            reader.readAsDataURL(input.files[0]);
           }
        }
        function readURL_cat_mod(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('.image_cat_mod').attr('src', e.target.result).width(110).height(50);
            };
            reader.readAsDataURL(input.files[0]);
           }
        }

        $(document).ready(function(){

            $(".categorie_tbody").on("click",".description_suite",function(){
                   
                var text=$(this).closest('tr').find('.texte').text();
                $(".description_suite_texte").html(text);
               
            });

            $(".save_produit_btn").click(function(e){
                e.preventDefault();
                $(".loading_article").show();
                var formulaire=document.querySelector(".save_produit");
                var formdata=new FormData(formulaire);
                var images=$("input[name='libelle_image[]']").files;
                formdata.append("libelle_image", images);
                var lien_save_produit=$(".lien_save_produit").text();
                var lien_page=$(".lien_page").text();  
                // alert(lien_save_produit);
                 $.ajax({
                 // url: "Vues/Admin/save_produit.php",
                 url: "?p="+lien_save_produit,
                 type: "POST",
                 data: formdata,
                 contentType: false,  // dire à jQuery de ne pas définir le contentType
                 processData: false,  // dire à jQuery de ne pas traiter les données
                 success:function(rep){
                      // alert(rep);
                      $(".loading_article").hide();
                      if(parseInt(rep)>=1){
                        alert("Article enregistré avec succès!!");
                        window.location.reload();
                      }
                 }
                });

            });

            var count_couleur=$(".count_couleur").text();
            count_couleur=parseInt(count_couleur);
            $(".nombre_couleur").attr("readonly","");

            $(".taille_couleur").on("click","input[name='taille_id[]']",function(e){
                var objet=$(this).closest("tr");
                var cocher=objet.find("input[name='taille_id[]']").prop("checked");
                var valeur=objet.find(".nombre_taille").val();
                if(parseInt(valeur)>0){
                if(cocher==true)
                    objet.find("td:eq(1)>.affiche_couleur").show();
                else
                    objet.find("td:eq(1)>.affiche_couleur").hide();
                }else{
                    objet.find("td:eq(1)>.affiche_couleur").hide();
                }
            });

            $(".taille_couleur").on("keyup click",".nombre_taille",function(e){
                var objet=$(this).closest("tr");
                var valeur=objet.find(".nombre_taille").val();
               
                if(parseInt(valeur)>0){
                var cocher=objet.find("input[name='taille_id[]']").prop("checked");

                if(cocher==true)
                    objet.find("td:eq(1)>.affiche_couleur").show();
                else
                    objet.find("td:eq(1)>.affiche_couleur").hide();
                }else{
                    objet.find("td:eq(1)>.affiche_couleur").hide();
                }

                for(i=0;i<count_couleur;i++){
                        val_couleur=objet.find(".nombre_couleur:eq("+i+")").val();
                        val_couleur=parseInt(val_couleur);
                        if(!Number.isInteger(val_couleur)){
                            objet.find(".input_couleur:eq("+i+")").removeAttr("disabled");
                        }    
                }

            });


            $(".taille_couleur").on("click",".input_couleur",function(e){
                var objet=$(this).closest("tr");
                for(var i=0;i<count_couleur;i++){
                    var cocher=objet.find("input[name='couleur_id[]']:eq("+i+")").prop("checked");
                    if(cocher)
                        objet.find(".nombre_couleur:eq("+i+")").removeAttr("readonly");
                }  
            });

            $(".taille_couleur").on("keyup click",".nombre_couleur",function(e){
                var objet=$(this).closest("tr");
                var nombre_taille=objet.find(".nombre_taille").val();
                nombre_taille=parseInt(nombre_taille);

                var valeur=objet.find(".nombre_couleur").val();
               
                var total=0;
                var val_couleur;
                var total_atteint=false;
                var total_depasse=false;

                for(var i=0;i<count_couleur;i++){
                    val_couleur=objet.find(".nombre_couleur:eq("+i+")").val();
                    val_couleur=parseInt(val_couleur);
                   
                    if(val_couleur>0)
                        total+=val_couleur;

                    if(total==nombre_taille){
                        total_atteint=true;
                        objet.find(".nombre_couleur").attr("border","");
                    }else if(total>nombre_taille) {
                        objet.find(".nombre_couleur:eq("+i+")").val("");
                        total_depasse=true;
                    }
                }
               
                if(total_depasse){
                    alert("Vous avez depassé le nombre total:"+nombre_taille);

                    for(i=0;i<count_couleur;i++){
                        val_couleur=objet.find(".nombre_couleur:eq("+i+")").val();
                        val_couleur=parseInt(val_couleur);
                        if(!Number.isInteger(val_couleur)){
                            objet.find(".input_couleur:eq("+i+")").removeAttr("disabled");
                        }    
                    }
                }

                if(total_atteint){
                    for(i=0;i<count_couleur;i++){
                        val_couleur=objet.find(".nombre_couleur:eq("+i+")").val();
                        val_couleur=parseInt(val_couleur);
                        if(!Number.isInteger(val_couleur)){
                            objet.find(".nombre_couleur:eq("+i+")").attr("readonly","");
                            objet.find(".input_couleur:eq("+i+")").attr("checked",false);
                            objet.find(".input_couleur:eq("+i+")").attr("disabled",true);
                        }
                       
                    }
                }
               
            });



            $(".couleur_tbody").on("click",".couleur",function(event){
                var objet=$(this).closest("tr");
                var id=objet.find("td:eq(0)").text();
                var libelle=objet.find("td:eq(2)").text();
                $("input[name='_couleur_libelle']").val(libelle);
                $("input[name='_couleur_id']").val(id);
            });

            $(".couleur_valider").click(function(){
                var libelle = $("input[name='_couleur_libelle']").val();
                var id = $("input[name='_couleur_id']").val();
                $.post("Vues/Admin/modifier_table.php",{couleur_id:id,couleur_libelle:libelle,table:'couleur'},function(reponse){
                    $(".couleur_annuler").trigger("click");
                    $(".couleur_tbody").html(reponse);

                });
            })

            $(".taille_tbody").on("click",".taille",function(event){
                var objet=$(this).closest("tr");
                var id=objet.find("td:eq(0)").text();
                var libelle=objet.find("td:eq(2)").text();
                $("input[name='_taille_libelle']").val(libelle);
                $("input[name='_taille_id']").val(id);
            });

            $(".couleur_valider").click(function(){
                var libelle = $("input[name='_taille_libelle']").val();
                var id = $("input[name='_taille_id']").val();
                $.post("Vues/Admin/modifier_table.php",{taille_id:id,taille_libelle:libelle,table:'taille'},function(reponse){
                    $(".taille_annuler").trigger("click");
                    $(".taille_tbody").html(reponse);

                });
            })

              $(".categorie_tbody").on("click",".categorie",function(event){
                var objet=$(this).closest("tr");
                var id=objet.find("td:eq(0)").text();
                var libelle=objet.find("td:eq(2)").text();
                var img=objet.find("td:eq(6)").text();
                // alert(id);
                var description=objet.find("td:eq(3)").html();
                // alert(description);
                $("input[name='_categorie_libelle']").val(libelle);
                $('textarea[name="_categorie_description"]').val(description);
                $(".image_cat_mod").attr('src',img);
                $("input[name='_image']").val(img);
                $("input[name='_categorie_id']").val(id);
            });

            $(".couleur_valider").click(function(){
                var libelle = $("input[name='_categorie_libelle']").val();
                var description = $("textarea[name='_categorie_description']").val();
                // alert(description)
                var id = $("input[name='_categorie_id']").val();

                var img = $("input[name='_image']").val();
               
                var formulaire=document.querySelector(".save_cat");
                var formdata=new FormData(formulaire);
                formdata.append("_image",img);
                formdata.append("categorie_id",id);
                formdata.append("categorie_libelle",libelle);
                formdata.append("categorie_description",description);
                formdata.append("table",'categorie');
                var images=$("input[name='fichier_cat_mod']").files;
                // alert(images);
                formdata.append("categorie_image", images);
               
                 $.ajax({
                 // url: "Vues/Admin/save_produit.php",
                 url: "Vues/Admin/modifier_table.php",
                 type: "POST",
                 data: formdata,
                 contentType: false,  // dire à jQuery de ne pas définir le contentType
                 processData: false,  // dire à jQuery de ne pas traiter les données
                 success:function(reponse){
                    $(".categorie_annuler").trigger("click");
                    $(".categorie_tbody").html(reponse);
                    $("input[name='_categorie_libelle']").val("");
                    $("textarea[name='_categorie_description']").val("");
                    $("input[name='_categorie_id']").val("");
                    $("input[name='_image']").val("");
                    formdata.append("categorie_image", "");
                    $('.image_cat_mod').attr('src', '');
                    setTimeout("location.reload(false);", 1000);
               
                 }
                });

                // $.post("Vues/Admin/modifier_table.php",formdata,function(reponse){
                //     alert('1');
                //     $(".categorie_annuler").trigger("click");
                //     $(".categorie_tbody").html(reponse);

                // });
            });




            $(".joindre_image_cat").click(function(ev){
                ev.preventDefault();
                $(".im_cat").trigger("click");
            });

            $(".joindre_image_cat_mod").click(function(ev){
                ev.preventDefault();
                $(".im_cat_mod").trigger("click");
            });
        });
    </script>
    <script>
    function readURL1(input) {
   window.removed_images=[];
   // window.objet=document.querySelector(".ajout_images").innerHTML='';
   var loading=document.querySelector(".loading");
       loading.style.display = "block";

     if (input.files && input.files[0]) {
         var countFile=Object.keys(input.files).length;
         countFile=parseInt(countFile);
         var j=0;
         document.querySelector(".table_image").style.display = "block";
         for(i=0; i<countFile; i++){
           var reader = new FileReader();
           // alert(input.files[i].name);

         reader.onload = function (e) {
             j++;
             var tr='';
             tr+='<tr>';
             tr+='<td style="display: none;">'+input.files[j-1].name+'</td>';
             tr+='<td><img style="max-width:100%;max-height:100%;width:100px;height:100px;margin-top:5px;" src="'+e.target.result+'"></td>';
             tr+='<td><button onclick="deleteTr(event,\''+input.files[j-1].name+'\')" class="supprimer btn btn-red"><i class="fa fa-trash"></i> Supprimer </button></td>';
             tr+='</tr>';
             document.querySelector(".ajout_images").innerHTML=document.querySelector(".ajout_images").innerHTML+tr;
             
             if(j==countFile)
               loading.style.display = "none";
         };
         reader.readAsDataURL(input.files[i]);

       }
       
     }
 }

 function deleteTr1(event,libelle_image){
 
  // l'initialiser
  event.preventDefault();
  event=event.currentTarget.parentNode.parentNode.remove();
  removed_images.push(libelle_image);
      removed_images_str=removed_images.join();
      alert(removed_images_str);
      document.querySelector(".removed_images_str").value=removed_images_str;
 }

 document.getElementById('importer1').addEventListener("click",
    function(event){
    event.preventDefault();
    document.getElementById('image_libelle').click();
 });
    </script>
    <script>
  function readURL(input) {
      $(".loading").show();
      if (input.files && input.files[0]) {
          var countFile=Object.keys(input.files).length;
          countFile=parseInt(countFile);
          var j=0;
          $(".table_image").show();
          for(i=0; i<countFile; i++){
            var reader = new FileReader();
            // alert(input.files[i].name);
          reader.onload = function (e) {
              j++;
              var tr='';
              tr+='<tr>';
              tr+='<td style="display: none;">'+input.files[j-1].name+'</td>';
              tr+='<td><img style="max-width:100%;max-height:100%;width:100px;height:100px;margin-top:5px;" src="'+e.target.result+'"></td>';
              tr+='<td><button class="supprimer btn btn-red"><i class="fa fa-trash"></i> Supprimer </button></td>';
              tr+='</tr>';
              $(".ajout_images").append(tr);
             
              if(j==countFile)
                $(".loading").hide();
          };
          reader.readAsDataURL(input.files[i]);

        }
         
      }
  }

 


  $(document).ready(function(){

    $("#importer").click(function(e){
        e.preventDefault();
        $("input[name='image_libelle[]']").trigger("click");
    });

   

    var removed_images=[];
    $(".ajout_images").on("click",".supprimer",function(event){
      event.preventDefault();
      var objet=$(this).closest("tr");
      var libelle_image=objet.find("td:first").text();
      objet.remove();
      removed_images.push(libelle_image);
      removed_images_str=removed_images.join();
      $("input[name='removed_images_str']").val(removed_images_str);
    });

    $(".button_valider").click(function(e){
      e.preventDefault();
      $(".image_libelle").trigger("click");
    });
  });
</script>
    <script type="text/javascript" language="javascript" class="init">
       

        $(document).ready(function() {
            $(".tab_9").on("click",function(e){
                e.preventDefault();
                $("a[href='#tab9']").trigger("click");
            });

            $(".tab_4").on("click",function(e){
                e.preventDefault();
                $("a[href='#tab4']").trigger("click");
            });
           
            $('#example').DataTable( {
                "paging":   false,
                "ordering": true,
                "info":     false,
                "scrollX": true
                });
            $('#example11').DataTable( {
                     "paging":   false
                });
            $('#example1').DataTable( {
                     "paging":   false
                });

            $('#example2').DataTable( {
                     "paging":   false
                });
         } );


    </script>
    <!-- Custom form -->
   
 
<!-- include codemirror (codemirror.css, codemirror.js, xml.js, formatting.js) -->
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.41.0/codemirror.min.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.41.0/theme/monokai.min.css">
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.41.0/codemirror.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.41.0/mode/xml/xml.min.js"></script>

<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/lang/summernote-ko-KR.min.js"></script>

<!-- include summernote css/js-->
<link href="summernote.css">
<script src="summernote.js"></script>

<script>
    $(document).ready(function(){
        $(document).ready(function() {
  $('.summernote').summernote({
  height: 150,   //set editable area's height
  placeholder: 'Taper la description de l\'article...',
  codemirror: { // codemirror options
    theme: 'monokai'
  }
});
});
    });
</script>


    <script src="assets/assets1/js/form/jcf.js"></script>
    <script src="assets/assets1/js/form/jcf.scrollable.js"></script>
    <script src="assets/assets1/js/form/jcf.select.js"></script>
   
    <!-- Custom checkbox and radio -->
    <script src="assets/assets1/js/checkator/fm.checkator.jquery.js"></script>
    <script src="assets/assets1/js/checkator/setting.js"></script>
   
    <!-- PrettyPhoto -->
    <script src="assets/assets1/js/prettyPhoto/jquery.prettyPhoto.js"></script>  
    <script src="assets/assets1/js/prettyPhoto/setting.js"></script>
   
    <!-- masonry -->
    <script src="assets/assets1/js/masonry/masonry.min.js"></script>  
    <script src="assets/assets1/js/masonry/masonry.filter.js"></script>
    <script src="assets/assets1/js/masonry/setting.js"></script>
   
    <!-- ticker -->
    <script src="assets/assets1/js/ticker/ticker.js"></script>
   
    <!-- Twitter -->
    <!--[if lte IE 9]>
        <script src="assets/assets1/js/tweecool/jquery.xdomainrequest.min.js"></script>      
    <![endif]-->
    <script src="assets/assets1/js/tweecool/tweecool.js"></script>
    <script src="assets/assets1/js/tweecool/setting.js"></script>

    <!-- Custom javaScript for this theme -->
    <script src="assets/assets1/js/custom.js"></script>

    <!-- Theme option-->
    <script src="assets/assets1/js/theme-option/demosetting.js"></script>  
  </body>

<!-- Mirrored from 99webpage.com/theme-review/html/cekas/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 Jun 2020 12:57:04 GMT -->
</html>