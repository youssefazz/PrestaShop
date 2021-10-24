<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

{block name="page_title"}
    <div class="col-sm-5">
        <h2>Gérez les matières premières : </h2>
    </div>
{/block }
<br> <br>
<div class="container">
    <div class="row">
        <div class="col-md-5">
            <button type="button" class="btn btn-outline-info" data-toggle="modal" data-target="#addModal"
                    name="editbtn"> Ajouter une matière </button>
        </div>
        <div class="form-group col-md-3">
            <select class="form-control cat_id" aria-label="Default select example" name="cat_id" id="cat_id">
                <option selected>Choisir une catégorie</option>
                {foreach from=$categories item=$categorie}
                    <option value="{$categorie.cat_id}"  id="cat_id">{$categorie.cat_name}</option>
                {/foreach}
            </select>
        </div>
        <div class="col-md-4">
            <input class="form-control" id="search" type="text" placeholder="Chercher une matière ">
        </div>
    </div>
</div>
<!-- Ajouter matière -->
<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ajouter une matière</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="" method="post">
                <div class="modal-body">
                    <div class="form-group row">
                        <label for="mat_name" class="col-sm-4 col-form-label">Nom : </label>
                        <div class="col-sm-6">
                            <input type="text" name="mat_name" class="form-control" id="mat_name"
                                   placeholder="Entrez le nom de la matière" >
                            <p  class="p1"></p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="cat_name" class="col-sm-4 col-form-label">Prix unitaire (MAD) : </label>
                        <div class="col-sm-6">
                            <input type="number" step="0.01" class="form-control" name="mat_price" id="mat_price"
                                   placeholder="Entrez le prix unitaire" >
                            <p  class="p2"></p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="cat_desc" class="col-sm-4 col-form-label">Description : </label>
                        <div class="col-sm-6">
                            <textarea class="form-control" id="mat_desc" name="mat_desc"
                                      placeholder="Entrez la description" cols="20" rows="10"></textarea>
                            <p  class="p3"></p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="cat_img" class="col-sm-4 col-form-label">Image : </label>
                        <div class="col-sm-6">
                            <input type="file" class="form-control-file" id="mat_img" name="mat_img">
                            <p  class="p4"></p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="cat_img" class="col-sm-4 col-form-label">Choisir une catégorie :   </label>
                        <select class="form-select" aria-label="Default select example" name="cat_id">
                            <option selected>Choisir une catégorie</option>
                            {foreach from=$categories item=$categorie}
                                <option value="{$categorie.cat_id}"  id="cat_id">{$categorie.cat_name}</option>
                            {/foreach}
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                    <input type="submit" class="btn btn-primary" value="Ajouter la matière" id="submit">
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modifier la matière</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="" method="POST">
                <div class="modal-body">
                    <input type="hidden" name="id"  id="update_id"/>
                    <div class="form-group row">
                        <label for="mat_name" class="col-sm-4 col-form-label" >Nom : </label>
                        <div class="col-sm-6">
                            <input type="text" name="matName" class="form-control" id="matName"
                                   placeholder="Entrez le nom de la matière : " >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="cat_name" class="col-sm-4 col-form-label">Prix unitaire (MAD) : </label>
                        <div class="col-sm-6">
                            <input type="number" step="0.01" class="form-control" name="matPrice" id="matPrice"
                                   placeholder="Entrez le prix unitaire de la matière" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="mat_desc" class="col-sm-4 col-form-label">Description : </label>
                        <div class="col-sm-6">
                      <textarea class="form-control" id="matDesc" name="matDesc"
                                placeholder="Entrez la description" cols="20" rows="10"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="mat_img" class="col-sm-4 col-form-label">Image : </label>
                        <div class="col-sm-6">
                            <input type="file" class="form-control-file" id="matImg" name="matImg">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="cat_img" class="col-sm-4 col-form-label">Choisir la catégorie : </label>
                        <select class="form-select" aria-label="Default select example" name="catId" id="catId">
                            <option selected> Choisir une catégorie </option>
                            {foreach from=$categories item=$categorie}
                                <option value="{$categorie.cat_id}"  >{$categorie.cat_name}</option>
                            {/foreach}
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                    <button  class="btn btn-primary" type="submit" name="editCat">Modifier la matière</button>
                </div>
            </form>
        </div>
    </div>
</div>
{if !empty($categories)}
    <div class="table-responsive">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nom</th>
                <th scope="col">Prix unitaire (MAD)</th>
                <th scope="col">Déscription</th>
                <th scope="col">Image</th>
                <th scope="col">Catégorie</th>
                <th scope="col">Modifier/Supprimer</th>
            </tr>
            </thead>
            <tbody id="response"></tbody>
        </table>
    </div>
{/if}

<script type="text/javascript">
    //use this method to prevent resubmission
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
        }
    //validate form 
  $(document).ready(function(){
     $("#submit").click(function(){
        var name = $("#mat_name").val();
        var prix = $("#mat_price").val() ;
        var description = $("#mat_desc").val() ;
        var image = $("#mat_img").val() ;
         if(name.length == ""){
            $(".p1").text("Entrez un nom.");
            $(".p1").addClass("alert alert-danger")
            $("#mat_name").focus();
             return false;    
         }
        if(prix.length == ""){
            $(".p2").text("Entrez un prix.");
            $(".p2").addClass("alert alert-danger")
            $(".p1").removeClass("alert alert-danger")
            $(".p1").text("");
            $("#mat_price").focus();
            return false;      
        }
        if(description.length == ""){
            $(".p2").removeClass("alert alert-danger")
            $(".p3").text("Entrez une description.");
            $(".p3").addClass("alert alert-danger")
            $(".p2").text("");
            $("#mat_desc").focus();
            return false     
        }
         if(image.length == ""){
            $(".p3").removeClass("alert alert-danger")
            $(".p4").text("Entrez une image.");
            $(".p4").addClass("alert alert-danger")
            $(".p3").text("");
            $("#mat_img").focus();
            return false ;         
        }
    })
 })
    $(document).ready(function() {
        $(".cat_id").on('change', function () {
            let id = $(this).val();
            console.log(id);
            $.ajax({
                type: "POST",
                url: "../../modules/matiere/ajax.php",
                data: {
                    'id': id,
                },
                success: function (data) {
                    $("#response").html(data);
                }
            });
        });
        $("#search").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#response tr").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });
</script>




