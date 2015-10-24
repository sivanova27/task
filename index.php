
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>The TASK</title>
  <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-MfvZlkHCEqatNoGiOXveE8FIwMzZg4W85qfrfIFBfYc= sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
</head>
<body>
	<div class="container">
  		<div class="row">
  			<div class="form-group">
	  			<button id="update" class="btn btn-warning">Populate/Update Database</button>
	  		</div>
	  		<div id="update_result"></div>
	  	</div>
	  	<div class="row">
		    <h3>Search books by author name:</h3>
		    <div class="form-group">
		    	<input id="author" type="text" name="author" placeholder="Author name" class="form-control"></div>
		    <div class="form-group">
		    	<button id="search" class="btn btn-primary">Search books</button>
		    </div>
		    <div id="search_result"></table>
	    </div>
	</div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
 <script src="assets/scripts.js"></script> 
</html>

