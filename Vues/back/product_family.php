<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Famille produit</title>

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
                            <h1> Famille des Produits</h1>
                            <small> ajouter/supprimer/modifier/voir</small>
                            <ul class="link hidden-xs">
                                <li><a href="?p=dashboard"><i class="fa fa-home"></i>Tableau de Bord</a></li>
                                <li><a href="?p=family">Famille</a></li>
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

                                           <button style="background-color:#26A69A;" class="btn not-display-image" data-target="#add-product"  data-toggle="modal">Ajouter une Famille</button>

                                        </div>
                                        
                                    </div>
                                    <div class="card-content">
                                       

                                        <div class="table-responsive">
                                            <table id="family-table" class="table table-bordered table-hover">
                                                <thead>

                                                
                                                    <tr>
                                                        <th>Select</th>
                                                        <th>Nom</th>
                                                        <th>Description </th>
                                                        <th>Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                <?php foreach($families as $key=> $family):   ?>
                                                    <tr>
                                                        <td>
                                                            <input type="checkbox" id="test1" />
                                                            <label for="test1"></label>
                                                        </td>
                                                        <td><?=$family->famille_libelle;?></td>
                                                        <td><?= substr($family->famille_description,0,30).' ...';?></td>
                                                        <td style="text-align: center;">

                                                              <button class="btn btn-sm view" data-target="#view-product"  data-toggle="modal" data-id="<?=$family->famille_id;?>" data-nom="<?=$family->famille_libelle;?>" data-description="<?=$family->famille_description;?>"  data-image="<?=$family->famille_image;?>" data-placement="left" title="Update"><i class="fa fa-eye" aria-hidden="true"></i></button>

                                                            <button class="btn btn-sm edit" data-id="<?=$family->famille_id;?>" data-nom="<?=$family->famille_libelle;?>" data-description="<?=$family->famille_description;?>"  data-image="<?=$family->famille_image;?>"  data-placement="left" title="Update" data-target="#update-product"  data-toggle="modal"><i class="fa fa-pencil" aria-hidden="true"></i></button>


                                                            <button class="btn btn-danger btn-sm delete" data-toggle="tooltip" data-id="<?=$family->famille_id;?>" data-placement="right" title="Delete "><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                                        </td>
                                                    </tr>

                                                    <?php endforeach; ?>
                                               
                                                   
                                                </tbody>
                                            </table>
                                        </div>
                                           
                                       

                                    </div>
                                    <div class="card-footer">
                                      
                                     

                                         <button style="margin-bottom: 20px;margin-left:10px;"  class="btn btn-danger">Suppression</button>

                                      
                                      
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


                        <!-- this modal is for adding new family -->

                            <!-- zoomIn -->
                            <div class="modal animated zoomIn" id="add-product" role="dialog" style="width:100%">
                                <div class="modal-dialog">

                                    <!-- Modal content-->
                                    <div class="modal-content">
                                    <form action="" id="add-family-form">
                                        <div class="modal-header">
                                            <button type="button" id="modal-x-close-button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Ajouter une famille</h4>
                                        </div>
                                       

                                      
                                        <div class="modal-body">
                                            
                                                <div class="form-group">
                                                    <label style="font-size:16px;color:#26A69A;" for="nom-famille">Nom <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" id="nom-famille"  placeholder="Nom Famille Produit" required>
                                                    <small id="nom-famille-msg" class="form-text text-muted"></small>
                                                </div>
                                                <div class="form-group">
                                                    <label style="font-size:16px;color:#26A69A;" for="description-famille">Description</label>
                                                    <textarea  class="form-control" id="description-famille" ></textarea>
                                                </div>

                                                <div class="form-group">
                                                <label style="font-size:16px;color:#26A69A;" for="description-famille">Image</label>
                                                      <input style="display:none;" type="file" accept=".png,.jpg,.jpeg,.gif" id="image-famille"><br>

                                                      <button type="button" id="image-button"  class="btn">Uploader l'Image</button>
                                                </div>

                                                <div class="image-frame">
                                                      
                                                     <img id="image-tag"   alt="">
                                                </div>
                                                
                                            
                                        </div>
                                        <div class="modal-footer">
                                            
                                            <button type="button" class="waves-effect waves-light btn btn-danger" id="shutdownmodal" data-dismiss="modal">Fermer</button>
                                            <button style="margin-right:15px;" type="submit" class="waves-effect waves-light btn">Valider</button>
                                        </div>
                                        </form>
                                    </div>

                                </div>
                            </div>






                            <!-- this modal is for editing a existing family -->
                            <div class="modal animated zoomIn" id="update-product" role="dialog" style="width:100%">
                                <div class="modal-dialog">

                                    <!-- Modal content-->
                                    <div class="modal-content">
                                    <form action="" id="update-family-form">
                                        <div class="modal-header">
                                            <button type="button" id="modal-x-close-button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Modification</h4>
                                        </div>
                                       

                                      
                                        <div class="modal-body">
                                            
                                                <div class="form-group">
                                                    <label style="font-size:16px;color:#26A69A;" for="nom-famille">Nom <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" id="nom-famille-update"  placeholder="Nom Famille Produit" required>


                                                    
                                                    <input type="hidden" id="family-id">
                                                    <input type="hidden" id="family-image-update">


                                                    <small id="nom-famille-msg" class="form-text text-muted"></small>
                                                </div>
                                                <div class="form-group">
                                                    <label style="font-size:16px;color:#26A69A;" for="description-famille">Description</label>
                                                    <textarea  class="form-control" id="description-famille-update" ></textarea>
                                                </div>

                                                <div class="form-group">
                                                <label style="font-size:16px;color:#26A69A;" for="description-famille">Image</label>
                                                      <input style="display:none;" type="file" accept=".png,.jpg,.jpeg,.gif" id="image-famille-update"><br>

                                                      <button type="button" id="image-button-update"  class="btn">Uploader l'Image</button>
                                                </div>

                                                <div style="display:none;" class="former-image">

                                                </div>

                                                <div class="image-frame">
                                                      
                                                     <img id="image-tag-update"   alt="">
                                                </div>
                                                
                                            
                                        </div>
                                        <div class="modal-footer">
                                            
                                            <button type="button" class="waves-effect waves-light btn btn-danger" id="shutdownmodal" data-dismiss="modal">Fermer</button>
                                            <button style="margin-right:15px;" type="submit" class="waves-effect waves-light btn">Valider</button>
                                        </div>
                                        </form>
                                    </div>

                                </div>
                            </div>



                            

                            <!-- this modal right here is for viewing  -->

                            <div class="modal animated zoomIn" id="view-product" role="dialog" style="width:100%">
                                <div class="modal-dialog">

                                    <!-- Modal content-->
                                    <div class="modal-content">
                                    <form action="" id="update-family-form">
                                        <div class="modal-header">
                                            <button type="button" id="modal-x-close-button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Affichage</h4>
                                        </div>
                                       

                                      
                                        <div class="modal-body">



                                          <div id="main-view-frame">

                                                  <div class="view-title">

                                                 

                                                  </div>

                                                
                                                 <div class="view-text" style="inline-size:100%;overflow-wrap:break-word;">

                                                 </div>

                                                 <div class="view-image">


                                                 </div>

                                          </div>
                                            
                                              
                                                
                                            
                                        </div>
                                        <div class="modal-footer">
                                            
                                            <button type="button" class="waves-effect waves-light btn btn-danger" id="shutdownmodal" data-dismiss="modal">Fermer</button>
                                            <!-- <button style="margin-right:15px;" type="submit" class="waves-effect waves-light btn">Valider</button> -->
                                        </div>
                                        </form>
                                    </div>

                                </div>
                            </div>


                            














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

                   "use strict";
                   $(function(){



                    $('#add-product').on("hide.bs.modal", function() {


                        window.open("?p=<?= $fonction->double_cryptage("family");?>","_self");
                        
                    })
                    $('#update-product').on("hide.bs.modal", function() {


                        window.open("?p=<?= $fonction->double_cryptage("family");?>","_self");
                        
                    })
                    $('#view-product').on("hide.bs.modal", function() {


                        window.open("?p=<?= $fonction->double_cryptage("family");?>","_self");
                        
                    })




                    var nom,description,image;

                    // here , we want to not display preview of image

                    

                    

                   


                     $('#image-famille').click();

                         function readURL(input){

                              if(input.files && input.files[0]){

                                  var reader = new FileReader();

                                  reader.onload = function(e){

                                     $("#image-tag").attr('src',e.target.result);
                                     $('#image-tag').css({width:"200px",height:"200px"});

                                     

                                     


                                    

                                     image = $('#image-famille')[0].files[0];

                                     
                                  }

                                  reader.readAsDataURL(input.files[0]);
                              }else{

                                  alert('choisissez une image pour l\'aperçu');
                                  $('#image-tag').attr('src','');
                                //   $('#image-tag').css({width:"200px",height:"200px"});
                                
                              }
                         }

                

                    // the purpose is to trigger image select window 

                    $('#image-button').click(function(e){

                        //  e.preventDefault();

                        $('#image-famille').click();

                        $("#image-famille").change(function(){

                              readURL(this);

                            //   $('#image-frame').css('display','block');

                            
                        });

                    });

                    // when user clicks on close modal button

                      $('#shutdownmodal').click(function(){

                            $('#nom-famille').val('');
                            $('#description-famille').val('');
                            $('#image-famille').val('');

                            window.open("?p=<?= $fonction->double_cryptage("family");?>","_self");
                      });

                       $('#modal-x-close-button').click(function(){

                            $('#nom-famille').val('');
                            $('#description-famille').val('');
                            $('#image-famille').val('');
                            window.open("?p=<?= $fonction->double_cryptage("family");?>","_self");
                      });

                      

                      // when user submit the form

                         $('#add-family-form').submit(function(e){


                                e.preventDefault();

                                // retrieve variable content  
                                 nom = $('#nom-famille').val();
                                 description = $('#description-famille').val();
                                // var image = $('#image-famille')[0].files[0].name;

                                var formData = new FormData();


                                 formData.append('nom',nom);
                                 formData.append('description',description);
                                 formData.append('image',image);
                                

                                    $.ajax({


                                        url:"?p=<?= $fonction->double_cryptage("run_add_family");?>",
                                        type:"POST",
                                        dataType:"JSON",
                                        processData:false,
                                        contentType:false,
                                        data:formData,
                                        success:function(data){


                                            if(data.code==1){

                                                swal('Succès!', data.message, 'success').catch(swal.noop)
                                               

                                            }else{

                                                swal('Problème!', data.message, 'success').catch(swal.noop)

                                               
                                            }


                                            setInterval(function(){ 

                                                window.open("?p=<?= $fonction->double_cryptage("family");?>","_self");

                                             }, 3000);
                                            

                                            


                                           


                                        }

                                            
                                    });
                                
                         });


                   });



        </script>


        <script>

            // when  update modal pops up 

                 $("#update-product").on('show.bs.modal',function(e){


                       var button_data = $(e.relatedTarget).data();

                       var  id = button_data.id;
                       var  nom = button_data.nom;
                       var description = button_data.description;
                       var image = button_data.image;

                       

                        $(this).find("#nom-famille-update").val(nom);
                        $(this).find("#description-famille-update").val(description);
                        $(this).find("#family-id").val(id);
                        $(this).find("#family-image-update").val(image);



                        var img = '<img style="width:150px;height:150px;" src="assets/images/families/'+image+'"  />';


                        
                         if(image!=''){

                            $("#update-product .former-image").css('display','block');
                         }

                        $("#update-product .former-image").html(img);


                         



                         
                 });




        </script>



         <script>

                   // Updating family here 



                   var nom,description,image;

