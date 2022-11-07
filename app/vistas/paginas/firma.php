<?php

// require_once __DIR__ . "/fpdf/fpdf.php";
// require_once __DIR__ . "/fpdi/src/autoload.php";

echo __DIR__ . "/fpdf/fpdf.php";
echo '<br>';
echo __DIR__ . "/fpdi/src/autoload.php";

use setasign\Fpdi\Fpdi;
    
    
    $pdf = new FPDI();

    $ruta = "img" . DS . "archivos" . DS . "18_01_2021_demo1.pdf";
    $ruta2 = "img" . DS . "archivos" . DS . "VYWQ_15_12_2020.pdf";
    # Pagina 1
    $pdf->AddPage(); 
    $pdf->setSourceFile($ruta); 
    $tplIdx = $pdf->importPage(1); 
    $pdf->useTemplate($tplIdx); 
    $pdf->SetFont('Arial', 'B', '15'); 
    $pdf->SetXY(90,50);
    $pdf->Write(10,$nombreEncargado);


    $pdf->SetFont('Arial', 'B', '11'); 
    $pdf->SetXY(10,220);
    $pdf->Write(10,$Cargo);

    $pdf->SetFont('Arial', 'B', '11'); 
    $pdf->SetXY(100,220);
    $pdf->Write(10,$nametecnico1);

    $pdf->SetFont('Arial', 'B', '11'); 
    $pdf->SetXY(180,220);
    $pdf->Write(10,$tiempo1); 

  
    /**Lista de Tecnicos asignados */
    $pdf->SetFont('Arial', 'B', '11'); 
    $pdf->SetXY(10,224);
    $pdf->Write(10,$tecnico2);

    $pdf->SetFont('Arial', 'B', '11'); 
    $pdf->SetXY(100,224);
    $pdf->Write(10,$nametecnico2);

    $pdf->SetFont('Arial', 'B', '11'); 
    $pdf->SetXY(180,224);
    $pdf->Write(10,$tiempo2);



    # Pagina 2
    $pdf->AddPage(); 
    $tplIdx1 = $pdf->importPage(2); 
    $pdf->useTemplate($tplIdx1);     
    $pdf->SetFont('Arial', 'B', '12'); 
    $pdf->SetXY(60,95);
    $pdf->Write(10,$trabajoRealizar." - ".$posicion." - ".$dimension);


    $pdf->SetFont('Arial', 'B', '12'); 
    $pdf->SetXY(10,140);
    $pdf->Write(10,$materiales);

    $pdf->SetFont('Arial', 'B', '12'); 
    $pdf->SetXY(10,145);
    $pdf->Write(10,$id." - ".$codigo." - ".$descripcion." - ".$cantidad);

    $pdf->SetFont('Arial', 'B', '12'); 
    $pdf->SetXY(10,150);
    $pdf->Write(10,$id1." - ".$codigo1." - ".$descripcion1." - ".$cantidad1);


    $pdf->SetFont('Arial', 'B', '11'); 
    $pdf->SetXY(107,200);
    $pdf->Write(10,$textosupervisor);

    $pdf->SetFont('Arial', 'B', '11'); 
    $pdf->SetXY(107,205);
    $pdf->Write(10,$namesupervisor);

    // $pdf->SetFont('Arial', 'B', '11'); 
    // $pdf->SetXY(80,250);
    // $pdf->Write(10,$nombreFirma);
    // $pdf->Image('firmas/one.png', 90, 248, 40, '', 'PNG', '', 'T', false, 300, '', false, false, 0, false, false, false);


    $pdf->Output($ruta2, 'I'); //SALIDA DEL PDF
    //    $pdf->Output('original_update.pdf', 'F');
    //    $pdf->Output('original_update.pdf', 'I'); //PARA ABRIL EL PDF EN OTRA VENTANA
    //	  $pdf->Output('original_update.pdf', 'D'); //PARA FORZAR LA DESCARGA
?>