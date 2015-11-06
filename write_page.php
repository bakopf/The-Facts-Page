<?php
include('./includes/header.php');
?>

<script type="text/javascript">
	$(document).ready(function(){
		$('.formsuccess').css("display","none");
		$('.ausfuellen').css("display","none");

		$("#sendfact").click(function(){

			var fact = $("#fact").val();

			$.ajax({
				url: 'database/write_fact.php',
				type:'POST',
				data:
				{
					'fact': fact,
				},
				success: function(response)
				{
					if(response == "nein"){
						$('.ausfuellen').css("display","block");
					}else if (response == "fehler"){
						$("#error").show();
					} else{
						$('.factform').css("display","none");
						$('.formsuccess').css("display","block");
						$('.ausfuellen').css("display","none");

					}
					
				},
				error: function(data){
					alert(data.error.msg);
					$("#error").show();
				}
				
			});
				
		});
	});
</script>


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


<?php
include('./includes/footer.php');
?>
