<?php 
    class DB{
        public $con;
        protected $servername="localhost";
        protected $username="root";
        protected $password="";
        protected $dbname="social_media";
        //public $mysqli ;
        function __construct(){
            $this->con=mysqli_connect($this->servername,$this->username,$this->password,$this->dbname);
           // $this->mysqli= new mysqli($this->servername,$this->username,$this->password);
            mysqli_select_db($this->con,$this->dbname);
            mysqli_query($this->con,"SET NAMES 'utf8'");
        }
        
    }
?>