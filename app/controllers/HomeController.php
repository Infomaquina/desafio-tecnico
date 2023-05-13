<?php 
namespace app\controllers;

class HomeController{

  public function index(){
    return PlateController::view('home');
  }
}
?>