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





                                                        <!-- <div class="form-group" style="display: none;">
                                                        <label>Quantité en stock (Obligatoire)</label>
                                                        <input type="number"  name="produit_quantite" class="form-control"  placeholder="Quantité de l'article" />
                                                    </div> -->

                                                    <div>

                                                  
                                   
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
                                                                                <label style="font-size: 16px;color:black;font-weight:12px;">
                                                                                <input style="opacity: 1 !important;position:static !important;"   type="checkbox" value="<?=$value->taille_pointure_libelle; ?>" name="taille_id[]">
                                                                                <?=$value->taille_pointure_libelle; ?>
                                                                                </label>
                                                                                <input class="nombre_taille" style="width: 60px;" type="number"  name="<?=$value->taille_pointure_libelle;?>">
                                                                            </div>
                                                                        </td>
                                                                        <td style="width: 85%;">
                                                                            <?php $la_taille=$value->taille_pointure_libelle; ?>
                                                                            <?php if(!empty($liste_couleur)): ?>
                                                                            <?php foreach ($liste_couleur as $key => $val): ?>
                                                                            <div class="checkbox affiche_couleur" style="display: none;">
                                                                                <label style="font-size: 16px;color:black;font-weight:12px;">
                                                                                <input style="position:static !important;left:0px !importantn;opacity:1 !important;" class="input_couleur" type="checkbox" value="<?=$la_taille.'|'.$val->article_couleur_libelle; ?>" name="couleur_id[]">
                                                                                <?=$val->article_couleur_libelle; ?>
                                                                                </label>
                                                                                <input class="nombre_couleur" style="width: 60px;" type="number" name="<?=$la_taille.'|'.$val->article_couleur_libelle; ?>">
                                                                            </div>
                                                                            <?php endforeach ?>
                                                                            <?php endif ?>
                                                                        </td>
                                                                    </tr>
                                                                    <?php endforeach ?>
                                                                    <?php endif ?>
                                                                    <tr>
                                                                        <div style="display: none;" class="count_couleur"><?=count($liste_couleur)  ?></div>
                                                                        <!-- <td><button class="btn btn-default btn-xs tab_9">Ajouter une taille</button> </td>
                                                                        <td><button class="btn btn-default btn-xs tab_4">Ajouter une couleur</button></td> -->
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>



                                                    </div>


















                                                            <!-- <h2>Taille</h2> -->

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

       // from pasco   
       
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


                                            // if(data.code==1){

                                            //     swal('Succès!', data.message, 'success').catch(swal.noop)
                                               

                                            // }else{

                                            //     swal('Problème!', data.message, 'success').catch(swal.noop)

                                               
                                            // }


                                            // setInterval(function(){ 

                                            //     window.open("?p=<?= $fonction->double_cryptage("list_article_page");?>","_self");

                                            //  }, 3000);
                                            

                                            


                                           


                                        }

                                            
                                    });





                          
                    }

                     if(checked_radio_input_value=="pointure_radio_input"){


                          
                    }



                        
            });






            




































           </script>





       


      
















    </body>

</html>