<?php
 
   $mensaje = "";

if($_post){
	
	$sql = "select * from usuarios where correo =? and clave= ? ";
	$CI  = & get_instance();
	$correo = $_post['email'];
	$clave = md5($_post['clave']);
	$rs = $CI->db->query($sql, array ($correo,$clave));
	
	$rs = $rs->result();
	if(count($rs)>0){
		$_session['gale_user'] = $rs[0];
		  redirect('admin');
	}
	else{
		$mensaje = "Usuario o Clave Incorrecta";
	}
	
}

plantilla::home();
?>

<div class = "row">
  <div class = "col col-sm-4  col-sm-offset-4">
    <form method = "post" action = "">
	    <h3>Ingresar al Sistema </h3>
	  <div class = "form-group input-group">
	    <label class = "input-group-addon"> Email </label>
		 <input type = "text" name ="email" class = "form-control"/>
      </div>
	    <div class = "form-group input-group">
	    <label class = "input-group-addon"> clave </label>
		 <input type = "password" name ="clave" class = "form-control"/>
      </div>
	  
	  <div style= "color:red">
	     <?php echo $mensaje;   ?>
	  </div>
	  
	  
	     <div class = "text-center">
		   <button type = "submit" class = "btn btn-primary"> Ingresar </button>
		 
	     </div>
    </form>
  </div>
</div>