<?php
include 'fpdf181/fpdf.php';
class Report extends FPDF{
function Header(){
    $this->SetFont('Arial','B',15);
    $this->Cell(80);
    $this->Cell(80,10,'Struk Transaksi',1,0,'C');
    $this->Ln(20);
}
function Footer(){
    $this->SetY(-15);
    $this->SetFont('Arial','I',8);
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
function buattabel($kolom, $data){
	$this->SetY(40);
	$this->SetX(6);
	$this->SetTextColor(200,0,0);
	for($i=0; $i<count($kolom); $i++){
		$this->Cell(28,9,$kolom[$i],1,0,'C');
		}
	$this->Ln();
	$this->SetTextColor(0);
	foreach ($data as $row) {
	$this->SetX(6);
		$this->Cell(28,9,$row['idtransaksi'],1,0,'C');
		$this->Cell(28,9,$row['id_user'],1,0,'C');	
		$this->Cell(28,9,$row['idhotel'],1,0,'C');
		$this->Cell(28,9,$row['idkamar'],1,0,'C');
		$this->Cell(28,9,$row['jumlah_orang'],1,0,'C');
		$this->Cell(28,9,$row['total_harga'],1,0,'C');	
		$this->Ln();
		}
	$this->SetY(260);
    $this->Cell(0,10,"Dicetak pada : ".date('d-m-Y'),0,0,'P');
	}
}


$pdf = new Report();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','',10);

$link = $pdf->AddLink();
$pdf->Write(5,'NYARIHOTEL.Com','http://www.nyarihotel.com');
$pdf->SetLink($link);

$kolom = array("Id Transaksi","Id Pelanggan","Id Hotel","Id Kamar","Jumlah Orang","Total Harga");
$obj = new mysqli ("localhost", "root","","pr");
		$hasil = $obj->query("select * from transaksi");
$data = array();
	while ($d = mysqli_fetch_array($hasil,MYSQLI_ASSOC)) {
	$data[] = $d;
}
$pdf->buattabel($kolom, $data);
$pdf->Output();
?>