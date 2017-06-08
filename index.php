<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <script src="jquery/jquery-3.2.1.min.js" type="text/javascript"></script>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form id="frmusuario" action="Controlador/ValidaUsuario.php" method="post">
            <div><label>Usuario:</label><input id="nomusuario" type="text" name="nomusuario" ></div>
            <div><label>Clave:</label><input id="clave" type="password" name="clave" ></div>
            <input id="enviar" type="button" onclick="" value="Enviar">
            <div id="mensaje"></div>
        </form>
        
    </body>
    <script>
    $(document).ready(function(){
            $("#enviar").click(function(){
            /*$("form").hide();
            alert("You just hide the form ;-)" + $("#nomusuario").val());*/
        
        if($("#nomusuario").val()!="" && $("#clave").val()!=""){
            /*$("#frmusuario").submit();*/
                $.ajax({url:"Controlador/ValidaUsuario.php"
                    ,type:post
                    ,data{nomusuario:$("#nomusuario").val(),cale:$("#clave").val()}
                    ,success:function(resultado){
                        $("#mensaje").html(resultado);
                }});    
                }
        else
            alert("Debe agregar un usuario y clave");
            });
    });
    </script>
</html>
