<?php
require "../config.php";

$xml = new XML;
$allXmlFiles = $xml->getAllXmlFiles('../XMLS');
if(is_array($allXmlFiles)){
	foreach($allXmlFiles as $xmlFile){
		$books =simplexml_load_file($xmlFile);
		foreach($books as $book){
			$escaped_author  = $db->escape_string($book->author);
			$escaped_name = $db->escape_string($book->name);
			$insert = "INSERT INTO books (author, name, time_added) SELECT '".$escaped_author."','".$escaped_name."', NOW()";
			$upsert = "UPDATE books SET time_added=NOW() WHERE author='".$escaped_author."' AND name='".$escaped_name."'";
			$db->query("WITH upsert AS ($upsert RETURNING *) $insert WHERE NOT EXISTS (SELECT * FROM upsert)");
		}
	}
	echo 'success';
}
else{
	echo 'error';
}


?>