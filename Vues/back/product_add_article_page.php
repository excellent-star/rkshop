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
                                                    <select class="" name="product_category" id="product_category" required>
                                                           <?php foreach($categories as $category) :?>

                                                             <option value="<?=$category->categorie_id;?>"><?=$category->categorie_libelle;?></option>

                                                            <?php  endforeach;?>
                                                    </select>
                                                  
                                                </div>
                                                <div class="form-group">
                                                    <label style="font-size:16px;color:#26A69A;" for="product_brand">Marque article </label>
                                                    <select class="" name="product_brand" id="product_brand">
                                                          <option value="">Selectionner une marque</option>
                                                          <?php foreach($brands as $brand) :?>

                                                             <option value="<?=$brand->marque_id;?>"><?=$brand->marque_libelle;?></option>

                                                            <?php  endforeach;?>
                                                    </select>
                                                  
                                                </div>
                                                <div class="form-group">
                                                    <label style="font-size:16px;color:#26A69A;" for="">Libellé article <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" id="product_name" name="product_libelle"  placeholder="Nom  du Produit" required>
                                                    
                                                </div>
                                                <div class="form-group">
                                                    <label style="font-size:16px;color:#26A69A;" for="">Prix article <span class="text-danger">*</span></label>
                                                    <input type="number" class="form-control" id="product_price" name="product_price"  placeholder="Prix  du Produit" required>
                                                    
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
                                                        <td style="width: 25%;text-align: 0px;font-size: 25px;">Images</td>
                                                        <td style="width: 25%;text-align: opx;font-size: 25px;">Action</td>
                                                    </tr>
                                                    </thead>
                                                    <tbody class="ajout_images">
                                                    
                                                    </tbody>
                                                </table>



                                                <div class="form-group">

                                                  
                                                    <div>
                                                        <input type="radio" id="option_radio_input" name="section" value="option_radio_input"
                                                                checked>
                                                        <label for="option_radio_input">Option</label>
                                                        </div>

                                                        <div>
                                                        <input type="radio" id="taille_radio_input" name="section" value="taille_radio_input">
                                                        <label for="taille_radio_input">Taille</label>
                                                        </div>

                                                        <div>
                                                        <input type="radio" id="pointure_radio_input" name="section" value="pointure_radio_input">
                                                        <label for="pointure_radio_input">Pointure</label>
                                                    </div>

                                                       
                                                </div>

                                                <div class="form-group">

                                                        <div style="display: none;" id="option_section_to_display">


                                                             <div class="input-field">
                                                                  <table class="table table-bordered" id="table_field">
                                                                       <tr>
                                                                             <th>Option</th>
                                                                             <th>Value</th>
                                                                             <th><input class="btn" type="button" name="add" id="add" value="Ajouter"></th>
                                                                       </tr>
                                                                       

                                                                  </table>
                                                             </div>

                                                            <div class="form-group">
                                                                <label style="font-size:16px;color:#26A69A;" for="">Quantité <span class="text-danger">*</span></label>
                                                                <input type="number" name="product_quantity" class="form-control" id="product_quantity"  placeholder="quantité  du Produit">
                                                                
                                                            </div>
                                                              
                                                        </div>

                                                        <div style="display:none;" id="taille_couleur_section_to_display">


                                                            <h2>Taille</h2>

                                                        </div>

                                                        <div style="display:none;" id="pointure_couleur_section_to_display">

                                                          <h2>Pointure</h2>

                                                        </div>



                                                </div>



                                                <div style="text-align: center;margin-top: 5px;">
                                                    <button type="submit" class="btn save_product_btn">Sauvegarder</button>
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



           <script>


           // all this part is made for image treatment


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




            // this part is made for section display 

            var checked_radio_input_value = document.querySelector('input[name="section"]').value;

           

            if(checked_radio_input_value=="option_radio_input"){


                


                 $("#option_section_to_display").css('display','block');
                 $("#taille_couleur_section_to_display").css('display','none');
                 $("#pointure_couleur_section_to_display").css('display','none');
            }


            $('input[name="section"]').change(function(e){

                    
                        checked_radio_input_value = e.target.value;

                         if(checked_radio_input_value=="option_radio_input"){


                                


                                $("#option_section_to_display").css('display','block');
                                $("#taille_couleur_section_to_display").css('display','none');
                                $("#pointure_couleur_section_to_display").css('display','none');
                            }


                             if(checked_radio_input_value=="taille_radio_input"){


                


                                $("#option_section_to_display").css('display','none');
                                $("#taille_couleur_section_to_display").css('display','block');
                                $("#pointure_couleur_section_to_display").css('display','none');
                            }

                             if(checked_radio_input_value=="pointure_radio_input"){


                


                                $("#option_section_to_display").css('display','none');
                                $("#taille_couleur_section_to_display").css('display','none');
                                $("#pointure_couleur_section_to_display").css('display','block');
                            }
                                    
            });




            // this part is for option section 

            var html = '<tr><td><input class="form-control" type="text" name="inputoptions[]" required></td><td><input type="text" name="inputvalues[]" required></td><td><input type="button" class="btn btn-sm btn-danger" name="remove" value="Supprimer" id="remove"></td></tr>';

            

            $('#add').click(function(){

                  $("#table_field").append(html);
            });

            $("#table_field").on('click','#remove',function(){
                 
                  $(this).closest('tr').remove();
            });




            // here I begin with  my product store 


            $("#add_product_form").submit(function(e){


                   e.preventDefault();

                    var textarea_value = CKEDITOR.instances['product_description'].getData();


                    // alert(checked_radio_input_value);


                    if(checked_radio_input_value=="option_radio_input"){



                        input_product_quantity = $('input[name="product_quantity"]').val();


                        if(input_product_quantity==""){


                              alert("la quantité est obligatoire");
                        }else{




                            formData = new FormData(this);



                            $.ajax({


                                        url:"?p=<?= $fonction->double_cryptage("run_add_article");?>",
                                        type:"POST",
                                        dataType:"JSON",
                                        processData:false,
                                        contentType:false,
                                        data:formData,
                                        success:function(data){


                                            console.log(data);


                                            if(data.code==1){

                                                swal('Succès!', data.message, 'success').catch(swal.noop)
                                               

                                            }else{

                                                swal('Problème!', data.message, 'success').catch(swal.noop)

                                               
                                            }


                                            setInterval(function(){ 

                                                window.open("?p=<?= $fonction->double_cryptage("list_article_page");?>","_self");

                                             }, 3000);
                                            

                                            


                                           


                                        }

                                            
                                    });





                        }


                          
                    }

                     if(checked_radio_input_value=="taille_radio_input"){


                          
                    }

                     if(checked_radio_input_value=="pointure_radio_input"){


                          
                    }



                        
            });






            




































           </script>





       


      
















    </body>

</html>