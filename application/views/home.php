<?php
 
 plantilla::home();

?>
        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"> Foto de Nuestra
                    <small>Institucion</small>
                </h1>
            </div>
        </div>
        <!-- /.row -->
		  <div class="row">
		<?php
		 
		 $imagenes = cargar_imagenes();
           $url = base_url('');
		   
          foreach ($imagenes as $imagen){
			  
			  $foto = "fotos/{$imagen->id}.jpg";
			      
				  if (!is_file($foto)){
					  $foto = "http://placehold.it/750x450/?text=NO_exite_foto";
					  
				  }
				  
				  else {
					$foto = "{$url}/{$foto}";  
				  }
			  
			  
			  echo <<<FOTO
			  <div class="col-md-3 portfolio-item">
                <a href="{$url}/web/ver_foto/{$imagen->id}">
                    <img class="img-responsive" src="{$foto}" alt="">
                </a>
            </div>
			  
FOTO;
		  }		   
		
		?>
		</div>
		

        <!-- Projects Row -->
        <div class="row">
            <div class="col-md-3 portfolio-item">
                <a href="http://theclaremontconscious.altervista.org/wp-content/uploads/2016/03/BlackLivesMatter-53-1-750x450.jpg"class="portfolio-box">
                    <img class="img-responsive" src="http://theclaremontconscious.altervista.org/wp-content/uploads/2016/03/BlackLivesMatter-53-1-750x450.jpg" alt="">
					<div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-name">
                                    Protesta
                                </div>
                            </div>
                        </div>
                </a>
            </div>
            <div class="col-md-3 portfolio-item">
                <a href="http://www.regiodeporte.com/wp-content/uploads/2016/10/tobias-documental1.jpg"class="portfolio-box">
                    <img class="img-responsive" src="http://www.regiodeporte.com/wp-content/uploads/2016/10/tobias-documental1.jpg" alt="">
					<div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-name">
                                    Conferencia Escolar
                                </div>
                            </div>
                        </div>                
					</a>
            </div>
            <div class="col-md-3 portfolio-item">
                <a href="http://www.exalumnossanroman.com.ar/wp-content/gallery/a-100-anos-del-primer-inicio-de-clases/3.jpg"class="portfolio-box">
                    <img class="img-responsive" src="http://www.exalumnossanroman.com.ar/wp-content/gallery/a-100-anos-del-primer-inicio-de-clases/3.jpg" alt="">
					<div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-name">
                                    Actividades Escolar
                                </div>
                            </div>
                        </div>  
                </a>
            </div>
            <div class="col-md-3 portfolio-item">
                <a href="http://www.ceutaactualidad.com/media/ceutaactualidad/images/2015/05/19/2015051918393876694.jpg"class="portfolio-box">
                    <img class="img-responsive" src="http://www.ceutaactualidad.com/media/ceutaactualidad/images/2015/05/19/2015051918393876694.jpg" alt="">
					<div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-name">
                                    Clases Escolar
                                </div>
                            </div>
                        </div>  
                </a>
            </div>
        </div>
        <!-- /.row -->

        <!-- Projects Row -->
        <div class="row">
            <div class="col-md-3 portfolio-item">
                <a href="http://www.geologia.unam.mx/igl/museo/images/el_museo/entrada_museo.jpg"class="portfolio-box">
                    <img class="img-responsive" src="http://www.geologia.unam.mx/igl/museo/images/el_museo/entrada_museo.jpg" alt="">
					<div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-name">
                                    Monumento
                                </div>
                            </div>
                        </div>  
                </a>
            </div>
            <div class="col-md-3 portfolio-item">
                <a href="http://static.wixstatic.com/media/4566a9_3e12c4ca9f6c499ba4cce9394c5d7531~mv2.jpg_srz_490_490_85_22_0.50_1.20_0.00_jpg_srz"class="portfolio-box">
                    <img class="img-responsive" src="http://static.wixstatic.com/media/4566a9_3e12c4ca9f6c499ba4cce9394c5d7531~mv2.jpg_srz_490_490_85_22_0.50_1.20_0.00_jpg_srz" alt="">
					<div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-name">
                                    Audio Visual
                                </div>
                            </div>
                        </div>  
                </a>
            </div>
            <div class="col-md-3 portfolio-item">
                <a href="http://www.exalumnossanroman.com.ar/wp-content/gallery/a-100-anos-del-primer-inicio-de-clases/24.jpg"class="portfolio-box">
                    <img class="img-responsive" src="http://www.exalumnossanroman.com.ar/wp-content/gallery/a-100-anos-del-primer-inicio-de-clases/24.jpg" alt="">
					<div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-name">
                                    Visita del Presidente a La Escuela
                                </div>
                            </div>
                        </div>  
                </a>
            </div>
            <div class="col-md-3 portfolio-item">
                <a href="http://www.exalumnossanroman.com.ar/wp-content/gallery/a-100-anos-del-primer-inicio-de-clases/16.jpg"class="portfolio-box">
                    <img class="img-responsive" src="http://www.exalumnossanroman.com.ar/wp-content/gallery/a-100-anos-del-primer-inicio-de-clases/16.jpg" alt="">
					<div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-name">
                                    Visita del Presidente a La Escuela
                                </div>
                            </div>
                        </div>  
                </a>
            </div>
        </div>
        <!-- /.row -->

        <!-- Projects Row -->
        <div class="row">
            <div class="col-md-3 portfolio-item">
                <a href="http://2.bp.blogspot.com/-eEWGbbussv0/UZ__Ksyux7I/AAAAAAAAANA/7Umw8KJ8JcM/s1600/Meta.jpg"class="portfolio-box">
                    <img class="img-responsive" src="http://2.bp.blogspot.com/-eEWGbbussv0/UZ__Ksyux7I/AAAAAAAAANA/7Umw8KJ8JcM/s1600/Meta.jpg" alt="">
					<div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-name">
                                    Equipo Escolar
                                </div>
                            </div>
                        </div>  
                </a>
            </div>
            <div class="col-md-3 portfolio-item">
                <a href="https://pbs.twimg.com/media/CycixTNXAAEEL-M.jpg"class="portfolio-box">
                    <img class="img-responsive" src="https://pbs.twimg.com/media/CycixTNXAAEEL-M.jpg" alt="">
					<div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-name">
                                    Manofatura
                                </div>
                            </div>
                        </div>  
                </a>
            </div>
            <div class="col-md-3 portfolio-item">
                <a href="http://www.comunidadmariamediadora.com/page/media/k2/items/cache/f7a0a54c92471ac4480e727e4ccf93df_L.jpg"class="portfolio-box">
                    <img class="img-responsive" src="http://www.comunidadmariamediadora.com/page/media/k2/items/cache/f7a0a54c92471ac4480e727e4ccf93df_L.jpg" alt="">
					<div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-name">
                                    Coro de Musica
                                </div>
                            </div>
                        </div>  
                </a>
            </div>
            <div class="col-md-3 portfolio-item">
                <a href="http://rioaxaca.com/wp-content/uploads/2017/01/secud.jpg"class="portfolio-box">
                    <img class="img-responsive" src="http://rioaxaca.com/wp-content/uploads/2017/01/secud.jpg" alt="">
					<div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-name">
                                    Actividad Escolar
                                </div>
                            </div>
                        </div>  
                </a>
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Pagination -->
        <div class="row text-center">
            <div class="col-lg-12">
                <ul class="pagination">
                    <li>
                        <a href="#">&laquo;</a>
                    </li>
                    <li class="active">
                        <a href="#">1</a>
                    </li>
                    <li>
                        <a href="#">2</a>
                    </li>
                    <li>
                        <a href="#">3</a>
                    </li>
                    
                    <li>
                        <a href="#">&raquo;</a>
                    </li>
                </ul>
            </div>
        </div>
       		  