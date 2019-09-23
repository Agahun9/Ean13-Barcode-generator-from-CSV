
<?php
// require('pdf_barcode.php');
// //tu masz wymiary w milimetrach
// $pdf = new PDF_BARCODE('L', 'mm', [35,50] );
// $pdf->AddFont('arial_ce','','arial_ce.php');
// $pdf->AddFont('arial_ce','I','arial_ce_i.php');
// $pdf->AddFont('arial_ce','B','arial_ce_b.php');
// $pdf->AddFont('arial_ce','BI','arial_ce_bi.php');
// $pdf->AddPage();
// // tutaj czcionka
// $pdf -> SetFont('arial_ce', '', 8);
// //tutaj pobiera pozycje kursora
// $x = $pdf->GetX();
// $y = $pdf->GetY();
// //tutaj ustawia pozaycje
// $pdf->SetXY($x-10, $y-10);
// //tutaj tekst wiec pewnie trzeba przekazać zmienna z formularza

// $tekst=$_GET["tekst"];

// $ostatni=iconv('utf-8','windows-1250//TRANSLIT', $tekst);
// //$ostatni= iconv('iso-8859-2','windows-1250//TRANSLIT', $tekst);



// $pdf->MultiCell(0,2.3, $ostatni,0, 'C',0);

// //$pdf->drawTextBox('This sentence is centered in the middle of the box.', 20, 30, 'C', 'M');
// //$pdf->MultiCell(30, 0.0001, 'Futerał licencjonowany Cartoon Network Atomówki Huawei Mate 20 Lite AT101', 0, 'L',false);
// //EAN13 tu też pewnie trzeba przekazać kod z formularza

// $pdf->EAN13(2,18,$_GET["eancode"],10,0.5,12);
// $pdf->Output();

$plik_tmp = $_FILES['plik']['tmp_name']; 
$plik_nazwa = $_FILES['plik']['name']; 
$plik_rozmiar = $_FILES['plik']['size']; 

if(is_uploaded_file($plik_tmp)) { 
     move_uploaded_file($plik_tmp, "upload/".$plik_nazwa); 
} 


require('pdf_barcode.php');
//tu masz wymiary w milimetrach
$pdf = new PDF_BARCODE('L', 'mm', [50,35] );
$pdf->AddFont('arial_ce','','arial_ce.php');
$pdf->AddFont('arial_ce','I','arial_ce_i.php');
$pdf->AddFont('arial_ce','B','arial_ce_b.php');
$pdf->AddFont('arial_ce','BI','arial_ce_bi.php');
$pdf->AddPage();
// tutaj czcionka
$pdf -> SetFont('arial_ce', '', 10);
//tutaj pobiera pozycje kursora
$x = $pdf->GetX();
$y = $pdf->GetY();
//tutaj ustawia pozaycje
$pdf->SetXY($x-10, $y-9);
//tutaj tekst wiec pewnie trzeba przekazać zmienna z formularza

$tekst=$_GET["tekst"];


//$ostatni= iconv('iso-8859-2','windows-1250//TRANSLIT', $tekst);




//$pdf->drawTextBox('This sentence is centered in the middle of the box.', 20, 30, 'C', 'M');
//$pdf->MultiCell(30, 0.0001, 'Futerał licencjonowany Cartoon Network Atomówki Huawei Mate 20 Lite AT101', 0, 'L',false);
//EAN13 tu też pewnie trzeba przekazać kod z formularza


$fileHandle = fopen("upload/".$plik_nazwa, "r");
//Loop through the CSV rows.
while (($row = fgetcsv($fileHandle, 0, ";")) !== FALSE) {
    for($i=0;$i<$row[2];$i++){
    $pdf->SetXY($x-10, $y-9);
    $row[0]=iconv('utf-8','windows-1250//TRANSLIT', $row[0]);
    $pdf->MultiCell(50,3,$row[0] ,5, 'C',false);
    $pdf->EAN13(1,18,$row[1],10,0.5,10);
    $pdf->AddPage();
    }
}



$pdf->Output();


