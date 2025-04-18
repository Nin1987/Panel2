<?php

class NinPdf
{
    public function test()
    {

//============================================================+
// File name   : example_001.php
// Begin       : 2008-03-04
// Last Update : 2013-05-14
//
// Description : Example 001 for TCPDF class
//               Default Header and Footer
//
// Author: Nicola Asuni
//
// (c) Copyright:
//               Nicola Asuni
//               Tecnick.com LTD
//               www.tecnick.com
//               info@tecnick.com
//============================================================+

/**
 * Creates an example PDF TEST document using TCPDF
 * @package com.tecnick.tcpdf
 * @abstract TCPDF - Example: Default Header and Footer
 * @author Nicola Asuni
 * @since 2008-03-04
 */

// Include the main TCPDF library (search for installation path).
require_once('TCPDF/examples/tcpdf_include.php');

// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Scoria');
$pdf->SetTitle('Oferta');
$pdf->SetSubject('Oferta');


// set default header data
//$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE.' 001', PDF_HEADER_STRING, array(0,64,255), array(0,64,128));
//$pdf->setFooterData(array(0,64,0), array(0,64,128));

// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
    require_once(dirname(__FILE__).'/lang/eng.php');
    $pdf->setLanguageArray($l);
}

// ---------------------------------------------------------

// set default font subsetting mode
$pdf->setFontSubsetting(true);

// Set font
// dejavusans is a UTF-8 Unicode font, if you only need to
// print standard ASCII chars, you can use core fonts like
// helvetica or times to reduce file size.
$pdf->SetFont('dejavusans', '', 12, '', true);

// Add a page
// This method has several options, check the source code documentation for more information.
$pdf->AddPage();

// set text shadow effect
$pdf->setTextShadow(array('enabled'=>true, 'depth_w'=>0.2, 'depth_h'=>0.2, 'color'=>array(196,196,196), 'opacity'=>1, 'blend_mode'=>'Normal'));

// Set some content to print
$html = <<<EOD
    <h1>Oferta</h1>
    <table>
        <tr>
            <td><h3>Sprzedawca</h3></td><td align="right"><h3>Nabywca</h3></td>
            
            
        </tr>
        <tr>
            <td>Jan Kowalski</td><td align="right">Tomasz Nowak</td>
        </tr>
    </table>
    <h1>Produkty</h1>
    <table  border="0" cellpadding="5" cellspacing="10">
        <tr>
            <td><h4>Miniatura</h4></td><td><h4>Nazwa</h4></td><td><h4>Cena</h4></td><td><h4>Ilość</h4></td><td><h4>Rabat</h4></td>
        </tr>
        <tr style="padding:10px">
            <td style="padding:10px"><img src="https://sklep.megawebsite.pl/wp-content/uploads/2024/12/nestor-600x600.jpg" /></td><td>NESTOR Pokarm dla średnich papug z owocami i warzywami wiaderko 1000ml</td><td>15,00 zł</td><td>4</td><td>24,50zł</td>
        </tr>
        <tr>
        <td><img src="https://sklep.megawebsite.pl/wp-content/uploads/2024/12/nestor-600x600.jpg" /></td><td>NESTOR Pokarm dla średnich papug z owocami i warzywami wiaderko 1000ml</td><td>15,00 zł</td><td>4</td><td>24,50zł</td>
    
    </tr>
        <tr>
            <td><img src="https://sklep.megawebsite.pl/wp-content/uploads/2024/12/nestor-600x600.jpg" /></td><td>NESTOR Pokarm dla średnich papug z owocami i warzywami wiaderko 1000ml</td><td>15,00 zł</td><td>4</td><td>24,50zł</td>
        
        </tr>
        <tr>
        <td><img src="https://sklep.megawebsite.pl/wp-content/uploads/2024/12/nestor-600x600.jpg" /></td><td>NESTOR Pokarm dla średnich papug z owocami i warzywami wiaderko 1000ml</td><td>15,00 zł</td><td>4</td><td>24,50zł</td>
    
    </tr>
    <tr>
        <td><img src="https://sklep.megawebsite.pl/wp-content/uploads/2024/12/nestor-600x600.jpg" /></td><td>NESTOR Pokarm dla średnich papug z owocami i warzywami wiaderko 1000ml</td><td>15,00 zł</td><td>4</td><td>24,50zł</td>

    </tr>
    </table>
    <table  border="1" cellpadding="10" cellspacing="0">
        <tr>
            <td>Łaczna kwota do zapłaty: 200zł</td>
        </tr>
        <tr>
            <td>Łaczna kwota kwota rabatu: 20zł</td>
        </tr>
    </table>
    EOD;

// Print text using writeHTMLCell()
$pdf->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, '', true);

// ---------------------------------------------------------

// Close and output PDF document
// This method has several options, check the source code documentation for more information.
$pdf->Output('oferta.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+
    }
}