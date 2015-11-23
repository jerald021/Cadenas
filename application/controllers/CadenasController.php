<?php
namespace controllers;
use models\CadenasModel;
require 'application/models/CadenasModel.php';

class CadenasController
{
    public function cadenasAction()
    {
        $action = 'doCad';
        require 'application/views/form.phtml';
    }

    public function doCadAction()
    {
        $model= new CadenasModel($_POST["cadena1"], $_POST["cadena2"]);
        $model->unir();
        $result= $model->getResult();
        require 'application/views/result.phtml';

    }


}