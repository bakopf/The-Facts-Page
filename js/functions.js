var header = $('[data-role=header]').outerHeight();
var panel = $('.ui-panel').height();
var panelheight = panel - header;
$('.ui-panel').css({
    'top': header,
    'min-height': panelheight
});

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

function reloadFact(){
	
}