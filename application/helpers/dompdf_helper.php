<?php 

defined('BASEPATH') or exit('No direct script access allowed');

use Dompdf\Dompdf;

function printPdf($view)
{
    $domPdf = new Dompdf();
    $domPdf->loadHtml($view);
    $domPdf->setPaper('A4', 'landscape');
    $domPdf->render();
    $domPdf->stream('laporan.pdf', ['Attachment' => false]);
}

function printIdCard($view) 
{
    $domPdf = new Dompdf();
    $domPdf->loadHtml($view);
    $domPdf->setPaper([0, 0, 640, 382], 'custom');
    $domPdf->render();
    $domPdf->stream('id-card.pdf', ['Attachment' => false]);
}
?>
