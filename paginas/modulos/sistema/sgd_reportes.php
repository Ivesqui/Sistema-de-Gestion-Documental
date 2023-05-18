<?php 
session_start();
include "../../conexion/Conexion.php";
include "../../../../Proyecto_final/lib/fpdf/fpdf.php"; 

$n_usuario = $_SESSION['n_usuario'];

$c = new Conexion();
$conexion = $c->conectar();

$sql = "SELECT nombres, apellidos, 
insert_user AS fecha, 
nombre_arch AS archivos
FROM documentos 
AS documentos 
INNER JOIN usuario AS usuario 
ON documentos.`n_usuario` = usuario.`n_usuario`
AND documentos.`n_usuario` = '$n_usuario';";

$resultado = $conexion -> query($sql);

$pdf = new FPDF("L", "mm", "A4");
$pdf->AddPage();
$pdf->SetFont("helvetica", "B", 14);
$pdf->Image("../../../img/banner.jpg", 0, 0, 300);

$pdf->Ln(50);

$pdf->setTextColor(0,0,128); 
$pdf->Cell(280, 5, "Reporte de Subida de Archivos STD", 0,1,"C");

$pdf->Ln(20);

$pdf->SetFont("helvetica", "B", 12);

$pdf->Cell(45, 5, "Nombre Usuario", 1, 0,"C");
$pdf->Cell(45, 5, "Apellido Usuario", 1, 0,"C");
$pdf->Cell(60, 5, "Fecha Registro Archivo", 1, 0,"C");
$pdf->Cell(130, 5, "Archivos Subidos", 1, 1,"C");

$pdf->setTextColor(0,0,0); 
$pdf->SetFont("helvetica", "", 9);

while($fila = $resultado->fetch_assoc()){
    $pdf->Cell(45, 5, $fila['nombres'], 1, 0,"C");
    $pdf->Cell(45, 5, $fila['apellidos'], 1, 0,"C");
    $pdf->Cell(60, 5, $fila['fecha'], 1, 0,"C");
    $pdf->Cell(130, 5, $fila['archivos'], 1, 1,"C");
}

$pdf->Ln(50);
$pdf->Cell(280, 5, "______________________", 0,1,"C");
$pdf->Cell(280, 5, "Firma Responsable", 0,1,"C");

$pdf->Output();




?>
