<?php
/* Smarty version 3.1.39, created on 2021-10-05 22:30:48
  from 'module:matiereviewstemplateshook' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_615cc408bae642_31712095',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '02b31df3fddaf265012c9d193b9393fb87ace60e' => 
    array (
      0 => 'module:matiereviewstemplateshook',
      1 => 1629977290,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_615cc408bae642_31712095 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"><?php echo '</script'; ?>
>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1637995188615cc408ba1e81_26346374', "page_title");
?>

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
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'categorie');
$_smarty_tpl->tpl_vars['categorie']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['categorie']->value) {
$_smarty_tpl->tpl_vars['categorie']->do_else = false;
?>
                    <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['categorie']->value['cat_id'], ENT_QUOTES, 'UTF-8');?>
"  id="cat_id"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['categorie']->value['cat_name'], ENT_QUOTES, 'UTF-8');?>
</option>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
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
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'categorie');
$_smarty_tpl->tpl_vars['categorie']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['categorie']->value) {
$_smarty_tpl->tpl_vars['categorie']->do_else = false;
?>
                                <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['categorie']->value['cat_id'], ENT_QUOTES, 'UTF-8');?>
"  id="cat_id"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['categorie']->value['cat_name'], ENT_QUOTES, 'UTF-8');?>
</option>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
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
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'categorie');
$_smarty_tpl->tpl_vars['categorie']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['categorie']->value) {
$_smarty_tpl->tpl_vars['categorie']->do_else = false;
?>
                                <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['categorie']->value['cat_id'], ENT_QUOTES, 'UTF-8');?>
"  ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['categorie']->value['cat_name'], ENT_QUOTES, 'UTF-8');?>
</option>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
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
<?php if (!empty($_smarty_tpl->tpl_vars['categories']->value)) {?>
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
<?php }?>

<?php echo '<script'; ?>
 type="text/javascript">
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
<?php echo '</script'; ?>
>




<?php }
/* {block "page_title"} */
class Block_1637995188615cc408ba1e81_26346374 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_title' => 
  array (
    0 => 'Block_1637995188615cc408ba1e81_26346374',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="col-sm-5">
        <h2>Gérez les matières premières : </h2>
    </div>
<?php
}
}
/* {/block "page_title"} */
}
