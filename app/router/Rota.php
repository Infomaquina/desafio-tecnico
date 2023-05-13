<?php
namespace app\router;

class Rota{

  private $classe = 'HomeController';
  private $metodo = 'index';
  private $parametro = [];

  public function getRota(){
    $router = $this->url();
    $controller = ucfirst($router[0]).'Controller';
    if((file_exists('app/controllers/'.$controller.'.php'))){
      $this->classe = $controller;
      unset($router[0]);
    }

    $instancia = "\\app\\controllers\\".$this->classe;

    if(isset($router[1]) && method_exists($instancia, $router[1])){
      $this->metodo = $router[1];
      unset($router[1]);
    }

    $this->parametro = $router ? array_values($router) : [];

    return $this->getController($this->classe, $this->metodo, $this->parametro);
  }

  public function getController($classe, $metodo, $parametro){
    $instancia = "\\app\\controllers\\".$classe;
    $obj = new $instancia;
    return $obj->$metodo($parametro);
  }

  public function url(){
    $url = explode("/", ltrim($_SERVER['REQUEST_URI'], "/"));
    return $url;
  }
  
}