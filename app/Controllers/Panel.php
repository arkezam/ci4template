<?php 
    namespace App\Controllers;
    
    class Panel extends BaseController
    {
        public function __construct(){
            
        }
        public function index()
        {
           $messg = array(
            'msg' => $this->session->getFlashdata('success'),
            'dni' => $this->session->get('dni')
           ); 
           
            echo view('panel/panel',$messg);
        }
    }
?>