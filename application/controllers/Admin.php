<?php

session_start(); 

defined ('BASEPATH') or exit ('No direct script access allowed');
 
 class Admin extends CI_Controller{
	  
	  public function __construct ()
	  {
		  parent::__construct();
		// hola mundo 
    
	  $metodo = $this->router->fetch_method();
	  
	   if(!isset($_session['gale_user']) && $metodo != 'login'){
		   
		   redirect('admin/login');
		   
		   
	   }
		
	  }
	    function index()
		
		{
			$this->load->view ('admin/inicio');	
		}	
		
		function salir(){
			unset($_session['gale_user']);
			  redirect ('admin/login');
		}

        function login(){
			$this->load->view('admin/login');
			
		}
		
 }	

