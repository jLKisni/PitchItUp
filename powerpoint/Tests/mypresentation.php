<?php

include 'contact-db.php';


/** Error reporting */
error_reporting(E_ALL);

/** Include path **/
set_include_path(get_include_path() . PATH_SEPARATOR . '../Classes/');


$ideagen = ideagen($_GET['id']);
$team = getteampitchdeck($_GET['id']);
$valueprop = valueprop($_GET['id']);
$bmc = bmc($_GET['id']);


$word = $ideagen['problem'];$arr = explode(',',trim($word)); if((sizeof($arr)-1)>=1){ $problem = ucfirst($arr[0]); $problem2 = ucfirst($arr[1]);}else {$problem = $ideagen['problem'];}

$word1 = $ideagen['solution'];$arr1 = explode(' -',trim($word1)); if((sizeof($arr1)-1)>=0){ $solution = ucfirst($arr1[0]); }
// get data from database

/** PHPPowerPoint */
include 'PHPPowerPoint.php';

/** PHPPowerPoint_IOFactory */
include 'PHPPowerPoint/IOFactory.php';

// Create new PHPPowerPoint object
//echo date('H:i:s') . " Create new PHPPowerPoint object\n";
$objPHPPowerPoint = new PHPPowerPoint();

// Remove first slide
//echo date('H:i:s') . " Remove first slide\n";
$objPHPPowerPoint->removeSlideByIndex(0);

// Create templated slide
//echo date('H:i:s') . " Create templated slide\n";
$currentSlide = introductionSlide($objPHPPowerPoint); // local function


// Create a shape (text)
//echo date('H:i:s') . " Create a shape (rich text)\n";
$shape = $currentSlide->createRichTextShape();
$shape->setHeight(300);
$shape->setWidth(600);
$shape->setOffsetX(350);
$shape->setOffsetY(430);
$shape->getAlignment()->setHorizontal( PHPPowerPoint_Style_Alignment::HORIZONTAL_CENTER );

$textRun = $shape->createTextRun("\"".ucfirst($team['team_name'])."\"");
$textRun->getFont()->setBold(true);
$textRun->getFont()->setSize(72);
$textRun->getFont()->setColor( new PHPPowerPoint_Style_Color( '0000000' ) );



$currentSlide = createTemplatedSlide($objPHPPowerPoint); // local function


// Create a shape (text)
//echo date('H:i:s') . " Create a shape (rich text)\n";
$shape = $currentSlide->createRichTextShape();
$shape->setHeight(300);
$shape->setWidth(600);
$shape->setOffsetX(160);
$shape->setOffsetY(250);
$shape->getAlignment()->setHorizontal( PHPPowerPoint_Style_Alignment::HORIZONTAL_CENTER );

$textRun = $shape->createTextRun('Introduction to');
$textRun->getFont()->setBold(true);
$textRun->getFont()->setSize(60);
$textRun->getFont()->setColor( new PHPPowerPoint_Style_Color( '0000000' ) );

$shape->createBreak();

$textRun = $shape->createTextRun($ideagen['solution']);
$textRun->getFont()->setBold(true);
$textRun->getFont()->setSize(38);
$textRun->getFont()->setColor( new PHPPowerPoint_Style_Color( '0000000' ) );


// Create templated slide
//echo date('H:i:s') . " Create templated slide\n";
$currentSlide = problemSlide($objPHPPowerPoint); // local function

// Create a shape (text)
//echo date('H:i:s') . " Create a shape (rich text)\n";
$shape = $currentSlide->createRichTextShape();
$shape->setHeight(100);
$shape->setWidth(930);
$shape->setOffsetX(100);
$shape->setOffsetY(250);
$shape->getAlignment()->setHorizontal( PHPPowerPoint_Style_Alignment::HORIZONTAL_LEFT );

$textRun = $shape->createTextRun('What is the Problem ?');
$textRun->getFont()->setBold(true);
$textRun->getFont()->setSize(48);
$textRun->getFont()->setColor( new PHPPowerPoint_Style_Color( '0000000' ) );

