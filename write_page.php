<?php
	include('./includes/header.php');
?>
<script>
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

<div data-role="content">
<h1>Send a Fact</h1>

	<form class="factform" method="POST" action="">
		<textarea id="fact" name="fact" class="facttext" type="text" placeholder="fact" required></textarea>
		<input class="button" type="button" id="sendfact" value="Fact abschicken"/>
	</form>
	<div class="formsuccess" style="text-align: center;">
	Thank you for your awesome Fact!
	<a onclick="location.reload();" data-role="button">Send more Facts</a> 

	</div>

	<div class="ausfuellen" style="text-align: center;">
		Bitte Ausfüllen
	</div>
</div>
<?php
include('./includes/footer.php');
?>
