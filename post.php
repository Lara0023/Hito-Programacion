<?php
require_once('registrar.php');

if(isset($_POST["enviar"])) {

  echo "El formulario se ha realizado y enviado con éxito";

} else {
  echo "No se ha podido enviar el formulario";
}