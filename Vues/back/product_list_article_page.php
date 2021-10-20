<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Liste produit</title>

        <?php include('main_styles.php');?>

    </head>

    <body>
        <div id="wrapper">
            <!--navbar top-->
            <?php include('top_navbar.php');?>
            <!-- Sidebar -->
            <?php include('sidebar.php');?>
            <!-- ./sidebar-wrapper -->
            <!-- Page content -->
            <div id="page-content-wrapper">
                <div class="page-content">
                    <!-- Content Header (Page header) -->
                    <section class="content-header z-depth-1">
                        <div class="header-icon">
                            <i class="fa fa-file-o"></i>
                        </div>
                        <div class="header-title">
                            <h1> Liste des Articles</h1>
                            <small> ajouter/supprimer/modifier/voir</small>
                            <ul class="link hidden-xs">
                                <li><a href="?p=dashboard"><i class="fa fa-home"></i>Tableau de Bord</a></li>
                                <li><a href="?p=family">Articles</a></li>
                            </ul>
                        </div>
                    </section>
                    <!-- page section -->
                    <div class="container-fluid">
                        <div class="row">
                            <!-- basic forms -->
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="card">
                                    <div class="card-header">
                                      
                                        <div>

                                        
                                        </div>
                                          <div>

                                           <a style="background-color:#26A69A;" class="btn not-display-image" href="?p=<?= $fonction->double_cryptage("add_article_page");?>"   >Ajouter un nouveau article</a>

                                        </div>
                                        
                                    </div>
                                    <div class="card-content">
                                       

                                        <div class="table-responsive">
                                            <table id="family-table" class="table table-bordered table-hover">
                                                <thead>

                                                
                                                    <tr>
                                                        <td>
                                                            <input type="checkbox" id="test" class="checkAll"  />
                                                            <label for="test"></label>
                                                        </td>
                                                        <th>Image</th>
                                                        <th>Libellé</th>
                                                        <th>Catégorie</th>
                                                        <th>Prix</th>
                                                        <th>Couleur</th>
                                                        <th>Taille </th>
                                                        <th>Qté </th>
                                                        <th>Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                <?php foreach($articles as $key=> $article):   ?>


                                                    <?php 

                                                     $image = $ec_family_manager->getRow("SELECT * FROM ec_image WHERE article_id=?",array($article->article_id));

                                                     $category = $ec_family_manager->getRow("SELECT * FROM ec_categorie WHERE categorie_id=?",array($article->categorie_id));

                                                     $taille = $ec_family_manager->getRows("SELECT parametre_article_taille_pointure, sum(parametre_article_quantite) as quantite  FROM ec_parametre_article WHERE article_id=? GROUP BY parametre_article_taille_pointure",array($article->article_id));



                                                     $couleur = $ec_family_manager->getRows("SELECT parametre_article_couleur, sum(parametre_article_quantite) as quantite  FROM ec_parametre_article WHERE article_id=? GROUP BY parametre_article_couleur",array($article->article_id));

                                                     

                                                     

                                                    

                                                    // $taille = array();
                                                    $taille_enregistree=array();

                                                     if(isset($taille)){

                                                     
                                                           
                                                          foreach($taille as $key =>$v){

                                                            array_push($taille, $v->parametre_article_taille_pointure);
                                                            array_push($taille_enregistree, $v->parametre_article_taille_pointure.':'.$v->quantite);

                                                          }

                                                          
                                                     }



                                                     // $couleur = array();
                                                    $couleur_enregistree=array();

                                                    if(isset($couleur)){

                                                    
                                                          
                                                         foreach($couleur as $key =>$value){

                                                           array_push($couleur, $value->parametre_article_couleur);
                                                           array_push($couleur_enregistree, $value->parametre_article_couleur.':'.$value->quantite);

                                                         }

                                                         
                                                    }



                                                    //  var_dump(substr_replace($couleur_display,"",-1));
                                                    //  die();

                                                     
                                                        
                                                        ?>



                                                    <tr>
                                                        <td style="text-align: center;vertical-align:middle;">
                                                            <input type="checkbox" id="test<?=$key;?>" class="checkItem" value="<?=$article->article_id;?>" name="id[]" />
                                                            <label for="test<?=$key;?>"></label>
                                                        </td>
                                                        
                                                        <td>


                                                        <?php if(!empty($image->image_url)){ ?>
                                                        <a target="_blank" href="?p=<?=$fonction->double_cryptage('detail_image_article_page')?>&id=<?=$fonction->double_cryptage($article->article_id)?>">
                                                        <img style="width: 100px;height:100px;" class="img-thumbnail"  src="assets/images/articles/<?=$image->image_url;?>"/>
                                                        </a>
                                                        <?php } ?>


                                                            
                                                        
                                                        
                                                        </td>

                                                        <td><?=$article->article_libelle;?></td>
                                                        
                                                        <td><?=$category->categorie_libelle;?></td>
                                                        <td><?=substr_replace($article->article_prix ,"", -3);?></td>
                                                        <td><?=implode(', ', $couleur_enregistree) ?></td>
                                                        <td><?=implode(', ', $taille_enregistree) ?></td>
                                                        <td><?=$article->article_qte;?></td>
                                                        <td style="text-align: center;">

                                                              <a class="btn btn-sm view" href="?p=<?=$fonction->double_cryptage('view_article_page')?>&id=<?=$fonction->double_cryptage($article->article_id)?>" data-placement="left" title="Update"><i class="fa fa-eye" aria-hidden="true"></i></a>

                                                            <a class="btn btn-sm edit" href="?p=<?=$fonction->double_cryptage('update_article_page')?>&id=<?=$fonction->double_cryptage($article->article_id)?>"   data-placement="left" title="Update"><i class="fa fa-pencil" aria-hidden="true"></i></a>


                                                            <button class="btn btn-danger btn-sm delete" data-toggle="tooltip" data-id="<?=$article->article_id;?>" data-placement="right" title="Delete "><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                                        </td>
                                                    </tr>

                                                    <?php endforeach; ?>
                                               
                                                   
                                                </tbody>
                                            </table>
                                        </div>
                                           
                                       

                                    </div>
                                    <div class="card-footer">
                                      
                                     

                                         <button style="margin-bottom: 20px;margin-left:10px;"  class="btn btn-danger delete-multiple-checkbox-button">Suppression</button>

                                      
                                      
                                  </div>
                                </div>
                            </div>
                            <!-- ./basic forms -->

                            <!-- forms cntrol -->
                         


                        </div>
                        <!-- ./bootstrap forms -->
                    </div>
                    <!-- ./row -->
                </div>
                <!-- ./cotainer -->
            </div>
            <!-- ./page-content -->
        </div>
        <!-- ./page-content-wrapper -->


                   





                          



                            

                          


                            














        <!-- Preloader -->

        <?php include('preloader.php'); ?>


        <!-- End Preloader -->
        <!-- Start Core Plugins-->

        <?php include('main_scripts.php');?>

        
        <!-- End Core Plugins-->
        <!-- Start Theme label Script-->
        <!-- main js -->
        <!-- <script src="assets/assets_backend/dist/js/main.js" type="text/javascript"></script> -->

        <!-- End Theme label Script-->
        <script>

              

            "use strict";
            $(function () {

                $('select').material_select();
                Materialize.updateTextFields();
                // autocomplete
                $('input.autocomplete').autocomplete({
                    data: {
                        "Apple": null,
                        "Microsoft": null,
                        "Google": 'https://placehold.it/250x250'
                    },
                    limit: 20, // The max amount of results that can be shown at once. Default: Infinity.
                    onAutocomplete: function (val) {
                        // Callback function when value is autcompleted.
                    },
                    minLength: 1 // The minimum length of the input for the autocomplete to start. Default: 1.
                });

                //datepicker
                $('.datepicker').pickadate({
                    selectMonths: true, // Creates a dropdown to control month
                    selectYears: 15 // Creates a dropdown of 15 years to control year
                });
            });
        </script>


 

        <script>
             "use strict";
            $(document).ready(function () {
                function dtable() {
                    $('#family-table').DataTable();
                }
                return (dtable());
            });
        </script>





       


       



    




   



            

         <script>
                  // here I'm gonna perform delete 

                  $(".delete").click(function(){

                         var id = $(this).attr('data-id');

                        




                                swal({
                                                            title: 'Voulez vous supprimé cette famille?',
                                                            text: 'l\'operation est irreversible!',
                                                            type: 'warning',
                                                            showCancelButton: true,
                                                            confirmButtonColor: '#3085d6',
                                                            cancelButtonColor: '#d33',
                                                            cancelButtonText:'Annuler',
                                                            confirmButtonText: 'oui, je veux!'
                                                        }).then(function () {


                                                            // var  formData = new FormData();


                                                            // formData.append('id',id);



                                                            $.ajax({


                                                                url:"?p=<?= $fonction->double_cryptage("run_delete_article");?>",
                                                                type:"POST",
                                                                dataType:"JSON",
                                                                data:{id:id},
                                                                success:function(data){



                                                                    swal('Suppression !', 'Opération effectué avec succès', 'success')




                                                                     setInterval(function(){ 

                                                                    window.open("?p=<?= $fonction->double_cryptage("list_article_page");?>","_self");

                                                                }, 3000);


                                                                 


                                                                }

                                                                   
                                                            });


                                                            




                                                        }).catch(swal.noop)





                  });


         </script>




         <script>

               // here , I'm going to delete mutiple select checkboxes




               // check all checkboxes in the same time


               $('.checkAll').change(function(){


                           $('.checkItem').prop('checked',$(this).prop('checked'));
                    });


               $('.delete-multiple-checkbox-button').click(function(){



                     var id = $('.checkItem:checked').map(function(){

                           return $(this).val()
                     }).get().join(' ');


                     if(id==''){

                            alert('cochez au moins une famille');
                     }else{





                        swal({
                                                            title: 'Voulez vous vraiment faire la suppression?',
                                                            text: 'l\'operation est irreversible!',
                                                            type: 'warning',
                                                            showCancelButton: true,
                                                            confirmButtonColor: '#3085d6',
                                                            cancelButtonColor: '#d33',
                                                            cancelButtonText:'Annuler',
                                                            confirmButtonText: 'oui, je veux!'
                                                        }).then(function () {


                                                            // var  formData = new FormData();


                                                            // formData.append('id',id);



                                                            $.ajax({


                                                                url:"?p=<?= $fonction->double_cryptage("run_delete_many_articles");?>",
                                                                type:"POST",
                                                                dataType:"JSON",
                                                                data:{id:id},
                                                                success:function(data){


                                                                    console.log(data);



                                                                    swal('Suppression !', 'Opération effectué avec succès', 'success')




                                                                     setInterval(function(){ 

                                                                    window.open("?p=<?= $fonction->double_cryptage("list_article_page");?>","_self");

                                                                }, 3000);


                                                                 


                                                                }

                                                                   
                                                            });


                                                            




                                                        }).catch(swal.noop)







                           
                     }


                      
               });




              
         </script>
















    </body>

</html>