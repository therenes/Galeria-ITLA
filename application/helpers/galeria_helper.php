<?php

class plantilla{
	
	static $instancia; 
	
	static function home(){
		self::$instancia = new plantilla();
	}
	
	function __construct(){
?>	
<!DOCTYPE html>
<html lang="en">

<head> 

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Galeria tarea 8</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url('base')?>/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url('base')?>/css/4-col-portfolio.css" rel="stylesheet">


</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo base_url('');?>">ITLA / GALERY</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="<?php echo base_url('admin'); ?>">Subir Foto</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('web/acerca_de'); ?>">Acerca del Autor</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('web/contacto'); ?>">Contacto</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">



  <?php	
	} 
	

	
	   function __destruct(){	

   ?>	
   
   
        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy;  20131869@itla.edu.do  2017</p>
                </div>
            </div>
        </footer>
   
</div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="<?php echo base_url('base') ?>/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url('base') ?>/js/bootstrap.min.js"></script>

</body>

</html>
     <?php
       
	 }
	
	
}
      function cargar_imagenes(){
		  $CI = & get_instance();
		  $sql = "select * from imagenes";
		  $rs = $CI->db->query($sql);
		   return $rs->result();
		  
		  
	  }

