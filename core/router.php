<?php
namespace core;

use Exception;
class ROUTER {
    public $routes=[
      'get'=>[],
      'post'=>[]];
    public static function load($file){
       $router= new static();
       require $file;
       return $router;
}
    public function get($uri,$controller){
       return $this->routes['get'][$uri]=$controller;
}
    public function post($uri,$controller){
       return $this->routes['post'][$uri]=$controller;
}
    public  function direct( $uri, $requesttype ){
       if(array_key_exists($uri ,$this->routes[$requesttype])){
      
       return $this->callaction(...explode('@', $this->routes[$requesttype][$uri]));
    }
        throw new Exception("invalid url");  
}  
    private function callaction($controller , $action){
       $controller="app\\controller\\".$controller;
       $controller=new $controller;
       if(! method_exists($controller , $action)){
          throw new Exception('action not exist');
        }
          return $controller->$action();
}
} 
?>