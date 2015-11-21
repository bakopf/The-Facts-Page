<?php
include('includes/header.php');
?>
<script>
$(document).ready(function(){
	$(".reload").click(function(){
		$.ajax({
		  type: "POST",
		  url: "database/read_fact.php",
		  datatype: "html",
		  success: function(data) {
		    $("#fact").html(data);
		    }
		});
	});
});



</script>

	<div data-role="content">
    	<a class="reload" data-role="button">get f4ct</a> 

    	<p id="fact"></p>
    </div>

<?php
include('includes/footer.php');
?>
  