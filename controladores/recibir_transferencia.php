<?php
//Paso 1: Importar la libreria de la BD
require "../config/conexion.php";

//paso 2: Capturando variables
$celular = $_POST["celular"];
$valor= $_POST["valor"];
$contra = $_POST["pin"];

//Paso 3: Armo la sentencia sql que necesite
$sql = "INSERT INTO transferencias(celular, valor, feha_sys) VALUES ('".$celular."', ".$valor." , now())";

//Paso 4: enviar la info al servidor

if ($conexion->query($sql))
{
    echo "transferencia exitosa";

}else{
    echo "error transfiriendo saldo";
}




//echo "el pin digitado fue: ";
//echo $pin;
//echo "el valor fue: ".$valor;




?>