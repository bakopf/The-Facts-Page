<?php
include('includes/header.php');
?>
<script>

function reloadFact(){
        $.ajax({
		  type: "POST",
		  url: "database/read_fact.php",
		  datatype: "html",
		  success: function(data) {
	    $("#fact").html(data);
	    }
	});
}

</script>

	<div data-role="content">
    	<a onclick="reloadFact();" data-role="button">get f4ct</a> 

    	<p id="fact"></p>
    </div>

<?php
include('includes/footer.php');
?>
  