// Create a shape (text)
//echo date('H:i:s') . " Create a shape (rich text)\n";
$shape = $currentSlide->createRichTextShape();
$shape->setHeight(600);
$shape->setWidth(930);
$shape->setOffsetX(100);
$shape->setOffsetY(400);
$shape->getAlignment()->setHorizontal( PHPPowerPoint_Style_Alignment::HORIZONTAL_LEFT );

$textRun = $shape->createTextRun('- '.$problem);
$textRun->getFont()->setSize(25);
$textRun->getFont()->setColor( new PHPPowerPoint_Style_Color( '0000000' ) );

$shape->createBreak();

$textRun = $shape->createTextRun('- '.ucfirst($problem2) );
$textRun->getFont()->setSize(25);
$textRun->getFont()->setColor( new PHPPowerPoint_Style_Color( '0000000' ) );



// Create templated slide
//echo date('H:i:s') . " Create templated slide\n";
$currentSlide = solutionSlide($objPHPPowerPoint); // local function

// Create a shape (text)
//echo date('H:i:s') . " Create a shape (rich text)\n";
$shape = $currentSlide->createRichTextShape();
$shape->setHeight(100);
$shape->setWidth(930);
$shape->setOffsetX(50);
$shape->setOffsetY(200);
$shape->getAlignment()->setHorizontal( PHPPowerPoint_Style_Alignment::HORIZONTAL_LEFT );

$textRun = $shape->createTextRun('Our Solution ');
$textRun->getFont()->setBold(true);
$textRun->getFont()->setSize(48);
$textRun->getFont()->setColor( new PHPPowerPoint_Style_Color( '0000000' ) );

// Create a shape (text)
//echo date('H:i:s') . " Create a shape (rich text)\n";
$shape = $currentSlide->createRichTextShape();
$shape->setHeight(600);
$shape->setWidth(930);
$shape->setOffsetX(50);
$shape->setOffsetY(400);
$shape->getAlignment()->setHorizontal( PHPPowerPoint_Style_Alignment::HORIZONTAL_LEFT );

$textRun = $shape->createTextRun("\"".$solution."\"");
$textRun->getFont()->setBold(true);
$textRun->getFont()->setSize(42);
$textRun->getFont()->setColor( new PHPPowerPoint_Style_Color( '0000000' ) );

$shape->createBreak();

$textRun = $shape->createTextRun(ucfirst($ideagen['solution']) );
$textRun->getFont()->setSize(36);
$textRun->getFont()->setColor( new PHPPowerPoint_Style_Color( '0000000' ) );


// Create templated slide
//echo date('H:i:s') . " Create templated slide\n";
$currentSlide = benefitsSlide($objPHPPowerPoint); // local function

// Create a shape (text)
//echo date('H:i:s') . " Create a shape (rich text)\n";
$shape = $currentSlide->createRichTextShape();
$shape->setHeight(100);
$shape->setWidth(930);
$shape->setOffsetX(30);
$shape->setOffsetY(350);
$shape->getAlignment()->setHorizontal( PHPPowerPoint_Style_Alignment::HORIZONTAL_LEFT );

$textRun = $shape->createTextRun('Benefits :');
$textRun->getFont()->setBold(true);
$textRun->getFont()->setSize(48);
$textRun->getFont()->setColor( new PHPPowerPoint_Style_Color( '0000000' ) );

// Create a shape (text)
//echo date('H:i:s') . " Create a shape (rich text)\n";
$shape = $currentSlide->createRichTextShape();
$shape->setHeight(600);
$shape->setWidth(930);
$shape->setOffsetX(30);
$shape->setOffsetY(450);
$shape->getAlignment()->setHorizontal( PHPPowerPoint_Style_Alignment::HORIZONTAL_LEFT );

$textRun = $shape->createTextRun('- '.$valueprop['benefits']);
$textRun->getFont()->setSize(36);
$textRun->getFont()->setColor( new PHPPowerPoint_Style_Color( '0000000' ) );



// Create a shape (text)
//echo date('H:i:s') . " Create a shape (rich text)\n";
$shape = $currentSlide->createRichTextShape();
$shape->setHeight(100);
$shape->setWidth(930);
$shape->setOffsetX(700);
$shape->setOffsetY(350);
$shape->getAlignment()->setHorizontal( PHPPowerPoint_Style_Alignment::HORIZONTAL_LEFT );

