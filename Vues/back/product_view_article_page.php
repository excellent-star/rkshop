<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Aperçu produit</title>

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
                            <h1> Aperçu Article</h1>
                            <small> ajouter/supprimer/modifier/voir</small>
                            <ul class="link hidden-xs">
                                <li><a href="?p=dashboard"><i class="fa fa-home"></i>Tableau de Bord</a></li>
                                <li><a href="?p=family">Aperçu Article</a></li>
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

                                           <a style="background-color:#26A69A;" class="btn not-display-image" href="?p=<?= $fonction->double_cryptage("list_article_page");?>"   >Retour sur la liste</a>

                                        </div>
                                        
                                    </div>
                                    <div class="card-content" style="margin-bottom:20px;">







                                        <div class="row">

                                                 <div class="col-sm-3">

                                                   <h2>Catégorie : </h2>

                                                 </div>
                                                 <div class="col-sm-9">

                                                    <h2 style="font-weight:bold;"><?=$category->categorie_libelle;?></h2>
                                                 </div>

                                                 </div>
                                        </div>

                                        <div class="row">

                                                 <div class="col-sm-3">

                                                   <h2 style="padding-left:15px;">Libellé : </h2>

                                                 </div>
                                                 <div class="col-sm-9">

                                                    
                                                 <h2 style="font-weight:bold;"><?=$result_check->article_libelle;?></h2>
                                                 </div>
                                        </div>


                                         <div class="row">

                                                 <div class="col-sm-3">

                                                   <h2 style="padding-left:15px;">Prix Unitaire : </h2>

                                                 </div>
                                                 <div class="col-sm-9">

                                                    
                                                 <h2 style="font-weight:bold;"><?=substr_replace($result_check->article_prix ,"", -3);?></h2>
                                                 </div>
                                        </div>

                                        <div class="row">

                                                 <div class="col-sm-3">

                                                   <h2 style="padding-left:15px;">Description : </h2>

                                                 </div>
                                                 <div class="col-sm-9" style="font-weight: bold;">

                                                    
                                                 <?=$result_check->article_description;?>

                                                 </div>
                                        </div>

                                        <?php if($result_check->article_option=="option"): ?>

                                              <h3 style="text-align: center;">Les caracteristiques de l'article</h3>

                                                   <div class="row">

                                                  

                                                            <div class="col-sm-3">

                                                            </div>

                                                            <div class="col-sm-9">

                                                                <table class="table">
                                                                    <tr>
                                                                        <th>Option</th>
                                                                        <th>Valeur</th>
                                                                        
                                                                    </tr>


                                                                    <?php foreach($features as $feature):  ?>

                                                                        <tr>
                                                                              <td><?=$feature->option_parametre_parametre;?></td>
                                                                              <td><?=$feature->option_parametre_libelle;?></td>
                                                                        </tr>

                                                                    
                                                                    <?php endforeach;?>
                                                                    

                                                                        

                                                                    
                                                                    
                                                                </table>
                                                                
                                                            </div>


                                                     </div>


                                        <?php endif;?>

                                        <?php if($result_check->article_option=="taille" || $result_check->article_option=="pointure"): ?>


                                         



                                            <div class="row">

                                                       <div class="col-sm-2">

                                                       </div>

                                                     <div class="col-sm-10">

                                                         <table class="table">
                                                               <tr>
                                                                   <th>Taille</th>
                                                                   <th>Couleur</th>
                                                                   <th>Quantité</th>
                                                               </tr>
                                                               

                                                                

                                                              
                                                               <tr>
                                                                   <td colspan="2">Quantité disponible</td>
                                                                   <td>Quantité here</td>
                                                               </tr>
                                                         </table>
                                                           
                                                     </div>
                                            </div>

                                             


                                        <?php endif;?> 



                                         <?php if($images): ?>



                                            <h3 style="text-align: center;">Les images de l'article</h3>


                                         



                                            <div class="row" style="margin:5px;">

                                                      <?php foreach($images as $image):  ?>

                                                             <div class="col-sm-4">

                                                                  <img  class="img-thumbnail" style="width:200px;height:200px;" src="assets/images/articles/<?=$image->image_url;?>" alt="">
                                                             </div>
                                                      <?php endforeach; ?>
                                            </div>

                                             


                                        <?php endif;?> 



                                       


                                        


                                        

                                       

                                        
                                           
                                       

                                    </div>
                                    <div class="card-footer" >
                                      
                                     

                                         <!-- <button style="margin-bottom: 20px;margin-left:10px;"  class="btn btn-danger delete-multiple-checkbox-button">Suppression</button> -->

                                      
                                      
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





       


       



    




   



            

        




    
















    </body>

</html>