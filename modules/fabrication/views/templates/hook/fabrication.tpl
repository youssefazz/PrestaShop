<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="alert alert-success ">
            <p class="total" id="total" ></p>
        </div>
    <div  class="alert alert-success ">
            <p class="total" id="charge"></p>
    </div>
    <div class="alert alert-success  ">
            <p class="cout" id="cout"></p>
    </div>
    <div class="row">
        <div class="col-md-6">
            <h2>Ajouter les charges neccessaires : </h2>
        </div>
        <div class="col-md-6">
            <button name="add_button" value="Add New" id="add_button" onclick="addButton()" class="btn btn-primary"> Ajoutez des charges </button>
        </div>
    </div>
    <br>
    <div class="row">
        <div id="object_data_0" class="col-md-4" >
                 
        </div>
        <div id="object_data_1" class="col-md-4" >
                 
        </div>

         <div id="object_data_2" class="col-md-4" >

        </div>

           
    </div>

        

    <div class="modal fade bd-example-modal-lg" tabindex="-1" id="myModal" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h1 class="modal-title" id="exampleModalLabel" value="" style="text-align: center;color: #19488F;">Selectionnez une matière</h1>
                </div>
                <form action="" method="post">
                    <div class="modal-body">
                        <div class="row">
                            <div id="response"></div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <div class="col-md-10">
        {foreach from=$categories item=$categorie}
            <div class="col-md-12 id=margin">
                <div id="padding">
                    <div class="card cardStyle">
                        <div class="card-body">
                            <div class="col-md-12 topCardStyle">
                                <div class="row">
                                    <div class="col-md-3">
                                        <br>
                                        <input type="hidden"s name="id"  id="update_id" value="{$categorie.cat_id}"/>
                                        <h3 class="card-title">{$categorie.cat_name}</h3>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <img class="card-img-top img-thumbnail" src="http://localhost:8080/prestashop/modules/categorietest/img/{$categorie.cat_img}"
                                            width="240px">
                                    </div>
                                    <div class="col-md-3">
                                        <p class="card-text">{$categorie.cat_desc}</p>
                                    </div>
                                    <div class="col-md-3">
                                        <form method="post" action="#" id="myForm">
                                            <button type="submit" data-type="post" class="btn btn-primary add-btn" data-toggle="modal" data-target=".bd-example-modal-lg"
                                                    name="editbtn" id="select-btn" value="{$categorie.cat_id}"> Ajouter </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <p id="{$categorie.cat_id}" ></p>
                        </div>
                    </div>
                </div>
            </div>
        {/foreach}
    </div>
    <script type="text/javascript">
            sessionStorage.clear();
                localStorage.clear();

            var i = 1; 
            var charges=new Array("0");
            function addButton(){
                var new_line = document.createElement("p");
                var p= document.createElement("p");
                 var l= document.createElement("p");
                  var le= document.createElement("p");
                                    var lee= document.createElement("p");

                  

              





               
                // var new_line_2 = document.createElement("br");
                // var n = document.createElement("br");
                var textbox = document.createElement("input");
                 var label = document.createElement("label");
                  var tabLabel = ["Loyer","Eau","Electricite","Main D'oeuvre","Transport"];
                  if(i<6){

                        label.innerHTML = tabLabel[i-1] ;

                textbox.type= "text";
                textbox.name= "txt_" + i;
                textbox.id= "txtid" + i;
                textbox.placeholder ="charge_"+i;
                textbox.className="form-control";    
                var btn = document.createElement("input");
                btn.type = "button";
                btn.name = "button"+i;
                btn.value = "Valider";
                btn.id = "id"+i;
                btn.className="btn btn-success";
                btn.setAttribute("onClick","showMessage()");
          
                document.getElementById("object_data_1").appendChild(textbox);
                document.getElementById("object_data_2").appendChild(btn);
                                 document.getElementById("object_data_0").appendChild(label);

             
                 // document.getElementById("object_data_1").appendChild(new_line_2);
                 //  document.getElementById("object_data_1").appendChild(n);
                          
                document.getElementById("object_data_0").appendChild(l);
               


                document.getElementById("object_data_2").appendChild(new_line);
                document.getElementById("object_data_1").appendChild(p);

                  }
               
                                

                       

                i++  
        }

            function showMessage(){
                    var currID = showMessage.caller.arguments[0].target.id;
                    charges.push(document.getElementById("txt"+currID).value);
                    console.log(charges);
                
                }
            $(function() {
                $(".add-btn").on('click',function(){
                        id= $(this).val();
                        data= '[' + charges + ' ] ' ;
                    });

                    $('form#myForm').on('submit',{
                    }, 
                function(e) {
                    
                    $.post('../../modules/fabrication/ajax.php', {
                        name : "hello",
                        id : id,
                        data : data
                    },function (data) {
                        console.log(data);
                        $('#response').html(data);
                    }).error(function() {

                        console.log('failed');
                        });
                    e.preventDefault();
                });
            });
</script>
</body>
</html>