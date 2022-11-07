<?php
if(isset($_SESSION['correo'])) {
    date_default_timezone_set("America/Mexico_City");
    setlocale(LC_ALL,'');
    $mes = strftime("%B");
    $mesFil = ucfirst($mes);
    $anio = date("Y");
    $fecha_actual1 = date("d")."/".date("m")."/".date("Y");
    $fecha_actual2 = date('y/m/d');
 ?>
<?php require RUTA_APP . '/vistas/inc/header_admin.php'; ?>
<header class="container">
   <hr>
</header>
<header id="header">
  <div class="container">
    <div class="row">
      <div class="col-md-10">
        <h1><span class="fas fa-cog" aria-hidden="true"></span> Archivos<small> certificadas <?php echo $fecha_actual1;?></small></h1>
      </div>
    </div>
  </div>
</header>

<section id="breadcrumb">
  <div class="container">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?php echo RUTA_URL;?>/inicio">Incio</a></li>
      <li class="breadcrumb-item"><a href="<?php echo RUTA_URL;?>/archivosfirma/listado">Listado</a></li>
      <li class="breadcrumb-item active">Firmar PDF</li>
    </ol>
  </div>
</section>

<section id="main" class="my-5">
  <div class="container">
    <div class="row">
      <div class="col-md-3">
      <?php require RUTA_APP . '/vistas/inc/izquierda.php'; ?>
      </div>
      <div class="col-md-9">
      	<div class="row">
      		<div class="col-8 d-flex justify-content-center flex-column align-items-center">
      		 	<h5 class="text-dark"> <?php echo $datos['archivo'];?> </h5>

      			<embed src="<?php echo RUTA_URL ?>/img/firmas/<?php echo $datos['archivo'];?>" type="application/pdf" width="420px" height="630px" />

      			<form role="form"  name="fe" action="<?php echo RUTA_URL;?>/archivosfirma/firmarArchivo/<?php echo $datos['id_documento']; ?>" method="post" enctype="multipart/form-data">
	              <div class="form-group mb-3">
	                <input type="hidden" name="nombrearchivo" class="form-control" placeholder="Ingrese texto para la firma" value="<?php echo $datos['archivo'];?>"/>
	              </div>

	              <!-- <input type="submit" class="btn btn-danger" value="Firmar documento"> -->
				  <a target='_Blank' class="btn btn-info" href="<?php echo RUTA_URL ?>/img/firmas/<?php echo $datos['archivo'];?>">Firmar documento </a>
	            </form>
      		</div>

      		<div class="col-4">
				<h6 class="text-center">Agrega una firma en la caja de texto o un imagen </h6>
      			<form role="form"  name="fe" action="<?php echo RUTA_URL;?>/archivosfirma/firmarArchivo/<?php echo $datos['id_documento']; ?>" method="post" enctype="multipart/form-data">
	              <div class="form-group mb-3">
	                <label>Firma </label>
	                <input type="text" name="firmatexto" class="form-control" placeholder="Ingrese texto para la firma" value=""/>
	              </div>
	              <div class="form-group">
	                <div class="alert alert-success" role="alert">
	                  <h4 class="alert-heading">¡Aviso!</h4>
	                    <p>El sistema no acepta archivos de nombre con acentos y símbolos, ejemplo: catálogos.pdf, año.png, o actualización.jpg.
	                    </p>
	                </div>
	                <p id="obligatorio"><label for="archivo">Firma digital en png o jpg </label></p>
	                <input type="file" name="imagen" id="imagen" class="btn btn-danger btn-lg">
	                <p class="help-block">Maximo 3MB</p>
	              </div>
	              <input  id="fechaActual" name="fechaActual" type="hidden" value="<?php echo $fecha_actual2;?>" size="26" required />
	              <input type="submit" name="firma" class="btn btn-danger" value="Subir firma">
	            </form>

				<div class="mt-5">
					<?php
					foreach ($datos['firmas'] as $firma) : ?>

						<div class="container">
							<div class="row text-center" style="font-family: Vladimir Script; font-size: 34px;">
								<?php
									if($firma->tipo=="image/png" || $firma->tipo=="image/jpg" || $firma->tipo=="image/jpeg"){
										echo "<div class='col my-2 py-3 border border-dark'><img src='".RUTA_URL."/img/nuevasfirmas/".$firma->nombrearchivo."' width='80' height='50'></div>";
									}elseif ($firma->tipo=="letras") {
										echo "<div class='col my-2 py-3 border border-dark'>".$firma->textofirma."</div>";
									}
								?>
							</div>
						</div>
					<?php
					endforeach;
					?>
				</div>

      		</div>

      	</div>
      </div>
    </div>
  </div>
</section>
<?php require RUTA_APP . '/vistas/inc/footer.php'; ?>
<?php
}else{
redireccionar('/paginas/loginadm');
}
 ?>
