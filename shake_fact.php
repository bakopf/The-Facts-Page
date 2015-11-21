<?php
include('includes/header.php');
?>

<script>
window.onload = function() {

    var myShakeEvent = new Shake({
        threshold: 15
    });

    myShakeEvent.start();

    window.addEventListener('shake', shakeEventDidOccur, false);

    function shakeEventDidOccur () {

        $.ajax({
		  type: "POST",
		  url: "database/read_fact.php",
		  datatype: "html",
		  success: function(data) {
	    $("#fact").html(data);
	    }
	});
    }
};
</script>

<div data-role="content">
		<h2>Shake that thing</h2>

    	<p id="fact"></p>
    </div>

<?php
include('includes/footer.php');
?>
  


