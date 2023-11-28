<?php 

class CheckLogin {
    private $ci ;
    
    
    public function __construct(){

       $this->ci = & get_instance();
        
    }


    public function check() {
      
      date_default_timezone_set('Asia/Bangkok');

      $controller = $this->ci->router->class;
      $method = $this->ci->router->method;
             
      // print_r($_SESSION);
      // exit();

      if($this->ci->session->userdata('ssusername') == null ){
        
        // redirect controller adminuser      
        //if(($method !="login" and $method !="loginAction")){
        if(!($method =="login")){
          redirect("User/login",'refresh');
          exit();
        }
      }
         
    }
}




 ?>