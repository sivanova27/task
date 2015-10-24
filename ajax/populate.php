<?php
require "../config.php";

$xml = new XML;
$allXmlFiles = $xml->getAllXmlFiles('../XMLS');
if(is_array($allXmlFiles)){
	foreach($allXmlFiles as $xmlFile){
		$books =simplexml_load_file($xmlFile);
		foreach($books as $book){
			$insert = "INSERT INTO books (author, name, time_added) SELECT '".$book->author."','".$book->name."', NOW()";
			$upsert = "UPDATE books SET time_added=NOW() WHERE author='".$book->author."' AND name='".$book->name."'";
			$db->query("WITH upsert AS ($upsert RETURNING *) $insert WHERE NOT EXISTS (SELECT * FROM upsert)");
		}
	}
	echo 'success';
}
else{
	echo 'error';
}


?>