$textRun = $shape->createTextRun('Features :');
$textRun->getFont()->setBold(true);
$textRun->getFont()->setSize(48);
$textRun->getFont()->setColor( new PHPPowerPoint_Style_Color( '0000000' ) );

// Create a shape (text)
//echo date('H:i:s') . " Create a shape (rich text)\n";
$shape = $currentSlide->createRichTextShape();
$shape->setHeight(600);
$shape->setWidth(930);
$shape->setOffsetX(700);
$shape->setOffsetY(450);
$shape->getAlignment()->setHorizontal( PHPPowerPoint_Style_Alignment::HORIZONTAL_LEFT );

$textRun = $shape->createTextRun('- '.$valueprop['features']);
$textRun->getFont()->setSize(36);
$textRun->getFont()->setColor( new PHPPowerPoint_Style_Color( '0000000' ) );


// Create templated slide
//echo date('H:i:s') . " Create templated slide\n";
$currentSlide = marketSlide($objPHPPowerPoint); // local function

// Create a shape (text)
//echo date('H:i:s') . " Create a shape (rich text)\n";
$shape = $currentSlide->createRichTextShape();
$shape->setHeight(100);
$shape->setWidth(930);
$shape->setOffsetX(30);
$shape->setOffsetY(50);
$shape->getAlignment()->setHorizontal( PHPPowerPoint_Style_Alignment::HORIZONTAL_LEFT );

$textRun = $shape->createTextRun('The Market ');
$textRun->getFont()->setBold(true);
$textRun->getFont()->setSize(36);
$textRun->getFont()->setColor( new PHPPowerPoint_Style_Color( 'FFFFFFFF' ) );


// Create a shape (text)
//echo date('H:i:s') . " Create a shape (rich text)\n";
$shape = $currentSlide->createRichTextShape();
$shape->setHeight(100);
$shape->setWidth(930);
$shape->setOffsetX(800);
$shape->setOffsetY(200);
$shape->getAlignment()->setHorizontal( PHPPowerPoint_Style_Alignment::HORIZONTAL_LEFT );

$textRun = $shape->createTextRun('Channels :');
$textRun->getFont()->setBold(true);
$textRun->getFont()->setSize(36);
$textRun->getFont()->setColor( new PHPPowerPoint_Style_Color( 'FFFFFFFF' ) );

// Create a shape (text)
//echo date('H:i:s') . " Create a shape (rich text)\n";
$shape = $currentSlide->createRichTextShape();
$shape->setHeight(600);
$shape->setWidth(930);
$shape->setOffsetX(800);
$shape->setOffsetY(300);
$shape->getAlignment()->setHorizontal( PHPPowerPoint_Style_Alignment::HORIZONTAL_LEFT );

$textRun = $shape->createTextRun('- '.$bmc['channels']);
$textRun->getFont()->setSize(25);
$textRun->getFont()->setColor( new PHPPowerPoint_Style_Color( 'FFFFFFFF' ) );

$currentSlide = workSlide($objPHPPowerPoint); // local function

// Create a shape (text)
//echo date('H:i:s') . " Create a shape (rich text)\n";
$shape = $currentSlide->createRichTextShape();
$shape->setHeight(100);
$shape->setWidth(930);
$shape->setOffsetX(30);
$shape->setOffsetY(500);
$shape->getAlignment()->setHorizontal( PHPPowerPoint_Style_Alignment::HORIZONTAL_LEFT );

$textRun = $shape->createTextRun('- '.$bmc['value_proposition']);
$textRun->getFont()->setSize(48);
$textRun->getFont()->setColor( new PHPPowerPoint_Style_Color( 'FFFFFFFF' ) );



$currentSlide = streamsSlide($objPHPPowerPoint); // local function
// Create a shape (text)
//echo date('H:i:s') . " Create a shape (rich text)\n";
$shape = $currentSlide->createRichTextShape();
$shape->setHeight(100);
$shape->setWidth(930);
$shape->setOffsetX(330);
$shape->setOffsetY(50);
$shape->getAlignment()->setHorizontal( PHPPowerPoint_Style_Alignment::HORIZONTAL_RIGHT );

