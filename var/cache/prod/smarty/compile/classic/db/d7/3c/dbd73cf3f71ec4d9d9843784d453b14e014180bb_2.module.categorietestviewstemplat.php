<?php
/* Smarty version 3.1.39, created on 2021-09-14 22:12:38
  from 'module:categorietestviewstemplat' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61411046b1fe31_63140384',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dbd73cf3f71ec4d9d9843784d453b14e014180bb' => 
    array (
      0 => 'module:categorietestviewstemplat',
      1 => 1631652560,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61411046b1fe31_63140384 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_105648642461411046b18e03_00672948', "page_title");
?>

<br>
<br>
<div class="container">
    <div class="row">
        <div class="col-md-9">
            <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#addModal"
                    name="editbtn"> Ajouter une catégorie </button>
        </div>
        <div class="col-md-3">
            <input class="form-control" id="search" type="text" placeholder="Chercher une catégorie">
        </div>
    </div>
</div>
<br>
<!-- Ajouter catégorie -->
<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ajouter une catégorie</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <form action="" method="post">
        <div class="modal-body">
            <div class="form-group row">
                <label for="cat_ref" class="col-sm-4 col-form-label">Référence : </label>
                <div class="col-sm-6">
                    <input type="text" name="cat_ref" class="form-control" id="cat_ref"
                           placeholder="Entrez la référence de la catégorie" >
                    <p  class="p1"></p>
                </div>
            </div>
            <div class="form-group row">
                <label for="cat_name" class="col-sm-4 col-form-label">Nom : </label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="cat_name" id="cat_name"
                           placeholder="Entrez le nom de la catégorie" >
                    <p  class="p2"></p>
                </div>
            </div>
            <div class="form-group row">
                <label for="cat_desc" class="col-sm-4 col-form-label">Description : </label>
                <div class="col-sm-6">
                    <textarea class="form-control" id="cat_desc" name="cat_desc"
                              placeholder="Entrez la description" cols="20" rows="10"></textarea>
                    <p  class="p3"></p>
                </div>
            </div>
            <div class="form-group row">
                <label for="cat_img" class="col-sm-4 col-form-label">Image : </label>
                <div class="col-sm-6">
                    <input type="file" class="form-control-file" id="cat_img" name="cat_img">
                    <p  class="p4"></p>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
            <input type="submit" class="btn btn-primary" value="Ajouter catégorie" id="submit">
        </div>
    </form>
    </div>
  </div>
</div>

<?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"><?php echo '</script'; ?>
>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modifier la catégorie</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="" method="POST">
          <div class="modal-body">
              <input type="hidden" name="id"  id="update_id"/>
              <div class="form-group row">
                  <label for="cat_ref" class="col-sm-4 col-form-label" >Référence : </label>
                  <div class="col-sm-6">
                      <input type="text" name="catRef" class="form-control" id="refCat"
                                            placeholder="Entrez la référence de la catégorie" >
                  </div>
              </div>
              <div class="form-group row">
                  <label for="cat_name" class="col-sm-4 col-form-label">Nom : </label>
                  <div class="col-sm-6">
                      <input type="text" class="form-control" name="catName" id="nomCat"
                             placeholder="Entrez le nom de la catégorie" >
                  </div>
              </div>
              <div class="form-group row">
                  <label for="cat_desc" class="col-sm-4 col-form-label">Description : </label>
                  <div class="col-sm-6">
                      <textarea class="form-control" id="desCat" name="catDesc"
                                placeholder="Entrez la description" cols="20" rows="10"></textarea>
                  </div>
              </div>
              <div class="form-group row">
                  <label for="cat_img" class="col-sm-4 col-form-label">Image : </label>
                  <div class="col-sm-6">
                      <input type="file" class="form-control-file" id="catImg" name="catImg">
                  </div>
              </div>
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
              <button  class="btn btn-primary" type="submit" name="editCat">Modifier la catégorie</button>
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
                <th class="table-primary" scope="col">Id</th>
                <th class="table-primary" scope="col">Référence</th>
                <th class="table-primary" scope="col">Nom</th>
                <th class="table-primary" scope="col">Déscription</th>
                <th class="table-primary" scope="col">Image</th>
                <th class="table-primary" scope="col">Modifier/Supprimer</th>
            </tr>
            </thead>
            <tbody id="response">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'categorie');
$_smarty_tpl->tpl_vars['categorie']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['categorie']->value) {
$_smarty_tpl->tpl_vars['categorie']->do_else = false;
?>
                <tr>
                    <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['categorie']->value['cat_id'], ENT_QUOTES, 'UTF-8');?>
</td>
                    <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['categorie']->value['cat_ref'], ENT_QUOTES, 'UTF-8');?>
</td>
                    <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['categorie']->value['cat_name'], ENT_QUOTES, 'UTF-8');?>
</td>
                    <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['categorie']->value['cat_desc'], ENT_QUOTES, 'UTF-8');?>
</td>
                    <td><img src="http://localhost:8080/prestashop/modules/categorietest/img/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['categorie']->value['cat_img'], ENT_QUOTES, 'UTF-8');?>
"
                             width="50px" class="img-thumbnail"> </td>
                    <td>
                        <div class="col-sm-4">
                            <input type="hidden" name="id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['categorie']->value['cat_id'], ENT_QUOTES, 'UTF-8');?>
" id="id" />
                            <button type="button" class="btn btn-success btn-sm editbtn" data-toggle="modal" data-target="#exampleModal" name="editbtn">
                                <i class="material-icons">edit</i>
                            </button>
                        </div>
                        <div class="col-sm-4">
                            <form action="" method="post">
                                <input type="hidden" name="id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['categorie']->value['cat_id'], ENT_QUOTES, 'UTF-8');?>
" id="id" />
                                <button type="submit" class="btn btn-danger btn-sm" name="delete" id="delete" >
                                    <i class="material-icons">delete</i>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                <div class="module-item-wrapper-grid">
                    <div class="module-container"> </div>
                </div>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </tbody>
        </table>
    </div>

<?php }?>

<?php echo '<script'; ?>
>
    //use this method to prevent resubmission
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
        }
 //validate form 
  $(document).ready(function(){
     $("#submit").click(function(){
         var ref = $("#cat_ref").val();
        var name = $("#cat_name").val() ;
        var description = $("#cat_desc").val() ;
        var image = $("#cat_img").val() ;
         if(ref.length == ""){
            $(".p1").text("Entrez une référence.");
            $(".p1").addClass("alert alert-danger")
            $("#cat_ref").focus();
             return false;    
         }
        if(name.length == ""){
            $(".p2").text("Entrez un nom.");
            $(".p2").addClass("alert alert-danger")
            $(".p1").removeClass("alert alert-danger")
            $(".p1").text("");
            $("#cat_name").focus();
            return false;      
        }
        if(description.length == ""){
            $(".p2").removeClass("alert alert-danger")
            $(".p3").text("Entrez une description");
            $(".p3").addClass("alert alert-danger")
            $(".p2").text("");
            $("#cat_desc").focus();
            return false     
        }
         if(image.length == ""){
            $(".p3").removeClass("alert alert-danger")
            $(".p4").text("Entrez une image.");
            $(".p4").addClass("alert alert-danger")
            $(".p3").text("");
            $("#cat_img").focus();
            return false ;         
        }
    })
 })

    $(document).ready(function(){
        $('.editbtn').on('click',function(){
            $tr =$(this).closest('tr');
            var data =$tr.children("td").map(function(){
                return $(this).text();
            }).get();
            console.log(data);
            $('#update_id').val(data[0]);
            $('#refCat').val(data[1]);
            $('#nomCat').val(data[2]);
            $('#desCat').val(data[3]);
        });
        $("#search").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#response tr").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });

<?php echo '</script'; ?>
><?php }
/* {block "page_title"} */
class Block_105648642461411046b18e03_00672948 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_title' => 
  array (
    0 => 'Block_105648642461411046b18e03_00672948',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="col-sm-3">
        <h2>Gérez les catégories : </h2>
    </div>
<?php
}
}
/* {/block "page_title"} */
}
