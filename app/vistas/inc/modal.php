<div class="modal fade" id="ModalPDF" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-fluid modal-notify modal-info" role="document">
    <!--Content-->
    <div class="modal-content">
      <!--Header-->
      <div class="modal-header">
        <p class="heading lead">Aviso de privacidad</p>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" class="white-text">&times;</span>
        </button>
      </div>

      <!--Body-->
      <div class="modal-body">
      <embed src="<?php echo RUTA_URL;?>/img/aviso.pdf" type="application/pdf" width="100%" height="500px" /> 
        <object class="PDFdoc" width="100%" height="500px" type="application/pdf" data="https://www.antennahouse.com/XSLsample/pdf/sample-link_1.pdf"></object>
      </div>

      <!--Footer-->
      <div class="modal-footer justify-content-center">
        <!--<a type="button" class="btn btn-info">Descargar <i class="far fa-file-pdf ml-1 text-white"></i></a>
        <a type="button" class="btn btn-outline-info waves-effect" data-dismiss="modal">Cerrar <i class="fas fa-times ml-1"></i></a>-->
      </div>
    </div>
    <!--/.Content-->
  </div>
</div>