<?php
/*
To better learn about this file, just have these concepts in mind:

Examples of URL: /en/about, /en/articles/math/zeta, /pt

Variables description:
$fullPath holds everything after the "http://site.com/". Each request always starts with /en or /pt wich are the languages. Example: "/en/about". If no language is provided, then the script redirects the URL for one with language in front of it.
$treeOfPaths is the array that has broken $fullPath in pieces, so the script can iterate over it
$isTheEndPHP is a variable true if there exists a .php end in the request. This is used to maintain backwards compatibility
$singleEntry and $multipleEntries are true or false, depending if the request has multiple entries or just a simple page like "/about"
$pathSize counts how many entries the $treeOfPaths has.
$language holds the actual language requested. It's the first entry in the $treeOfPaths

API:
If the entry has only one request, like: /en/about (the /en/ does not count) then the $singleEntry is true. If it has more than one request, then $multipleEntries is true. Now, the loop will iterate over $treeOfPaths until the last entry. If, in the middle, there's a page that can act as a 'folder' but also has it 'index' page, then the loop will continue the iteration if it has a "content" node inside it. If the last node is this 'folder', then it will display the content of the 'page' node. 
Example: you could have the path /en/articles/math wich will display the content of the 'page' node in the 'math' node. But /en/articles/math/zeta will load the content of the node 'zeta'. 
*/

$url = $_SERVER['REQUEST_URI'];
$site_root = '/';
$error_404 = false;
$ok = false;
$language = 'en';
$dir = 'pages/';
$articles = false;
$title = 'Lucas Zanella';

function filter ($string) {
	return($string);
}
$redirected = false;

function redirect ($address) {
    global $redirected;
    if ($redirected==false) {
        header( 'Location:'.$address ) ;
	//print_r('should '.$address);
        $redirected = true;
    }
}

$fullPath = $_GET["page"];
//print_r($fullPath);
$treeOfPaths = explode('/', $fullPath);


//BACKWARDS COMPATIBLITY FOR OLD NO .PHP LINKS
if ($fullPath=='artigos/math/zeta' or  $fullPath=='artigos/math/zeta/') {
    redirect($site_root.'pt/artigos/mat/zeta');
}
if ($fullPath=='artigos/math/gamma' or $fullPath=='artigos/math/gamma/') {
    redirect($site_root.'pt/artigos/mat/gama');
}
if ($fullPath=='artigos/math/basel' or $fullPath=='artigos/math/basel/') {
    redirect($site_root.'pt/artigos/mat/basileia');
}
if ($fullPath=='artigos/math/bernoulli' or $fullPath=='artigos/math/bernoulli/') {
    redirect($site_root.'pt/artigos/mat/bernoulli');
}
if ($fullPath=='artigos/math/paradoxo_gabriel' or $fullPath=='artigos/math/paradoxo_gabriel/') {
    redirect($site_root.'pt/artigos/mat/paradoxo_gabriel');
}
if ($fullPath=='artigos/math/calculo' or $fullPath=='artigos/math/calculo/') {
    redirect($site_root.'pt/artigos/mat/calculo');
}
if ($fullPath=='en/articles/mat/zeta' or  $fullPath=='en/articles/mat/zeta/') {
    redirect($site_root.'pt/artigos/mat/zeta');
}
//END BACKWARDS COMPATIBLITY


//debug
function debugOut($s) {
 print_r ('<!--'.$s.'-->   ');   
    print_r($s);
}
//end


//COMPATIBILIDADE - FINAL COM '.PHP'
$isTheEndPHP = $treeOfPaths[count($treeOfPaths)-1];

if (strpos($fullPath, '.php')==true) {//Verify if there is a .php file in the full_path request
	$nameOfThePhpFile = explode('.php', $fullPath);//Explode $fullPath in an array
	if (count($nameOfThePhpFile)==2) {
		debugOut('redirect for '.$url.'/pt/'.$nameOfThePhpFile[0]);
	}  else if (count($nameOfThePhpFile)==1) {
	//nothing
	}else {
		debugOut('error - redirect');
	}
}
//END COMPATIBILIDADE COM FINAL .PHP

$pathSize = count($treeOfPaths);
$singleEntry=false;
$multipleEntries=false;
$noPages=false;

if ($treeOfPaths[$pathSize-1]=='') {//Check if the last entry in $treeOfPaths is blank
    unset($treeOfPaths[$pathSize-1]);//If it is, then remove it from the list
	$pathSize = count($treeOfPaths);//Recount the $pathSize
}

if ($pathSize<=2) {
	$singleEntry=true;//If the path size is <= 2, then we're loading a single page
} else {
	$multipleEntries=true;//Else, we're dealing with multiple pages
}

