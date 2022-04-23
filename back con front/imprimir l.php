<?php
include('PDF/fpdf.php'); //direccion de la libreria FPDF(FREE PORTABLE DOCUMENT FILE)
require("cn.php");

class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    
    // Arial bold 15
    $this->SetFont('Arial','UB',20);
    // Movernos a la derecha
    $this->Cell(60);
    // Título
    $this->Cell(70,10,'Reporte de Inventario',0,0,'C');
    // Salto de línea
    $this->Ln(20);
	// Arial bold 15
    $this->SetFont('Arial','B',12);
	$this->Cell(70,10,utf8_decode('TIPO DE PRODUCTO'),1,0,'C',0);
	$this->Cell(60,10,utf8_decode('PRODUCTO'),1,0,'C',0);
	$this->Cell(60,10,utf8_decode('SECCION'),1,1,'C',0);
    

}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,utf8_decode('Pág ').$this->PageNo().'/{nb}',0,0,'C');
}
}


$sql="SELECT * from listacompras";
$result=$mysqli->query($sql);
    $pdf = new PDF();
    $pdf->AliasNbPages();
    $pdf->AddPage();
    $pdf->SetFont('Arial','',16);


    while($mostrar = $result->fetch_assoc()){

        $pdf->Cell(70,10, $mostrar['kind_product'],1,0,'C',0);// Cell = celda(ancho,alto,texto,borde,salto de linea,justificado,relleno)
        $pdf->Cell(60,10, $mostrar['product'],1,0,'C',0);
        $pdf->Cell(60,10, $mostrar['amount'],1,1,'C',0);
        
       
    }
$pdf->Output();
//}

/*
while(($row = $resultado->fetch_assoc())&& (($fila2=mysqli_fetch_row($resultado_tabla2))==true)){
	$pdf->Cell(70,10,$row['product'],1,0,'C',0);// Cell = celda(ancho,alto,texto,borde,salto de linea,justificado,relleno)
	$pdf->Cell(20,10,$row['amount'],1,0,'C',0);
	$pdf->Cell(60,10,$row['kind_product'],1,0,'C',0);
    $pdf->Cell(20,10,$fila2[0],1,1,'C',0);
}
*/




?>