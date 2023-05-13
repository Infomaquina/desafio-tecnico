<?php
namespace app\controllers;
use League\Plates\Engine;

class PlateController
{
  public static function view($view, $data = []){    
    $templates = new Engine('app/views');
    echo $templates->render($view, $data);
  }
}
