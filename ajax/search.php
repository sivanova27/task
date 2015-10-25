<?php
require "../config.php";

$author = $_POST['author'];
if(trim($author)==''){
	 echo json_encode(array('error'=>1, 'message'=>'Search author name is empty.'));
}
else{
	$query = 'SELECT * FROM books WHERE author ILIKE $1';
	$res = $db->prepare($query, array("%$author%"));
	$allBooks = $db->fetchAll($res);
	if($allBooks){
		echo json_encode($allBooks);
	}
	else{
		echo json_encode(array('error'=>1, 'message'=>'No books found by this author.'));
	}
}

?>