<?php
require_once(dirname(__FILE__).'../../../config/config.inc.php');
require_once(dirname(__FILE__).'../../../init.php');
require_once(dirname(__FILE__).'/fabrication.php');

$idCat=Tools::getValue('id');
 
$data=Tools::getValue('data');

 
$sql="select * from ps_matiere where cat_id=".$idCat;
$matieres = Db::getInstance()->executeS($sql);

foreach ($matieres as $matiere)
{
    echo '
    <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body >
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  

<form>
    <div class="col-md-3 col-sm-6">
        <div class="product-grid">
            <div class="product-image">
                <a href="#" class="image">
                    <img class="pic-1" src="http://localhost:8080/prestashop/modules/matiere/img/'.$matiere['mat_img'].'">
                </a>
                <ul class="product-links">
                    <li><button type="button" class="btn btn-primary" id="'.$matiere['mat_id'].'" value="'.$matiere['mat_id'].'"><i class="material-icons add" >add</i>Ajouter</button></li>
                    <li>              
                <input type="number" min="1" max="100" id="userInput'.$matiere['mat_id'].'"  class="form-control" required value="1" >
                </li>

                    
                </ul>

            </div>
            <div class="product-content">
                <h3 class="title">'.$matiere['mat_name'].'</h3>
                <p class="description">'.$matiere['mat_desc'].'</p>
                <div class="price">'.$matiere['mat_price'] .'(MAD)</div>
                <p id="response"></p>
                
               
            </div>
        </div>
    </div>
    </form>
    
    <script type="text/javascript">


    $(function() {

$("#'.$matiere['mat_id'].'").on("click",function(){
     id= $(this).val();
     var quantity= $("#userInput'.$matiere['mat_id'].'").val();
      var i = Math.random();
      var quantities = 0;
            localStorage.setItem("test"+i,quantity);
            for(let i=0 ; i < localStorage.length; i++){

      console.log(localStorage.length);
      
      if(localStorage.key(i)!="4mstash-ajax-fields"){

        quantities += parseFloat(localStorage.getItem(localStorage.key(i))) ;

      }

         
       
    }
    console.log(quantities)
     $("#myAlert1").show("fade");
     $("#myAlert2").show("fade");

    $("#'.$matiere['mat_id'].'").prop("disabled" , "true")



   


       $.ajax({
                type: "POST",
                url: "../../modules/fabrication/add.php",


        

                            
                data: {
                    "id": id,
                    "idCat" : '.$idCat.',
                    "price" : '.$matiere['mat_price'] .',
                    "quantity" : quantity,
                   "data" : '.$data.',
                   "quantities" : quantities
                   
                   
                },
                success: function (data) {

                    $("#'.$idCat.'").append(data);

                    
                      // console.log(data);
                    


                }
            });
       

 
    $.ajax({
                type: "POST",
                url:"../../modules/fabrication/fabrication.php",
                data: {
                    "id": id,
                    "idCat" : '.$idCat.',
                    "price" : '.$matiere['mat_price'] .',
                     "quantity" : quantity,
                   
                   
                 },
               success: function (data) {

                    // $("#'.$idCat.'").append(data);

                    
                      console.log(data);
                    


                  }
            });
        });


    });




</script>

    </body>
    </html>

';
}