$textRun = $shape->createTextRun('How to make money ?');
$textRun->getFont()->setSize(36);
$textRun->getFont()->setColor( new PHPPowerPoint_Style_Color( 'FFFFFFFF' ) );

$shape = $currentSlide->createRichTextShape();
$shape->setHeight(100);
$shape->setWidth(930);
$shape->setOffsetX(10);
$shape->setOffsetY(300);
$shape->getAlignment()->setHorizontal( PHPPowerPoint_Style_Alignment::HORIZONTAL_RIGHT );

$textRun = $shape->createTextRun('Revenue Streams :');
$textRun->getFont()->setBold(true);
$textRun->getFont()->setSize(36);
$textRun->getFont()->setColor( new PHPPowerPoint_Style_Color( '000000' ) );

// Create a shape (text)
//echo date('H:i:s') . " Create a shape (rich text)\n";
$shape = $currentSlide->createRichTextShape();
$shape->setHeight(600);
$shape->setWidth(930);
$shape->setOffsetX(-80);
$shape->setOffsetY(400);
$shape->getAlignment()->setHorizontal( PHPPowerPoint_Style_Alignment::HORIZONTAL_RIGHT );

$textRun = $shape->createTextRun('- '.$bmc['revenue_streams']);
$textRun->getFont()->setSize(28);
$textRun->getFont()->setColor( new PHPPowerPoint_Style_Color( '000000' ) );

$currentSlide = competitorSlide($objPHPPowerPoint); // local function

// Create a shape (text)
//echo date('H:i:s') . " Create a shape (rich text)\n";
$shape = $currentSlide->createRichTextShape();
$shape->setHeight(100);
$shape->setWidth(930);
$shape->setOffsetX(30);
$shape->setOffsetY(10);
$shape->getAlignment()->setHorizontal( PHPPowerPoint_Style_Alignment::HORIZONTAL_LEFT );

$textRun = $shape->createTextRun('Competitors Analysist: ');
$textRun->getFont()->setBold(true);
$textRun->getFont()->setSize(36);
$textRun->getFont()->setColor( new PHPPowerPoint_Style_Color( '000000' ) );

// Create a shape (text)
//echo date('H:i:s') . " Create a shape (rich text)\n";
$shape = $currentSlide->createRichTextShape();
$shape->setHeight(100);
$shape->setWidth(930);
$shape->setOffsetX(60);
$shape->setOffsetY(80);
$shape->getAlignment()->setHorizontal( PHPPowerPoint_Style_Alignment::HORIZONTAL_LEFT );

$textRun = $shape->createTextRun('- '.$valueprop['substitutes']);
$textRun->getFont()->setSize(28);
$textRun->getFont()->setColor( new PHPPowerPoint_Style_Color( '000000' ) );


// Save PowerPoint 2007 file
//echo date('H:i:s') . " Write to PowerPoint2007 format\n";
$objWriter = PHPPowerPoint_IOFactory::createWriter($objPHPPowerPoint, 'PowerPoint2007');
$objWriter->save($solution.".pptx");
header("Location: http://localhost/PitchItUp/powerpoint/Tests/mypresentationproduct.php?id=".$_GET['id']);
           


        
// Echo memory peak usage
//echo date('H:i:s') . " Peak memory usage: " . (memory_get_peak_usage(true) / 1024 / 1024) . " MB\r\n";

// Echo done
//echo date('H:i:s') . " Done writing file.\r\n";



/**
 * Creates a templated slide
 * 
 * @param PHPPowerPoint $objPHPPowerPoint
 * @return PHPPowerPoint_Slide
 */
function createTemplatedSlide(PHPPowerPoint $objPHPPowerPoint)
{
	// Create slide
	$slide = $objPHPPowerPoint->createSlide();
	
	// Add background image
    $shape = $slide->createDrawingShape();
    $shape->setName('Background');
    $shape->setDescription('Background');
    $shape->setPath('./images/background.png');
    $shape->setWidth(950);
    $shape->setHeight(720);
    $shape->setOffsetX(0);
    $shape->setOffsetY(0);

    
    // Return slide
    return $slide;
}

