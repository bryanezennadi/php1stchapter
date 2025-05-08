<?php
require ('vendor/tecnickcom/tcpdf/tcpdf.php');
$name='bryan';
$lastname= 'aaaa';
$pdf= new TCPDF();
$pdf-> AddPage();
$pdf->Cell(0, 10, 'ciaooooooo questo è il tuo ticket', 0, 1,'C');//una riga
$pdf-> Output('ticket.pdf', 'D');
