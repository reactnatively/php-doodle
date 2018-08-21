<?php
include("classes/DomDocumentParser.php");

function createLink($src, $url) {

	$scheme = parse_url($url)["scheme"]; // http
	$host = parse_url($url)["host"]; // www.reecekenny.com

	if(substr($src,0,2) == "//") {
		$src = $scheme . ":" . $src;
	}
	else if(substr($src,0,1) == "/") {
			$src = $scheme . "://" . $host . $src;
		}
	/*
	echo "SRC: $src<br/>";
	echo "URL: $url<hr/>";
	*/

	return $src;

}

function followLinks($url) {

	$parser = new DomDocumentParser($url);

	$linkList = $parser->getLinks();

	foreach($linkList as $link) {

		$href = $link->getAttribute("href");
		if(strpos($href,'#') !== false) {
			continue;
		}
		else if(substr($href,0,11) == "javascript:") {
			continue;
		}

		$href = createLink($href, $url);

		echo $href . "<br/>";

	}

}

$startUrl = "http://www.bbc.com";
followLinks($startUrl);
?>