if ($treeOfPaths[0]=='en') {//Check if the first entry of the three_of_paths is 'en', wich specifies the english language
	$language= 'en';
    $description = "Arduino, math, quadcopters, technology, python and robots."; //Generic description, if the page does not have one
} else if ($treeOfPaths[0]=='pt') {//Check if the first entry of the three_of_paths is 'pt', wich specifies the portuguese language
	$language ='pt';
    $description = "Arduino, matemática, quadricópteros, tecnologia, python e robôs."; //Generic description, if the page does not have one
} else {//If there's no language information in the URL, then decides something
    if (substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2)=='pt'){ //If the browser language is portugese:
	    $language = 'pt';//New language will be portuguese
        $description = "Arduino, matemática, quadricópteros, tecnologia, python e robôs."; //Generic description, if the page does not have one
    } else { //If the browser language is anything but portuguese:
        $language = 'en';//New language will be english
        $description = "Arduino, math, quadcopters, technology, python and robots."; //Generic description, if the page does not have one
    }
    redirect($site_root.$language.'/'.$fullPath);//Finally redirect lucaszanella.com/path to lucaszanella/com/language/path
}


function make404error() {//Will load the 404 error on the page
    global $error404;
	//$pageToInclude = '404.php';
	//$singleEntry = true;
	//$multipleEntries = false;
	$error404 = true;
    $ok = false;
    $pageToInclude = '404.php';
    //debugOut('404');
}

//ADJUST AFTER
$jsonFileLocation = 'info.json';//Location of the file info.json that has the strcture of the website and correspondence between paths and files
$jsonData = file_get_contents($jsonFileLocation);//Open the json file
$decodedJsonData = json_decode($jsonData,true);//Decodes the json file
//


if (in_array($treeOfPaths[1],$decodedJsonData['pages'][$language]['link'])) {//Search the treeOfPaths to see if it correspond to the .json definition for that entry
	$nameOfThePage = array_search($treeOfPaths[1], $decodedJsonData['pages'][$language]['link']);//Request the name of the page in $decodedJsonData so there's no possibility of injection
} else {
	make404error();//make a 404 error because nothing was found
    //debugOut('made error  '.$decodedJsonData['pages'][$language]['link']);
}

if (!$error_404) {
    //If there's a single entry (not counting the language entry) on the fullPath, then request its include page
	if ($singleEntry) {
		$pageToInclude = $decodedJsonData['pages'][$language]['include'][$nameOfThePage];//request the file to include in the page (var used in another .php file)
        if ($nameOfThePage!=0) {$title = $decodedJsonData['pages'][$language]['menu'][$nameOfThePage];} else {$title = 'Lucas Zanella';}
        //echo 'name of the page:'.$nameOfThePage;
		$ok = true;
	}
	//If there are more than one entry (not counting the language entry) on the fullPath, then find its include page
	if ($multipleEntries) {
        $ok = true;
        if ([$treeOfPaths[1]=='articles' or $treeOfPaths[2]=='artigos'] and $pathSize>=2) {$articles = true;}//Finds out if it must load the articles layout
		$multipleEntriesTree = $decodedJsonData['multipages'][$language]["2"];//Go to the multiplepages tree node
        for ($k=2; $k<=$pathSize; $k++) {
            if (array_key_exists($treeOfPaths[$k],$multipleEntriesTree) and $k!=$pathSize-1) {$multipleEntriesTree = $multipleEntriesTree[$treeOfPaths[$k]];} else {}
            if ($k==$pathSize-1 and array_key_exists('content', $multipleEntriesTree)){
                $multipleEntriesTree3 = $multipleEntriesTree['title'];
                $multipleEntriesTree2 = $multipleEntriesTree['description'];
                $multipleEntriesTree = $multipleEntriesTree['content'];
                if (array_key_exists($treeOfPaths[$k],$multipleEntriesTree)) {
                    $pageToInclude = $multipleEntriesTree[$treeOfPaths[$k]];
                    $title = $multipleEntriesTree3[$treeOfPaths[$k]];
                    $disqusIdentifier = explode(".php",$multipleEntriesTree[$treeOfPaths[$k]]);
                    $description = $multipleEntriesTree2[$treeOfPaths[$k]];
                    //echo ':/';
                }
            }
            if ($k==$pathSize) {
             //print_r ($multipleEntriesTree);
            }
            if ($k==$pathSize-1 and array_key_exists('page', $multipleEntriesTree)){
                $multipleEntriesTree = $multipleEntriesTree['page'];
                if (array_key_exists($treeOfPaths[$k],$multipleEntriesTree)) {
                    $pageToInclude = $multipleEntriesTree[$treeOfPaths[$k]];
                    debugOut('there was');
                }
            }
            //print_r($multipleEntriesTree);
            //print_r($pageToInclude);
        }
        //debugOut('the helper is '.$nameOfThePage.'  ');
    }
} else {
	make404error();//make a 404 error because nothing was found
}
?>
