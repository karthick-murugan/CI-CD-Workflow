<?php

// A sample file to trigger PHPCS and PHPCBF errors

class sampleclass
{

function __construct(){
    $this->message= "Welcome to the PHPCS test!";
}


function hello_world( $user ){
echo "Hello ".$user."!";
}


public function add($a,$b){return$a+$b;}


function veryLongFunctionNameWithNoSpaces($first,$second ,$third ,$fourth  ,$fifth){
$result=$first+$second+$third+$fourth+$fifth;
return$result;
}



    public function loopTest(){
for ( $i=0;$i<10;$i++ ){
echo $i."\n";
}
    }


function noVisibilitySet(){
    $x=  5;   $y=10;return$x+$y;
}


function spacingIssue(  $var1,$var2){
return $var1+ $var2 ;
}


function badNaming1($VAL){return$VAL;}
function BAD_function($Z){ return $Z * 2;}

function TabsVsSpaces(){
	$tabbed = "this line uses tabs";
    $spaced    = "this line uses spaces";
	echo $tabbed;
echo $spaced;
}

function NoDocCommentFunction(){
    return true;
}

function inlinecontrol(){ if(true){ echo "yes";}else{echo "no";}}

function logicOutput($input){
    if($input > 5){
        echo "Big!";
    } else {
        echo "Small!";
    }
}


function MissingBraces($val)
if ($val == 1)
echo "Single line";

function LongArray(){
$arr = array( 1 , 2 ,3 ,4,5  );
return $arr;
}



function inlineHTML(){
    ?><div class="warning">This is bad practice</div><?php
}

function     multipleSpaces(  $a ,  $b  ){
    return $a    +     $b;
}

function noTypeHints($x, $y){
return$x * $y;
}


function messySwitch($fruit){
switch($fruit){
case 'apple': echo 'Red';break;
case 'banana':echo'Yellow';break;
default:echo 'Unknown';break;
}
}


function snake_case_example($input_string){
return strtoupper($input_string);
}


function capitalLetters($BADINPUT){
RETURN strtolower($BADINPUT);
}

function NotCamelCase(){
$MyVar = 10;
return $MyVar;
}


function endsWithSpace() 
{ 
    return true; 
}    

function endsWithExtraLines(){
    return true;
}




}
