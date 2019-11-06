<?php
include_once('libs/fpdf.php');

$servername="mysql-iuhealth.indianaphysiology.org";
$username="user2019";
$password="password01";
$db="iuhealth";
		
		// Create connection
		$conn = mysqli_connect($servername, $username, $password, $db);
		// Check connection
        if ($conn->connect_error) 
        {
			die("Connection failed: " . $conn->connect_error);
        }

class PDF extends FPDF
{
// Page header
function Header()
{
    // Logo
    #$this->Image('logo.png',10,-1,70);
    $this->SetFont('Arial','B',13);
    // Move to the right
    $this->Cell(80);
    // Title
    $this->Cell(80,10,'Students List',1,0,'C');
    // Line break
    $this->Ln(20);
}

// Page footer
function Footer()
{
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Page number
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}

$display_heading = array('pname'=>'Pref Name', 'lname'=> 'Last Name', 'ymail'=> 'Mail ID','pwd'=> 'Password',);
$sql="SELECT `pname`, `lname`, `ymail`, `pwd` FROM `student_credentials` where pname<>'elmer'";

$result = mysqli_query($conn, "SELECT `pname`, `lname`, `ymail`, `pwd` FROM `student_credentials` where pname<>'elmer'") or die("database error:". mysqli_error($conn));
$header = mysqli_query($conn, "SHOW columns FROM student_credentials");

$pdf = new PDF();
//header
$pdf->AddPage();
//foter page
$pdf->AliasNbPages();
$pdf->SetFont('Arial','B',12);
foreach($header as $heading) {
$pdf->Cell(40,12,$display_heading[$heading['Field']],1);
}
foreach($result as $row) {
$pdf->Ln();
foreach($row as $column)
$pdf->Cell(40,12,$column,1);
}
$pdf->Output();
?>