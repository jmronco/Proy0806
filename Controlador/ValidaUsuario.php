<?php

include '../Libreria.php';



$oUsu = new Usuario($_REQUEST["nomusuario"], $_REQUEST["clave"]);

if($oUsu->VerificarLocal())
    echo "Todo bien";
else
    echo "Todo mal";

