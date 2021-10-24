<?php
require_once(dirname(__FILE__).'../../../config/config.inc.php');
require_once(dirname(__FILE__).'../../../init.php');
require_once(dirname(__FILE__).'/matiere.php');

$id = Tools::getValue('id');
$sql = "select * from ps_matiere where cat_id=".$id;
$matieres = Db::getInstance()->executeS($sql);
foreach ($matieres as $matiere){
    echo '
           <tr>
               <td>'.$matiere['mat_id'].'</td>
               <td>'.$matiere['mat_name'].'</td>
               <td>'.$matiere['mat_price'].'</td>
               <td>'.$matiere['mat_desc'].'</td>
               <td><img src="http://localhost:8080/prestashop/modules/matiere/img/'.$matiere['mat_img'].'"
                        width="70px" class="img-thumbnail" ></td>
               <td>'.$matiere['cat_id'].'</td>
               <td>
                 <div class="col-sm-3">
                     <input type="hidden" name="id" value="'.$matiere['mat_id'].'" id="id" />
                     <button type="button" class="btn btn-success btn-sm editbtn" data-toggle="modal" data-target="#exampleModal" name="editbtn">
                             <i class="material-icons">edit</i>
                     </button>
                 </div>
                 <div class="col-sm-3">
                      <form action="" method="post">
                            <input type="hidden" name="id" value="'.$matiere['mat_id'].'" id="id" />
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
         <script>
                $(document).ready(function(){
                    $(".editbtn").on("click",function(){
                        $tr =$(this).closest("tr");
                        var data =$tr.children("td").map(function(){
                                return $(this).text();
                            }).get();
                        console.log(data);
                        $("#update_id").val(data[0]);
                        $("#matName").val(data[1]);
                        $("#matPrice").val(data[2]);
                        $("#matDesc").val(data[3]);
                        $("#matImg").val(data[4]);
                        $("#catId").val(data[5]);
                    });
                });
                </script>
         ';
}




