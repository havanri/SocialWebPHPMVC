<?php 
    class App{
        //http localhost/index/controller/action/param
        protected $controller="login";
        protected $action="show";
        protected $param=[];

        function __construct(){
            $arr=$this->UrlProcess();

           //xu ly controller
           if(file_exists("./mvc/controllers/".$arr[0].".php")){
               $this->controller=$arr[0];   
           }
           unset($arr[0]);  
           require_once "./mvc/controllers/".$this->controller.".php";
           $this->controller = new $this->controller;
           //Xu ly action
           if(isset($arr[1])){
               if(method_exists($this->controller,$arr[1])){
                    $this->action = $arr[1];  
               }
               unset($arr[1]);
           }
           //Xu ly param 
           $this->params= $arr?array_values($arr):[];

          // echo $this->controller ."<br/>";
          // echo $this->action ."<br/>";
          // print_r ($this->param);
           call_user_func_array([ new $this->controller,$this->action], $this->params);
        }
        function UrlProcess(){    
            if(isset($_GET["url"])){
                return explode("/",filter_var(trim($_GET["url"],"/")));
            }       
               
        }
    }
?>