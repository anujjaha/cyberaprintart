<?php
	require_once( 'fpdf.php' );
	
	
	class PDF extends FPDF {
		function Header() {
			$this->SetFont( 'Arial', 'B', 18 ); //set font to Arial, Bold, and 16 Size
	
			//create heading with params
			//0 - 100% width
			//9 height
			//"Page Heading" - With this text
			//1 - border around it, and center aligned
			//1 - Move pionter to new line after writing this heading
			//'C' - center aligned
//			$this->Cell( 0, 9, 'Krishna  Multi Print Pvt Ltd.', 1, 1, 'C' );
			
			$this->ln( 5 );
		}
		
	
		function Footer() {
			//move pionter at the bottom of the page
			$this->SetY( -15 );
			
			//set font to Arial, Bold, size 10
			$this->SetFont( 'Arial', 'B', 10 );
			
			//set font color to blue
			$this->SetTextColor( 52, 98, 185 );
			
			$this->Cell( 0, 10, 'www.krishnamultiprint.com', 0, 0, 'L' );
			
			//set font color to gray
			$this->SetTextColor( 150, 150, 150 );
			
			//write Page No
			$this->Cell( 0, 10, 'Page No: ' . $this->PageNo(), 0, 0, 'R' );
		}
	}
	
	
	$fpdf = new PDF();
	
	$fpdf->AddPage(); //add a page in pdf document
	
	$fpdf->SetFont( 'Arial', 'B', 15 ); //set font to Arial, Bold, and 14 Size
	
	$fpdf->MultiCell( 0, 6, "\n\n\n\n\n\n" , 0, 1 );
	
	$fpdf->MultiCell( 0, 6, "       " .  $_GET['date']."                               ". $_GET['user'] ."                                         " .  $_GET['f_num']  , 0, 1 );
	
	$fpdf->ln( 5 );
	
	$fpdf->SetFont( 'Arial', '', 14 ); //set font to Arial, Regular, and 12 Size
	
	//6 - line height
	//text to be displayed
	$fpdf->Write( 6,
		     "                ". $_GET['data'] . "                                                                        " . $_GET['mob']."\n\n               " .  $_GET['add'] . "                                  " . $_GET['m_name'] ."\n\n" . "               ". $_GET['j_name'] ."                                                                                  ". $_GET['c_size']."\n\n               ". $_GET['p_name'] . "                                                        " . $_GET['tot_shet'] ."\n\n                    ". $_GET['print_det'] . "                                                                         ". $_GET['p_by']."\n\n                   ". $_GET['lami_det'] . "                                                                \n\n\n\n\n  "      . $_GET['more']) ;
	
//	$fpdf->Image( 'myImage.jpg', 45, 125 );
	
	$fpdf->ln( 50 );
	
	$fpdf->Write( 5,"   \n\n\n\n                     " . $_GET['data'] .  "                                                                            " . $_GET['mob'] ."\n\n" . "                     ". $_GET['p_name'] ."                                                          ". $_GET['m_name']."\n\n                     ". $_GET['print_det'] . "                                                                              " . $_GET['c_size'] ."\n\n                          ". $_GET['tot_shet'] . "                                                                                         ". $_GET['p_by']);
	
	$fpdf->Output(); //generate pdf file and send it to client
?>
<head>
	<title>
		Krishna Multi Print [ Client Reciept]
	</title>
</head>