// here , we want to not display preview of image








 $('#image-famille-update').click();

     function readURL(input){

          if(input.files && input.files[0]){

              var reader = new FileReader();

              reader.onload = function(e){

                 $("#image-tag-update").attr('src',e.target.result);
                 $('#image-tag-update').css({width:"200px",height:"200px"});

                 $("#update-product .former-image").css('display','none');

                 

                 


                

                 image = $('#image-famille-update')[0].files[0];

                 
              }

              reader.readAsDataURL(input.files[0]);
          }else{

              alert('choisissez une image pour l\'aperçu');
              $('#image-tag-update').attr('src','');
            //   $('#image-tag').css({width:"200px",height:"200px"});
            
          }
     }



// the purpose is to trigger image select window 

$('#image-button-update').click(function(e){

    //  e.preventDefault();

    $('#image-famille-update').click();

    $("#image-famille-update").change(function(){

          readURL(this);

        //   $('#image-frame').css('display','block');

        
    });

});

// when user clicks on close modal button

  $('#shutdownmodal').click(function(){

        $('#nom-famille').val('');
        $('#description-famille').val('');
        $('#image-famille-update').val('');

        window.open("?p=<?= $fonction->double_cryptage("family");?>","_self");
  });

   $('#modal-x-close-button').click(function(){

        $('#nom-famille').val('');
        $('#description-famille').val('');
        $('#image-famille-update').val('');
        window.open("?p=<?= $fonction->double_cryptage("family");?>","_self");
  });

  

  // when user submit the form

     $('#update-family-form').submit(function(e){


            e.preventDefault();

            // retrieve variable content  
             nom = $('#nom-famille-update').val();
             description = $('#description-famille-update').val();
            // var image = $('#image-famille')[0].files[0].name;

            image_case = $("#family-image-update").val();

            id = $("#family-id").val();

            // console.log(id);
            // console.log(image);
            // console.log(image_case);

            if (
                typeof image === 'object' &&
                !Array.isArray(image) &&
                image !== null
            ) {

                console.log('it is an object');
                 
            }else{

                  image = image_case;
            }

           

            var formData = new FormData();


             formData.append('nom',nom);
             formData.append('description',description);
             
             formData.append('image',image);
             formData.append('id',id);
             
            

                $.ajax({


                    url:"?p=<?= $fonction->double_cryptage("run_update_family");?>",
                    type:"POST",
                    dataType:"JSON",
                    processData:false,
                    contentType:false,
                    data:formData,
                    success:function(data){


                        if(data.code==1){

                            swal('Succès!', data.message, 'success').catch(swal.noop)
                           

                        }else{

                            swal('Problème!', data.message, 'success').catch(swal.noop)

                           
                        }


                        setInterval(function(){ 

                            window.open("?p=<?= $fonction->double_cryptage("family");?>","_self");

                         }, 3000);

                       
                        

                        


                       


                    }

                        
                });
            
     });





         </script>





         <script>
                $(function(){







                                // when  update modal pops up 

                 $("#view-product").on('show.bs.modal',function(e){


                       var button_data = $(e.relatedTarget).data();

                       var  id = button_data.id;
                       var  nom = button_data.nom;
                       var description = button_data.description;
                       var image = button_data.image;


                       

                      


                       var view_title_tag = '<h2>'+nom+'</h2>';
                       var view_text_tag = '<p>'+description+'</p>';

                       

                        $(this).find(".view-title").html(view_title_tag);
                        $(this).find(".view-text").html(view_text_tag);
                       



                        var img = '<img style="width:100%;height:300px;" src="assets/images/families/'+image+'"  />';


                        
                         if(image!=''){

                            $(".view-image").html(img);
                         }

                        


                         



                         
                 });

                       





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


                                                                url:"?p=<?= $fonction->double_cryptage("run_delete_family");?>",
                                                                type:"POST",
                                                                dataType:"JSON",
                                                                data:{id:id},
                                                                success:function(data){



                                                                    swal('Suppression !', 'Opération effectué avec succès', 'success')




                                                                     setInterval(function(){ 

                                                                    window.open("?p=<?= $fonction->double_cryptage("family");?>","_self");

                                                                }, 3000);


                                                                 


                                                                }

                                                                   
                                                            });


                                                            




                                                        }).catch(swal.noop)





                  });


         </script>
















    </body>

</html>