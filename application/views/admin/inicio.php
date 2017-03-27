<?php
   
     $CI = & get_instance();
	 
   if($_post){
   
   
  $f = new stdClass();
  $f->nombre =$_post['nombre'];
  $f->comentario = $_post['comentario'];
  $f->fecha = time();
  
  $CI->db->insert('imagenes',$f);
  $cod = $this->db->insert_id();
  
  $foto =$_file['foto'];
   if($foto['error']==0){
	   $tmp = "foto/{$cod}.jpg";
	   move_uploaded_file($foto['tmp_name'],$tmp);
	   
   }
}
plantilla::home();

?>

<div class = "text-right">
   <a class = "btn btn-danger" href ="<?php echo base_url('admin/salir'); ?>"> Salir</a>

</div>

  <fieldset>
    <legend>
	 Agregar Imagen
     </legend>
	 <form enctype = "multipart/form-data" method = "post" action = "">
	 <div class ="col col-sm-4">
	
	 <div class = "form-group input-group">
	    <label class = "input-group-addon"> Nombre: </label>
		 <input required type = "text" name ="nombre" class = "form-control"/>
      </div>
	     <div class = "form-group input-group">
	    <label class = "input-group-addon"> Comentario: </label>
		 <textarea  name ="comentario" class = "form-control"></textarea>
      </div>
	  <div class = "form-group input-group">
	    <label class = "input-group-addon"> imagen : </label>
		 <input required type = "file" name ="foto" class = "form-control"/>
      </div>
	  <div class ="">
	    <button type = "submit" class = "btn btn-success"> Guardar</button>
	  
	  </div>
	  
	   </div>
	  </form>
  </fieldset>
  
  
  <fieldset>
       <legend>
	     Imagenes Agregadas
	   </legend>
	     <table class = "table">
		   <thead>
		     <tr> 
		       <th>Img</th>
			   <th>Cod</th>
			   <th>Nombre</th>
			   <th>Comentario</th>
		     </tr>
		   </thead>
		   <tbody>
		   <?php
		   
		   $imagenes =cargar_imagenes();
		   
		     foreach($imagenes as $imagen){
				 echo "<tr>
				      <td><img src='fotos/{$imagen->id}.jpg' height = '50'/></td>
					  <td>{$imagen->id} /></td>
					   <td>{$imagen->nombre} /></td>
					   <td>{$imagen->comentario} /></td>
				 </tr>";
				 
				 
			 }
		   
		     ?>
		   
		   </tbody>
		 </table>
  
  
  
  </fieldset>