$( document ).ready(function() {
	$("#search_result").hide();
    $("#update").click(function(){
	    $.post("ajax/populate.php",
		    function(data, status){
		        if(data!='error'){
		        	$("#update_result").html("<div class=\"alert alert-success\">Database was populated successfully.</div>");
		        }
		        else{
		        	$("#update_result").html("<div class=\"alert alert-danger\">Error occured while  populate the database.</div>");
		        }
		});
	});
	
	 $("#search").click(function(){
	    $.post("ajax/search.php", {author: $("#author").val()},
		    function(data, status){
		    	$("#search_result").show();
		    	var obj = jQuery.parseJSON(data);
		    	if(obj.error){
		    		$("#search_result").html("<div class=\"alert alert-danger\">"+obj.message+"</div>");
		    	}
		    	else{
		    		$("#search_result").html("");
		    		var table = $('<table></table>').addClass('table table-bordered table-striped');
		    		$.each( obj, function( key, val ) {
		    			table.append("<tr><td>"+val.name+"</td></tr>");
		    		});
		    		$("#search_result").append(table);
		    	}
		});
	});
});