function problemSlide(PHPPowerPoint $objPHPPowerPoint)
{
    // Create slide
    $slide = $objPHPPowerPoint->createSlide();
    
    // Add background image
    $shape = $slide->createDrawingShape();
    $shape->setName('Background');
    $shape->setDescription('Background');
    $shape->setPath('./images/problem.png');
    $shape->setWidth(950);
    $shape->setHeight(720);
    $shape->setOffsetX(0);
    $shape->setOffsetY(0);

  
    
    // Return slide
    return $slide;
}


function solutionSlide(PHPPowerPoint $objPHPPowerPoint)
{
    // Create slide
    $slide = $objPHPPowerPoint->createSlide();
    
    // Add background image
    $shape = $slide->createDrawingShape();
    $shape->setName('Background');
    $shape->setDescription('Background');
    $shape->setPath('./images/solution.png');
    $shape->setWidth(950);
    $shape->setHeight(720);
    $shape->setOffsetX(0);
    $shape->setOffsetY(0);


    // Return slide
    return $slide;
}


function introductionSLide(PHPPowerPoint $objPHPPowerPoint)
{
    // Create slide
    $slide = $objPHPPowerPoint->createSlide();
    
    // Add background image
    $shape = $slide->createDrawingShape();
    $shape->setName('Background');
    $shape->setDescription('Background');
    $shape->setPath('./images/introduction.png');
    $shape->setWidth(950);
    $shape->setHeight(720);
    $shape->setOffsetX(0);
    $shape->setOffsetY(0);

    
    // Return slide
    return $slide;
}



function benefitsSlide(PHPPowerPoint $objPHPPowerPoint)
{
    // Create slide
    $slide = $objPHPPowerPoint->createSlide();
    
    // Add background image
    $shape = $slide->createDrawingShape();
    $shape->setName('Background');
    $shape->setDescription('Background');
    $shape->setPath('./images/benefits.png');
    $shape->setWidth(950);
    $shape->setHeight(720);
    $shape->setOffsetX(0);
    $shape->setOffsetY(0);

    
    // Return slide
    return $slide;
}


function marketSlide(PHPPowerPoint $objPHPPowerPoint)
{
    // Create slide
    $slide = $objPHPPowerPoint->createSlide();
    
    // Add background image
    $shape = $slide->createDrawingShape();
    $shape->setName('Background');
    $shape->setDescription('Background');
    $shape->setPath('./images/market.png');
    $shape->setWidth(950);
    $shape->setHeight(720);
    $shape->setOffsetX(0);
    $shape->setOffsetY(0);

    
    // Return slide
    return $slide;
}


function workSlide(PHPPowerPoint $objPHPPowerPoint)
{
    // Create slide
    $slide = $objPHPPowerPoint->createSlide();
    
    // Add background image
    $shape = $slide->createDrawingShape();
    $shape->setName('Background');
    $shape->setDescription('Background');
    $shape->setPath('./images/works.png');
    $shape->setWidth(950);
    $shape->setHeight(720);
    $shape->setOffsetX(0);
    $shape->setOffsetY(0);

    
    // Return slide
    return $slide;
}


function streamsSlide(PHPPowerPoint $objPHPPowerPoint)
{
    // Create slide
    $slide = $objPHPPowerPoint->createSlide();
    
    // Add background image
    $shape = $slide->createDrawingShape();
    $shape->setName('Background');
    $shape->setDescription('Background');
    $shape->setPath('./images/streams.png');
    $shape->setWidth(950);
    $shape->setHeight(720);
    $shape->setOffsetX(0);
    $shape->setOffsetY(0);

    
    // Return slide
    return $slide;
}

function competitorSlide(PHPPowerPoint $objPHPPowerPoint)
{
    // Create slide
    $slide = $objPHPPowerPoint->createSlide();
    
    // Add background image
    $shape = $slide->createDrawingShape();
    $shape->setName('Background');
    $shape->setDescription('Background');
    $shape->setPath('./images/competitor.png');
    $shape->setWidth(950);
    $shape->setHeight(720);
    $shape->setOffsetX(0);
    $shape->setOffsetY(0);

    
    // Return slide
    return $slide;
}









