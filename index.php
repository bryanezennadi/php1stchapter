<?php
require ('vendor/tecnickcom/tcpdf/tcpdf.php');
$name='bryan';
$lastname= 'ezennadi';
$pdf= new TCPDF();
$pdf-> AddPage();
$pdf->setTextColor(117, 217, 144);
$pdf->setFillColor(159,129,179);
$pdf->Rect(0,0,210,297,"F");
$pdf->setFont('Helvetica', "", 30);
$pdf->Cell(0, 10, 'ciaooooooo questo è il tuo ticket', 0, 1,'C');//una riga
$pdf->ln(20);
$pdf->setFont('Helvetica', "", 10);
$pdf->setTextColor(202, 217, 117);
$pdf->Cell(0,0,'Data e ora evento'.date('d/m/y H:i'),0,1,'C');
$pdf->ln(45);
$pdf->Cell(0, 0, "Name: {$name}", 0,1,'l');
$pdf->Cell(0, 0, "lastname: {$lastname}", 0,1,'l');
$pdf->Line(10,10, $pdf->getPageWidth()-10, 10);
$pdf->Line(3,60, $pdf->getPageWidth()-3, 60);
$pdf->write2DBarcode("Ciaoo {$name} {$lastname} questo è il tuo ticket. Data: ".date('d/m/y H:i'),'QRCODE,L',10, 150, 50,50, [],'N');
$pdf->Line(3,110, $pdf->getPageWidth()-3, 110);
$pdf->Image('logo.jpg', $pdf->getPageWidth()-110, $pdf->getPageHeight()-110, 50, 50);
$pdf-> Output('ticket.pdf', 'I');


