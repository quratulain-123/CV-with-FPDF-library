<?php
    require_once("fpdf/fpdf.php");

    $pdf = new FPDF();
    $pdf->AddPage("P","A4","0");
    $pdf->SetTitle("Curriculam Vitae");
    $pdf->SetFont("times","I","16");
    $pdf->setFillColor(200,190,195);
    // $pdf->SetXY(0,0);
	// $pdf->Cell(65,276,"",0,0,"",1);
    $pdf->Rect(0,0,65,300,"F");
    $pdf->Image("girl.jpg" , 15 , 2 , 35 , 35 ,"JPG");
    $pdf->SetFont("times","IBU","18");
    $pdf->SetXY(5,40);
    $pdf->Cell(20,10,"Contact",0,2,"L",0);
    $pdf->Cell(20,70,"Communication",0,2,"L",0);
    $pdf->SetFont("times","","12");
    $pdf->Text(5,55,"111 1st Avenue");
    $pdf->Text(5,60,"Redmond, WA 65432");
    $pdf->Text(5,65,"909.555.104");
    $pdf->Text(5,70,"kristi@gmail.com");   
    $pdf->SetXY(5,90);
    $pdf->Text(5,95,"I have received several awards");
    $pdf->Text(5,100,"for my outstanding communica-");
    $pdf->Text(5,105,"tion skills, including recognition");
    $pdf->Text(5,110,"for providing exceptional patient");
    $pdf->Text(5,115,"eductation and counseling");
    $pdf->SetFont("times","IBU","18");
    $pdf->Cell(20,70,"Language",0,2);
    $pdf->SetFont("times","","12");
    $pdf->Text(5,135,"* English");
    $pdf->Text(5,140,"* Spanish");
    $pdf->Text(5,145,"* Thai");
    $pdf->Line(65,300,65,0);

    // Right Side....
   $pdf->SetFont("times" ,"B","50");
   $pdf->SetXY(100,10);
   $pdf->Write(5,"Kristi Laar");
   $pdf->Line(70,30,205,30);
   $pdf->SetFont("times","","30");
   $pdf->Text(70,40,"Software Developer");
   $pdf->SetFont("times","","24");
   $pdf->Text(70,55,"Education:");
   $pdf->SetFont("times","","15");
   $pdf->Text(70,65,"Bellows Collage | Madison, WI");
   $pdf->SetFont("times","B","14");
   $pdf->Text(70,73,"Bachlors in Software Engineering");
   $pdf->Text(70,100,"High School Diploma");
   $pdf->SetFont("times","","12");
   $pdf->Text(70,80,". Specialized in Software Engineering and Cyberserurity");
   $pdf->Text(70,85,". Graduated With Honors");
   $pdf->Text(70,108,". Graduated with focus on Software Engineering");
   $pdf->Text(70,113,". Member Of the school's Computer Club");
   $pdf->Line(70,120,205,120);
   $pdf->SetFont("times","","24");
   $pdf->Text(70,130,"Skills:");
   $pdf->SetFont("times","","14");
   $pdf->Text(70,137,". Java");
   $pdf->Text(70,142,". Pyhton");
   $pdf->Text(70,147,". C++");
   $pdf->Text(70,152,". Team Leadership");
   $pdf->Line(70,170,205,170);
   $pdf->SetFont("times","","24");
   $pdf->Text(70,180,"Experience:");
   $pdf->SetFont("times","","18");
   $pdf->Text(70,190,"Senior Software Engineer");
   $pdf->SetFont("times","","14");
   $pdf->Text(70,197,"TechNova Solutions, San Francisco, CA");
   $pdf->SetFont("times","","10");
   $pdf->Text(70,205,"Jan 2022 - Mar 2025");
   $pdf->SetFont("times","","12");
   $pdf->Text(70,210,"Developed data processing pipelines in Python using Pandas and NumPy.");
   $pdf->Text(70,215,"Built RESTful APIs with Flask and FastAPI to serve machine learning models");
   $pdf->Text(70,220,"in production.");
   $pdf->Text(70,225,"Integrated with PostgreSQL and Redis for efficient data storage and caching.");
   $pdf->Text(70,230,"Automated reporting workflows using Python scripts and scheduled cron jobs.");
   $pdf->Line(70,250,205,250);
   $pdf->SetFont("times","","24");
   $pdf->Text(70,260,"References:");
   $pdf->SetFont("times","","12");
   $pdf->Text(70,265,"john123@gmail.com");
   $pdf->Text(70,270,"martin65@gmail.com");
   $pdf->Text(70,275,"austin43gmail.com");

   
          






    $pdf->Output();
     
?>