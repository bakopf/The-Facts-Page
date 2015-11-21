<?php
	include('./includes/header.php');
?>



<div data-role="content">
<h1>Send a Fact</h1>

	<form class="factform" method="POST" action="">
		<textarea id="fact" name="fact" class="facttext" type="text" placeholder="fact" required></textarea>
		<input class="button" type="button" id="sendfact" value="Fact abschicken"/>
	</form>
	<div class="formsuccess">
	YES!
	</div>

	<div class="ausfuellen">
		leeres formular
	</div>
</div>
<?php
include('./includes/footer.php');
?>
