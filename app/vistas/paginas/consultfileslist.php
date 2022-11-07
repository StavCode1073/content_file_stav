<?php require RUTA_APP . '/vistas/inc/header-form.php';?>

    <header id="encabezadoadmin">
          <div class="container">
          <div class="d-flex justify-content-center">
            <div class="my-3">
              <a href="<?php echo RUTA_URL; ?>"><img src="<?php echo RUTA_URL;?>/img/logos_izq.gif" width="300" height="70"></a>
            </div>
          </div>
        	</div>
    </header>



<div class="container w-75 my-5">
	<form role="form"  onsubmit="verificarPasswords(); return false" name="fe" action="<?php echo RUTA_URL;?>/paginas/formdatosfiscales" method="post" enctype="multipart/form-data">
	 <div class="row text-center" style="font-size: 12px;">
	 	<h4 class="text-center">Buscar contenido por criterio</h4>
	    <div class="col">
            <div class="form-group">
            <label for="exampleSelect1" class="form-label mt-4">Tipo de publicación </label>
            <select class="form-select" id="exampleSelect1">
                <option value="99">Extraordinario</option>
                <option value="209">Ordinario</option>
                <option value="209">Secciones</option>
            </select>
            </div>
	    </div>
	    <div class="col">
            <div class="form-group">
            <label for="exampleSelect1" class="form-label mt-4">Mes </label>
            <select class="form-select" id="exampleSelect1">
                <option value="99">Enero</option>
                <option value="99">Febrero</option>
                <option value="99">Marzo</option>
                <option value="99">Abril</option>
                <option value="99">Mayo</option>
                <option value="99">Junio</option>
                <option value="99">Julio</option>
                <option value="99">Agosto</option>
                <option value="99">Septiembre</option>
                <option value="99">Octubre</option>
                <option value="99">Noviembre</option>
                <option value="99">Diciembre</option>
            </select>
            </div>
	  </div>
      <div class="col">
            <div class="form-group">
            <label for="exampleSelect1" class="form-label mt-4">Año </label>
            <select class="form-select" id="exampleSelect1">
                <option value="99">$99.00/mx</option>
                <option value="209">$209.00/mx</option>
            </select>
            </div>
	  </div>
      <div class="col">
        <div class="form-group">
            <label class="col-form-label mt-4" for="inputDefault">Palabra clave en sumario </label>
            <input type="text" tabindex="3" required="true" name="name_company" class="form-control" id="inputDefault" value="">
        </div>
	  </div>
      <div class="col">
            <div class="form-group">
            <label for="exampleSelect1" class="form-label mt-4">Tipo de documento </label>
            <select class="form-select" id="exampleSelect1">
                <option value="99">$99.00/mx</option>
                <option value="209">$209.00/mx</option>
            </select>
            </div>
	  </div>
      <div class="col">
        <div class="form-group">
            <label class="col-form-label mt-4" for="inputDefault">Nombre </label>
            <input type="text" tabindex="3" required="true" name="name_company" class="form-control" id="inputDefault" value="">
        </div>
	  </div>
      <div class="col">
            <div class="form-group">
            <label for="exampleSelect1" class="form-label mt-4">Clasificación </label>
            <select class="form-select" id="exampleSelect1">
                <option value="99">$99.00/mx</option>
                <option value="209">$209.00/mx</option>
            </select>
            </div>
	  </div>


	</div>
	<br>

    <br>
    <!--<div class="form-group">
      <label for="exampleSelect1" class="form-label mt-4">Elige paquete: </label>
      <select class="form-select" id="exampleSelect1">
        <option value="99">$99.00/mx</option>
        <option value="209">$209.00/mx</option>
      </select>
    </div>-->
    <br><br>
  <input type="hidden" name="acceso" class="form-control"  id="inputDefault" value="100">
	<div class="float-end">		
	<a href="<?php echo RUTA_URL;?>/paginas/formsolicitud" class="btn btn-outline-warning">Limpiar</a>
    <!-- <a href="<?php echo RUTA_URL;?>/paginas/formsolicitud" class="btn btn-primary">Continuar</a> -->
		  <input type="submit" tabindex="9" class="btn btn-primary" value="Buscar">
	</div>
	</form>
</div>

<?php require RUTA_APP . '/vistas/inc/footer-form.php';?>
