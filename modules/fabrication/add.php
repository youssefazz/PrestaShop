<?php 
require_once(dirname(__FILE__).'../../../config/config.inc.php');
require_once(dirname(__FILE__).'../../../init.php');
require_once(dirname(__FILE__).'/fabrication.php');

$id=Tools::getValue('id');


$idCat=Tools::getValue('idCat');



$data=Tools::getValue('data');
$quantities =floatval(Tools::getValue('quantities'));



$NumData=count($data);


$price = Tools::getValue('price');
$quantity = Tools::getValue('quantity');
// $tabQuantity = new array();
//  array_push($tabQuantity, $quantity);
$res = floatval($price) * floatval($quantity);
$cout_unitaire = floatval($price)/floatval($quantity);

$sql="select * from ps_matiere where cat_id='$idCat' AND mat_id='$id'";
$resultats = Db::getInstance()->executeS($sql);




foreach ($resultats as $resultat)
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
	<div class="col-md-12" id="data'.$id.'" >

        <div class="col-md-12 id=margin">
            <div id="padding">
                <div class="card cardStyle">
                    <div class="card-body">
                        <div class="col-md-12 topCardStyle">
                            <div class="col-md-3" >
                                <br>
  
                                <h3 class="card-title ml-12">'.$resultat['mat_name'].'</h3>
                                <div class="">
                                    <button type="button" class="btn btn-danger btn-sm" id="hide'.$id.'"><i class="material-icons">close</i></button>
                                  </div>

                                <img class="card-img-top img-thumbnail" src="http://localhost:8080/prestashop/modules/matiere/img/'.$resultat['mat_img'].'"
                                    width="400px">
                                <br>
                                <br>
                                </div>
                                <div class="col-md-5">
                                    <br>
                                    <br>
                                    <p class="card-text">'.$resultat['mat_desc'].'</p>
                                    <p class="card-text" id="test"><b style="color:black;">Prix :</b>'.$res.' MAD</p>
                                    <p><b style="color:black;">Quantity :</b> '.$quantity.'</p>
                                    <p><b style="color:black;">Cout unitaire : </b>'.number_format($cout_unitaire,2).' (MAD)</p>
                                </div>
                                

                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <script>


    var res = parseFloat('.$price.') *  parseFloat('.$quantity.'); 
      sessionStorage.setItem("key"+'.$id.', res);
      charges=0 ;
      var tabCharges= '.json_encode($data).';

      for(let j=0 ; j< '.$NumData.' ; j++){
       charges += parseFloat(tabCharges[j]);

      }
console.log(charges);
     

var total = 0;
    
    for(let i=0 ; i < sessionStorage.length; i++){
      

         total += parseFloat(sessionStorage.getItem(sessionStorage.key(i))) ;
       
    }
  document.getElementById("total").innerHTML="TOTAL :"+total+"(MAD)";
  var Total_Charges= total + charges ;


  var cout = Total_Charges / '.$quantities.' ;

  
 

  document.getElementById("charge").innerHTML="TOTAL avec les charges : "+Total_Charges+" (MAD)";

  document.getElementById("cout").innerHTML="cout de revient: "+cout.toFixed(2)+" (MAD)";



  $("#hide'.$id.'").click(function(){

        $("#data'.$id.'").slideUp("normal",function(){
            $(this).remove();
            });



  

     
        total = total - parseFloat('.$res.');
        
  
        
        
        document.getElementById("total").innerHTML="TOTAL :"+total+"(MAD)";
        document.getElementById("charge").innerHTML="TOTAL with charge:";
        sessionStorage.removeItem("key"+'.$id.');




        });

 
    

    </script>
    </body>
    </html>

';
}

