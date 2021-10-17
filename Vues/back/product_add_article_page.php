<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Ajout article</title>

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
                            <h1> Ajout Article</h1>
                            <small> ajouter/supprimer/modifier/voir</small>
                            <ul class="link hidden-xs">
                                <li><a href="?p=dashboard"><i class="fa fa-home"></i>Tableau de Bord</a></li>
                                <li><a href="?p=family">articles</a></li>
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

                                           <!-- <button style="background-color:#26A69A;" class="btn not-display-image" data-target="#add-product"  data-toggle="modal">Ajouter une Famille</button> -->

                                        </div>
                                        
                                    </div>
                                    <div class="card-content">
                                       

                                       <form id="add_product_form">

                                           
                                               
                                                <div class="form-group">
                                                    <label style="font-size:16px;color:#26A69A;" for="product_category">Catégorie article <span class="text-danger">*</span></label>
                                                    <select class="" name="product_category" id="product_category">
                                                          <option value="a">a</option>
                                                          <option value="b">b</option>
                                                          <option value="c">c</option>
                                                    </select>
                                                  
                                                </div>
                                                <div class="form-group">
                                                    <label style="font-size:16px;color:#26A69A;" for="product_brand">Marque article </label>
                                                    <select class="" name="product_brand" id="product_brand">
                                                          <option value="">Selectionner une marque</option>
                                                          <option value="a">a</option>
                                                          <option value="b">b</option>
                                                          <option value="c">c</option>
                                                    </select>
                                                  
                                                </div>
                                                <div class="form-group">
                                                    <label style="font-size:16px;color:#26A69A;" for="">Libellé article <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" id="product_name"  placeholder="Nom  du Produit" required>
                                                    
                                                </div>
                                                <div class="form-group">
                                                    <label style="font-size:16px;color:#26A69A;" for="">Prix article <span class="text-danger">*</span></label>
                                                    <input type="number" class="form-control" id="product_price"  placeholder="Prix  du Produit" required>
                                                    
                                                </div>

                                                <div class="form-group">
                                                    <label style="font-size:16px;color:#26A69A;" for="">Description  article </label>
                                                    <textarea name="prodcut_description" id="product_description" cols="30" rows="10"></textarea>
                                                    
                                                </div>











                                                <!-- <div class="form-group">
                                                    <label style="font-size:16px;color:#26A69A;" for="">Quantité  article <span class="text-danger">*</span></label>
                                                    <input type="number" class="form-control" id="product_quantity"  placeholder="Quantité   Produit" required>
                                                    
                                                    
                                                </div> -->

                                                <div class="form-group">
                                                    <button class="A btn btn-default btn-bordered btn-icon joindre_image" id="importer"  >IMPORTER LES IMAGES <i class="fa fa-download"></i></button>
                                                </div>



                                                <div class="col-md-6" style="display: none; text-align: center; margin-bottom: 1%">
                                                <div class="section">
                                                    <label  class="field prepend-icon ad_input">
                                                        <input type="file"  class="image_libelle"  accept="image/*" name="image_libelle[]" id="image_libelle" onchange="readURL(this);" multiple="" >
                                                        <input type="hiddens" class="removed_images_str" name="removed_images_str" value="0">
                                                    <!--  <input type="file" accept="image/*" name="image_libelle[]" id="image_libelle1" onchange="readURL_(this);" > -->
                                                    </label>
                                                    </div>
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



                                                <div class="form-group">

                                                     <div>
                                                    <input type="radio" id="option" name="section" value="option"
                                                            checked>
                                                    <label for="option">Option</label>
                                                    </div>

                                                    <div>
                                                    <input type="radio" id="taille_couleur_pointure" name="section" value="taille_couleur_pointure">
                                                    <label for="taille_couleur_pointure">Taille, Couleur et Pointure</label>
                                                    </div>

                                                       
                                                </div>

                                                <div class="form-group">

                                                        <div style="display: none;" id="option_section_to_display">
                                                              
                                                        </div>

                                                        <div style="display:none;" id="tcp_section_to_display">

                                                        </div>



                                                </div>















                                                



                                       </form>
                                           
                                       

                                    </div>
                                    <div class="card-footer">
                                      
                                     

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

         <script>
            $(function () {
                "use strict"; // Start of use strict
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace('product_description');
            });
        </script>





       


      
















    </body>

</html>