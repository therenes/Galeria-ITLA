<?php
 defined ('BASEPATH') or exit ('No direct script access allowed');
 
 class web extends CI_Controller{
	  
	  public function __construct ()
	  {
		  parent::__construct();
		// hola mundo   
	  }
	    function index()
		
		{
		$this->load->view('home');	
			
		}	 
	 
	 function ver_foto($cod =0){
		 if($cod == 0){
			 redirect('web');
		 }
		  $d = array ();
		  $d ['cod'] = $cod;
          $this->load->view('ver_foto',$d);


	  }
	 
	  function acerca_de(){
          $this->load->view('acerca_de');


	  }
	  
	  function contacto(){
          $this->load->view('contacto');


 }



 }
